document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var data
    var dashboardCalendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: false,
        initialView: 'timeGridDay',
        slotMinTime: '6:00',
        slotMaxTime: '18:00',
        views: {
            dayGridMonth: {
                dayMaxEventRows: 2, // adjust to 6 only for timeGridWeek/timeGridDay
                eventBackgroundColor: '#9cdfc4',
                eventContent: function(info) {
                    return {
                        'html': `<div class="w-full">
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
            timeGridDay: {
                eventContent: function(info) {
                    return {
                        'html': `<div class="w-full">
                            <div class="font-bold text-md text-left text-blue-500 opacity-0 sm:opacity-100">${info.event._def.extendedProps.visit_reason}</div>
                              <div class="text-sm min-w-max text-gray-500 font-semibold text-justify overflow-hidden overflow-ellipsis font-light mt-1 px-2 opacity-0 sm:opacity-100">
                                ${info.event._def.extendedProps.fname } ${info.event._def.extendedProps.lname }
                              </div>
                              <div class="w-full text-xs py-1 text-blue-400 text-right">
                                  ${info.event._def.extendedProps.starttime}
                              </div>
                          </div>`,
                    };
                }
            },
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
                var formatteddate = startdateobj.toISOString();
                dashboardCalendar.addEvent({
                    title: v.apt_id,
                    fname: v.apt_fname,
                    lname: v.apt_lname,
                    minit: v.apt_minit,
                    contactno: v.apt_contactno,
                    address: v.apt_address,
                    patient_type: v.apt_patient_type,
                    visit_reason: v.apt_visit_reason,
                    start: v.apt_time,
                    description: v.apt_visit_reason,
                    startdates: v.apt_time,
                    starttime: v.apt_end_time
                });
            });
        }
    });

    dashboardCalendar.render();
});