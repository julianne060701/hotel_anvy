
$(document).ready(()=>{



    let table = $('#UserTable').DataTable({
        scrollY: true,
    });

        table.on('click', 'tbody tr', function () {
            let data = table.row(this).data();

            $('#modalEdit').modal('show');
            $('#Name_Holder').html(data[0]);
            $('#address').val(data[2]);
            $('#bday').val(data[3]);
            //$('#edad').val('yeah')
            $('#id-holder').val(data[5]);

            $name = splitName(data[0]);

            $('#fname').val($name.fname);
            $('#lname').val($name.lname);

            $('#connum').val(data[1]);


            $ageCalculated = ageCal($('#bday').val());
            $('#edad').val($ageCalculated);
        });

        function ageCal(bday){
            let today = new Date();
            let bdate = new Date(bday);

            let age = today.getFullYear() - bdate.getFullYear();

            let monthDif = today.getMonth() - bdate.getMonth();

           if(monthDif < 0){
            age--;
           }

           return age;
        }

        function splitName(fullname){
            var parts = $.trim(fullname).split(" ");

            return{
                fname: parts.slice(0, -1).join(" "),
                lname: parts.slice(-1)[0]
            }
        }


    $('#UserInfo').on('submit', (e)=>{

        e.preventDefault();

        //alert('hello');
        $fname = $('#fname').val();
        $lname = $('#lname').val();
        $bday = $('#bday').val();
        $contactNum = $('#connum').val();
        $Address = $('#address').val();
        $id = $('#id-holder').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: 'updateUser',
            data: {
                'fname' : $fname,
                'lname' : $lname,
                'bday' : $bday,
                'contactNum' : $contactNum,
                'Address' : $Address,
                'id' : $id
            },
            success: ((response)=>{
                if(response === 'success'){
                    alert(response);
                    window.location.reload();
                }else{
                    alert(response)
                }
            })
        })

    })

    $('#add_btn').on('click', ()=>{

        $('#modalAdd').modal('show');

        $('#Name_Holder').html('Add');

        $('#modalAdd').on('submit', (e)=>{
            e.preventDefault();

            $data = {
                fname : $('#fname_add').val(),
                lname : $('#lname_add').val(),
                bday : $('#bday_add').val(),
                contactNum : $('#connum_add').val(),
                Address : $('#address_add').val(),
                UserRole: $('#newRole').val()
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: 'addUser',
                data: $data,
                success: ((response)=>{

                    if(response === 'success'){
                        alert(response)
                        window.location.reload();
                    }else{
                        alert(response)
                    }

                })
            })

        })



    })

})
