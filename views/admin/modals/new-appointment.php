<div class="fixed inset-0 overflow-hidden hidden" id="newAppointmentModal" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute inset-0 bg-gray-500 frosted-bg-2 bg-opacity-75 transition-opacity toggle-menu" data-modal="true" data-toggle="#newAppointmentModal" aria-hidden="true"></div>
    <div class="fixed inset-y-0 -right-4 pl-10 max-w-full flex">
      <div class="relative w-screen max-w-md">
        <div class="absolute top-0 left-0 -ml-8 pt-4 pr-2 flex sm:-ml-10 sm:pr-4">
          <button type="button" class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white toggle-menu" data-modal="true" data-toggle="#newAppointmentModal">
            <span class="sr-only">Close panel</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="h-full flex flex-col py-6 bg-white shadow-xl">
          <div class="px-4 sm:px-6">
            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
              New Appointment

              <span class="float-right text-gray-300 text-lg px-2" id="appointmentDateTitle"></span>
            </h2>
          </div>
          <div class="mt-6 relative flex-1 px-4 sm:px-6">
            <div class="absolute inset-0 px-4 sm:px-6">
              <div class="h-full  overflow-y-auto pr-4" aria-hidden="true">
                  <h1 class="block my-4 text-lg text-gray-600 font-semibold text-center">Patient Details</h1>
                  <input type="hidden" name="apt_id" id="apt_id">
                  <input type="hidden" name="apt_date" id="apt_date">
                  <div class="grid grid-cols-2 gap-2 border-b border-solid border-gray-300 pb-6">
                      <div class="col-span-1">
                          <label class="form_label">First name</label>
                          <input type="text" name="fname" class="form_input focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="fname">
                      </div>
                      <div class="col-span-1">
                          <label class="form_label">Last name</label>
                          <input type="text" name="lname" class="form_input" id="lname">
                      </div>
                      <div class="col-span-1">
                          <label class="form_label">Middle initial</label>
                          <input type="text" name="minit" class="form_input" id="minit">
                      </div>
                      <div class="col-span-1">
                          <label class="form_label">Contact No.</label>
                          <input type="text" name="contact_no" class="form_input" id="contact_no">
                      </div>
                      <div class="col-span-2">
                          <label class="form_label">Address</label>
                          <textarea name="address" class="form_input" id="address"></textarea>
                      </div>
                  </div>

                  <h1 class="block my-4 text-lg text-gray-600 font-semibold text-center">Appointment Details</h1>
                  <div class="grid grid-cols-2 gap-2">
                      <div class="col-span-1">
                          <label class="form_label">Reason of visit</label>
                          <select name="visit_reason" class="form_input" id ="visit_reason">
                              <option></option>
                              <?php
                                  foreach($services as $key => $service){
                                      $desc = $service['desc'];
                                      echo "<option value='$desc'>$desc</option>";
                                  }
                              ?>
                          </select>
                      </div>
                      <div class="col-span-1">
                          <label class="form_label">Time</label>
                          <input type="text" name="time" class="form_input" id="time">
                      </div>
                      <!-- <div class="col-span-2">
                          <label class="form_label">Reason of Visit</label>
                          <textarea name="visit_reason" rows="3" class="form_input" id="visit_reason"></textarea>
                      </div> -->
                      <div class="col-span-2">
                          <label class="form_label">Confirm Transaction: </label>
                          <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="saveappointment">Save Appointment</button>
                      </div>
                  </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 