<div id="about" class="relative overflow-hidden px-10 pb-60 z-0">
	<div class="max-w-7xl mx-auto px-0 md:px-20">
	<img data-aos="zoom-in" data-aos-duration="1000" class="absolute w-full lg:-top-6 lg:-left-16 md:w-8/12 md:top-0 md:-left-2" src="../../../assets/images/organic.png" alt=""> 
		<div class="relative left-0 h-full w-full d-flex place-content-center">
			<div class="w-full mt-12 mb-10 px-10 text-center">
				<h1 data-aos="fade-down" data-aos-duration="1000" class="text-5xl font-bold text-gray-900">About Us</h1>
			</div>

			<div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 lg:gap-0 sm:gap-10 py-20 flex justify-center">
				
				<div class="col-span-1">
					<div class="about-slider " data-aos="zoom-in" data-aos-duration="1000">
						<?php 
							$content = $cms->getContent('about_us')[0]['content'];
							foreach(json_decode($content)->images as $image){
						 ?>
						<div><img class="rounded-2xl" src="<?php echo "./$image" ?>" alt=""></div>
						<?php } ?>
					</div>
				</div>

				<div class="col-span-1">
					<div data-aos="fade-right" data-aos-duration="1000" class="flex text-lg h-full font-semibold mix-blend-darken text-gray-900 rounded-sm bg-white backdrop-filter backdrop-blur-md bg-opacity-40 p-2 md:p-10">
						<?php 
							$content = $cms->getContent('about_us')[0]['content'];
							echo base64_decode(json_decode($content)->history);
						 ?>
					</div>
				</div>
            </div>	
		</div>
	</div>		
	<div class="custom-shape-divider-bottom-1631408833" data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div> 
</div>	
