<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';

// Get the data values from the form
$userID = $_SESSION['user']['id'];
$address = $_POST['address'];



// Hash the supplied password

// Connect
$db = connectToDB();
// Add the user account
$query = 'INSERT INTO orders (user_id, address) VALUES (?, ?)';
$stmt = $db->prepare($query);
$stmt->execute([$userID, $address]);
header('HX-Redirect: index.php');

?>