<?php
require_once '_session.php';
require_once 'lib/debug.php';
require_once 'lib/db.php';
?>

<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main>

    <section>

        <article>

            <h2>CART</h2>

            <?php

            $db = connectToDB();
            $query = 'Select * FROM products WHERE id=?';


            echo '<ul>';
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

                echo '<li>' . $product['name'];
                echo '<img src="image.php?id=' . $product['id'] . '">';

            }
            echo '</ul>';
        
            echo '<label> Address </label>';
  
            echo '<form action="place-order.php" method="post">
            
            <textarea name="address" required></textarea>
            <input type="submit" value="Place order">
        </form>';
            ?>

        </article>


    </section>

</main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>