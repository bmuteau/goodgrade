<?php
include '../template/header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../styles/home.css" rel="stylesheet">
<link href="../styles/footer.css" rel="stylesheet">




<div id="top"></div>

<body>
    <div id="main">
        <br>

        <br>
        <br>
        <br>
        <br>

        <form action="#" method="get">
            <input class="search" type="search" name="terme" placeholder="Rechercher un établissement">
            <img src="../src/iconfinder_search_2561381.svg" class="submit">
        </form>


        <h1 class="title">NOS RECOMMANDATIONS </h1>


        <div class="c">

            <input type="radio" name="a" id="cr-1" checked>
            <label for="cr-1" style="--hue: 228"></label>
            <div class="ci" style="--z: 4">
                <h2 class="ch" style="--h: 32; --s: 80%; --l: 90%">$Variable Name | $Variable note</h2>
                <img class="img" src="../src/images.jpg" alt="resto1 ">
            </div>

            <input type="radio" name="a" id="cr-2">
            <label for="cr-2" style="--hue: 82"></label>
            <div class="ci" style="--z: 3">
                <h2 class="ch" style="--h: 82; --s: 80%; --l: 90%">$Variable Name | $Variable note</h2>
                <img class="img" src="../src/téléchargement.jpg" alt="resto2 ">
            </div>

            <input type="radio" name="a" id="cr-3">
            <label for="cr-3" style="--hue: 40"></label>
            <div class="ci" style="--z: 2">
                <h2 class="ch" style="--h: 40; --s: 100%; --l: 89%">In the mountains?</h2>
                <img class="img" src="https://images.unsplash.com/photo-1518805629729-3e55b81b2393?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=500&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=700" alt="Mountains and houses">
            </div>

            <input type="radio" name="a" id="cr-4">
            <label for="cr-4" style="--hue: 210"></label>
            <div class="ci" style="--z: 1">
                <h2 class="ch" style="--h: 210; --s: 70%; --l: 90%">Above looks beautiful?</h2>
                <img class="img" src="https://images.unsplash.com/photo-1488831948116-38bc1351c6d6?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=500&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=700" alt="Sky and mountains">
            </div>

        </div>
        <h1 class="new">NOUVEAUX ETABLISSEMENTS INSCRITS </h1>

        <ul class="list">
            <li class="last1">$Variable Nom1</li>
            <li class="last2">$Variable Nom2</li>
            <li class="last3">$Variable Nom3</li>
            <li class="last4">$Variable Nom4</li>
            <li class="last5">$Variable Nom5</li>
            <li class="last6">$Variable Nom6</li>
        </ul>


    </div>
</body>
<footer>



    <div class="footer">

        <div class="faq"><a href="../pages/faq.php">FAQ</a></div>
        <a href="#top"> <img src="../src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="../pages/contact.php">Nous contacter</a></div>
        <div class="legal"><a href="../pages/mentionlegal.php">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>
<script src="../script/carousel.js"></script>