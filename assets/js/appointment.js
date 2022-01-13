document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('appointmentCalendar');
    var data
    var appointmentCalendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            'start': 'today',
            'center': 'prev,title,next',
            'end': 'dayGridMonth,timeGridWeek'
        },
        initialView: 'dayGridMonth',
        slotMinTime: '6:00',
        slotMaxTime: '18:00',
        editable: true,
        selectable: true,
        dayMaxEventRows: true,
        views: {
            dayGridMonth: {
                dayMaxEventRows: 2, // adjust to 6 only for timeGridWeek/timeGridDay
                eventBackgroundColor: '#9cdfc4',
                eventContent: function(info) {
                    return {
                        'html': `<div data-aos="flip-up" data-aos-duration="1000" class="w-full">
                        <div class="font-bold text-md text-left text-blue-500 opacity-0 sm:opacity-100">` + info.event._def.extendedProps.visit_reason + `</div>
                          <div class="text-sm text-gray-500 font-semibold text-justify overflow-hidden overflow-ellipsis font-light mt-1 px-2 opacity-0 sm:opacity-100">
                           ` + info.event._def.extendedProps.fname + ` ` + info.event._def.extendedProps.lname + `
                          </div>
                          <div class="w-full text-xs py-1 text-blue-400 text-right">
                              ` + info.event._def.extendedProps.starttime + `
                          </div>
                      </div>`,
                    };
                }
            },
            timeGridWeek: {
                eventContent: function(info) {
                    return {
                        'html': `<div data-aos="flip-up" data-aos-duration="1000" class="w-full">
                        <div class="font-bold text-md text-left text-blue-500 opacity-0 sm:opacity-100">${info.event._def.extendedProps.visit_reason}</div>
                          <div class="text-sm text-gray-500 font-semibold text-justify overflow-hidden overflow-ellipsis font-light mt-1 px-2 opacity-0 sm:opacity-100">
                            ${info.event._def.extendedProps.fname } ${info.event._def.extendedProps.lname }
                          </div>
                          <div class="w-full text-xs py-1 text-blue-400 text-right transform -translate-y-4">
                              ${info._def.extendedProps.starttime}m
                          </div>
                      </div>`,
                    };
                }
            },
        },
        dateClick: function(info) {
            $('#appointmentDateTitle').html(info.dateStr);
            document.getElementById("apt_id").value = "";
            document.getElementById("fname").value = "";
            document.getElementById("lname").value = "";
            document.getElementById("minit").value = "";
            document.getElementById("contact_no").value = "";
            document.getElementById("address").value = "";
            document.getElementById("patient_type").value = "";
            document.getElementById("visit_reason").value = "";
            document.getElementById("time").value = "";
            document.getElementById("apt_date").value = "";
            $('#newAppointmentModal').fadeToggle('easing');
            $('body').toggleClass('overflow-hidden');
        },
        eventClick: function(info) {
            console.log(info);
            document.getElementById("apt_id").value = info.event._def.title;
            document.getElementById("apt_date").value = info.event.extendedProps.startdates;
            document.getElementById("fname").value = info.event.extendedProps.fname;
            document.getElementById("lname").value = info.event.extendedProps.lname;
            document.getElementById("minit").value = info.event.extendedProps.minit;
            document.getElementById("contact_no").value = info.event.extendedProps.contactno;
            document.getElementById("address").value = info.event.extendedProps.address;
            // document.getElementById("patient_type").value = info.event.extendedProps.patient_type;
            document.getElementById("visit_reason").value = info.event.extendedProps.visit_reason;
            document.getElementById("time").value = info.event.extendedProps.starttime;
            $('#newAppointmentModal').fadeToggle('easing');
            $('body').toggleClass('overflow-hidden');
            // change the border color just for fun
            info.el.style.borderColor = 'red';
        },
    });
    var eventsarray;
    $.ajax({
        url: "/res/retrieveappointment", //the page containing php script
        type: "GET", //request type,
        dataType: 'json',
        success: function(result) {
            $.each(result, function(i, v) {
                var startdateobj = new Date(v.apt_time);
                var formatteddate = startdateobj != 'Invalid Date' ? startdateobj.toISOString() : v.apt_time;
                appointmentCalendar.addEvent({
                    title: v.apt_id,
                    fname: v.apt_fname,
                    lname: v.apt_lname,
                    minit: v.apt_minit,
                    contactno: v.apt_contactno,
                    address: v.apt_address,
                    // patient_type: v.apt_patient_type,
                    visit_reason: v.apt_visit_reason,
                    start: moment(v.apt_time).format('YYYY-MM-DD'),
                    description: v.apt_visit_reason,
                    startdates: moment(v.apt_time).format('YYYY-MM-DD'),
                    starttime: moment(v.apt_time).format('HH:mm')
                });
            });
        },
    });
    appointmentCalendar.render();
});


$(document).on('click', '.aptUpdtStatus', function(){
    var action =['', '', 'Approve', 'Decline', 'Done', 'Cancel'];
    var data = $(this).data('apt');
    data = jQuery.parseJSON(atob(data));
    var status = $(this).data('status');
    
    if(status == 4){
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: `That this appointment is already done`,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            customClass: {
                confirmButton: 'bg-indigo-700',
                container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('/res/update/appointment/status', {status:status, id:data.id, reason:''}).done(function(res){
                    location.reload();
                });

                var table = $("#datatable").DataTable();
                table.ajax.reload();
            }
        })
    }else if(status == 2){
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: `To approve this appointment`,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            customClass: {
                confirmButton: 'bg-indigo-700',
                container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('/res/update/appointment/status', {status:status, id:data.id, reason:''}).done(function(res){
                    location.reload();
                });

                var table = $("#datatable").DataTable();
                table.ajax.reload();
            }
        })
    }else{
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: `${action[status]} this appointment`,
            input: 'textarea',
            inputAttributes: {
                autocapitalize: 'off',
                placeholder: 'Reason for declining ....'
            },
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            customClass: {
                confirmButton: 'bg-indigo-700',
                container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('/res/update/appointment/status', {status:status, id:data.id, reason:result.value}).done(function(res){
                    location.reload();
                });

                var table = $("#datatable").DataTable();
                table.ajax.reload();
            }
        })
    }
});