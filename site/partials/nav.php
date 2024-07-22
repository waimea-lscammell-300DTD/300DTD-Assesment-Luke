<!-- Main navigation menu. Can add logic for user type / access -->
<?php
require_once '_session.php';
?>
<nav id="main-nav">

    <menu hx-boost="true">

        <li><a href="index.php">Home</a>
<<<<<<< Updated upstream
<<<<<<< HEAD
        <li><a href="about.php">About</a></li>
=======
        <li><a href="about.php">About</a>
>>>>>>> Stashed changes

            <?php if ($loggedIn): ?>
            <li><a href="logout-user.php">Logout</a>
            <?php else: ?>
            <li><a href="form-login.php">Login</a>
            <li><a href="form-signup.php">Sign Up</a>
            <?php endif ?>

=======
        <li><a href="about.php">About</a>

        <?php if ($loggedIn): ?>
            <li><a href="logout-user.php">Logout</a>
        <?php else: ?>
            <li><a href="form-login.php">Login</a>
            <li><a href="form-signup.php">Sign Up</a>
        <?php endif ?>
            
>>>>>>> 45d31bbe4663ed2a6c259b9b266b0999a3999534

    </menu>

</nav>