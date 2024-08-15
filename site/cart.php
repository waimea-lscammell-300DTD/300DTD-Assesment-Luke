<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';
?>

<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main class="cart">


    <h2 class="cart">CART</h2>


    <?php
    echo '<section class="cart">';
    if (isset($_SESSION['order'])) {
        $db = connectToDB();
        $query = 'Select * FROM products WHERE id=?';

        foreach ($_SESSION['order'] as $productID) {
            // echo '<li>' . $productID . '</li>';
    
            try {
                $stmt = $db->prepare($query);
                $stmt->execute([$productID]);
                $product = $stmt->fetch();
            } catch (PDOException $e) {
                consoleLog($e->getMessage(), 'DB Connect', ERROR);
                die('There was an error when connecting to the database');
            }
            consoleLog($product);
            echo '<article class"cart">';
            echo '<h3>' . $product['name'] . '</h3>';

            echo '<img src="image.php?id=' . $product['id'] . '">';
            echo '</article>';
        }
        echo '</section>';


        echo '<form class="cart" action="place-order.php" method="post">
            <label><b class="cart"> Address </b></label>
            <textarea name="address" required></textarea>
            <input type="submit" value="Place order">
        </form>';

    } else {
        echo '<h2 class="cart-empty"> Cart empty </h2>';
    }


    ?>