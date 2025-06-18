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



    <div class="mb-3 text-white card-border  card">


        <div class="card-header" style="color: black">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <a href="{{ route('excle_list_edit') }}" class="btn btn-primary font-weight-bolder" style="color: black">Edit</a>
                </div>
                <div class="col-auto">
                    <button onclick="confirmDelete()" class="btn btn-danger font-weight-bolder">
                        Delete
                    </button>
                </div>
            </div>
        </div>



    </div>




    <div class="card-body" style=" color: black ">
        <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">

            <thead class="bg-gray-100">
            <tr>
                <th></th>
                <th></th>
                <th>كمية مطلوب</th>
                <th>الرصيد</th>
                <th>الكمية المنصرفة</th>
                <th>الوحدة</th>
                <th>اسم الصنف</th>
                <th>رقم الصنف</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $datas  as $data)
                <tr>
                    <td></td>
                    <td>{{$data->status ?? ''}}</td>
                    <td>{{$data->qty ?? ''}}</td>
                    <td>{{$data->sale_report_type ?? ''}}</td>
                    <td>{{$data->sale_report ?? ''}}</td>
                    <td>{{$data->pk_type ?? ''}}</td>
                    <td>{{$data->name ?? ''}}</td>
                    <td>{{$data->barcode ?? ''}}</td>

                </tr>

                {{--<tr data-id="{{ $data->id }}">--}}
                {{--    <td>{{ $loop->iteration }}</td>--}}
                {{--    <td><input type="text" class="form-control editable" data-field="qty" value="{{ $data->qty }}"></td>--}}
                {{--    <td><input type="text" class="form-control editable" data-field="sale_report_type" value="{{ $data->sale_report_type }}"></td>--}}
                {{--    <td><input type="text" class="form-control editable" data-field="sale_report" value="{{ $data->sale_report }}"></td>--}}
                {{--    <td><input type="text" class="form-control editable" data-field="pk_type" value="{{ $data->pk_type }}"></td>--}}
                {{--    <td><input type="text" class="form-control editable" data-field="name" value="{{ $data->name }}"></td>--}}
                {{--    <td><input type="text" class="form-control editable" data-field="barcode" value="{{ $data->barcode }}"></td>--}}
                {{--</tr>--}}
            @endforeach
            </tbody>
        </table>
        <br>
        <br>

        <a href="{{route('excle_list_show')}}">
            <img src="{{asset('pdf-icon.png')}}" alt="">
        </a>
    </div>
    <form id="delete-form" method="POST" action="{{ route('delete_all_data') }}" style="display: none;">
        @csrf
        @method('DELETE')
    </form>


    <script>
        function confirmDelete() {
            if (confirm("Are you sure you want to delete all data? This action cannot be undone.")) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>


    {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('.editable').on('change', function () {--}}
    {{--                let input = $(this);--}}
    {{--                let value = input.val();--}}
    {{--                let field = input.data('field');--}}
    {{--                let row = input.closest('tr');--}}
    {{--                let id = row.data('id');--}}

    {{--                $.ajax({--}}
    {{--                    url: '/update-cell',  // route name--}}
    {{--                    method: 'POST',--}}
    {{--                    data: {--}}
    {{--                        _token: '{{ csrf_token() }}',--}}
    {{--                        id: id,--}}
    {{--                        field: field,--}}
    {{--                        value: value--}}
    {{--                    },--}}
    {{--                    success: function (res) {--}}
    {{--                        console.log('Saved:', res);--}}
    {{--                        input.css('background', '#d4edda'); // green--}}
    {{--                    },--}}
    {{--                    error: function (xhr) {--}}
    {{--                        alert('Failed to update');--}}
    {{--                        input.css('background', '#f8d7da'); // red--}}
    {{--                    }--}}
    {{--                });--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}


@endsection