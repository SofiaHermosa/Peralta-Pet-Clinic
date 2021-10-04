<div id="services" class="relative overflow-hidden px-10 md:px-20">
	<div class="max-w-7xl mx-auto h-full p-0">
		<div class="relative left-0 h-full w-full d-flex place-content-center">
			<div class="w-full mt-12 mb-10 px-10 text-center">
				<h1 data-aos="fade-down" data-aos-duration="1000" class="text-5xl font-bold text-gray-900">Our Services</h1>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10 py-20 px-0 md:px-10 content-center">
				<?php foreach($servicesClass->getServices()->services as $service_card){ ?>
				<div data-aos="fade-up" data-aos-duration="1000" class="animate-svg transition transform duration-300 hover:-translate-y-2">
					<div class="grid justify-items-center svg__cont">
					<?php echo $service_card['logo']; ?>
					</div>

					<div class="h-full rounded-md text-center py-2 px-10 relative w-full">
						<div class="block py-2 text-xl text-gray-900 font-semibold">
						<?php echo $service_card['name']; ?>
						</div>
						<div class="w-full overflow-hidden overflow-ellipsis px-2 font-semibold text-justify text-sm text-gray-900 pt-2">
						<?php echo base64_decode($service_card['description']); ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>