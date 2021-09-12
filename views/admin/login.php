<div class="m-0 fixed top-0 left-0 bg-gray-800 bg-opacity-40 w-screen login-form hidden" id="loginForm">
	<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="grid lg:grid-cols-5 md:grid-cols-1 gap-0 px-40 py-12 h-screen">
		<div class="col-span-3 flex w-full bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300 rounded-tl-xl rounded-bl-xl mix-blend-darken shadow-lg overflow-hidden">
			<img class="w-full object-cover" src="../../../assets/images/services-bg.jpg">
		</div>
		<div class="col-span-2 bg-indigo-600 mix-blend-overlay rounded-tr-xl rounded-br-xl shadow-lg">
			<button type="button" class="absolute right-40 transform -translate-y-6 translate-x-6 bg-white rounded-full p-2 mx-2 inline-flex items-center justify-center text-gray-800 font-bolder shadow-xl hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 toggle-menu" data-toggle="#loginForm" data-modal="true">
		      <span class="sr-only">Close main menu</span>
		      <!-- Heroicon name: outline/x -->
		      <svg class="h-6 w-6 stroke-width-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
		        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
		      </svg>
		    </button>
			<div class="relative h-full bg-gradient-to-br from-indigo-800 via-transparent to-transparent py-6 px-10 z-50">
				<h1 class="text-center block text-3xl font-bold text-white">Welcome back!</h1>
				<h3 class="text-center block text-md font-bold text-white">Peralta Pet Clinic Login form</h3>
				<form method="POST">
					<div class="grid grid-cols-1 gap-6 mt-16 align-middle">
						<div>
							<label class="text-white text-md font-semibold">Username</label>
							<input type="text" name="username" class="rounded-sm shadow-lg block w-full text-white py-2 px-4 text-md bg-indigo-200 bg-opacity-40 mt-2">
						</div>

						<div>
							<label class="text-white text-md font-semibold">Password</label>
							<input type="password" name="password" class="rounded-sm shadow-lg block w-full text-white py-2 px-4 text-md bg-indigo-200 bg-opacity-40 mt-2">
						</div>

						<div class="text-white text-right">
							<a href="text-white font-md font-bold float-right">Forgot password?</a>
						</div>
					</div>	

					<button type="submit" class="p-2 mt-6 mb-20 w-full bg-pink-600 text-white font-bold rounded-md shadow-md hover:bg-pink-700">Login</button>
				</form>
				<div class="grid grid-cols-5 gap-4 px-6 mx-auto absolute bottom-6 left-0">
					<div class="hover:bg-white p-2 rounded-full mx-auto w-11 border-2 border-solid border-white transform hover:-translate-y-2 text-white hover:text-indigo-600">
						<svg class="h-6 w-6 stroke-width-6 mx-auto stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155.139 155.139" fill="currentColor" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
								c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
								v20.341H37.29v27.585h23.814v70.761H89.584z"/>
						</svg>

					</div>

					<div class="hover:bg-white p-2 rounded-full mx-auto w-11 border-2 border-solid border-white transform hover:-translate-y-2 text-white hover:text-indigo-600">
						<svg class="h-6 w-6 stroke-width-6 mx-auto stroke-current" fill="currentColor" stroke="currentColor" viewBox="0 0 512.00096 512.00096" xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg>
					</div>

					<div class="hover:bg-white p-2 rounded-full mx-auto w-11 border-2 border-solid border-white transform hover:-translate-y-2 text-white hover:text-indigo-600">
						<svg class="h-6 w-6 stroke-width-6 mx-auto stroke-current" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" viewBox="0 0 512 512">
								<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
									c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
									c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
									c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
									c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
									c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
									C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
									C480.224,136.96,497.728,118.496,512,97.248z"/>
						</svg>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>