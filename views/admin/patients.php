

<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900 inline-block">
        Users
      </h1>
      <div class="float-right inline-block align-middle space-2">
          <button onclick="window.location.href='/res/archive/users'" class="align-middle text-indigo-600 p-2 hover:bg-gray-200 rounded">      
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
          </svg>
          </button>
      </div>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
      <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">
          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="flex flex-col">
            <div class="-my-2 overflow-hidden sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table id="datatable" class="w-full divide-y divide-gray-200">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Patient
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Contact No.
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                          <center>User Type</center>
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Edit</span>
                        </th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </main>
<?php
	include_once('./views/admin/modals/edit-user.php');
?>

<script>
  window.url='/res/patients/table/1'
</script>	
		
<?php
	include_once('layout/footer.php');
?>