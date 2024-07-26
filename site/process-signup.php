<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';

// Get the data values from the form
$fore = $_POST['forename'];
$sur = $_POST['surname'];
$user = $_POST['username'];
$pass = $_POST['password'];

// Hash the supplied password
$hash = password_hash($pass, PASSWORD_DEFAULT);


// Connect
$db = connectToDB();
// Add the user account
$query = 'INSERT INTO users (forename, surname, username, hash) VALUES (?, ?, ?, ?)';
$stmt = $db->prepare($query);
$stmt->execute([$fore, $sur, $user, $hash])

echo '<h2>Account created!</h2>';

?>



