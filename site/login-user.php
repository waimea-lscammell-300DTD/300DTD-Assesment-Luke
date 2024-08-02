<?php

require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';

// consoleLog($_POST, 'Form Data');

// Get the data values from the form
$user = $_POST['username'];
$pass = $_POST['password'];

$db = connectToDB();
// Try to find a user account with the given username
$query = 'SELECT * FROM users WHERE username = ?';
$stmt = $db->prepare($query);
$stmt->execute([$user]);
$userData = $stmt->fetch();

// consoleLog($userData);

// Did we actually get a user account?
if ($userData){
 // Yes, we have a account, so check password
if(password_verify($pass,$userData['hash'])){
    // We got here, so user and password both ok
    unset($_SESSION['user']);
    unset($_SESSION['order']);

    $_SESSION['user']['loggedIn'] = true;
    // Save user info for later use
    $_SESSION['user']['forename'] = $userData['forename'];
    $_SESSION['user']['surname'] = $userData['surname'];
    $_SESSION['user']['id'] = $userData['id'];

    
    // Head back to the home page 
    header('hx-redirect:index.php'); 
    }
    else{
        echo'<h2>Incorrect password!</h2>';
    }
}
else{
    echo '<h2>User account does not exist!</h2>';
}


?>
