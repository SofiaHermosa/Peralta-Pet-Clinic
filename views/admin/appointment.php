<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow">
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