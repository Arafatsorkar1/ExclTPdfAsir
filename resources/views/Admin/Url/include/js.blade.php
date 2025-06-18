<script>

    // hide

    // const toggleButton = document.getElementById('toggleButton');
    // const inputField = document.getElementById('inputContainer');
    //
    // toggleButton.addEventListener('click', () => {
    //     if (inputField.style.display === 'none' || inputField.style.display === '') {
    //         inputField.style.display = 'block';
    //     } else {
    //         inputField.style.display = 'none';
    //     }
    // });


    // hide option
    const toggleButton = document.getElementById('toggleButton');
    const inputContainer = document.getElementById('inputContainer');
    let isFirstClick = true;

    toggleButton.addEventListener('click', () => {
        if (isFirstClick) {
            inputContainer.style.display = 'block';
            isFirstClick = false;
        } else {
            if (inputContainer.style.display === 'none' || inputContainer.style.display === '') {
                inputContainer.style.display = 'block';
            } else {
                inputContainer.style.display = 'none';
            }
        }
    });










    // main
    const fieldContainer = document.getElementById('fieldContainer');
    const addFieldButton = document.getElementById('addFieldButton');


    addFieldButton.addEventListener('click', () => {
        // Create a new row
        const newRow = document.createElement('div');
        newRow.classList.add('row');

        // Create the column for the serial number
        const colSerial = document.createElement('div');
        colSerial.classList.add('col-md-2');
        colSerial.innerHTML = `<label class="form-label" for="red"></label><input id="red" type="text" name="count[]" class="form-control  counter" value="" readonly>`;

        // Create the column for the URL input
        const colURL = document.createElement('div');
        colURL.classList.add('col-md-7');
        colURL.innerHTML = `<label class="form-label" for="ur"></label><input type="text" name="urls[]"  id="ur" class="form-control" value="https://">`;

        // Create the column for the Percentage input
        const colPercentage = document.createElement('div');
        colPercentage.classList.add('col-md-2');
        colPercentage.innerHTML = `<label class="form-label" for="per"></label><input type="text" id="per" name="modulus[]" class="form-control percentage" value="">`;

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
        // Find the parent row and remove it from the container
        const row = button.parentElement;
        fieldContainer.removeChild(row);
        counter();
    }


    // Reload the page
    const resetButton = document.getElementById('resetButton');
    resetButton.addEventListener('click', () => {
        location.reload();
    });

</script>