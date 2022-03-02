<?php

global $hlp, $db;


?>


<link href="styles/header.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">








<link rel="shortcut icon" type="image/png" href="src/favicon/favicon-32x32.png" />


<section class="header">
    <div class="left"><a href="home"><img src="src/Logo1.png" class="logo"></a></div>

    <?php if (isset($_SESSION['email'])) {
        $login = $_SESSION['email'];
    ?> <a href="profil"><img class="profil" src="src/iconfinder_customer_man_user_account_profile_1564534.svg"></a>
    <?php } else {  ?>
        <div class="right"><a href="login">Connexion</a><br>
            <a href="persoregister">Inscription</a>
        </div>
    <?php  } ?>





</section>

<div class="menu-bg"></div>
<div class="menu-burger">☰</div>
<div class="menu-items">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div> <a href="home">• Accueil </a> </div>
    <div><a href="howtouse">• Comment ça marche ? </a></div>
    <div><a href="faq">• FAQ </a></div>
    <br />

    <div> <a href="contact">• Nous contacter</a></div>
    <div><a href="mentionlegal">• Mentions légale </a></div>
    <div><a href="confidentiality">• Politique de confidentialité</a></div>
    <br />

</div>


<script src="script/navbar.js"></script>