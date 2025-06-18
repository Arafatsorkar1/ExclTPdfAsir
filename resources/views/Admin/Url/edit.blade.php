@extends('Admin.master')

@section('title','edit')
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

    <form action="{{route('url-stories.update',$urlData->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('put')

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

                        </div>
                    </div>
                    <input id="showDuration" name="name" type="text" placeholder="eg. campaign one..."
                           class="form-control" value="{{$urlData->name}}">
                </div>


                <div class="form-group" id="inputContainer" >
                    <label class="form-label" for="showDuration">Default Destination ?</label>
                    <input id="showDuration" name="default_link" type="text" value="{{$urlData->default_link}}" class="form-control" >
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="form-label" > Redirects To</label>
                    </div>
                    <div class="col-md-7">
                        <label class="form-label" > .</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" > Percent (%)</label>
                    </div>
                </div>

                @foreach($detailsData as $index => $details)
                    <div class="row">
                        <div class="col-md-2">
                            <label class="form-label" for="red_{{ $index }}"> </label>
                            <input id="red_{{ $index }}" type="text" name="count[]" class="form-control counter" value="{{ $details->count }}" readonly >
                        </div>
                        <div class="col-md-7">
                            <label class="form-label" for="ur_{{ $index }}"> </label>
                            <input type="text" id="ur_{{ $index }}" name="urls[]" class="form-control" value="{{ $details->urls }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="per_{{ $index }}"></label>
                            <input type="text" id="per_{{ $index }}" name="modulus[]" value="{{ $details->modulus }}" class="form-control percentage">
                        </div>

                        <div class="col-md-1">

                        </div>

                    </div>
                @endforeach

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
{{--                <button type="button" class="mr-2 btn btn-success btn-lg" id="resetButton">Reset</button>--}}
                <button type="submit" class="btn btn-success btn-lg">Update</button>
            </div>
        </div>
    </form>



    <script>
        const fieldContainer = document.getElementById('fieldContainer');
        const addFieldButton = document.getElementById('addFieldButton');
        let rowCounter = {{ count($detailsData) + 1 }};

        addFieldButton.addEventListener('click', () => {
            // Create a new row
            const newRow = document.createElement('div');
            newRow.classList.add('row');

            // Create the column for the serial number
            const colSerial = document.createElement('div');
            colSerial.classList.add('col-md-2');
            colSerial.innerHTML = `<label class="form-label counter" for="red_${rowCounter}"></label><input id="red_${rowCounter}" type="text" name="count[]" class="form-control" value="${rowCounter}" readonly>`;

            // Create the column for the URL input
            const colURL = document.createElement('div');
            colURL.classList.add('col-md-7');
            colURL.innerHTML = `<label class="form-label" for="ur_${rowCounter}"></label><input type="text" name="urls[]" id="ur_${rowCounter}" class="form-control" value="https://">`;

            // Create the column for the Percentage input
            const colPercentage = document.createElement('div');
            colPercentage.classList.add('col-md-2');
            colPercentage.innerHTML = `<label class="form-label" for="per_${rowCounter}"></label><input type="text" id="per_${rowCounter}" name="modulus[]" class="form-control percentage" value="${(100 / rowCounter).toFixed(2)}%">`;

            // Create the "X" button for deletion
            const deleteButton = document.createElement('button');
            deleteButton.classList.add('delete-button');
            deleteButton.innerHTML = 'X';
            deleteButton.onclick = function () {
                deleteRow(this);
            };

            // Append the columns to the row
            newRow.appendChild(colSerial);
            newRow.appendChild(colURL);
            newRow.appendChild(colPercentage);
            newRow.appendChild(deleteButton);

            // Append the row to the container
            fieldContainer.appendChild(newRow);

            // Increment the serial number for the next row
            // rowCounter++;
            counter();
        });

        const counter = () =>{
            let fields = document.getElementsByClassName('counter');
            fields.forEach(serialize)
        }
        function serialize(val, id){
            val.value = id+1;
            let percentages = document.getElementsByClassName('percentage');
            percentages.forEach((val, id)=>{
                val.value = (100/(percentages.length)).toFixed(1);
            })
        }

        function deleteRow(button) {
            // Find the parent row
            const row = button.parentElement;

            // Ensure that there's more than one row before deleting
            if (rowCounter > 2) {
                // Get the input field containing the index
                const inputField = row.querySelector('input[type="text"][name^="modulus"]');

                // Extract the index from the input field name
                const fieldName = inputField.name;
                const index = fieldName.match(/\d+/);

                // Remove the row from the container
                fieldContainer.removeChild(row);

                // Update the rowCounter value
                // rowCounter--;
                counter();
                // Update the percentage input in the last row (if it exists)
                // if (rowCounter > 2) {
                //     const lastRowPercentageInput = document.getElementById(`per_${rowCounter}`);
                //     lastRowPercentageInput.value = `${(100 / (rowCounter - 1)).toFixed(2)}%`;
                // }
            }
        }

        // Reload the page
        const resetButton = document.getElementById('resetButton');
        resetButton.addEventListener('click', () => {
            location.reload();
        });



    </script>


@endsection