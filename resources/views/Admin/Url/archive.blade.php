@extends('Admin.master')

@section('title','url')

<style>
    .delete-button {
        color: red;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        padding: 5px; /* Add padding here */
    }

    .last-tr-border{
        border-bottom: 1px solid black;
    }
</style>

@section('body')

    <div class="mb-3 text-white card-border  card">
        <div class="card-body" style=" color: black ">


            <table id="dash-link-table" class="table mb-0 table-borderless">

                <thead style="border-bottom: 1px solid black">
                <tr>
                    <th scope="col">LINK</th>
                    <th scope="col">TOTAL VISITS</th>
                    <th scope="col">REDIRECTS TO</th>
                    <th scope="col">VISITS</th>
                    <th scope="col">PERCENTAGE</th>
                    <th scope="col">CLICKS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($AllData as $data)

                    <tr data-slug="d74e68" class="first-row">
                        <td id="link-btn">

                            <div class="rotator-title overflow-hidden mb-2 ml-1">
                                <div class="float-left">
                                    <h5>{{$data->name}}</h5>
                                </div>

                                <div class="float-right">
                                    @include('Admin.Url.include.archiveAction')
                                </div>
                            </div>

                            <div class="d-table mb-2">
                                <ion-icon name="link" class="mr-1"></ion-icon><i class="fa-solid fa-link fa-fade" style="color: #cc350f;"></i>&nbsp
                                <a  class="dash-link d-table-cell align-middle" target="_blank">
                                    <span class="host-name"
                                          id="copy-link-{{ $data->id }}">{{ $data->default_link }}</span>
                                </a>
                            </div>


                            <div class="timestamp ml-1">
                                <i>
                                    <p>{{ \Carbon\Carbon::parse( $data->created_at)->diffForHumans() }}</p>
                                </i>
                            </div>

                        </td>

                        <td>{{ rand(2, 99) }}</td>
                        <td>Default <i class="form-tooltip mr-2 ml-1"
                                       title="Traffic will be redirected to this page after all click counts are filled.">?</i>: {{$data->default_link}}
                            <hr>
                            <br></td>
                        <td>0</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    @foreach ($data->url_details as $urlDetail)
                        <tr class="{{ $loop->last ? 'last-tr-border' : '' }}">
                            <td></td>
                            <td></td>
                            <td style="max-width: 40px">
                                <a href="" target="_blank">{{$urlDetail->urls}}</a>
                            </td>
                            <td>{{ rand(1, 3) }}</td>
                            <td>{{$urlDetail->modulus}}</td>
                            <td>-</td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>


        </div>
    </div>

@endsection