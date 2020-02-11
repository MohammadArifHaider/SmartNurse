var calendar;
var events;
var patient_id;

function change_address() {

    $("#change_address_modal").modal('show');


}

function add_note() {
    $("#add_note_modal").modal('show');
}

function submit_note() {
    var patient_note = document.getElementById("patient_note").value.trim();
    var patient_id = $("#hidden_input_for_change").val();
    var formdata = new FormData();
    formdata.append('patient_id', patient_id);
    formdata.append('patient_note', patient_note);

    $.ajax({
        processData: false,
        contentType: false,
        url: 'submit_patient_note',
        type: 'POST',
        data: formdata,
        success: function(data, status) {
            $("#add_note_modal").modal('hide');
            $("#add_note" + patient_id).text(patient_note);


            // call_full_calendar($('#hidden_input_for_change').val());

        }
    });

}

function submit_address_change() {
    var patient_id = $("#hidden_input_for_change").val()
    var change_address = $("#address_change").val();
    var change_city = $("#city_change").val();
    var test = $("#address" + patient_id).text();
    var formdata = new FormData();
    formdata.append('patient_id', patient_id);
    formdata.append('change_address', change_address);
    formdata.append('change_city', change_city);
    $.ajax({
        processData: false,
        contentType: false,
        url: 'submit_change_address',
        type: 'POST',
        data: formdata,
        success: function(data, status) {
            $("#change_address_modal").modal('hide');
            $("#address" + patient_id).text(change_address + "," + change_city);


            call_full_calendar($('#hidden_input_for_change').val());

        }
    });
}

function assign_nurse() {
    var patient_id = $("#assign_patient_id").val();
    var nurse_id = $("#assign_nurse_id").val();
    var date = $("#assign_date").val();
    var time = $("#assign_time").val();
    var assesment_type = $("#assesment_type").val();
    var formdata = new FormData();
    formdata.append('patient_id', patient_id);
    formdata.append('nurse_id', nurse_id);
    formdata.append('date', date);
    formdata.append('time', time);
    formdata.append('assesment_type', assesment_type);


    $.ajax({
        processData: false,
        contentType: false,
        url: 'submit_nurse',
        type: 'POST',
        data: formdata,
        success: function(data, status) {
            // alert(data);
            swal("Nurse Assign Successfully");
            location.reload();

        }



    });



}

function call_full_calendar(patient_id) {

    $("#hidden_patient_id").val(patient_id);

    calendar.fullCalendar('refetchEvents');




}



