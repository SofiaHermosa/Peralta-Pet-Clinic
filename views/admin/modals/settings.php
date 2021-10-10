<?php 
    $company = $cms->getContent('settings')[0]['content'];
    $company = json_decode($company);
?>
<form method="POST" id="formSettings" action="/res/settings" enctype='multipart/form-data'>
<div class="flex space-x-1 py-2">
    <div class="inline-block">
        <img id="logo-prev" class="h-16 w-16 bg-gray-200 rounded-lg" src="<?php echo '../../'.$company->images[0]  ?? '../../../assets/images/logo.png' ?>" alt="Workflow">
    </div>
    <div class="inline-block flex">
        <input type="hidden" name="section" value="settings">
        <input id="logo-upload" type="file" name="imgs[]" class="sr-only"  accept="image/x-png,">
        <label for="logo-upload" class="text-indigo-700 mt-4 align-middle rounded py-1 px-4 hover:text-indigo-900 font-semibold">Change Brand Logo</label>
    </div>
</div>

<div class="grid grid-col-4 gap-4 py-1">
    <div class="col-span-4">
        <label class="form_label">Brand Name</label>
        <input type="text" class="form_input" name="comp_name" value="<?php echo $company->comp_name ?? ''  ?>">
    </div>
    <div class="col-span-2">
        <label class="form_label">Contact No</label>
        <input type="text" class="form_input" name="comp_no" value="<?php echo $company->comp_no ?? ''  ?>">
    </div>
    <div class="col-span-2">
        <label class="form_label">Email</label>
        <input type="text" class="form_input" name="comp_email" value="<?php echo $company->comp_email ?? ''  ?>">
    </div>
    <div class="col-span-4">
        <label class="form_label">Address</label>
        <textarea class="form_input" name="comp_address">
        <?php echo base64_decode($company->comp_address) ?? ''  ?>
        </textarea>
    </div>
</div>

<div class="w-full py-4">
    <button type="button" class="saveSettings text-indigo-600 float-right font-bold rounded py-2 px-4 bg-indigo-200 hover:text-indigo-900 hover:bg-indigo-200">Save</button>
</div>
</form>
