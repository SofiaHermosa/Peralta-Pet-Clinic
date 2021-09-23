<?php 
    $routes = ['/res/', '/res/appointment', '/res/inquiries', '/res/patients', '/res/services', '/res/content-management'];
    $pages  = ['dashboard', 'appointment', 'team', 'patients', 'services', 'content-management'];
    $index  = array_search($_SERVER['REQUEST_URI'], $routes);
    $navs   = [
        'dashboard'             => '',
        'appointment'           => '',
        'inquiries'             => '',
        'patients'              => '',
        'services'              => '',
        'content-management'    => ''   
    ];

    $navs[$pages[$index]] = 'bg-blue-800';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-calendar.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-admin.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
</head>
<body>
<div>
  <nav class="bg-gradient-to-tr from-blue-700 via-indigo-600 to-indigo-700 fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-16 w-16" src="../../../assets/images/logo.png" alt="Workflow">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-2">
              <a href="../res/" class="<?php echo $navs['dashboard']; ?> text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium space-x-1">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
              </svg> 
              <span class="md:hidden lg:inline-block align-middle">Dashboard<span>
              </a>

              <a href="../res/appointment" class="<?php echo $navs['appointment']; ?> text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
              </svg>
              <span class="md:hidden lg:inline-block align-middle">Appointment</span> 
              <span class="py-1 text-xs px-2 ml-1 bg-red-500 rounded-lg text-white">10</span>
              </a>

              <a href=../res/inquiries class="<?php echo $navs['inquiries']; ?> text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>
              <span class="md:hidden lg:inline-block align-middle">Inquiries</span> 
              <span class="py-1 text-xs px-2 ml-1 bg-red-500 rounded-lg text-white">10</span></a>

              <a href="../res/patients" class="<?php echo $navs['patients']; ?> text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              <span class="md:hidden lg:inline-block align-middle">Patients</span>
              </a>
              <a href="../res/content-management" class="<?php echo $navs['content-management']; ?> text-white hover:bg-blue-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
              </svg>
              <span class="md:hidden lg:inline-block align-middle">Content Management</span>
              </a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="bg-blue-700 p-1 rounded-full text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="ml-3 relative">
              <div>
                <button type="button" class="max-w-xs bg-blue-700 rounded-full flex items-center text-sm toggle-menu" data-toggle="#userMenuDesktop" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" id="userMenuDesktop" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="bg-blue-700 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-blue-800 toggle-menu" data-toggle="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>

            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      
        <a href="../res/" class="<?php echo $navs['dashboard']; ?> text-white block px-3 py-2 rounded-md text-base font-medium space-x-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
          </svg> 
          <span class="inline-block align-middle">Dashboard<span>
        </a>

        <a href="../res/appointment" class="<?php echo $navs['appointment']; ?> text-white hover:bg-blue-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium space-x-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
        </svg>
        <span class="inline-block align-middle">Appointment</span> 
        <span class="py-1 text-xs px-2 ml-1 bg-red-500 rounded-lg text-white float-right">10</span>
        </a>

        <a href="../res/inquiries" class="<?php echo $navs['inquiries']; ?> text-white hover:bg-blue-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium space-x-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
        <span class="inline-block align-middle">Inquiries</span> 
        <span class="py-1 text-xs px-2 ml-1 bg-red-500 rounded-lg text-white float-right">10</span>
        </a>

        <a href="../res/patients" class="<?php echo $navs['patients']; ?> text-white hover:bg-blue-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium space-x-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <span class="inline-block align-middle">Patients</span>
        </a>

        <a href="../res/content-management" class="<?php echo $navs['content-management']; ?> text-white hover:bg-blue-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium space-x-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
        </svg>
        <span class="inline-block align-middle">Content Management</span>
        </a>
      </div>
      <div class="pt-4 pb-3 border-t border-gray-700">
        <div class="flex items-center px-5 toggle-menu" data-toggle="#userMenuMobile">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
            <div class="text-sm font-medium leading-none text-white">tom@example.com</div>
          </div>
          <button type="button" class="ml-auto bg-blue-700 flex-shrink-0 p-1 rounded-full text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
         
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
        </div>
        <div class="mt-3 px-2 space-y-1 hidden" id="userMenuMobile">
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-white hover:bg-blue-800">Your Profile</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-white hover:bg-blue-800">Settings</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-white hover:bg-blue-800">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
</div>