<!-- Main navigation menu. Can add logic for user type / access -->
<?php
require_once '_session.php';
?>
<nav id="main-nav">
    <menu hx-boost="true">

        <li><a href="index.php">Home</a>

        <li><a href="about.php">About</a>


            <?php if ($loggedIn): ?>
            <li><a href="cart.php">
                    🛒

                    <?php
                    if (isset($_SESSION['order'])) {
                        echo '<span id="cart-count">' . count($_SESSION['order']) . '</span>';
                    }
                    ?>

                </a>
            <li><a href="logout-user.php">Logout</a>
            <?php else: ?>
            <li><a href="form-login.php">Login</a>
            <li><a href="form-signup.php">Sign Up</a>
            <?php endif ?>

    </menu>

</nav>