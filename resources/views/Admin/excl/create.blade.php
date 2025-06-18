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

    <form action="{{ route('employees.import') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 text-white card-border  card">
            <div class="card-header" style=" color: black ">
               Upload Excl File
            </div>

            <div class="card-body" style=" color: black ">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="showDuration">File Type Excl</label>
                        </div>
                     </div>

                </div>




                <div class="form-group mb-4">
                    <label for="file" class="form-label font-weight-bold">Upload File</label>
                    <input type="file" class="form-control-file" name="file" id="file" required>
                </div>

                <div class="form-group mb-4">
                    <label for="company_name" class="form-label font-weight-bold">Company Name</label>
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter company name" required>
                </div>



            </div>


            <div class="d-block text-right card-footer">
{{--                <button type="button" class="mr-2 btn btn-success btn-lg" id="resetButton">Reset</button>--}}
                <button type="submit" class="btn btn-success btn-lg">Upload</button>
            </div>
        </div>
    </form>


    @include('Admin.Url.include.js')
@endsection