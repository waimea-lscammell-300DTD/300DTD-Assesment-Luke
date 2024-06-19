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
$router->route(GET, PAGE, '/words', 'pages/words.php');
$router->route(GET, PAGE, '/organsadd', 'pages/organs_add.php');
$router->route(GET, PAGE, '/organslist', 'pages/organs_list.php');


//-------------------------------------------------------------
// Generate the required view
$router->view();

?>
