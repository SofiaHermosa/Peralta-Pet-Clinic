<?php
    $config           = require_once('./config.php');
    $services         = $config['services'];
?>

<?php
    require_once('./class/auth.php');

    $auth = new Auth;

    $auth->authCheck('/sign-up', 2);
?>

<?php
    require_once('./class/cms.php');
    require_once('./class/services.php');
    require_once('./class/teams.php');

    $servicesClass = new Services;
    $teamsClass = new Teams;
    $cms = new CMS;

    $branding = $cms->getContent('settings')[0]['content'];
    $branding = json_decode($branding);
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
<body>
<?php
    include_once('./views/guest/layout/auth-nav.php');  
?>
<div class="relative top-0 w-full p-0">
    <div class="w-full md:w-3/4 h-screen px-20 m-auto pt-32"> 
        <div class="z-50 relative grid grid-cols-1 gap-6">
            <div class="col-span-1">
                <form id="newAppointmentForm">
                <div data-aos="fade-up" data-aos-duration="1000" class="step-app rounded-lg shadow-4xl" id="appointment">
                    <ul class="step-steps gap-0 bg-transparent">
                        <li class="py-3 text-center p-0 w-auto font-semibold px-4 text-gray-700" data-step-target="step1"></li>
                        <li class="py-3 text-center p-0 w-auto font-semibold px-4 text-gray-700" data-step-target="step2"></li>
                        <li class="py-3 text-center p-0 w-auto font-semibold px-4 text-gray-700"data-step-target="step3"></li>
                    </ul>
                    <div class="absolute w-full z-50 step-content frosted rounded-xl shadow-xl">
                        <div class="step-tab-panel" data-step="step1">
                            <h1 class="flex text-right px-4 py-3 text-3xl text-gray-700">Appointment Details</h1>
                            <div class="grid grid-cols-2 gap-2 py-4 px-10">
                                <div class="col-span-2 hidden">
                                    <label class="form_label">Type of patient</label>
                                    <select type="text" name="patient_type" class="form_input bg-white bg-opacity-60" id ="patient_type">
                                        <option></option>
                                        <option value="Existing" selected>Existing</option>
                                        <option value="New">New</option>
                                    </select>
                                </div>

                                <div class="col-span-1">
                                    <label class="form_label">Reason of Visit</label>
                                    <select type="text" name="service" class="form_input bg-white bg-opacity-60" id="service" required>
                                        <option></option>
                                        <?php
                                            foreach($servicesClass->getServices()->services as $key => $service){
                                                $desc = $service['name'];
                                                $id   = $service['id'];
                                                echo "<option value='$id'>$desc</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-span-1">
                                    <label class="form_label">Date of Visit</label>
                                    <input type="date" class="form_input bg-white bg-opacity-60" name="date" min="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="step-tab-panel" data-step="step2">
                            <h1 class="flex text-right px-4 py-3 text-3xl text-gray-700">Patient Details</h1>
                            <div class="grid grid-cols-2 gap-2 py-4 px-10">
                                <input type="hidden" name="user_id" id="userId" value="<?php echo $_SESSION['auth']['id']; ?>">
                                <div class="col-span-1">
                                    <label class="form_label">First name</label>
                                    <input type="text" name="fname" class="form_input bg-white bg-opacity-60 focus:ring-indigo-100 focus:border-indigo-100 duration-300" value="<?php echo $_SESSION['auth']['first_name'] ?? '' ?>" id="fname">
                                </div>
                                <div class="col-span-1">
                                    <label class="form_label">Last name</label>
                                    <input type="text" name="lname" class="form_input bg-white bg-opacity-60" value="<?php echo $_SESSION['auth']['last_name'] ?? '' ?>" id="lname">
                                </div>
                                <div class="col-span-1">
                                    <label class="form_label">Middle initial</label>
                                    <input type="text" name="minit" class="form_input bg-white bg-opacity-60" value="<?php echo $_SESSION['auth']['middle_name'] ?? '' ?>" id="minit">
                                </div>
                                <div class="col-span-1">
                                    <label class="form_label">Contact No.</label>
                                    <input type="text" name="contact_no" class="form_input bg-white bg-opacity-60" value="<?php echo $_SESSION['auth']['contact_no'] ?? '' ?>" id="contact_no">
                                </div>
                                <div class="col-span-2">
                                    <label class="form_label">Address</label>
                                    <textarea name="address" class="form_input bg-white bg-opacity-60" id="address"><?php echo base64_decode($_SESSION['auth']['address']) ?? '' ?></textarea>
                                </div>
                            </div>
                        </div>
                     
                        <div class="step-tab-panel" data-step="step3">
                            <h1 class="flex text-right px-4 py-3 text-3xl text-gray-700">Available Slots</h1>

                            <div class="grid grid-cols-6 gap-2 py-4 px-10" id="slotAvailCont">
                                
                            </div>
                        </div>

                        <div class="step-footer text-right px-10 pb-4">
                            <button onclick="window.history.back();" class="bg-red-600 py-3 font-semibold px-4 rounded-md text-white float-left">Cancel</button>
                            <button class="bg-indigo-100 py-3 font-semibold px-4 rounded-md text-gray-700"  data-step-action="prev" class="step-btn">Previous</button>
                            <button class="bg-indigo-200 py-3 font-semibold px-4 rounded-md text-gray-700" data-step-action="next" class="step-btn">Next</button>
                            <button class="bg-green-200 py-3 font-semibold px-4 rounded-md text-gray-700"  data-step-action="finish" class="step-btn">Finish</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1631408805" data-aos="fade-up" data-aos-duration="700">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div> 
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="//ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
<script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.js"></script>
<script src="../../../assets/summernote/summernote.min.js"></script>
<script src="./assets/js/book-appointment.js"></script>
<script src="../../../assets/js/app.js"></script>
<script type="text/javascript">
	AOS.init();
</script>