{{--@extends('Admin.master')--}}

{{--@section('title','url')--}}

{{--<style>--}}
{{--    .delete-button {--}}
{{--        color: red;--}}
{{--        background: none;--}}
{{--        border: none;--}}
{{--        font-size: 20px;--}}
{{--        cursor: pointer;--}}
{{--        padding: 5px;--}}

{{--    }--}}

{{--    @media print {--}}
{{--        .no-print {--}}
{{--            display: none;--}}
{{--        }--}}


{{--    }--}}

{{--    .btn-print {--}}
{{--        padding: 10px 20px;--}}
{{--        margin-bottom: 15px;--}}
{{--        font-size: 16px;--}}
{{--        background: #007bff;--}}
{{--        color: white;--}}
{{--        border: none;--}}
{{--        cursor: pointer;--}}
{{--        border-radius: 6px;--}}
{{--    }--}}

{{--</style>--}}

{{--@section('body')--}}



{{--    <div class="mb-3 text-white card-border  card no-print">--}}


{{--        <div class="card-header no-print" style=" color: black ">--}}
{{--            <a href="{{route('excle_list')}}">List</a>--}}

{{--        </div>--}}

{{--        <button class="btn-print" onclick="print()">🖨 طباعة</button>--}}

{{--    </div>--}}



{{--    <div class="container">--}}
{{--        <div class="row" style=" display: flex; justify-content: space-between">--}}
{{--            <div class="col-md-9 text-center">--}}

{{--                <div class="font-weight-bolder" style="font-size: 24px">--}}
{{--                    شركة نقاء عسير للتجارة--}}
{{--                </div>--}}
{{--                <div style="font-weight: bold ; font-size: 14px">--}}
{{--                    طلب شراء بضاعة موجة (مؤسسة متجر الشاطري للتجارة 10947--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 text-left">--}}
{{--                <img src="{{asset('asirLogo.jpg')}}" style="height: 100px ; width: 100px" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="card-body" style=" color: black ">--}}
{{--        <table style="width: 100%;" id=" " class="table table-hover table-striped table-bordered">--}}

{{--            <thead class="bg-gray-100">--}}

{{--            <tr>--}}
{{--                <td>123</td>--}}
{{--                <td colspan="3" style="font-weight: bold">رقم الطلب</td>--}}
{{--                <td  colspan="2"    style="font-weight: bold ; align-items: center">السوبر ماركت تنومة</td>--}}
{{--                <td  >23</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}

{{--                <th></th>--}}
{{--                <th>كمية مطلوب</th>--}}
{{--                <th>الرصيد</th>--}}
{{--                <th>الكمية المنصرفة</th>--}}
{{--                <th>الوحدة</th>--}}
{{--                <th>اسم الصنف</th>--}}
{{--                <th>رقم الصنف</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach( $datas  as $data)--}}
{{--                <tr>--}}

{{--                    <td>{{$data->status ?? ''}}</td>--}}
{{--                    <td>{{$data->qty ?? ''}}</td>--}}
{{--                    <td>{{$data->sale_report_type ?? ''}}</td>--}}
{{--                    <td>{{$data->sale_report ?? ''}}</td>--}}
{{--                    <td>{{$data->pk_type ?? ''}}</td>--}}
{{--                    <td>{{$data->name ?? ''}}</td>--}}
{{--                    <td>{{$data->barcode ?? ''}}</td>--}}

{{--                </tr>--}}


{{--            @endforeach--}}
{{--            <tr>--}}
{{--                <td colspan="7" class="text-center" style="font-size: 18; font-weight: bold">--}}
{{--                    مسؤول المشتريات--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td colspan="4" class="text-center" style="font-size: 14px ; font-weight: bold"> سابو خان / 0534395167</td>--}}
{{--                <td colspan="3" class="text-center" style="font-size: 14px ; font-weight: bold"> موسى / 0507513933</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td colspan="4" class="text-center" style="font-size: 14px ; font-weight: bold ; height: 100px"> </td>--}}
{{--                <td colspan="3" class="text-center" style="font-size: 14px ; font-weight: bold ; height: 100px "> </td>--}}
{{--            </tr>--}}


{{--            <tr>--}}
{{--                <td colspan="4" class="text-center" style="font-size: 14px ; font-weight: bold">مسؤول المستودع عماد / 0552788092</td>--}}
{{--                <td colspan="3" class="text-center" style="font-size: 14px ; font-weight: bold"> مسؤول الصالة عمار / 0550296984</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td colspan="4" class="text-center" style="font-size: 14px ; font-weight: bold ; height: 100px"> </td>--}}
{{--                <td colspan="3" class="text-center" style="font-size: 14px ; font-weight: bold ; height: 100px "> </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td colspan="6" class="text-center">--}}
{{--                    <div  style="font-weight: bold ; font-size: 18px ; color: red">--}}
{{--                        الرجاء عدم استلام البضاعه المتبقي في تاريخ صلاحيتها اقل من 70٪ من تاريخ الإنتاج--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--                <td rowspan="3" class="text-center">--}}
{{--                    <div style="font-weight: bold ; font-size: 28px ; color: red">--}}
{{--                        ملاحظات--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td class="text-center">رقم الطلب</td>--}}
{{--                <td class="text-center">لا يوجد</td>--}}
{{--                <td class="text-center">يوجد</td>--}}
{{--                <td class="text-center" colspan="3">--}}
{{--                    <div style="color: red ; font-size: 18px ; font-weight: bold">--}}
{{--                        صلاحية طلب الشراء 20 يوم من تاريخ  الطلب--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td class="text-center">--}}
{{--                <div style="font-size: 18px ; font-weight: bold">90</div>--}}
{{--                </td>--}}
{{--                <td class="text-center"></td>--}}
{{--                <td class="text-center">--}}
{{--                    <div style="color: red ; font-size: 18px ; font-weight: bold">--}}
{{--                        في--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--                <td class="text-center" colspan="3">--}}
{{--                    <div style="color: red ; font-size: 18px ; font-weight: bold">--}}
{{--                        هل يوجد منتجات منتهية الصلاحية في المستودع--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <br>--}}
{{--        <br>--}}


{{--    </div>--}}


{{--    </div>--}}




{{--@endsection--}}



        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .delete-button {
        color: red;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        padding: 5px;
    }

    .btn-print {
        padding: 10px 20px;
        margin-bottom: 15px;
        font-size: 16px;
        background: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 6px;
    }

    @media print {
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        .no-print {
            display: none !important;
        }

        .btn-print {
            display: none !important;
        }

        .card, .card-body {
            box-shadow: none !important;
            border: none !important;
        }

        .container {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .table th,
        .table td {
            border: 1px solid #000 !important;
            padding: 0px !important;
            text-align: center;
        }

        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-footer-group;
        }

        tr {
            page-break-inside: avoid;
        }

        img {
            max-height: 100px;
            max-width: 100px;
        }
    }
</style>
<body>

<script>
    function printDocument() {
        document.title = 'طلب شراء - ' + new Date().toLocaleDateString();
        window.print();
    }
</script>

<div class="mb-3 text-white card-border card no-print">
    <div class="card-header no-print" style="color: black">
        <a href="{{ route('excle_list') }}">قائمة الطلبات</a>
    </div>
    <button class="btn-print" onclick="printDocument()">🖨 طباعة</button>
</div>

<div class=" ">
    <table width="100%"  >
        <tr >
            <td  >
                <div class="col-md-9 text-center mt-4">
                    <div class="font-weight-bolder" style="font-size: 24px">
                        شركة نقاء عسير للتجارة
                    </div>
                    <div style="font-weight: bold; font-size:14px">
                        (  {{$track->company_name ?? 'عسير'}})    طلب شراء بضاعة موجة
                    </div>
                </div>
            </td>
            <td style="text-align: right">
                <div class="col-md-3 text-left mb-5">
                    <img src="{{ asset('asirLogo.jpg') }}" style="height:300px; width:300px" alt="">
                </div>
            </td>
        </tr>
    </table>
{{--    <div class="row" style="display: flex; justify-content: space-between">--}}
{{--        <div class="col-md-9 text-center mt-4">--}}
{{--            <div class="font-weight-bolder" style="font-size: 24px">--}}
{{--                شركة نقاء عسير للتجارة--}}
{{--            </div>--}}
{{--            <div style="font-weight: bold; font-size:14px">--}}
{{--              (  {{$track->company_name ?? 'عسير'}})    طلب شراء بضاعة موجة--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3 text-left mb-5">--}}
{{--            <img src="{{ asset('asirLogo.jpg') }}" style="height:200px; width:200px" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

<div class="card-body" style="color: black">
    <table style="width: 100%; border: 1px black solid" class="table">
        <thead class="bg-gray-100">
        <tr>
            <td style="font-weight: bold ; font-size: 18">{{$track->count ?? "1"}}</td>
            <td colspan="3" style="font-weight: bold">رقم الطلب</td>
            <td colspan="2" style="font-weight: bold; text-align: center">السوبر ماركت تنومة</td>
            <td>{{ $track->created_at ? $track->created_at->format('d-m-Y') : now()->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <th></th>
            <th>كمية مطلوب</th>
            <th style="width:10%">الرصيد</th>
            <th style="width:10%">الكمية المنصرفة</th>
            <th style="width:10%">الوحدة</th>
            <th style="width:35%">اسم الصنف</th>
            <th>رقم الصنف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $data)
            <tr>
                <td>{{ $data->status ?? '' }}</td>
                <td>{{ $data->qty ?? '' }}</td>
                <td>{{ $data->sale_report_type ?? '' }}</td>
                <td>{{ $data->sale_report ?? '' }}</td>
                <td>{{ $data->pk_type ?? '' }}</td>
                <td>{{ $data->name ?? '' }}</td>
                <td>{{ $data->barcode ?? '' }}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="7" class="text-center" style="font-size: 18px; font-weight: bold">
                مسؤول المشتريات
            </td>
        </tr>
        <tr>
            <td colspan="5" class="text-center" style="font-size: 14px; font-weight: bold">سابو خان / 0534395167</td>
            <td colspan="3" class="text-center" style="font-size: 14px; font-weight: bold">موسى / 0507513933</td>
        </tr>
        <tr>
            <td colspan="5" style="height: 100px"></td>
            <td colspan="3" style="height: 100px"></td>
        </tr>
        <tr>
            <td colspan="5" class="text-center" style="font-size: 14px; font-weight: bold">مسؤول المستودع عماد / 0552788092</td>
            <td colspan="3" class="text-center" style="font-size: 14px; font-weight: bold">مسؤول الصالة عمار / 0550296984</td>
        </tr>
        <tr>
            <td colspan="5" style="height: 100px"></td>
            <td colspan="3" style="height: 100px"></td>
        </tr>
        <tr>
            <td colspan="6" class="text-center">
                <div style="font-weight: bold; font-size: 18px; color: red">
                    الرجاء عدم استلام البضاعة المتبقي في تاريخ صلاحيتها أقل من 70٪ من تاريخ الإنتاج
                </div>
            </td>
            <td rowspan="3" class="text-center">
                <div style="font-weight: bold; font-size: 28px; color: red">
                    ملاحظات
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-center">رقم الطلب</td>
            <td class="text-center">لا يوجد</td>
            <td class="text-center">يوجد</td>
            <td class="text-center" colspan="3">
                <div style="color: red; font-size: 18px; font-weight: bold">
                    صلاحية طلب الشراء 20 يوم من تاريخ الطلب
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-center"><div style="font-size: 18px; font-weight: bold">{{$track->count ?? "1"}}</div></td>
            <td class="text-center"></td>
            <td class="text-center">
                <div style="color: red; font-size: 18px; font-weight: bold">في</div>
            </td>
            <td class="text-center" colspan="3">
                <div style="color: red; font-size: 18px; font-weight: bold">
                    هل يوجد منتجات منتهية الصلاحية في المستودع
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>





