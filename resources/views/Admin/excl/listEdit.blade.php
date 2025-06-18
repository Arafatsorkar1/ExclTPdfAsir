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
        <div class="card-header" style=" color: black ">
            <a href="{{route('excle_list')}}">List</a>

        </div>

        <div class="card-body" style=" color: black ">
            <table style="width: 100%;" id="example2" class="table table-hover table-striped table-bordered">

                <thead class="bg-gray-100">
                <tr>
                    <th>#</th>
                    <th></th>
                    <th  >كمية مطلوب</th>
                    <th>الرصيد</th>
                    <th>الكمية المنصرفة</th>
                    <th>الوحدة</th>
                    <th>اسم الصنف</th>
                    <th>رقم الصنف</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $datas  as $data)


                    <tr data-id="{{ $data->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td >
                            <input type="text" class="form-control editable status-input" data-field="status" value="{{ $data->status ?? '' }}">
                        </td>
                        <td><input type="text" class="form-control editable qty-input" data-field="qty" value="{{ $data->qty }}"></td>
                        <td><input type="text" class="form-control editable" data-field="sale_report_type" value="{{ $data->sale_report_type }}"></td>
                        <td><input type="text" class="form-control editable" data-field="sale_report" value="{{ $data->sale_report }}"></td>
                        <td><input type="text" class="form-control editable" data-field="pk_type" value="{{ $data->pk_type }}"></td>
                        <td><input type="text" class="form-control editable" data-field="name" value="{{ $data->name }}"></td>
                        <td><input type="text" class="form-control editable" data-field="barcode" value="{{ $data->barcode }}"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function numberToArabicWords(num) {
            const ones = ["", "واحد", "اثنان", "ثلاثة", "أربعة", "خمسة", "ستة", "سبعة", "ثمانية", "تسعة"];
            const tens = ["", "عشرة", "عشرون", "ثلاثون", "أربعون", "خمسون", "ستون", "سبعون", "ثمانون", "تسعون"];

            if (isNaN(num) || num < 0) return "";

            if (num === 0) return "صفر";
            if (num < 10) return ones[num];

            if (num < 100) {
                const unit = num % 10;
                const ten = Math.floor(num / 10);
                if (unit === 0) return tens[ten];
                return ones[unit] + " و " + tens[ten];
            }

            return "عدد كبير";
        }

        function autoSaveCell(id, field, value, input) {
            $.ajax({
                url: '/update-cell',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    field: field,
                    value: value
                },
                success: function () {
                    input.css('background', '#d4edda');
                },
                error: function () {
                    input.css('background', '#f8d7da');
                }
            });
        }

        document.addEventListener('input', function (e) {
            if (e.target.matches('.qty-input')) {
                const qtyVal = e.target.value;
                const qty = parseInt(qtyVal);
                const row = e.target.closest('tr');
                const statusInput = row.querySelector('.status-input');

                if (!isNaN(qty)) {
                    const arabicWord = numberToArabicWords(qty);
                    statusInput.value = arabicWord;

                    // এখনই Ajax দিয়ে সেইভ করুন
                    const id = row.dataset.id;
                    autoSaveCell(id, 'status', arabicWord, $(statusInput));
                } else {
                    statusInput.value = '';
                }
            }
        });
    </script>


    {{--    <script>--}}
{{--        function numberToArabicWords(num) {--}}
{{--            const ones = ["", "واحد", "اثنان", "ثلاثة", "أربعة", "خمسة", "ستة", "سبعة", "ثمانية", "تسعة"];--}}
{{--            const tens = ["", "عشرة", "عشرون", "ثلاثون", "أربعون", "خمسون", "ستون", "سبعون", "ثمانون", "تسعون"];--}}

{{--            if (num === 0) return "صفر";--}}

{{--            if (num < 10) {--}}
{{--                return ones[num];--}}
{{--            }--}}

{{--            if (num < 100) {--}}
{{--                let unit = num % 10;--}}
{{--                let ten = Math.floor(num / 10);--}}
{{--                if (unit === 0) return tens[ten];--}}
{{--                return ones[unit] + " و " + tens[ten];--}}
{{--            }--}}

{{--            return "عدد كبير"; // 100+ হলে--}}
{{--        }--}}

{{--        // qty ইনপুটে টাইপ করলে পাশের status ফিল্ডে সেট করব--}}
{{--        document.addEventListener('input', function (e) {--}}
{{--            if (e.target.matches('.qty-input')) {--}}
{{--                const qty = parseInt(e.target.value);--}}
{{--                const row = e.target.closest('tr');--}}
{{--                const statusInput = row.querySelector('.status-input');--}}

{{--                if (!isNaN(qty)) {--}}
{{--                    statusInput.value = numberToArabicWords(qty);--}}
{{--                } else {--}}
{{--                    statusInput.value = '';--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

    <script>
        $(document).ready(function () {
            $('.editable').on('change', function () {
                let input = $(this);
                let value = input.val();
                let field = input.data('field');
                let row = input.closest('tr');
                let id = row.data('id');

                $.ajax({
                    url: '/update-cell',  // route name
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        field: field,
                        value: value
                    },
                    success: function (res) {
                        console.log('Saved:', res);
                        input.css('background', '#d4edda'); // green
                    },
                    error: function (xhr) {
                        alert('Failed to update');
                        input.css('background', '#f8d7da'); // red
                    }
                });
            });
        });
    </script>


@endsection