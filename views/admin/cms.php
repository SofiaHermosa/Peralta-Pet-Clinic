<?php 
    
    require './class/cms.php';
    $cms = new CMS;
?>    
<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Content Management
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
        <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">
        
        <h1 class="pt-4 text-3xl text-center">Banner</h1>
        <form method="POST" action="content-management" enctype='multipart/form-data'>
                <input type="hidden" name="section" value="banner">
                <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-1s">
                        <label class="mt-1 flex justify-center px-6 py-20 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="text-sm text-gray-600">
                                <label for="file-upload-banner" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload-banner" name="banner[]" type="file" class="sr-only">
                                </label>
                                <!-- <p class="pl-1">or drag and drop</p> -->
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                            </p>
                            </div>
                        </label>
                    </div>

                    <div class="col-span-1">
                            <?php 
                                $content = $cms->getContent('banner')[0]['content'];
                                foreach(json_decode($content)->images as $image){
                            ?>
                                <img class="align-middle my-4 w-full h-60 object-cover" src="<?php echo "../../$image" ?>" alt="">
                            <?php } ?>
                    </div>
                </div>
                
                <button class="py-2 my-4 float-right px-4 bg-indigo-700 text-white rounded" name="submit">Save</button>
           
            </form>

            <h1 class="pt-4 text-3xl text-center">About Us</h1>
            <form method="POST" action="content-management" enctype='multipart/form-data'>
                <input type="hidden" name="section" value="about_us">
                <div for="file-upload" class="grid grid-cols-2 gap-2">
                    <div class="col-span-1">
                        <label class="mt-1 flex justify-center px-6 h-full py-20 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="imgs[]" type="file" multiple class="sr-only">
                                </label>
                                <!-- <p class="pl-1">or drag and drop</p> -->
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                            </p>
                            </div>
                        </label>
                    </div>

                    <div class="col-span-1">
                        <div class="grid grid-cols-3 gap-1">
                            <?php 
                                $content = $cms->getContent('about_us')[0]['content'];
                                foreach(json_decode($content)->images as $image){
                            ?>
                                <div class="col-span-1"><img class="rounded h-40 object-cover w-full" src="<?php echo "../../$image" ?>" alt=""></div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <textarea class="form_input" name="history" rows="10">
                            <?php 
                                $content = $cms->getContent('about_us')[0]['content'];
                                echo base64_decode(json_decode($content)->history);
                            ?>
                        </textarea>
                    </div>
                </div>
                
                <button class="py-2 my-4 float-right px-4 bg-indigo-700 text-white rounded" name="submit">Save</button>
           
            </form>
        </div>
    </div>
  </main>

		
<?php
	include_once('layout/footer.php');
?>