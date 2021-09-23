<?php
    require './class/cms.php';
    $cms = new CMS;
?>
<!DOCTYPE html>
<html>
<head>
	<title>ET Peralta Dog and Cat Clinic</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-guest.css">
	
</head>
<body>

<?php include_once('./views/admin/login.php');  ?>
<?php include_once('./views/guest/layout/navbar.php');  ?>

<div class="relative backdrop-filter backdrop-blur-md bg-opacity-40 md:bg-indigo-700 z-50 overflow-hidden">
  <div id="banner" class="max-w-7xl mx-auto lg:h-screen sm:h-120">
    <div class="relative z-10 h-full pb-8 bg-indigo-700 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-indigo-700 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
        <div class="nav w-full py-2 px-4 sm:px-6 lg:px-2">
          <nav class="relative hidden flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div data-aos="fade-down" data-aos-anchor-placement="top-center" data-aos-duration="500" class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#banner" class="nav--link">
                  <span class="sr-only">Workflow</span>
                  <img class="object-cover h-14 rounded-md w-auto" src="../../../assets/images/logo.png">
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" class="bg-white rounded-md p-2 mx-2 inline-flex items-center justify-center text-gray-400 hover:text-indigo-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 toggle-menu" data-toggle="#guestMobileNav" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-duration="500" class="hidden md:block md:ml-6 md:pr-2 md:space-x-4">
              <a href="#" class="px-4 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-200 hover:text-indigo-700">Appointment</a>

              <a href="#services" class="nav--link px-2 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-200 hover:text-indigo-700">Services</a>

              <a href="#ourTeam" class="nav--link px-2 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-200 hover:text-indigo-700">Our Teams</a>

              <a href="#about" class="nav--link px-2 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-200 hover:text-indigo-700">About Us</a>
              
              <a href="#contactUs" class="nav--link px-2 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-200 hover:text-indigo-700">Contact Us</a>

              <!-- <a href="javascript:void(0)" class="font-medium text-indigo-600 hover:text-indigo-500 px-4 py-2 bg-white rounded-sm toggle-menu" data-toggle="#loginForm" data-modal="true">Log in</a> -->
            </div>
          </nav>
        </div>
      </div>
		  
      <?php
        include('./views/guest/sections/banner.php');
      ?>