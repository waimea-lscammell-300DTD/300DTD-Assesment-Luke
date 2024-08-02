<?php require_once '_config.php'; ?>
<?php require_once 'lib/db.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main>

    <h1>Jess's Crochet</h1>
    <img src="images/stand.jpg">

    <?php

    $db = connectToDB();

    // Get the image type and binary data
    $query = 'SELECT id, name, price, category 
                FROM products';

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $products = $stmt->fetchAll();
    } catch (Exception $e) {
        consoleError($e->getMessage(), 'Product SELECT');
        die('Unable to get products from DB');
    }

    echo '<section>';

    foreach ($products as $product) {
        echo '<article>';

        echo '<h3>' . $product['name'] . '</h3>';

        echo '<img src="image.php?id=' . $product['id'] . '">';
        echo '<h3>' . ' $' . $product['price'] . ' Each' . '</h3>';

        if ($loggedIn) {
            echo '<form action="cart-add.php" method="post">
                    <input type="hidden" name="id" value="' . $product['id'] . '">
                    <input type="submit" value="Add to Cart">
                </form>';
        }
        echo '</article>';
    } 

    echo '</section>';
    ?>

</main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>