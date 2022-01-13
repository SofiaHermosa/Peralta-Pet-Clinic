<div class="w-full z-1 h-screen fixed top-0 left-0 frosted hidden" id="editUserModal">
    <div  data-type="modal" class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 margin-auto w-3/4 bg-white rounded-lg shadow-lg p-10">
        <form method="POST" id="formUpdateUser" action="/registration" enctype='multipart/form-data'>
        <div class="grid grid-cols-2 py-2 text-2xl text-gray-700 font-bold mb-6">
            <div>
                <h1 class="float-left inline-block"><span>Edit</span> User</h1>     
            </div>
            <div>
                <select name="user_type" class="form_input w-32 float-right">
                    <option value=""></option>
                    <option value="1">Administrator</option>
                    <option value="3">Secretary</option>
                    <option value="2">Client</option>
                </select>
            </div>
        </div>

        <button type="button" class="absolute right-0 top-0 transform -translate-y-6 translate-x-6 bg-white rounded-full p-2 mx-2 inline-flex items-center justify-center text-gray-800 font-bolder shadow-xl hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 close-modal" data-toggle="#editUserModal" data-modal="true">
            <span class="sr-only">Close main menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 stroke-width-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <input type="hidden" name="id">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="grid grid-cols-6 gap-4 pr-1">
                    <div class="col-span-6">
                        <h1 class="text-center pb-2 font-semibold text-lg text-gray-600">Personal Information</h1>
                    </div>

                    <div class="col-span-2">
                        <label class="form_label">Last Name</label>
                        <input type="text" class="form_input" name="lname">
                    </div>

                    <div class="col-span-2">
                        <label class="form_label">First Name</label>
                        <input type="text" class="form_input" name="fname">
                    </div>

                    <div class="col-span-2">
                        <label class="form_label">Middle Name</label>
                        <input type="text" class="form_input" name="mname">
                    </div>

                    <div class="col-span-4">
                        <label class="form_label">Contact No</label>
                        <input type="text" class="form_input" name="contact_no">
                    </div>

                    <div class="col-span-2">
                        <label class="form_label">Gender</label>
                        <select name="gender" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="gender">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>    
                    </div>
                    
                    <div class="col-span-6">
                        <label class="form_label">Address</label>
                        <textarea name="address" class="form_input h-32 bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" row="8" id="address">
                        </textarea>    
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <div class="grid grid-cols-6 gap-4 pl-6 pb-6 border-l border-solid border-gray-300">
                    <div class="col-span-6">
                        <h1 class="text-center pb-2 font-semibold text-lg text-gray-600">Account Details</h1>
                    </div>

                    <div class="col-span-6">
                        <label class="form_label">Email</label>
                        <input type="text" name="email" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="email">
                    </div>

                    <div class="col-span-6">
                        <label class="form_label">Username</label>
                        <input type="text" name="username" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="uname">
                    </div>

                    <div class="col-span-6">
                        <label class="form_label">Password</label>
                        <input type="password" name="password" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="password">
                    </div>

                    <div class="col-span-6">
                        <label class="form_label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="confirm_password">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full py-4">
            <button type="button" class="updateUserBtn text-indigo-600 float-right font-bold rounded py-2 px-4 bg-indigo-200 hover:text-indigo-900 hover:bg-indigo-200">Save</button>
        </div>
        </form>
    </div>
</div>