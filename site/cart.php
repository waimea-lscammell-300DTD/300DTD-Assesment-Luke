<?php 

$db = connectToDB();   
$query = 'Select * FROM orders';
try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $items = $stmt->fetchAll();
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Connect', ERROR);
    die('There was an error when connecting to the database');
 }
consoleLog($items);

echo '<ul>';
foreach($items as $item) {
    echo '<li>' . $item['name'] . ' $'. $item['cost'] . '</li>';
    
}
echo '</ul>';