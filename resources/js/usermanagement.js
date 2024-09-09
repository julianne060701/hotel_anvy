$('document').ready(()=>{

    let table = new DataTable('#UserTable', {
        scrollY: true
    });

        table.on('click', 'tbody tr', function () {
            let data = table.row(this).data();

            $('#modalEdit').modal('show');
            $('#Name_Holder').html(data[0]);
            $('#address').val(data[2]);
            $('#bday').val(data[3]);
            //$('#edad').val('yeah')

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

})
