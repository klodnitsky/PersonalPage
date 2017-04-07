<?php
/**
 * Created by PhpStorm.
 * User: klodnitsky
 * Date: 07/04/2017
 * Time: 16:35
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Page - Homework 1</title>
    <link rel="stylesheet" href="css/style.css"> <!-- My personal CSS -->
    <link rel="stylesheet" href="fa470/css/font-awesome.min.css"> <!-- Local Font Awesome 4.7.0 icon pack & CSS -->
</head>
<body>
<div id="wrapper">
    <header>
        <a href="img/avatar.png"><img src="img/avatar.png" alt="Profile avatar" width="120" height="120"></a>
        <h1>Andrew Klodnitsky</h1>
        <h3>This is slogan string. Can I leave it _blank?</h3>
    </header>

    <nav>
        <ul class="top-menu">
            <li><i class="fa fa-facebook-square fa-lg"></i> <a href="https://www.facebook.com/andrejs.klodnickis">andrejs.klodnickis</a></li>
            <li><i class="fa fa-linkedin-square fa-lg"></i> <a href="https://www.linkedin.com/in/andrejs-klodnickis-3277554b/">Andrejs Klodnickis</a></li>
            <li><i class="fa fa-instagram fa-lg"></i> <a href="https://www.instagram.com/andrewklodnitsky/">andrewklodnitsky</a></li>
            <li><i class="fa fa-youtube fa-lg"></i> <a href="https://www.youtube.com/user/Andrikz">Andrikz</a></li>
        </ul>
    </nav>

    <main id="content">
        <section>
            <h1>Knowledge base / BLOG</h1>
            <h2>Information about my personal page</h2>
                <p>Oh… rly?! No idea about what I need to write here! Usually professional programmers using <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a> generator, but already I’m not a professional programmer. Hmm… I have a good idea! If you know useful links, good how-to manuals, cool thing or other interesting stuff, please send me an email: <a href="mailto:andrew.k2@gmail.com">andrew.k2@gmail.com</a> or find me on <a href="https://www.facebook.com/andrejs.klodnickis" target="_blank">facebook</a> or others.</p>
            <h2>Useful things</h2>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Goodful table</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="link">Link</th>
                        <th class="description">Description</th>
                    </tr>
                    </tbody>

                    <thead>
                        <tr>
                            <th colspan="2">About IT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="http://fontawesome.io/" target="_blank">fontawesome.io/</a></td>
                            <td><strong>Font Awesome</strong> - The iconic font and CSS toolkit</td>
                        </tr>
                        <tr>
                            <td><a href="https://coolors.co/" target="_blank">coolors.co/</a></td>
                            <td><strong>coolors</strong> - Color palette generator for web design</td>
                        </tr>
                        <tr>
                            <td><a href="http://learn.shayhowe.com/" target="_blank">learn.shayhowe.com/</a></td>
                            <td>Learn to Code HTML & CSS written by amazing designer & front-end developer - <strong><a href="http://shayhowe.com/">Shay Howe</a></strong></td>
                        </tr>
                    </tbody>

                    <thead>
                        <tr>
                            <th colspan="2">Non-IT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="https://www.youtube.com/user/Justdoit150gmail">youtu.be/Justdoit150gmail</a></td>
                            <td><strong>Alexander Kondrashov</strong> - Travel blogger, spear fisherman and nice guy</td>
                        </tr>
                    </tbody>
                </table>
        </section>
        <aside>
            <h1>Small dose of facts</h1>
            <h2>Star sign</h2>
                <p>Aries, pay attention!</p>
            <h2>Phobias</h2>
                <p>Acrophobia & Dentophobia</p>
            <h2>Nationality</h2>
                <p>Moldavian guy, native russian speaker, born in Latvia, with Poland surname, studied in Ukrainian school, sometimes trying to use English language :)</p>
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
