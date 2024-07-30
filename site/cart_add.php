<?php

$productID = $_POST['id'];
$productName = $_POST['name'];  
// Get the form data from the POST array
$sql = "SELECT id, name 
                FROM products ";



$standardSql = getRecords($sql);

// echo '<p>'.$standards.'</p>';

echo '<h2>Adding assignment...</h2>';

$sql = 'INSERT INTO assignments (id, name) VALUES (?, ?)';

modifyRecords($sql, 'issi', [$standard, $assignmentTitle, $date, $subjectID]);

header('location: cart.php?id=' . $user_id);
?>