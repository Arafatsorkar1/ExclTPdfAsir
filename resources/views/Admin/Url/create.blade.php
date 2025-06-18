@extends('Admin.master')

@section('title','url')

<style>
    .delete-button {
        color: red;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        padding: 5px;

    }
</style>

@section('body')

    <form action="{{route('url-stories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 text-white card-border  card">
            <div class="card-header" style=" color: black ">
                Create a Link
            </div>

            <div class="card-body" style=" color: black ">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="showDuration">Link Name</label>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="mr-2">
                                Switch to <span class="perc-click-span-createForm">Percentage</span> Mode
                                <i class="form-tooltip mr-2 ml-1"
                                   title="Percentage/Click Mode. Default: Percentage">?</i>
                                <span>
                                    <button type="button" class="mb-2 mr-2 btn-shadow btn-outline-2x btn btn-outline-warning" id="toggleButton">yes</button>
                                </span>
                            </p>
                        </div>
                    </div>
                    <input id="showDuration" name="name" type="text" placeholder="eg. campaign one..."
                           class="form-control">
                </div>


                <div class="form-group" id="inputContainer" style="display: none;">
                    <label class="form-label" for="showDuration">Default Destination ?</label>
                    <input id="showDuration" name="default_link" type="text" value="https://" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label" for="red"> Redirects To</label>
                        <input id="red" type="text" name="count[]" class="form-control counter" value="1" readonly>
                    </div>
                    <div class="col-md-7">
                        <label class="form-label" for="ur"> .</label>
                        <input type="text" id="ur" name="urls[]" class="form-control" value="https://">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="per"> Percent (%)</label>
                        <input type="text" id="per" name="modulus[]" class="form-control percentage">
                    </div>
                </div>

                <div id="fieldContainer">
                    <!-- This is where the rows will be added -->
                </div>

                <div class="row mt-3">
                    <div class="col-md-2 text-center">
                        <button type="button" class="btn-success" id="addFieldButton">Add Field</button>
                    </div>
                </div>

            </div>


            <div class="d-block text-right card-footer">
                <button type="button" class="mr-2 btn btn-success btn-lg" id="resetButton">Reset</button>
                <button type="submit" class="btn btn-success btn-lg">Creat</button>
            </div>
        </div>
    </form>


    @include('Admin.Url.include.js')
@endsection