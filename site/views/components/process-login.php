<?php

require_once '_session.php';
require_once '_functions.php';

consoleLog($_POST, 'Form Data');

// Get the data values from the form
$user = $_POST['user'];
$pass = $_POST['pass'];

$db = connectToDB();
// Try to find a user account with the given username
$query = 'SELECT * FROM users WHERE username = ?';
$stmt = $db->prepare($query);
$stmt->execute([$user]);
$userData = $stmt->fetch();

consoleLog($userData);

// Did we actually get a user account?
if ($userData){
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








