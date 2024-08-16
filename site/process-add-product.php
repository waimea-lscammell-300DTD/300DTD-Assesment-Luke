<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';


// Get image data and type of uploaded file
[
    'data' => $imageData,
    'type' => $imageType
] = uploadedImageData($_FILES['image']);


// Get other data from form
$name = $_POST['name'];
$price = $_POST['price'];

// Insert the image into the database
$db = connectToDB();

$query = 'INSERT INTO products (name, price, image_type, image_data ) VALUES (?, ?, ?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $price, $imageType, $imageData]);

} catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Upload Picture', 'ERROR');
    die('There was an error adding picture to the database');
}

// If we get here, it worked!
echo 'Success!!!';