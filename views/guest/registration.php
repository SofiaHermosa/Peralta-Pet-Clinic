<?php
    $config           = require_once('./config.php');
    $services         = $config['services'];
?>

<?php
    require_once('./class/auth.php');

    $auth = new Auth;

    $auth->redirectIfLogin('/', '2');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ET Peralta Dog and Cat Clinic</title>
	<link href="//unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.css">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-guest.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-appointment.css">
</head>
<body class="overflow-hidden">
<?php
	include_once('terms-condition.php');
?> 
<div class="w-full h-screen bg-white hidden" id="reg__success">
    <img class="w-1/4 mx-auto object-scale-down mt-20" src="../../../assets/images/mail-sent.svg">
    <p class="text-2xl mt-10 text-center w-full text-green-500">Registration Sent!</p>
    <p class="text-lg mt-1 text-center w-full text-gray-700">Check your email for account confirmation.</p>
    <div class="text-center w-full mt-10">
        <a class="bg-indigo-700 text-white py-4 px-6 rounded-full" href="/sign-up">Close</a>
    </div>
</div>
<div class="relative top-0 w-full p-0 grid grid-cols-3 gap-0 h-screen">
    <div class="col-span-2">
        <form method="POST" action="/registration" id="formRegistration" class="w-full">
            <div class="w-full h-screen"> 
                <div class="z-50 grid grid-cols-1 gap-6 h-screen">
                    <div class="col-span-1">
                        <div class="step-app shadow-4xl" id="registration">
                            <ul class="step-steps gap-0 bg-transparent">
                                <li class="py-2 text-center p-0 w-auto font-semibold px-4 text-gray-700" data-step-target="step1"></li>
                                <li class="py-2 text-center p-0 w-auto font-semibold px-4 text-gray-700" data-step-target="step2"></li>
                            </ul>
                            <div class="w-full z-50 step-content frosted h-screen rounded-xl shadow-xl">
                                <h1 class="text-center block text-3xl font-bold text-gray-800 mt-28">Registration Form</h1>

                                <div class="step-tab-panel py-10 " data-step="step1">
                                    <div class="grid grid-cols-6 gap-2 px-16 w-full">
                                        <div class="col-span-6">
                                            <h1 class="flex text-right pb-6 font-semibold text-xl text-gray-700">Personal Information</h1>  
                                        </div>

                                        <div class="col-span-2">
                                            <label class="form_label">Last Name</label>
                                            <input type="text" name="lname" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="lname">
                                        </div>
                                        
                                        <div class="col-span-2">
                                            <label class="form_label">First Name</label>
                                            <input type="text" name="fname" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="fname">
                                        </div>

                                        <div class="col-span-2">
                                            <label class="form_label">Middle Name</label>
                                            <input type="text" name="mname" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="mname">
                                        </div>

                                        <div class="col-span-4">
                                            <label class="form_label">Contact No</label>
                                            <input type="text" name="contact_no" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="contact_no">
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
                                            <textarea name="address" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" row="5" id="address">
                                            </textarea>    
                                        </div>

                                    </div>
                                </div>

                                
                                <div class="step-tab-panel py-10" data-step="step2">
                                    <div class="grid grid-cols-6 gap-2 px-16">
                                        <div class="col-span-6">
                                            <h1 class="flex text-right pb-6 font-semibold text-xl text-gray-700">Account Details</h1>
                                        </div>
                                        <div class="col-span-3">
                                            <label class="form_label">Email</label>
                                            <input type="text" name="email" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="email">
                                        </div>

                                        <div class="col-span-3">
                                            <label class="form_label">Username</label>
                                            <input type="text" name="username" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="uname">
                                        </div>

                                         <div class="col-span-3">
                                            <label class="form_label">Password</label>
                                            <div class="flex">
                                                <div class="w-11/12">
                                                    <input type="password" name="password" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="password">
                                                </div>
                                                <button class="bg-gray-400 px-2 text-white h-10 mt-1 transform -translate-x-1 showPass"  type="button" data-target="password">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-span-3">
                                            <label class="form_label">Confirm Password</label>
                                            <div class="flex">
                                                <div class="w-11/12">
                                                    <input type="password" name="confirm_password" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" id="confirm_password">
                                                </div>

                                                <button class="bg-gray-400 px-2 text-white h-10 mt-1 transform -translate-x-1 showPass" type="button" data-target="confirm_password">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="col-span-6 flex text-right mt-6">
                                            <input type="checkbox" class="align-middle mt-1 mr-2 termsCheck" name="terms_condition" required>
                                            <label class="form_label">By clicking Finish, you agree to our Terms and Condition</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-footer text-right pb-4 w-full px-16">
                                    <!-- <button onclick="window.history.back();" class="bg-red-600 py-3 font-semibold px-4 rounded-md text-white float-left">Cancel</button> -->
                                    <button type="button" class="bg-gray-400 py-3 font-semibold px-4 rounded-md text-white float-left"  data-step-action="prev" class="step-btn">Previous</button>
                                    <button type="button" class="bg-indigo-600 py-3 font-semibold px-4 rounded-md text-white" data-step-action="next" class="step-btn">Next</button>
                                    <button type="button" class="bg-green-400 py-3 font-semibold px-4 rounded-md text-white reg__finish"  data-step-action="finish" class="step-btn">Finish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>    
    </div>

    <div class="col-span-1">
        <div class="w-full h-screen frosted--login">
            <div class="grid grid-cols-1 gap-6 w-full px-16 pt-24">
                <div class="col-span-1 mb-14 mt-6">
                    <h1 class="text-center block text-3xl font-bold text-white">Welcome back!</h1>
			        <h3 class="text-center block text-md font-bold text-white">Peralta Pet Clinic Login form</h3>
                </div>

                <form action="/login/2" method="POST">
               <div class="col-span-1">
                    <label class="form_label text-white">Email</label>
                    <input type="text" name="email" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" required>
                </div>

                <div class="col-span-1">
                    <label class="form_label text-white mt-2">Password</label>
                    <div class="flex">
                        <div class="w-11/12">
                            <input type="password" name="password" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" required>
                        </div>
                        <button class="bg-gray-400 px-2 text-white h-10 mt-1 transform -translate-x-1 showPass"  type="button" data-target="password">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-span-1">
					<button type="submit" class="p-2 mt-10 mb-20 w-full bg-pink-600 text-white font-bold rounded-md shadow-md hover:bg-pink-700">Login</button>
                </div>
                </form>
                <?php if(isset($_SESSION['error'])){ ?>
                <div class="col-span-1">
                    <div class="py-2 px-4 rounded shadow w-full bg-red-400 text-white">
                        <p><?php echo $_SESSION['error'] ?></p>
                    </div>
                </div>
                <?php } 
                unset($_SESSION['error']);
                ?>
            </div>
        </div>
    </div>
</div>
<!-- <div class="custom-shape-divider-bottom-1631408805 z-10" data-aos="fade-up" data-aos-duration="700">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>  -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="//ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./assets/js/registration.js"></script>
<script type="text/javascript">
	AOS.init();
</script>