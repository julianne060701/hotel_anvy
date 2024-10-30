$(document).ready(()=>{


    //Handles Adding
    $('#add_btn').on('click', ()=>{

        $('#modalAdd').modal('show');

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#MenuAddForm').on('submit', (e)=>{

                e.preventDefault();

                $roomNumber = $('#roomNumber').val();
                $roomType = $('#roomType').val();
                $capacity = $('#capacity').val();
                $price = $('#price').val();
                $status = $('#status').val();
                $id = $('#id-holder').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: 'newMenu',
                    data: {
                        'room_number': $('#roomNumber').val(),
                        'roomType': $('#roomType').val(),
                        'capacity':$('#capacity').val(),
                        'price':$('#price').val(),
                        'status':$('#status').val()
                    },
                    success: ((response) => {
                        if(response === 'success'){
                            alert('success');
                            window.location.reload();
                        }else if(response ==='duplicate'){
                            alert('duplicate');
                        }else{
                            alert(response);
                        }
                    })
                   })

            })

    })



})
