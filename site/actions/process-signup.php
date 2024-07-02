<?php

consoleLog($_POST, 'Form Data');

// Get the data values from the form
$fore = $_POST['forename']
$sur = $_POST['surname']
$user = $_POST['username'];
$pass = $_POST['password'];

// Hash the supplied password
$hash = password_hash($pass, PASSWORD_DEFAULT);
consoleLog($hash, 'Hashed Password');

// Connect
$db = connectToDB();
// Add the user account
$query = 'INSERT INTO user (forename, surname, username, hash) VALUES (?, ?, ?, ?)';
$stmt = $db->prepare($query);
$stmt->execute([$fore, $sur, $user, $hash]);

echo '<h2>Account created!</h2>';

?>






