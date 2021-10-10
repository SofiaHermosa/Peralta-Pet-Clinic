<?php
    $config           = require_once('./config.php');
    $services         = $config['services'];
?>
<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900 inline-block">
        Appointment
      </h1>

      <!-- <div class="float-right space-0 rounded-lg bg-gray-200 shadow-md inline-block align-middle overflow-hidden">
          <button class="inline-block align-middle px-4 py-2 bg-indigo-300 text-white toggle-tab" data-target="#aptListLayout">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-1 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
          </button>
          <button class="inline-block align-middle px-4 py-2 text-indigo-700 toggle-tab" data-target="#aptCalendarLayout">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-1 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </button>
      </div> -->
    </div>
  </header>
  <main>
    <div data-aos="fade-up" data-aos-duration="1200" class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
      <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">
        <div class="w-full hidden" id="aptCalendarLayout">
          <div class="d-flex" id="appointmentCalendar"></div>
        </div>  

        <div class="w-full" id="aptListLayout">
          <table id="datatable" cellspaing="5" class="w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Client
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Reason of Visit
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Time
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  <center>Status</center>
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Reply</span>
                </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>  
    </div>
  </main>

<script>
  window.url='/res/table/appointment?status=<?php echo $status ?? null ?>';
  console.log(window.url);
</script>

<?php
  include_once('modals/new-appointment.php');
	include_once('layout/footer.php');
?>

<script src="../../../assets/js/appointment.js"></script>
<script>
    $(document).ready(function(){
    $("#saveappointment").click(function(){
      var apt_id = $('#apt_id').val();
      var fname = $('#fname').val();
      var lname = $('#lname').val();
      var minit = $('#minit').val();
      var contactno = $('#contact_no').val();
      var address = $('#address').val();
      var get_patient_type = document.getElementById("patient_type");
      var patient_type = get_patient_type.options[get_patient_type.selectedIndex].text;
      var createdate =  document.getElementById("appointmentDateTitle").innerHTML;
      var updatedate =  $("#apt_date").val();
      var time = $('#time').val();
      var visit_reason = $('#visit_reason').val();
      $.ajax({
            url:"/res/submitappointment",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {apt_id: apt_id, first_name: fname, last_name: lname, middle_init: minit,
            contact_no: contactno, address: address, patient_type: patient_type, time: time, createdate: createdate, updatedate: updatedate, visit_reason: visit_reason},
            success:function(result){ 
              alert(result); 
              location.replace("/res/appointment"); 
            }
        });
    });
  }); 
</script>