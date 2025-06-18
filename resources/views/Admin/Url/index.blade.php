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
                <tbody class="last-tbody">
                @foreach($AllData as $data)

                    <tr data-slug="d74e68" class="first-row">
                        <td id="link-btn">

                            <div class="rotator-title overflow-hidden mb-2 ml-1">
                                <div class="float-left">
                                    <h5>{{$data->name}}</h5>
                                </div>

                                <div class="float-right">
                                    @include('Admin.Url.include.indexAction')
                                </div>
                            </div>

                            <div class="d-table mb-2">
                                <ion-icon name="link" class="mr-1"></ion-icon>
                                <a href="{{ route('redirectToOriginal', ['shortLink' => $data->real_link]) }}" class="dash-link d-table-cell align-middle" target="_blank">
                                    <i class="fa-solid fa-link fa-fade" style="color: #cc350f;"></i>&nbsp;
                                    <span class="host-name" id="copy-link-{{ $data->id }}">{{ route('redirectToOriginal', ['shortLink' => $data->real_link]) }}</span>
                                </a>

                            </div>


                            <div class="timestamp ml-1">
                         <i>
                                <p>{{ \Carbon\Carbon::parse( $data->created_at)->diffForHumans() }}</p>
                         </i>
                            </div>

                        </td>

                        <td>{{ rand(2, 99) }}</td>
                        <td>Default <i class="form-tooltip mr-2 ml-1" title="Traffic will be redirected to this page after all click counts are filled.">?</i>: {{$data->default_link}}
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






    <script>
        function copyToClipboard(elementId) {
            var linkElement = document.getElementById(elementId);
            var linkText = linkElement.innerText;
            var tempInput = document.createElement("input");
            tempInput.setAttribute("value", linkText);
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("Link copied to clipboard: " + linkText);
        }

        // var copyText = document.getElementById("copyText");
        // var copyButton = document.getElementById("copyButton");
        // copyButton.addEventListener("click", function() {
        //     var textArea = document.createElement("textarea");
        //     textArea.value = copyText.innerText;
        //     document.body.appendChild(textArea);
        //     textArea.select();
        //     document.execCommand("copy");
        //     document.body.removeChild(textArea);
        //     copyButton.innerText = "Copied!";
        //     setTimeout(function() {
        //         copyButton.icone = "<i class=\"fa-regular fa-copy\">";
        //     }, 2000);
        // });

    </script>

@endsection