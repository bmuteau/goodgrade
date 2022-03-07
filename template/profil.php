<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mon profil - GoodGrade</title>


<link href="styles/profil.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">

<div id="top"></div>

<body>
    <h1 class="title">Bienvenue sur votre profil! </h1>
    <div class="container">


        <div class="lname"><input type="text" name='fname' placeholder="<?= $_SESSION['firstname'] ?>"></div>
        <div class="fname"><input type="text" name='lname' placeholder="<?= $_SESSION['lastname'] ?>"></div>
        <div class="pseudos"><input type="text" name='pseudo' placeholder="<?= $_SESSION['pseudo'] ?>"></div>
        <div class="password"><input type="text" name='email' placeholder="<?= $_SESSION['email'] ?>"></div>
        <div class="postalcode"><input type="text" name='postalcode' placeholder="<?= $_SESSION['postalcode'] ?>"></div>
        <div class="picture">

            <?php if (!empty($_SESSION['image'])) { ?>
                <img class="avatar" src="public/avatar/<?php echo $_SESSION['image']; ?> " width="120px" height="120px">
            <?php
            } else {
            ?>
                <img class="avatar" width="120px" height="120px" src="public/avatar/defaults/default.png">
            <?php
            }
            ?>

        </div>


    </div>
    <button type="submit" class="change" name="change"><a href="change">Changer mes informations</a> </button>
    <p class="number"><span><?= $count['count'] ?></span> avis déposés</p>

    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
    <p class="anonym">Passer le compte en mode anonyme</p>
    <a class="changemdp" href="newmdp"><input style="position: relative;
    left: 40%;
    top: 5%;" type="submit" value="changer son mdp"></a>
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