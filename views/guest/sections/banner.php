      <main class="mt-10 z-0 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-40 z-20">
        <div class="sm:text-center lg:text-left">
          <h1 data-aos="fade-down" data-aos-duration="1800" class="text-4xl tracking-tight font-extrabold text-gray-50 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">WE ARE HERE TO HELP WITH ALL OF YOUR</span>
            <span class="block text-blue-300 xl:inline">PET'S NEEDS!</span>
          </h1>
          <p data-aos="fade-right" data-aos-duration="1000" class="mt-3 text-base text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
          </p>
          <div class="mt-5 sm:mt-5 sm:flex sm:justify-center lg:justify-start">
            <div data-aos="zoom-in-right" data-aos-duration="1000" class="rounded-md shadow">
              <a href="appointment" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-900 bg-blue-300 hover:bg-blue-400 md:py-4 md:text-lg md:px-10">
                Book Now
              </a>
            </div>
            <!-- <div data-aos="zoom-in-left" data-aos-duration="1000" class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                Contact Us
              </a>
            </div> -->
          </div>
        </div>
      </main>
    </div>
  </div>
  <div data-aos="fade-left" data-aos-duration="2000" class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 bg-blue-100">
    <?php 
      $content = $cms->getContent('banner')[0]['content'];
      foreach(json_decode($content)->images as $image){
    ?>
        <img class="h-80 object-cover w-full sm:h-72 md:h-96 lg:w-full lg:h-full" src="<?php echo '//'.$_SERVER['SERVER_NAME']."/$image" ?>" alt="">
    <?php } ?>
  </div>
  <div class="custom-shape-divider-bottom-1630387629">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" data-aos="fade-down" data-aos-duration="700" data-aos-anchor-placement="top-top">
          <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill z-10"></path>
          <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill z-10"></path>
          <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill z-10"></path>
      </svg>
  </div>
</div> 
