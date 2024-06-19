<?php

require_once '_session.php';
require_once '_functions.php';

consoleLog($_POST, 'Form Data');

// Get the data values from the form
$fore = $_POST['forename']
$sur = $_POST['surname']
$user = $_POST['user'];
$pass = $_POST['pass'];

// Hash the supplied password
$hash = password_hash($pass, PASSWORD_DEFAULT);
consoleLog($hash, 'Hashed Password');

// Connect
$db = connectToDB();
// Add the user account
$query = 'INSERT INTO users (forename, surname, username, hash) VALUES (?, ?, ?, ?)';
$stmt = $db->prepare($query);
$stmt->execute([$fore, $sur, $user, $hash]);

echo '<h2>Account created!</h2>';

consoleLog($userData);

// Did we actually get a user account?
if ($userData == false){
 // Yes, we have a account, so check password
if(password_verify($pass,$userData['hash'])){
    // We got here, so user and password both ok
    $_SESSION['user']['loggedIn'] = true;
    // Save user info for later use
    $_SESSION['user']['forename'] = $userData['forename'];
    $_SESSION['user']['surname'] = $userData['surname'];
    // Head back to the home page 
    header('location: index.php');
    }
    else{
        echo'<h2>Incorrect password!</h2>';
    }
}
else{
    echo '<h2>User account does not exist!</h2>';
}

echo '<p><a href="index.php">Home</a>';   








