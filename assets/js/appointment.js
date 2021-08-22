document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('appointmentCalendar');
  var data 
  var appointmentCalendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      'start'  : 'today',
      'center' : 'prev,title,next',
      'end'    : 'dayGridMonth,timeGridWeek'
    },
    initialView: 'dayGridMonth',
    slotMinTime: '6:00',
    slotMaxTime: '18:00',
    editable: true,
    selectable: true,
    dayMaxEventRows: true,
    views: {
      dayGridMonth: {
        dayMaxEventRows: 2,  // adjust to 6 only for timeGridWeek/timeGridDay
        eventBackgroundColor: '#9cdfc4',
      }
    },
    events: [
    {
      'title' : 'Vaccination',
      'start' : '2021-08-21 06:30',
      'color' : '#9cdfc4'
    },
    {
      'title' : 'Gromming',
      'start' : '2021-08-21 07:45',
      'color' : '#9cdfc4'
    },
    {
      'title' : 'Gromming',
      'start' : '2021-08-21 09:00',
      'color' : '#9cdfc4'
    },
    {
      'title' : 'Vaccination',
      'start' : '2021-08-26 06:30',
      'color' : '#9cdfc4'
    },
    {
      'title' : 'Gromming',
      'start' : '2021-08-28 07:45',
      'color' : '#9cdfc4'
    },
    {
      'title' : 'Gromming',
      'start' : '2021-08-30 09:00',
      'color' : '#9cdfc4'
    },
    {
      'title' : 'Gromming',
      'start' : '2021-08-16 09:00',
      'color' : '#9cdfc4'
    },
      {
      'title' : 'Gromming',
      'start' : '2021-08-08 09:00',
      'color' : '#9cdfc4'
    }
    ],
    dateClick: function(info) {
      console.log(info);
      $('#appointmentDateTitle').html(info.dateStr);
      $('#newAppointmentModal').fadeToggle('easing');
      $('body').toggleClass('overflow-hidden');
    },
    eventContent: function(info) {
      console.log();
      return {
      'html' : `<div data-aos="flip-up" data-aos-duration="1000" class="w-full">
                    <div class="font-semibold text-md text-center opacity-0 sm:opacity-100">Sample User</div>
                      <div class="text-sm font-light mt-1 px-2 opacity-0 sm:opacity-100">
                        <ul class="list-outside">
                            <li>Grooming - <span class="text-gray-500">06:00 AM</span></li>
                            <li>Vaccine - <span class="text-gray-500">07:00 AM</span></li>
                        </ul>
                    </div>
                  </div>`,
      };
    }
  });
  appointmentCalendar.render();
});