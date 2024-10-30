$(document).ready(()=>{



  // Fix for Archiving
$('#example1').on('click', '.btnArchive', function() {
    $('#alert').addClass('d-none');
    $('#modalArchive').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children('td').map(function() {
        return $(this).text();
    }).get();

    $('#archiveRoomId').val(data[8]);  
    //Lost codes here in inputting the data on the selected input hmlt tags

    // Handle Archive Form Submission
    $('#RoomArchiveForm').off('submit').on('submit', function(e) {
        e.preventDefault();

        var roomId = $('#archiveRoomId').val();

        $.ajax({
            type: 'POST',
            url: '/archiveRoom', 
            data: {
                id: roomId
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response === 'success') {
                    alert('Room archived successfully');
                    window.location.reload();
                } else if (response === 'duplicate') {
                    alert('This room has already been archived');
                } else {
                    alert(response);
                }
            },
            error: function(xhr) {
                alert('An error occurred during archiving.');
            }
        });
    });
});

    
  // Fix for Editing Room
$('#example1').on('click', '.btnView', function() {
    $('#alert').addClass('d-none');
    $('#modalEdit').modal('show');
    const $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function() {
        return $(this).text();
    }).get();

    // Populate the form fields with the selected room's data
    $('#room_number').val(data[1]);   // Room Number
    $('#room_type').val(data[2]);     // Room Type
    $('#capacity').val(data[4]);    // Capacity
    $('#rate').val(data[5]);          // Price (Fixed to match form)
    $('#status').val(data[6]);        // Status (Fixed from status_1 to status)
    $('#bed_type').val(data[3]);      // Bed Type
    $('#id_1').val(data[8]);          // Room ID (Hidden input)
    
    console.log(data[1])

    // Handle form submission for editing
    $('#RoomEditForm').off('submit').on('submit', function(e) {
        e.preventDefault();

        const roomId = $('#id_1').val();
        const room_number = $('#room_number').val();
        const room_type = $('#room_type').val();
        const capacity = $('#capacity').val();
        const rate = $('#rate').val();    // Corrected variable name
        const status = $('#status').val();
        const bedType = $('#bed_type').val();  // Fixed bedType input name

        $.ajax({
            type: 'POST',
            url: '/updateRoom',  // Ensure this route exists in your web routes
            data: {
                id: roomId,
                room_number: room_number,
                room_type: room_type,
                capacity: capacity,
                rate: rate,       // Corrected from 'price' to 'rate'
                status: status,
                bed_type: bedType
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    alert('Room updated successfully');
                    window.location.reload();
                } else {
                    alert('Error updating room');
                }
            },
            error: function(xhr) {
                alert('An error occurred during updating.');
            }
        });
    });
});



    //Handles Adding
        $('#add_btn').on('click', ()=> {
            $('#modalAdd').modal('show');
        
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $('#UserAddForm').on('submit', (e) => {
                e.preventDefault();
        
                var formData = new FormData();
                formData.append('room_number', $('#room_number').val());
                formData.append('room_type', $('#room_type').val()); 
                formData.append('capacity', $('#capacity').val());
                formData.append('rate', $('#rate').val());
                formData.append('status', $('#status').val());
        
                var imageFile = $('#room_image')[0].files[0];
                if (imageFile) {
                    formData.append('room_image', imageFile);
                }
        
                $.ajax({
                    type: 'POST',
                    url: 'newRoom',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        if (response.success) {
                            alert('Room added successfully');
                            window.location.reload();
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: (xhr) => {
                        // Display validation errors
                        const errors = xhr.responseJSON.errors;
                        for (let field in errors) {
                            alert(errors[field][0]);
                        }
                    }
        });
    });
});




})