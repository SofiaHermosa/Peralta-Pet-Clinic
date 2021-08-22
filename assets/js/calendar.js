document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var data 
  var dashboardCalendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: false,
    initialView: 'timeGridDay',
    slotMinTime: '6:00',
    slotMaxTime: '18:00',
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
    }
    ]
  });
  dashboardCalendar.render();
});