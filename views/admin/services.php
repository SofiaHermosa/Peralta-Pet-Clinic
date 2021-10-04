
<div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6 px-0 md:px-10 content-center">
  <?php foreach($servicesClass->getServices()->services as $service_card){ ?>
  <div data-aos="fade-up" data-aos-duration="1000" class="animate-svg transition transform duration-300 hover:-translate-y-2 py-10 rounded-md shadow-lg border-solid border-4 border-light-gray-50">
    <button class="editService absolute top-2 right-2 bg-indigo-500 text-sm text-white py-1 px-4 rounded shadow" data-service="<?php echo base64_encode(json_encode($service_card)) ?>">Edit</button>
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

<?php
	include_once('./views/admin/modals/view-edit-services.php');
?>
