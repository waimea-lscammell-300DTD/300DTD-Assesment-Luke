<?php

require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';


// Get image data and type of uploaded file
[
    'image_data' => $imageData,
    'type' => $imageType
] = uploadedImageData($_FILES['image_data']);

// Get other data from form
$name = $_POST['name'];
$price = $_POST['price'];

// Insert the image into the database
$db = connectToDB();

$query = 'INSERT INTO products (name, price, image_data, image_type) VALUES (?, ?, ?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $imageType, $imageData]);
} catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Upload Picture', ERROR);
    die('There was an error adding picture to the database');
}

// If we get here, it worked!
echo 'Success!!!';