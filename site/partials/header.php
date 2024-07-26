<!-- Header typically has the site name which links to home page -->

<header id="main-header">
    
    <a href="index.php"><?= SITE_NAME ?></a>

    <?php

    if ($loggedIn) {
        echo '<p id="username">Welcome, ' . $_SESSION['user']['forename'] . ' ' . $_SESSION['user']['surname'] . '</p>';
    }

    ?>
    
    <?php require 'nav.php'; ?>

</header>

