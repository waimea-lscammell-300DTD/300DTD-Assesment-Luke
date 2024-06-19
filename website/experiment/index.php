<?php

//-------------------------------------------------------------
// Libraries
require_once 'lib/debug.php';
require_once 'lib/router.php';


//-------------------------------------------------------------
// Site Configuration
const SITE_NAME  = 'PHP Routing with HTMX';
const SITE_OWNER = 'Waimea College';


//-------------------------------------------------------------
// Initialise the router
$router = new Router(['debug' => true]);


//-------------------------------------------------------------
// Define routes

$router->route(GET, PAGE, '/',      'pages/home.php');
$router->route(GET, PAGE, '/about', 'pages/about.php');
$router->route(GET, PAGE, '/login', 'pages/form-login.php');
$router->route(GET, PAGE, '/process-login', 'components/process-login.php');
$router->route(GET, PAGE, '/process-logout', 'components/process-logout.php');
$router->route(GET, PAGE, '/signup', 'pages/form-signup.php');
$router->route(GET, PAGE, '/process-signup', 'components/process-signup.php');


//-------------------------------------------------------------
// Generate the required view
$router->view();

?>
