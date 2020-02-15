 $(document).ajaxStart(function() {
     window.swal({
         title: "Loading...",
         text: "Please wait",
         imageUrl: "{{asset('image')}}/loading_spinner.gif",

         button: false,
         closeOnClickOutside: false,
         closeOnEsc: false
     });

 });

 $(document).ajaxStop(function() {
     swal.close();
 });


 $(function() {


     $.ajaxSetup({

         headers: {

             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

         }

     });


 })

 $("#nurse_information_upload").on('click', function() {
     var prefered_day = [];
     $('.prefered_day:checked').each(function() {
         prefered_day.push($(this).val().charAt(0).toUpperCase() + $(this).val().slice(1));
     });

     // alert(prefered_day);

     //var gender =   $("#gender:checked").val();
     //alert (gender);

     var formdata = new FormData();
     formdata.append("name", $("#name").val());
     formdata.append("gender", $("#gender:checked").val());
     formdata.append("language", $("#language").val());
     formdata.append("trained_plan", $("#trained_plan").val());
     formdata.append("email", $("#email").val());
     formdata.append("registration_no", $("#registration_no").val());
     formdata.append("phone_number", $("#phone_number").val());
     formdata.append("address", $("#address").val());
     formdata.append("city", $("#city").val());
     formdata.append("country", $("#country").val());
     formdata.append("zip", $("#zip").val());
     formdata.append("prefered_day", prefered_day);
     formdata.append("start_time", $("#start_time").val());
     formdata.append("end_time", $("#end_time").val());
     formdata.append("note", $("#note").val());


     $.ajax({
         processData: false,
         contentType: false,
         url: 'nurse_information_upload',
         type: 'POST',
         data: formdata,
         success: function(data, status) {

             alert('Nurse Information Uploaded Successfully');

             //  alert("Notice send successfully");
             location.reload();
         },



     });



     //alert(prefered_day);

 });

 $("#upload").on('click', function() {
     //  alert('hello');

     var formdata = new FormData();
     formdata.append('select_file', $('#customFile')[0].files[0]);
     $.ajax({
         processData: false,
         contentType: false,
         url: 'nurse_file_import',
         type: 'POST',
         data: formdata,
         success: function(data, status) {

             var msg = $.trim(data);
             if (msg != "ok") {


                 alert('Data Uploaded Successfully');
             } else {
                 alert('Data Uploaded Successfully');
             }


             //  alert("Notice send successfully");
             //  location.reload();
         },



     });


     //  $("#excel_error_modal").modal('show');

 });




 $('#customFile').on('change', function() {
     //get the file name
     var fileName = $(this).val().split('\\').pop();;
     //replace the "Choose a file" label
     $(".custom-file-label").html(fileName);
 });

 $('#data-table').DataTable({
     'paging': true,
     'lengthChange': true,
     'searching': false,
     'ordering': false,
     'info': false,
     'autoWidth': true
 })