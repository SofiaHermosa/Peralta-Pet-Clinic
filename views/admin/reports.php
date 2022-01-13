<?php

    require_once('./class/cms.php');
    require_once('./class/inquiry.php');
    require_once('./class/appointment.php');
    require_once('./class/services.php');
    require_once('./class/teams.php');
    require_once('./class/patient.php');

    $inquiryClass = new Inquiry;
    $inquiries = $inquiryClass->getInquiries();

    $appointmentClass = new Appointment;
    $appointments = $appointmentClass->getAppointment()->appointment;

    $patientClass = new Patients;
    $patients = $patientClass->getPatients();

    $servicesClass = new Services;
    $services = $servicesClass->getServices()->services;

?>

<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Reports
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
      <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">
          <!-- START GRAPHS SECTION -->
          <div data-aos="fade-up" data-aos-duration="1200" class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 gap-10">
              
              <?php include_once('report-section/appointment.php'); ?>

              <?php include_once('report-section/patients.php'); ?>

              <div data-aos="fade-right" data-aos-duration="1000" class="d-flex py-4 px-6 bg-gray-50 shadow rounded-lg">
                <div class="d-flex rounded-md bg-indigo-300 transform -translate-y-10 text-white text-center shadow-md">
                    <h1 class="text-lg py-4">Appointments per Month</h1>
                </div>
                <canvas id="barChart" class="d-flex h-1/4">
                  
                </canvas>

              </div>
              <div data-aos="fade-left" data-aos-duration="1200" class="d-flex py-4 px-6 bg-gray-50 shadow rounded-lg">
                <div class="d-flex rounded-md bg-green-300 transform -translate-y-10 text-white text-center shadow-md">
                    <h1 class="text-lg py-4">Monthly Inquiries</h1>
                </div>
                <canvas id="lineChart" class="d-flex h-1/4">
                  
                </canvas>

              </div>
          </div>
      </div>
    </div>
  </main>
	
<?php
	include_once('layout/footer.php');
?>
<script src="../../../assets/js/chart.js"></script>
<script src="../../../assets/js/reports.js"></script>