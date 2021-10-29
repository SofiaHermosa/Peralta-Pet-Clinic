$(document).ready(function() {
    $(document).on('change', 'input[name="date"]', getAvailSlots);
    $(document).on('change', 'select[name="service"]', getAvailSlots);
});

$('#appointment').steps({
    onFinish: function() { sendAppointment() },
    onChange: function(currentIndex, newIndex, stepDirection) {
        console.log(currentIndex, newIndex);

        return true;
    }
});


function sendAppointment() {
    var userId = $('#userId').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var minit = $('#minit').val();
    var contactno = $('#contact_no').val();
    var address = $('#address').val();
    var get_patient_type = document.getElementById("patient_type");
    var patient_type = get_patient_type.options[get_patient_type.selectedIndex].text;
    var createdate = $('input[name="date"]').val();
    var updatedate = $('input[name="date"]').val();
    var time = $('.time:checked').val();
    var visit_reason = $('#service').find(":selected").text();
    $.ajax({
        url: "/res/submitappointment", //the page containing php script
        type: "post", //request type,
        dataType: 'json',
        data: {
            apt_id: '',
            user_id: userId,
            first_name: fname,
            last_name: lname,
            middle_init: minit,
            contact_no: contactno,
            address: address,
            patient_type: patient_type,
            time: time,
            createdate: createdate,
            updatedate: updatedate,
            visit_reason: visit_reason
        },
        success: function(result) {
            alert(result);
            window.history.back();
        }
    });
}

function getAvailSlots() {
    var date = $('input[name="date"]').val();
    var service = $('#service').find(":selected").val();

    console.log(date, service);

    if (typeof date != 'undefined' && typeof service != 'undefined') {
        var data = {
            'service': service,
            'date': date
        };

        $.post('/available/slots', data).done(function(res) {
            var layout = [];
            $.each(res, function(key, val) {
                layout.push(`
                        <input class="hidden time" type="radio" name="time" value="${val.timestamp}" id="slot-${key}">
                        <label class="col-span-1 p-2 timeCont text-center bg-indigo-600 text-white rounded-md shadow w-full" for="slot-${key}">${val.text}</label>
                `);
            });

            $('#slotAvailCont').html(layout);


        });
    }
}