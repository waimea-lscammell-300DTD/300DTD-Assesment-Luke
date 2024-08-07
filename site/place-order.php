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

$orderID = $db->lastInsertId();

// Loop through as products in the cart and insert the ids / orderId into the contains table

foreach($_SESSION['order'] as $productId) {
    
    // Check if this product is already in the order
    $query = 'SELECT * FROM contains WHERE order_id=? AND product_id=?';
    $stmt = $db->prepare($query);
    $stmt->execute([$orderID, $productId]);
    $record = $stmt->fetch();

    // No, so add it with a qty of 1
    if($record == false) {
        $query = 'INSERT INTO contains (order_id, product_id, quantity) VALUES (?, ?, 1)';
        $stmt = $db->prepare($query);
        $stmt->execute([$orderID, $productId]);    
    }
    else {
        // Already there, so update the qty
        $query = 'UPDATE contains SET quantity = quantity + 1 WHERE order_id=? AND product_id=?';
        $stmt = $db->prepare($query);
        $stmt->execute([$orderID, $productId]);    
    }

}

// Clear out the cart
unset($_SESSION['order']);

header('location: index.php');

?>