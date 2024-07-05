<!-- Perform the logout, e.g. session_destroy(); -->

<?php

    require_once '_config.php';
    require_once '_session.php';

    session_destroy();
    header('HX-Redirect: index.php');
?>

