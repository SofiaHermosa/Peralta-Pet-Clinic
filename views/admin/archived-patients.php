

<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900 inline-block">
        Users Archive
      </h1>
      <div class="float-right inline-block align-middle space-2">
          <button onclick="window.history.back()" class="align-middle text-indigo-600 hover:bg-gray-200 p-2 rounded">      
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
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
<script>
  window.url='/res/patients/table/0'
</script>	
		
<?php
	include_once('layout/footer.php');
?>