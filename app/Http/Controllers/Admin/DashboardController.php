<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ImportsExcl;
use App\Helper\link;
use App\Http\Controllers\Controller;
use App\Models\Admin\Deposit\DepositDetail;
use App\Models\Admin\ShortUrl;
use App\Models\Admin\ShortUrlDetail;
use App\Models\createEcltable;
use App\Models\tracking_system;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('Admin.Url.create');
    }

    public function index()
    {
        $AllData = ShortUrl::where('url_status','1')->with('url_details')->get();
        return view('Admin.Url.index', compact('AllData'));
    }



    //Archive data
    public function create()
    {
        $AllData = ShortUrl::where('url_status','0')->with('url_details')->get();
        return view('Admin.Url.archive', compact('AllData'));

    }


    public function store(Request $request)
    {

//        dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'count' => 'required|array',
            'urls' => 'required',
            'modulus' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errorMessage', 'Please Fill Up all requirements')->withInput();
        }

        try {
            $url = ShortUrl::create([
                'user_id' => auth()->user()->id,
                'name' => $request->input('name'),
                'default_link' => $request->input('default_link'),
                'real_link' => link::generateShortUrl(),

            ]);

            $xitemArray = $request->input('count');
            $xdescArray = $request->input('urls');
            $xrateArray = $request->input('modulus');

            foreach ($xitemArray as $index => $xitem) {
                ShortUrlDetail::create([
                    'url_id' => $url->id,
                    'urls' => $xdescArray[$index] ?? '',
                    'count' => $xitem ?? '',
                    'modulus' => $xrateArray[$index] ?? '',
                ]);
            }

            return redirect()->route('url-stories.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', 'Not successful: ' . $e->getMessage());
        }


    }


    public function redirectToOriginal($shortLink)
    {
        $url = ShortUrl::where('real_link', $shortLink)->first();

        if (!$url) {
            return redirect('/')->with('error', 'Short URL not found.');
        }

        $details = $url->url_details; // Use the relationship method instead of 'details'

        if ($details && $details instanceof \Illuminate\Support\Collection && $details->isEmpty()) {
            return redirect('/')->with('error', 'No rotation details found for this URL.');
        }

        $details = $details->sortBy('count');


        $totalCount = $details->sum('count');

        $rotationIndex = time() % $totalCount;

        $currentCount = 0;

        foreach ($details as $detail) {
            if ($rotationIndex >= $currentCount && $rotationIndex < ($currentCount + $detail->count)) {
                return redirect($detail->urls);
            }
            $currentCount += $detail->count;
        }

        return redirect($url->original_url);
    }




    public function show($id)
    {
        //
    }


    public function edit($id)
    {   $urlData = ShortUrl::find($id);
//        $detailsData = ShortUrlDetail::find($id);
        $detailsData = ShortUrlDetail::where('url_id', $id)->get();
        return view('Admin.Url.edit' , compact('urlData' , 'detailsData'));
    }


    public function update(Request $request, $id)
    {

//        dd($request);

        $request->validate([
            'name' => 'required|string',
        ]);


        $shortUrl = ShortUrl::findOrFail($id);
        $shortUrl->update([
            'name' => $request->input('name'),
            'default_link' => $request->input('default_link'),
        ]);


        $detailsData = [];
        foreach ($request->input('count') as $key => $count) {
            $detailsData[] = [
                'count' => $count,
                'urls' => $request->input('urls')[$key],
                'modulus' => $request->input('modulus')[$key],
            ];
        }
        $shortUrl->url_details()->delete();
        $shortUrl->url_details()->createMany($detailsData);

        return redirect()->route('url-stories.index')->with('success', 'Link updated successfully');
    }




    public function destroy($id)
    {
        $DeleteUrl = ShortUrl::find($id);
        if ($DeleteUrl) {
            $DeleteUrl->url_details()->delete();
            if ($DeleteUrl->image) {
                unlink(public_path($DeleteUrl->image));
            }
            $DeleteUrl->delete();
            return redirect()->back()->with('message', 'Url deleted successfully.');
        } else {
            return redirect()->back()->with('errorMessage', 'Url not found.');
        }

    }

    public  function UrlStatus(Request $request, $id)
    {


        $userStatus = ShortUrl::find($id);


        if ( $userStatus->url_status == 1)
        {
            ShortUrl::where('id', $id)->update([
                'url_status' => 0,
            ]);
        }
        elseif( $userStatus->url_status == 0)
        {
            ShortUrl::where('id', $id)->update([
                'url_status' => 1,
            ]);
        }

        return redirect()->back()->with('massage',' status change successfully ');


    }

    public function exclup()
    {
        return view('Admin.excl.create');
    }

    public function import(Request $request)
    {
//        return $request->all();
        $request->validate([
//            'file' => 'required|mimes:xlsx,xls'
        ]);
        $last  = tracking_system::orderBy('id', 'desc')->first();
        $count = $last ? $last->count + 1 : 1;
//      dd($count);
        tracking_system::create([
            'count' => $count,
            'company_name'=>$request->company_name
        ]);


        $file = $request->file('file');
        Excel::import(new ImportsExcl, $file);
        return redirect()->route('excle_list')->with('success', 'Employees imported successfully.');

    }



    public  function excleList()
    {
        $datas = createEcltable::all();
        return view('Admin.excl.list', compact('datas'));

    }

    public  function excleListEdit()
    {
        $datas = createEcltable::all();
        return view('Admin.excl.listEdit', compact('datas'));
    }

    public function updateCell(Request $request)
    {
        $data = CreateEcltable::findOrFail($request->id);
        $field = $request->field;
        $value = $request->value;

        if (!in_array($field, ['qty', 'sale_report_type','status', 'sale_report', 'pk_type', 'name', 'barcode'])) {
            return response()->json(['error' => 'Invalid field'], 400);
        }

        $data->$field = $value;
        $data->save();

        return response()->json(['success' => true, 'field' => $field]);
    }

    public  function excleListShow()
    {
        $datas = createEcltable::all();

        $track = tracking_system::orderBy('id', 'desc')->first();


        return view('Admin.excl.show' , compact('datas' , 'track'));
    }

    public function deleteAll()
    {
         CreateEcltable::truncate();

        return redirect()->back()->with('success', 'All data deleted successfully.');
    }


}



