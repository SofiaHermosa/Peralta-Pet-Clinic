<a href="#banner" class="fixed right-4 bottom-6 rounded-md p-2 text-indigo-600 font-extrabold bg-gray-400 shadow-9xl text-lg goTopBtn mix-blend-luminosity ring-2 ring-inset focus:ring-black">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
</svg>
</a>
<div class="nav fixed top-0 left-0 bg-black shadow-xl backdrop-filter backdrop-blur-md bg-opacity-40 py-2 px-4 w-screen sm:px-6 lg:px-12 z-top">
  <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
      <div class="flex items-center justify-between w-full md:w-auto">
        <a href="#banner" class="nav--link">
          <span class="sr-only">Workflow</span>
          <img class="object-cover h-14 rounded-md w-auto" src="<?php echo '../../'.$branding->images[0]  ?? '../../../assets/images/logo.png' ?>">
        </a>
        <div class="-mr-2 flex items-center md:hidden">
          <button type="button" class="bg-white bg-opacity-40 rounded-md p-2 mx-2 inline-flex items-center justify-center text-indigo-600 hover:text-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 toggle-menu" data-toggle="#guestMobileNav" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div data-aos="fade-down" data-aos-anchor-placement="top-center" data-aos-duration="500" class="hidden md:block md:ml-6 md:pr-2 md:space-x-2">
      <a href="/appointment" class="px-4 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-700 hover:mix-blend-overlay hover:text-white hover:backdrop-filter hover:backdrop-blur-sm">Appointment</a>

      <a href="/#services" class="px-4 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-700 hover:mix-blend-overlay hover:text-white hover:backdrop-filter hover:backdrop-blur-sm">Services</a>

      <a href="/#ourTeam" class="px-4 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-700 hover:mix-blend-overlay hover:text-white hover:backdrop-filter hover:backdrop-blur-sm">Our Teams</a>

      <a href="/#about" class="px-4 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-700 hover:mix-blend-overlay hover:text-white hover:backdrop-filter hover:backdrop-blur-sm">About Us</a>

      <a href="/#contactUs" class="px-4 py-2 rounded-sm font-medium text-gray-50 hover:bg-indigo-700 hover:mix-blend-overlay hover:text-white hover:backdrop-filter hover:backdrop-blur-sm">Contact Us</a>

    </div>
    <?php if(empty($_SESSION['auth'])){ ?>
    <div class="justify-self-end hidden lg:block flex-grow">
      <a href="/sign-up" class="float-right font-medium text-indigo-600 hover:text-indigo-500 px-4 py-2 bg-white rounded-sm" data-toggle="#loginForm" data-modal="true">Log in</a>
    </div>

    <?php }else{ ?>
    <div class="ml-3 justify-self-end hidden lg:block flex-grow">
      <div>
        <button type="button" class="max-w-xs float-right bg-blue-700 rounded-full flex items-center text-sm toggle-menu" data-toggle="#userMenuDesktop" aria-expanded="false" aria-haspopup="true">
          <span class="sr-only">Open user menu</span>
          <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </button>
      </div>
      <div class="origin-top-right absolute right-0 mt-12 w-40 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" id="userMenuDesktop" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
          <!-- Active: "bg-gray-100", Not Active: "" -->
          <a href="/my-appointment" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">My Appointment</a>
          <a href="/logout/2" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
        </div>
      </div>
      <?php } ?>  
  </nav>
</div>

<div class="fixed inset-x-0 p-2 transform origin-top-right hidden z-50" id="guestMobileNav">
  <div class="rounded-lg shadow-md bg-black backdrop-filter backdrop-blur-md bg-opacity-40 ring-1 ring-black ring-opacity-5 overflow-hidden">
    <div class="px-2 pt-4 flex items-center justify-between">
      <div>
        <img class="h-14 w-auto" src="<?php echo '../../'.$branding->images[0]  ?? '../../../assets/images/logo.png' ?>" alt="">
      </div>
      <div class="-mr-2">
        <button type="button" class="bg-white rounded-md p-2 mx-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 toggle-menu" data-toggle="#guestMobileNav">
          <span class="sr-only">Close main menu</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
    <div class="nav px-2 pt-2 pb-3 space-y-1">
      <a href="/appointment" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-200 hover:bg-gray-50">Appointment</a>

      <a href="/#services" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-200 hover:bg-gray-50">Services</a>

      <a href="/#ourTeam" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-200 hover:bg-gray-50">Our Teams</a>

      <a href="/#about" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-200 hover:bg-gray-50">About Us</a>
      
      <a href="/#contactUs" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-gray-200 hover:bg-gray-50">Contact Us</a>

    </div>
    <a href="/sign-up" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
      Log in
    </a>
  </div>
</div>