function fetch_calendar_data() {


    patient_id = $("#hidden_patient_id").val();
    //alert(patient_id);





    calendar = $('#calendar').fullCalendar({


        editable: true,
        allDaySlot: false,
        eventLimit: true, // for all non-agenda views
        views: {
            agenda: {
                eventLimit: 6 // adjust to 6 only for agendaWeek/agendaDay
            },
            week: {
                eventLimit: 6
            },
            timeGrid: {
                eventLimit: 6
            },

        },

        eventOrder: 'id',
        height: "auto",
        slotMinutes: 60,

        slotDuration: '00:60:00',


        slotLabelInterval: 60,



        defaultView: 'agendaWeek',

        minTime: '09:00:00',
        maxTime: '19:00:00',

        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'agendaWeek,agendaDay,',
        },

        events: function(start, end, timezone, callback) {
            //alert(patient_id);




            $.ajax({

                url: "fetch_calendar_data",
                type: 'POST',
                data: { patient_id: $("#hidden_patient_id").val() },
                success: function(data, status) {



                    //alert(patient_id);
                    events = JSON.parse(data);

                    callback(events);
                    //$('#calendar').fullCalendar( 'removeEvents', events );







                },



            });

        },








        selectable: true,
        selectHelper: true,

        editable: true,

        eventClick: function(calEvent, jsEvent, view) {
            //alert(calEvent.id);
            var patient_id = $('#hidden_patient_id').val();
            var nurse_id = calEvent.nurse_id;
            // alert(nurse_id);
            var time = calEvent.start.format('H:mm');
            var date = calEvent.start.format('DD-MM-YYYY');

            // alert(patient_id+" "+nurse_id);

            // alert(nurse_id);



            // alert(date);

            var formdata = new FormData();
            formdata.append('patient_id', patient_id);
            formdata.append('nurse_id', nurse_id);
            formdata.append('time', time);
            formdata.append('date', date);
            $.ajax({
                processData: false,
                contentType: false,
                url: 'show_nurse_assign_modal',
                type: 'POST',
                data: formdata,
                success: function(data, status) {
                    var msg = $.trim(data);
                    //alert(msg);
                    if (msg == 'not_ok') {
                        swal("Please Select a patient first");

                    } else if (msg == 'already_appointed') {

                        alert('Nurse already assigned for this slot. Try another nurse or another slot');
                    } else {
                        $("#assign_nurse").html(data);

                        $("#show_date_details").modal('show');
                    }
                    //alert(data);



                },



            });






        },

        eventAfterAllRender: function() {

            // define static values, use this values to vary the event item height
            var defaultItemHeight = 30;
            var defaultEventItemHeight = 18;
            // ...

            // find all rows and define a function to select one row with an specific time
            var rows = [];
            $('div.fc-slats > table > tbody > tr[data-time]').each(function() {
                rows.push($(this));
            });
            var rowIndex = 0;
            var getRowElement = function(time) {
                while (rowIndex < rows.length && moment(rows[rowIndex].attr('data-time'), ['HH:mm:ss']) <= time) {
                    rowIndex++;
                }
                var selectedIndex = rowIndex - 1;
                return selectedIndex >= 0 ? rows[selectedIndex] : null;
            };

            // reorder events items position and increment row height when is necessary
            $('div.fc-content-col > div.fc-event-container').each(function() { // for-each week column
                var accumulator = 0;
                var previousRowElement = null;

                $(this).find('> a.fc-time-grid-event.fc-v-event.fc-event.fc-start.fc-end').each(function() { // for-each event on week column
                    // select the current event time and its row
                    var currentEventTime = moment($(this).find('> div.fc-content > div.fc-time').attr('data-full'), ['h:mm A']);
                    var currentEventRowElement = getRowElement(currentEventTime);

                    // the current row has to more than one item
                    if (currentEventRowElement === previousRowElement) {
                        accumulator++;

                        // move down the event (with margin-top prop. IT HAS TO BE THAT PROPERTY TO AVOID CONFLICTS WITH FullCalendar BEHAVIOR)
                        $(this).css('margin-top', '+=' + (accumulator * defaultItemHeight).toString() + 'px');

                        // increse the heigth of current row if it overcome its current max-items
                        var maxItemsOnRow = currentEventRowElement.attr('data-max-items') || 1;
                        if (accumulator >= maxItemsOnRow) {
                            currentEventRowElement.attr('data-max-items', accumulator + 1);
                            currentEventRowElement.css('height', '+=' + 0 + 'px');
                        }
                    } else {
                        // reset count
                        rowIndex = 0;
                        accumulator = 0;
                    }

                    // set default styles for event item and update previosRow
                    $(this).css('left', '0');
                    $(this).css('right', '7px');
                    $(this).css('height', defaultEventItemHeight.toString() + 'px');
                    $(this).css('margin-right', '0');
                    previousRowElement = currentEventRowElement;
                });
            });

            // this is used for re-paint the calendar

            $('#calendar').fullCalendar('option', 'aspectRatio', $('#calendar').fullCalendar('option', 'aspectRatio'));
            //calendar.fullCalendar('refetchEvents');

        }



    });


    //  calendar.fullCalendar("removeEventSource", jQuery(this).data('source'));
}


$(document).ready(function() {

    $(".preload").hide();

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    fetch_calendar_data();




});


$('#data-table').DataTable({
    'paging': false,
    'lengthChange': false,
    'searching': false,
    'ordering': false,
    'info': false,
    'autoWidth': true
})

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
