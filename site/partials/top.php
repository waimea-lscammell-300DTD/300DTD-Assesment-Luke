<!-- Head section content -->
<?php
require_once '_session.php';
$loggedIn = $_SESSION['user']['loggedIn'] ?? false;
$isAdmin = $_SESSION['user']['isAdmin'] ?? false;
?>


<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= SITE_NAME ?></title>

    <!-- Load favicon -->
    <link rel="icon" href="images/stand.jpg">

    <!-- Load stylesheets -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Load HTMX library -->
    <script src="https://unpkg.com/htmx.org"></script>

    <!-- Load Nav script -->
    <script src="js/nav.js"></script>

</head>

<body>