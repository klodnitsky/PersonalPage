<?php
/*
 * File: Login/Registration main file
 */

// start session
session_start();

//database connection
require 'config/database.php';
$db = DB();

$login_error_message = '';
$register_error_message = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page - Homework!</title>
    <link rel="stylesheet" href="css/style.css"> <!-- My personal CSS -->
    <link rel="stylesheet" href="fa470/css/font-awesome.min.css"> <!-- Local Font Awesome 4.7.0 icon pack & CSS -->
</head>
<body>
<div id="wrapper">
    <header>
        <div class="loginForm">
                <form action="index.php" method="post">
                    <div class="loginRow">
                        <label for="username"><td>Username:</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="loginRow">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="loginBtn">
                        <input type="submit" name="btnLogin" value="Login">
                    </div>
                </form>
        </div>
        <div class="headerLogo">
            <a href="img/avatar.png"><img src="img/avatar.png" alt="Profile avatar" width="120" height="120"></a>
            <h1>Andrew Klodnitsky</h1>
            <h3>This is slogan string. Can I leave it _blank?</h3>
        </div>
    </header>

    <nav class="about">
        <ul class="top-menu">
            <li><i class="fa fa-facebook-square fa-lg"></i> <a href="https://www.facebook.com/andrejs.klodnickis">andrejs.klodnickis</a></li>
            <li><i class="fa fa-linkedin-square fa-lg"></i> <a href="https://www.linkedin.com/in/andrejs-klodnickis-3277554b/">Andrejs Klodnickis</a></li>
            <li><i class="fa fa-instagram fa-lg"></i> <a href="https://www.instagram.com/andrewklodnitsky/">andrewklodnitsky</a></li>
            <li><i class="fa fa-youtube fa-lg"></i> <a href="https://www.youtube.com/user/Andrikz">Andrikz</a></li>
        </ul>
    </nav>

    <main id="content">
        <section class="about">
            <h1>Main content here</h1>
            <h2>Information about my personal page</h2>
            <p>Oh… rly?! No idea about what I need to write here! Usually professional programmers using <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a> generator, but already I’m not a professional programmer. Hmm… I have a good idea! If you know useful links, good how-to manuals, cool thing or other interesting stuff, please send me an email: <a href="mailto:andrew.k2@gmail.com">andrew.k2@gmail.com</a> or find me on <a href="https://www.facebook.com/andrejs.klodnickis" target="_blank">facebook</a> or others.</p>
        </section>
        <aside class="about">
            <h1>Small dose of facts</h1>
            <h2>Star sign</h2>
            <p>Aries, pay attention!</p>
            <h2>Phobias</h2>
            <p>Acrophobia & Dentophobia</p>
            <h2>Nationality</h2>
            <p>Moldavian guy, native russian speaker, born in Latvia, with Poland surname, studied in Ukrainian school, sometimes trying to use English language</p>
            <h2>Hobby</h2>
            <p>Running & Single Malt Whisky</p>
        </aside>
    </main>

</div>

<footer>
    <p>Copyright &#169; <?php echo date("Y"); ?> <a href="mailto:andrew.k2@gmail.com">Andrew Klodnitsky</a></p>
</footer>
</body>
</html>
