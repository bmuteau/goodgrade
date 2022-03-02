<?php
global $db, $hlp;
include 'template/header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mon profil - GoodGrade</title>


<link href="styles/profil.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">

<div id="top"></div>

<body>
    <h1 class="title">Bienvenue sur votre profil! </h1>
    <div class="container">


        <div class="lname"><input type="text" placeholder="<?= $_SESSION['firstname'] ?>"></div>
        <div class="fname"><input type="text" placeholder="<?= $_SESSION['lastname'] ?>"></div>
        <div class="pseudos"><input type="text" placeholder="<?= $_SESSION['pseudo'] ?>"></div>
        <div class="password"><input type="text" placeholder="* * * * *"></div>
        <div class="postalcode"><input type="text" placeholder="<?= $_SESSION['postalcode'] ?>"></div>
        <div class="picture"><img src="src/iconfinder_customer_man_user_account_profile_1564534.svg"><img src="src/editpen.svg" class="pen"></div>
    </div>
    <p class="number"><span>$Variable_AvisCompté</span> avis déposés</p>

    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
    <p class="anonym">Passer le compte en mode anonyme</p>

    <a class="deco" href="deconnexion"><input style="position: relative;
    left: 40%;
    top: 5%;" type="submit" value="se deconnecter"></a>
    <img src="src/iconfinder_arrow_arrow left_right_411.png" class="list">
    <p class="favorite"><a href="favorite">Retrouver mes lieux favoris</a></p>

</body>
<footer>



    <div class="footer">

        <div class="faq"><a href="faq">FAQ</a></div>
        <a href="#top"> <img src="src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="contact">Nous contacter</a></div>
        <div class="legal"><a href="mentionlegal">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>