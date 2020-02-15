function show_nurse_assesment_form(scheduler_id) {
    var formdata = new FormData();

    formdata.append('scheduler_id', scheduler_id);
    $.ajax({
        processData: false,
        contentType: false,
        type: "POST",
        url: "nurse_assesment_form_value",
        data: formdata,
        success: function(data, status) {
            $("#assign_nurse").html(data);
            $("#nurse_assesment_form_modal").modal('show');
            $('.edit_form_field').hide();

        }


    });


}

function edit_form_checkbox_show() {
    $('.edit_form_field').show();
}

$(function() {

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


});
