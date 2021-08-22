<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Dashboard
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
      <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">

          <!-- START CARDS SECTION --> 
          <div data-aos="fade-up" data-aos-duration="1000" class="d-flex grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-10 z-0">
              <div class="rounded-lg bg-gray-100 transition transform duration-300 hover:-translate-y-2 hover:shadow-xl py-4 px-2 z-50">
                  <div class="grid grid-cols-4">
                      <div class="d-flex col-span-1 px-4 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-white stroke-2 bg-green-300 p-2 rounded-xl md:w-12 md:h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                      </div>
                      <div class="col-span-3 text-left p-4">
                          <p class="text-md d-flex font-semibold text-gray-600">Today's Appointment<p>
                          <h1 class="d-flex text-2xl font-bold text-gray-900">100,000,000</h1>
                      </div>
                  </div>
              </div>

              <div class="rounded-lg bg-gray-100 transition transform duration-300 hover:-translate-y-2 hover:shadow-xl py-4 px-2 z-50">
                   <div class="grid grid-cols-4">
                      <div class="d-flex col-span-1 px-4 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-white stroke-2 bg-purple-300 p-2 rounded-xl md:w-12 md:h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                      </div>
                      <div class="col-span-3 text-left p-4">
                          <p class="text-md d-flex font-semibold text-gray-600">Patients<p>
                          <h1 class="d-flex text-2xl font-bold text-gray-900">100,000,000</h1>
                      </div>
                  </div>
              </div>

              <div class="rounded-lg bg-gray-100 transition transform duration-300 hover:-translate-y-2 hover:shadow-xl py-4 px-2 z-50">
                   <div class="grid grid-cols-4">
                      <div class="d-flex col-span-1 px-4 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-white stroke-2 bg-indigo-300 p-2 rounded-xl md:w-12 md:h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                      </div>
                      <div class="col-span-3 text-left p-4">
                          <p class="text-md d-flex font-semibold text-gray-600">Appointments<p>
                          <h1 class="d-flex text-2xl font-bold text-gray-900">100,000,000</h1>
                      </div>
                  </div>
              </div>

              <div class="rounded-lg bg-gray-100 transition transform duration-300 hover:-translate-y-2 hover:shadow-xl py-4 px-2 z-50">
                   <div class="grid grid-cols-4">
                      <div class="d-flex col-span-1 px-4 py-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-white stroke-2 bg-yellow-300 p-2 rounded-xl md:w-12 md:h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>
                      <div class="col-span-3 text-left p-4">
                          <p class="text-md d-flex font-semibold text-gray-600">Income<p>
                          <h1 class="d-flex text-2xl font-bold text-gray-900">100,000,000</h1>
                      </div>
                  </div>
              </div>
          </div>
          <!-- END CARDS SECTION -->

          <!-- START GRAPHS SECTION -->
          <div data-aos="fade-up" data-aos-duration="1200" class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10">

              <div data-aos="fade-right" data-aos-duration="1000" class="d-flex py-4 px-6 bg-gray-100 rounded-lg">
                <div class="d-flex rounded-md bg-indigo-300 transform -translate-y-10 text-white text-center shadow-md">
                    <h1 class="text-lg py-4">Appointments per Month</h1>
                </div>
                <canvas id="barChart" class="d-flex h-1/4">
                  
                </canvas>

              </div>
              <div data-aos="fade-left" data-aos-duration="1200" class="d-flex py-4 px-6 bg-gray-100 rounded-lg">
                <div class="d-flex rounded-md bg-yellow-300 transform -translate-y-10 text-white text-center shadow-md">
                    <h1 class="text-lg py-4">Monthly Income</h1>
                </div>
                <canvas id="lineChart" class="d-flex h-1/4">
                  
                </canvas>

              </div>
          </div>
          <!-- END GRAPHS SECTION -->

          <!-- START DAILY APPOINTMENT SECTION -->
          <div data-aos="fade-up" data-aos-duration="1200" class="grid grid-cols-1 gap-10">
              <div class="d-flex py-4 px-6 bg-gray-100 rounded-lg">
                <div class="d-flex rounded-md bg-green-300 transform -translate-y-10 text-white text-center shadow-md">
                    <h1 class="text-lg py-4">Todays Appointments</h1>
                </div>
                <div class="d-flex" id="calendar"></div>
              </div>
          </div>
          <!-- END DAILY APPOINTMENT SECTION -->

      </div>
    </div>
  </main>
	
<?php
	include_once('layout/footer.php');
?>

<script src="../../../assets/js/chart.js"></script>
<script src="../../../assets/js/calendar.js"></script>