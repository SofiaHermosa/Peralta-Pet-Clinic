<div data-aos="fade-right" data-aos-duration="1000" class="d-flex py-4 px-6 bg-gray-50 shadow rounded-lg">
    <div class="w-full d-flex rounded-md bg-yellow-400 transform -translate-y-10 text-white text-center shadow-md">
        <h1 class="text-lg py-4">Appointment Reports</h1>
    </div>
    <div class="mb-8">
        <div class="grid lg:grid-cols-6 md:grid-cols-1 sm:grid-cols-1 gap-10">
            <!-- <div class="col-span-1">
                <label class="form_label">Report From</label>
                <select type="text" name="from" class="form_input bg-white bg-opacity-60" required>
                    <option></option>
                    <option value="appointment">Appointment</option>
                </select>
            </div> -->

            <div class="col-span-1 aptFilter">
                <label class="form_label">Start Date</label>
                <input type="date" class="form_input bg-white bg-opacity-60 filterApt" name="start_date">
            </div>

            <div class="col-span-1 aptFilter">
                <label class="form_label">End Date</label>
                <input type="date" class="form_input bg-white bg-opacity-60 filterApt" name="end_date">
            </div>

            <div class="col-span-1">
                <label class="form_label">Patient</label>
                <select type="text" name="patient" class="form_input bg-white bg-opacity-60 filterApt" required>
                    <option></option>
                    <?php foreach($patients as $patient){ ?>
                        <option value="<?php echo $patient['id']; ?>"><?php echo $patient['first_name']. ' ' .$patient['last_name']; ?></option>
                    <?php } ?>    
                </select>
            </div>

            <div class="col-span-1">
                <label class="form_label">Services</label>
                <select type="text" name="services" class="form_input bg-white bg-opacity-60 filterApt" required>
                    <option></option>
                    <?php foreach($services as $service){ ?>
                        <option value="<?php echo $service['name']; ?>"><?php echo $service['name']; ?></option>
                    <?php } ?>    
                </select>
            </div>

            <div class="col-span-1">
                <label class="form_label">Status</label>
                <select type="text" name="status" class="form_input bg-white bg-opacity-60 filterApt" required>
                    <option></option>
                    <option value="1">Pending</option>
                    <option value="2">Approved</option>
                    <option value="3">Declined</option>
                    <option value="5">Cancelled</option>
                </select>
            </div>

            <div class="col-span-1">
                <div class="pt-8">
                    <a href="javacript:void(0)" class="text-white rounded h-14 py-2 px-6 bg-yellow-600 hover:bg-yellow-500 clearAptFilter">Clear</a>  
                </div>
                <!-- <div class="pt-8">
                    <a href="javacript:void(0)" class="text-white rounded h-10 py-2 px-4 bg-blue-600 hover:bg-blue-500">Export</a>  
                </div> -->
            </div>    
        </div>
    </div>

    <div>
        <table id="reportAptTable" class="w-full divide-y divide-gray-200 mt-10">
            <thead>
                <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Patient
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Contact No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Service
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Date
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Time
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <center>Status</center>
                </th>
                </tr>
            </thead>
        </table>
    </div>
</div>