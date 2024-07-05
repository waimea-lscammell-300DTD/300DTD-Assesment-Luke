<!-- Main navigation menu. Can add logic for user type / access -->
<?php
require_once '_session.php';
?>
<nav id="main-nav">

    <menu hx-boost="true">

        <li><a href="index.php">Home</a>
        <li><a href="about.php">About</a></li>

        <?php if ($loggedIn): ?>
            <?php $name = $_SESSION['user']['forename'] . ' ' . $_SESSION['user']['surname']; ?>
            <?php echo '<h1>Welcome, ' . $user . '</h1>'; ?>
            <li><a href="logout-user.php">Logout</a>
            <?php else: ?>
            <li><a href="form-login.php">Login</a>
            <li><a href="form-signup.php">Sign Up</a>
            <?php endif ?>


    </menu>

</nav>