<!-- Header typically has the site name which links to home page -->

<header id="main-header">

    <a href="index.php"><?= SITE_NAME ?></a>

    <?php

    if ($loggedIn) {
        if ($isAdmin) {
            echo '<b class"cart"><p id="username">Welcome, ' . $_SESSION['user']['forename'] . ' ' . $_SESSION['user']['surname'] . ' (Admin)</b></p>';
        } else {
            echo '<b class"cart"><p id="username">Welcome, ' . $_SESSION['user']['forename'] . ' ' . $_SESSION['user']['surname'] . '</b></p>';
        }
    }


    ?>

    <?php require 'nav.php'; ?>

</header>