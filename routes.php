<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");


get('/', 'views/guest/index.php');

get('/res', 'views/admin/index.php');

get('/res/appointment', 'views/admin/appointment.php');

get('/res/team', 'views/admin/team.php');

get('/res/patients', 'views/admin/patients.php');

get('/res/services', 'views/admin/services.php');

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

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/errors/404.php');