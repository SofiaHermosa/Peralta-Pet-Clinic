
<div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6 px-0 md:px-10 content-center">
  <?php foreach($servicesClass->getServices('all')->services as $service_card){ ?> 
  <div data-aos="fade-up" data-aos-duration="1000" class="animate-svg transition transform duration-300 hover:-translate-y-2 py-10 pb-20 rounded-md shadow-lg border-solid border-4 border-light-gray-50">
    <div class="w-full p-4 absolute bottom-0 left-0 space-2 text-right z-50">
      <button class="editService inline-block  bg-indigo-500 text-sm text-white py-1 px-4 rounded shadow" data-service="<?php echo base64_encode(json_encode($service_card)) ?>">Edit</button>
      <button class="archive inline-block bg-red-500 text-sm text-white py-1 px-4 rounded shadow" data-type="Service" data-url="/archive/service" data-id="<?php echo $service_card['id'] ?>">Archive</button>
    </div>
    <div class="fixed top-3 right-3 w-auto px-3 py-1 font-semibold bg-gray-200 text-gray-700 rounded-full"><?php echo $service_card['time_interval'] ?? '00:00'; ?></div> 
    <div class="fixed top-3 left-3 w-auto px-2 py-1 text-gray-600 text-2xl font-semibold">₱ <?php echo number_format($service_card['price'] ?? '00'); ?></div> 
    <div class="grid justify-items-center svg__cont mt-3">
        <img src="../../<?php echo $service_card['logo']; ?>" class="object-cover h-40 w-9/12 shadow-md rounded-lg bg-gray-100" alt="">
    </div>

    <div class="h-full rounded-md text-center py-2 px-10 relative w-full">
      <div class="block py-1 text-xl text-gray-900 font-semibold leading-none">
        <p class="leading-none mb-0"><?php echo $service_card['name']; ?></p>
        <small class="text-gray-400 text-xs leading-none mb-0">( <?php echo $service_card['type'] == 2 ? 'Primary Offers' : 'Other Offers'; ?> )</small>
      </div>
      <div class="w-full overflow-hidden overflow-ellipsis px-2 font-semibold text-justify text-sm text-gray-900 pt-2">
        <?php echo base64_decode($service_card['description']); ?>
      </div>
    </div>
  </div>
  <?php } ?>
</div>  

<?php
	include_once('./views/admin/modals/view-edit-services.php');
?>
