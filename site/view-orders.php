<?php require_once '_config.php'; ?>
<?php require_once 'lib/db.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main>

    <h1>Orders Placed</h1>
    <?php

    $db = connectToDB();

    // Get the image type and binary data
    $query = 'SELECT orders.id     AS oid, 
                    orders.date,
                    orders.address,
                    contains.quantity,
                    products.name,
                    products.price,
                    products.id     AS pid,
                    users.forename,
                    users.surname
                     
                FROM orders
                JOIN users ON users.id = orders.user_id
                JOIN contains ON orders.id = contains.order_id
                JOIN products ON products.id = contains.product_id
                
                ORDER BY date DESC';

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $orders = $stmt->fetchAll();
    } catch (Exception $e) {
        consoleError($e->getMessage(), 'Product SELECT');
        die('Unable to get products from DB');
    }

    echo '<section>';

    foreach ($orders as $order) {
        echo '<article>';

        echo '<h3>' . $order['name'] . '</h3>';

        echo '<img src="image.php?id=' . $order['pid'] . '">';

        echo '<h3>' . ' x ' . $order['quantity'] . '</h3>';
        echo '<p>' . $order['date'] . '</p>';
        echo '<p>' . $order['forename'] . ' ' . $order['surname'] . '</p>';
        echo '<o>' . $order['address'] . '</p>';

        echo '</article>';
    }

    echo '</section>';
    ?>

</main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>