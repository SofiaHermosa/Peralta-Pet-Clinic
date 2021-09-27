<?php
    $config           = require_once('./config.php');
    $services         = $config['services'];
?>
<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Appointment
      </h1>
    </div>
  </header>
  <main>
    <div data-aos="fade-up" data-aos-duration="1200" class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
      <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">
        <div class="d-flex" id="appointmentCalendar"></div>
      </div>  
    </div>
  </main>


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