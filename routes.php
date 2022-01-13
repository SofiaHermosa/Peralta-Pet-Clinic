<?php
ob_start();

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");


get('/', 'views/guest/index.php');

get('/res', 'views/admin/index.php');

get('/res/reports', 'views/admin/reports.php');

get('/res/appointment', 'views/admin/appointment.php');

get('/res/appointment/$status', 'views/admin/appointment.php');

get('/res/inquiries', 'views/admin/inquiries.php');

get('/res/users', 'views/admin/patients.php');

get('/res/services', 'views/admin/services.php');

get('/res/cms/$section', 'views/admin/cms.php');

post('/res/content-management', 'controller/cms/edit.php');

get('/res/reports/data', 'controller/reports/data.php');

post('/res/services', 'controller/services/update-create-services.php');

post('/res/teams', 'controller/teams/update-create-teams.php');

post('/res/settings', 'controller/cms/settings.php');

post('/res/update/appointment/status', 'controller/appointment/appointmentstatus.php');

get('/login', 'views/admin/login.php');

get('/appointment', 'views/guest/appointment.php');

get('/sign-up', 'views/guest/registration.php');

post('/available/slots', 'controller/appointment/bookappointment.php');

post('/send/inquiry', 'controller/inquiries/inquiry.php');

get('/validate/duplicates', 'controller/registration/validation.php');

post('/register', 'controller/registration/register.php');

post('/login/$type', 'controller/auth/login.php');

get('/logout/$type', 'controller/auth/logout.php');

post('/reply/inquiry', 'controller/inquiries/reply.php');

// dashboard

post('/res/dashboard/data', 'controller/dashboard/monthlyData.php');



// Data tables
get('/res/inquiries/table', 'controller/inquiries/table.php');

get('/res/patients/table/$type', 'controller/patients/table.php');

get('/res/table/appointment', 'controller/appointment/table.php');

post('/archive/user', 'controller/patients/delete.php');

post('/archive/inquiry', 'controller/inquiries/delete.php');

post('/archive/appointment', 'controller/appointment/delete.php');

post('/archive/service', 'controller/services/delete.php');

post('/archive/team', 'controller/teams/delete.php');


get('/res/archive/users', 'views/admin/archived-patients.php');

get('/res/archive/appointments', 'views/admin/archived-appointments.php');

get('/my-appointment', 'views/guest/appointment/index.php');

get('/my-appointment/table', 'controller/appointment/client-appointment-table.php');

get('/confirm-account', 'controller/registration/confirm-account.php');






// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs
post('/res/submitappointment', 'controller/appointment/addappointment.php');
GET('/res/retrieveappointment', 'controller/appointment/viewappointment.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/errors/404.php');

