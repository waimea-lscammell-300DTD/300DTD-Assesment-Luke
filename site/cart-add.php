<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';

// Get the data values from the form
$productID = $_POST['id'];

$_SESSION['order'][] = $productID;

consoleLog($_SESSION);

header('location: index.php');

?>