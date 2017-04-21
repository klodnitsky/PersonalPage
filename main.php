<?php
/*
 * File: Main page for authorized users
 */

// start session
session_start();

// check user credentials
if(empty($_SESSION['user_id'])) {
    //header("Location: index.php");
}

// database connection
require 'config/database.php';
$db = DB();

// something here
require_once('inc/autoloader.php');

//$user = $app->UserDetails($_SESSION['user_id']); // get user details

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page - Homework 1!</title>
    <link rel="stylesheet" href="css/style.css"> <!-- My personal CSS -->
    <link rel="stylesheet" href="fa470/css/font-awesome.min.css"> <!-- Local Font Awesome 4.7.0 icon pack & CSS -->
</head>
<body>
<div id="wrapper">
    <header>
        <div class="loginForm">
            <p>You are logged in! ;)</p>
        </div>
        <div class="headerLogo">
            <a href="img/avatar.png"><img src="img/avatar.png" alt="Profile avatar" width="120" height="120"></a>
            <h1>Andrew Klodnitsky</h1>
            <h3>This is slogan string. Can I leave it _blank?</h3>
        </div>
    </header>

    <nav class="about">
        <ul class="top-menu">
            <li><i class="fa fa-circle-o fa-lg"></i> <a href="#">Main</a></li>
            <li><i class="fa fa-circle-o fa-lg"></i> <a href="#">Link</a></li>
            <li><i class="fa fa-circle-o fa-lg"></i> <a href="#">Link</a></li>
            <li><i class="fa fa-circle-o fa-lg"></i> <a href="#">Link</a></li>
        </ul>
        <ul class="top-menu-right">
            <li><i class="fa fa-sign-out fa-lg"></i> <a href="inc/logout.php">Logout</a> </li>
        </ul>
    </nav>

    <main id="content">
        <section>
            <p>something here</p>
        </section>
    </main>

</div>

<footer>
    <p>Copyright &#169; <?php echo date("Y"); ?> <a href="mailto:andrew.k2@gmail.com">Andrew Klodnitsky</a></p>
</footer>
</body>
</html>
