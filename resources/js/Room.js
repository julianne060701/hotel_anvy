$(document).ready(()=>{

    $('#example1').on('click','.btnView', function(){

        $('#alert').addClass('d-none');
        $('#modalEdit').modal('show')
        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $('#modalTile').html(`Room No: ${data[0]}`);
        $('#room_Number').val(data[0]);
        $('#room_Type').val(data[1]);
        $('#Capacity_1').val(data[3]);
        $('#Price_1').val(data[4]);
        $('#status_1').val(data[5]);

        $id = data[0];

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });





    })




    $('#add_btn').on('click', ()=>{

        $('#modalAdd').modal('show');

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#UserAddForm').on('submit', (e)=>{

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
                    url: 'newRoom',
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
