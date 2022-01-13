<div class="w-full z-1 h-screen fixed top-0 left-0 frosted hidden" id="editServicesModal">
    <div  data-type="modal" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 margin-auto w-1/2 bg-white rounded-lg shadow-lg py-4 px-10">
        <div class="w-full py-2 text-2xl text-gray-700 font-bold mb-2">
            <h1><span>Add</span> Service</h1>
        </div>

        <button type="button" class="absolute right-0 top-0 transform -translate-y-6 translate-x-6 bg-white rounded-full p-2 mx-2 inline-flex items-center justify-center text-gray-800 font-bolder shadow-xl hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 close-modal" data-toggle="#editServicesModal" data-modal="true">
            <span class="sr-only">Close main menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 stroke-width-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <form method="POST" id="formServices" action="/res/services" enctype='multipart/form-data'>
        <input type="hidden" name="id" value="">
        <div class="flex space-x-1 py-2">
            <div class="inline-block">
                <img id="logo-prev" class="h-20 w-20 bg-gray-200 rounded-lg p-2" src="../../assets/images/default.jpg" alt="Workflow">
            </div>
            <div class="inline-block flex">
                <input type="hidden" name="section" value="settings">
                <input id="logo-upload" type="file" name="imgs[]" class="sr-only">
                <label for="logo-upload" class="text-indigo-700 mt-4 align-middle rounded py-1 px-4 hover:text-indigo-900 font-semibold">Change Service Logo</label>
            </div>
        </div>
        <div class="grid grid-cols-6 gap-4">
            <!-- <div class="col-span-6">
                <label class="form_label">Logo/SVG</label>
                <textarea class="form_input" name="logo" rows="2">
                </textarea>
            </div> -->
            
            <div class="col-span-3">
                <label class="form_label">Name</label>
                <input type="text" class="form_input" name="name">
            </div>
            <div class="col-span-3">
                <label class="form_label">Price</label>
                <input type="text" class="form_input" name="price">
            </div>
            <div class="col-span-3">
                <label class="form_label">Interval</label>
                <input type="text" class="form_input clockpicker" name="interval">
            </div> 
            <div class="col-span-3">
                <label class="form_label">Type</label>
                <select name="type" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="gender">
                    <option value=""></option>
                    <option value="2">Primary Offers</option>
                    <option value="1">Other Offers</option>
                </select>
            </div>     
            <div class="col-span-6">
                <label class="form_label">Description</label>
                <textarea class="form_input" name="description" rows="5">
                </textarea>
            </div>
        </div>
        <div class="w-full py-4">
            <button type="button" class="updateService text-indigo-600 float-right font-bold rounded py-2 px-4 bg-indigo-200 hover:text-indigo-900 hover:bg-indigo-200">Save</button>
        </div>
        </form>
    </div>
</div>