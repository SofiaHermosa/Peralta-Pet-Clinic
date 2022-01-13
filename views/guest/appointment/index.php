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
	<title><?php echo $branding->comp_name ?? 'Peralta Dog and Cat Clinic' ?></title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../../assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-guest.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/datatable.css">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo '//'.$_SERVER['SERVER_NAME']."/".json_decode($cms->getContent('settings')[0]['content'])->images[0] ?>"/>
    <link rel="stylesheet" type="text/css" href="../../../assets/css/custom-appointment.css">
</head>
<body>
    <?php
    include_once('./views/guest/layout/auth-nav.php');  
    ?>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/views/admin/modals/edit-profile.php');
    ?>

    <div class="relative backdrop-filter backdrop-blur-md bg-opacity-40 md:bg-indigo-700 z-50 overflow-hidden">
        <div class="relative bg-white overflow-hidden px-20 pt-20 pb-60 min-h-screen">
            <div class="w-full mt-10 mb-36">
                <h1 data-aos="fade-down" data-aos-duration="1000" class="text-4xl font-bold text-gray-900 float-left">My Appointment</h1>

                <div class="float-right inline-block align-middle space-2">
                    <a href="/appointment" class="align-middle px-6 py-4 bg-blue-500 text-white rounded shadow toggle-menu">      
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="inline-block">Appointment</span>
                    </a>
                </div>

            </div>
            <table id="datatable" cellspaing="5" class="w-full divide-y divide-gray-200 mt-10">
                <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Reason of Visit
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Date
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Time
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <center>Status</center>
                    </th>
                    <th width="20%" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Declined/Cancelation Reason
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                    </th>
                </tr>
                </thead>
            </table>

            <div class="custom-shape-divider-bottom-1631408805" data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>   
        </div>
    </div>
    <div class="relative bg-indigo-700 overflow-hidden pb-16 z-0">
        <div class="max-w-7xl mx-auto">
            <div class="relative left-0 full w-full px-20">
                <div class="grid grid-cols-6 gap-10">
                    <div class="col-span-6 md:col-span-2 d-flex place-content-center py-10 transform translate-y-14">
                        <div data-aos="fade-down" data-aos-duration="900" data-aos-anchor-placement="bottom-bottom" class="grid grid-cols-5 gap-1">
                            <div class="col-span-1">
                                <img class="self-center rounded-md w-auto" src="../../../assets/images/logo.png">
                            </div>
                            <div class="col-span-4 pt-2">
                                <span class="relative top-1/4 transform -translate-y-1/2 px-2 w-full text-center text-lg text-white font-semibold"><?php echo $branding->comp_name ?? 'Peralta Dog and Cat Clinic' ?></span>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="bottom-bottom" class="text-left px-10 py-0 text-white font-lg mx-auto">
                            <span class="text-md block pl-2 font-semibold">Contact Us</span>
                            <small class="grid grid-cols-8 gap-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="col-span-1 h-3 w-3 d-inline-block text-center transform translate-x-2 translate-y-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span class="col-span-7 d-inline-block"><?php echo $branding->comp_no ?? '' ?></span>
                            </small>
                            <small class="grid grid-cols-8 gap-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="col-span-1 h-3 w-3 d-inline-block text-center transform translate-x-2 translate-y-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <span class="col-span-7 d-inline-block"><?php echo base64_decode($branding->comp_address) ?? '' ?></span>	
                            </small>	
                        </div>
                    </div>
                    <div class="col-span-3 md:col-span-1 grid justify-content-center text-center py-0 md:py-14 transform translate-y-6 md:translate-y-0">
                        <a data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="bottom-bottom" href="#" class="px-4 py-4 md:py-0 rounded-sm font-medium text-gray-50 hover:text-gray-300 w-full mt-10">Appointment</a>

                        <a data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom" href="#services" class="nav--link px-4 py-4 md:py-0 rounded-sm font-medium text-gray-50 hover:text-gray-300 w-full">Services</a>

                        <a data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="bottom-bottom" href="#ourTeam" class="nav--link px-4 py-4 md:py-0 rounded-sm font-medium text-gray-50 hover:text-gray-300 w-full">Our Teams</a>
                    </div>
                    <div class="col-span-3 md:col-span-1 grid justify-content-center text-center py-0 md:py-14 transform translate-y-6 md:translate-y-0">
                        <a data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="bottom-bottom" href="#about" class="nav--link px-4 py-4 md:py-0 rounded-sm font-medium text-gray-50 hover:text-gray-300 w-full mt-10">About Us</a>

                        <a data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom" href="#contactUs" class="nav--link px-4 py-4 md:py-0 rounded-sm font-medium text-gray-50 hover:text-gray-300 w-full">Contact Us</a>

                        <a data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="bottom-bottom" href="javascript:void(0)" class="font-medium py-4 md:py-0 text-gray-50 hover:text-gray-300 px-4 rounded-sm toggle-menu" data-toggle="#loginForm" data-modal="true">Log in</a>
                    </div>
                    <div class="col-span-6 md:col-span-2 transform translate-y-9 md:translate-y-0">
                        <div data-aos="fade-right" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom" class="grid grid-cols-4 gap-2 py-0 md:py-20">
                            <div class="col-span-4 text-lg text-white font-semibold">
                                <h1>Subscribe for more info</h1>
                            </div>
                            <div class="col-span-4">
                                <input type="text" name="" class="form_input w-full font-semibold">
                            </div>
                            <div class="col-span-1 text-right">
                                <button class="w-full flex items-center justify-center p-1 h-full text-md font-semibold rounded-md text-indigo-700 bg-indigo-200 hover:bg-blue-300 md:text-lg md:p-1">
                                    Send
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>	
        </div>	
        <div class="w-full absolute bottom-0 px-10 py-1">
            <small class="text-indigo-200 font-semibold float-right">© 2021 ET Peralta Dog and Cat Clinic</small>
        </div>
    </div>	
</body>
</html>
<script>
  window.url='/my-appointment/table?user=<?php echo $_SESSION['auth']['id'] ?>';
  window.tableOrder = [1, 'desc'];
</script>
<script src="../../../assets/js/jquery.min.js"></script>
<script src="../../../assets/js/tables.js"></script>
<script src="../../../assets/js/app.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../../assets/summernote/summernote.min.js"></script>
<script src="../../../assets/js/app.js"></script>
<script src="../../../assets/js/nav.js"></script>
<script src="../../../assets/js/setting.js"></script>
<script src="../../../assets/js/inquiry.js"></script>
<script src="../../../assets/js/edit-profile.js"></script>
<script src="../../../assets/js/appointment.js"></script>
<script type="text/javascript">
	AOS.init();
</script>
<script>
	$('.about-slider').slick({
		dots: false,
		arrows:false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		centerPadding:'10px',
		centerMode:true,
		autoplay: true,
        autoplaySpeed: 2000,
		adaptiveHeight: true
	});
</script>
</html>