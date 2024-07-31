<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';

// Get the data values from the form
$productID = $_POST['id'];
$productName = $_POST['name'];

// Connect
$db = connectToDB();
// Add the user account
$query = 'INSERT INTO orders (id, name) VALUES (?, ?)';
$stmt = $db->prepare($query);
$stmt->execute([$productID, $productName])


?>