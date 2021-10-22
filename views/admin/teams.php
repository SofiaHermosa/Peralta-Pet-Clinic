
<div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6 px-0 md:px-10 content-center">
  <?php foreach($teamsClass->getTeams()->teams as $team_card){ ?>
  <div data-aos="fade-up" data-aos-duration="1000" class="animate-svg transition transform duration-300 hover:-translate-y-2 py-10 pb-20 rounded-md shadow-lg border-solid border-4 border-light-gray-50">
    <div class="w-full p-4 absolute bottom-0 left-0 space-2 text-right z-50">
      <button class="editTeam inline-block  bg-indigo-500 text-sm text-white py-1 px-4 rounded shadow" data-team="<?php echo base64_encode(json_encode($team_card)) ?>">Edit</button>
      <button class="archive inline-block bg-red-500 text-sm text-white py-1 px-4 rounded shadow" data-type="Team" data-url="/archive/team" data-id="<?php echo $team_card['id'] ?>">Archive</button>
    </div>
    
    <div class="grid justify-items-center svg__cont mb-2">
        <img class="rounded-full h-16 w-16 object-cover " src="<?php echo "../../".$team_card['profile']; ?>" alt="">
    </div>

    <div class="h-full rounded-md text-center py-2 px-10 relative w-full">
      <div class="block py-2 text-xl text-gray-900 font-semibold">
        <?php echo $team_card['name']; ?>
      </div>
      <div class="w-full overflow-hidden overflow-ellipsis px-2 font-semibold text-justify text-sm text-gray-900 pt-2">
        <?php echo base64_decode($team_card['description']); ?>
      </div>
    </div>
  </div>
  <?php } ?>
</div>  

<?php
	include_once('./views/admin/modals/edit-add-teams.php');
?>
