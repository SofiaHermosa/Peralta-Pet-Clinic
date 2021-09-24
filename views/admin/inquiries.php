<?php
    require_once('./class/inquiry.php');

    $class = new Inquiry;

    $inquiries = $class->getInquiries();
?>

<?php
	include_once('layout/header.php');
?>

  <header class="bg-white shadow mt-16">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Inquiries
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">   
      <div class="px-4 py-6 sm:px-0 h-full grid grid-rows gap-14">
          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="flex flex-col bg-gray-50">
            <div class="-my-2 overflow-hidden sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Content
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Date
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Reply</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <?php foreach($inquiries as $inquiry){ ?>
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                <?php echo $inquiry['name']; ?> 
                              </div>
                              <div class="text-sm text-gray-500">
                              <?php echo $inquiry['email']; ?> 
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900"> <?php echo base64_decode($inquiry['content']); ?> </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <?php echo $inquiry['created_at']; ?> 
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="#" class="text-indigo-600 rounded py-2 px-4 bg-indigo-100 hover:text-indigo-900 hover:bg-indigo-200">Reply</a>
                          <a href="#" class="text-red-600 rounded py-2 px-4 bg-red-100 hover:text-red-900 hover:bg-red-200">Archaive</a>
                        </td>
                      </tr>
                      <?php } ?> 
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </main>

		
<?php
	include_once('layout/footer.php');
?>