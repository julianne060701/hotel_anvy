$(document).ready(() => {

    $("#example1").on('click','.btnEdit', function(){
        $('#modalEdit').modal('show')
        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $option = 'edit';

        $fullname = data[1];

        $('#Name_Holder').html(data[0]);
        $('#address').val(data[2]);
        $('#bday').val(data[3]);
        $('#id-holder').val(data[5]);

        let name = splitName(data[0]);
        $('#fname').val(name.fname);
        $('#lname').val(name.lname);
        $('#connum').val(data[1]);
    })

    // Function to calculate age from the birthday
    function ageCal(bday) {
        let today = new Date();
        let bdate = new Date(bday);
        let age = today.getFullYear() - bdate.getFullYear();
        let monthDif = today.getMonth() - bdate.getMonth();

        if (monthDif < 0 || (monthDif === 0 && today.getDate() < bdate.getDate())) {
            age--;
        }

        return age;
    }

    // Function to split the full name into first and last name
    function splitName(fullname) {
        let parts = $.trim(fullname).split(" ");
        return {
            fname: parts.slice(0, -1).join(" "),
            lname: parts.slice(-1)[0]
        };
    }

    // Handle editing user information
    $('#UserEditForm').on('submit', (e) => {
        e.preventDefault();

        let fname = $('#fname').val();
        let lname = $('#lname').val();
        let bday = $('#bday').val();
        let contactNum = $('#connum').val();
        let address = $('#address').val();
        let id = $('#id-holder').val();

        // Set up CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // AJAX request to update user
        $.ajax({
            type: 'POST',
            url: 'updateUser',
            data: {
                fname: fname,
                lname: lname,
                bday: bday,
                contactNum: contactNum,
                Address: address,
                id: id
            },
            success: (response) => {
                if (response === 'success') {
                    alert(response);
                    window.location.reload(); // Reload the page after success
                } else {
                    alert(response);
                }
            }
        });
    });

    // Handle adding a new user
    $('#add_btn').on('click', () => {
        $('#modalAdd').modal('show'); // Show the add modal

        // Clear form fields when the modal is opened
        $('#fname_add, #lname_add, #bday_add, #connum_add, #address_add, #newRole').val('');

        // Handle submission of the add form
        $('#modalAdd').on('submit', (e) => {
            e.preventDefault();

            let data = {
                fname: $('#fname_add').val(),
                lname: $('#lname_add').val(),
                bday: $('#bday_add').val(),
                contactNum: $('#connum_add').val(),
                Address: $('#address_add').val(),
                UserRole: $('#newRole').val()
            };

            // Set up CSRF token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // AJAX request to add a new user
            $.ajax({
                type: 'POST',
                url: 'addUser',
                data: data,
                success: (response) => {
                    if (response === 'success') {
                        alert(response);
                        window.location.reload(); // Reload the page after success
                    } else {
                        alert(response);
                    }
                }
            });
        });
    });

});
