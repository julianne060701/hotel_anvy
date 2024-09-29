$(document).ready(()=>{

    $('#example1').on('click','.btnView', function(){

        $('#alert').addClass('d-none');
        $('#modalEdit').modal('show')
        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $('#type1').val(data[0]);
        $('#id').val(data[3]);

        // $id = data[3];

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#BedEditForm').on('submit', (e)=>{

            e.preventDefault();

            $type = $('#type1').val();
            $id = $('#id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: 'updateBed',
                data: {
                    'type': $type,
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

    $('#add_btn').on('click', ()=>{

        $('#modalAdd').modal('show');

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#BedAddForm').on('submit', (e)=>{

                e.preventDefault();

                $type = $('#type').val();
                $id = $('#id-holder').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: 'newBed',
                    data: {
                        'type': $('#type').val()
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