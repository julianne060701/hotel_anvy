$(document).ready(()=>{

        //Handles Adding
        $('#add_btn').on('click', ()=>{

        $('#modalAdd').modal('show');

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#AmenityAddForm').on('submit', (e)=>{

                e.preventDefault();

                $amenity = $('#amenity').val();
                $id = $('#id-holder').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: 'newAmenity',
                    data: {
                        'amenity': $('#amenity').val()
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


        //Handles Editing
        $('#example1').on('click','.btnView', function(){

        $('#alert').addClass('d-none');
        $('#modalEdit').modal('show')
        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $('#amenity1').val(data[0]);
        $('#id').val(data[3]);

        // $id = data[3];

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#AmenityEditForm').on('submit', (e)=>{

            e.preventDefault();

            $amenity = $('#amenity1').val();
            $id = $('#id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: 'updateAmenity',
                data: {
                    'amenity': $amenity,
                    'id': $id
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