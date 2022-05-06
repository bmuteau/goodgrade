<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mon profil - GoodGrade</title>


<link href="styles/style.css" rel="stylesheet">

<div id="top"></div>

<body>
    <h1 class="title">Bienvenue sur votre profil! </h1>
    <div class="profil-container">


        <input type="text" class="lname" name='fname' placeholder="<?= $_SESSION['firstname'] ?>">
        <input type="text" class="fname" name='lname' placeholder="<?= $_SESSION['lastname'] ?>">
        <input type="text" class="pseudos" name='pseudo' placeholder="<?= $_SESSION['pseudo'] ?>">
        <input type="text" class="password" name='email' placeholder="<?= $_SESSION['email'] ?>">
        <input type="text" class="postalcode" name='postalcode' placeholder="<?= $_SESSION['postalcode'] ?>">
        <div class="picture">

            <?php if (!empty($_SESSION['image'])) { ?>
                <img class="avatar" src="public/avatar/<?= $_SESSION['image']; ?> " width="120px" height="120px">
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
    <p class="number"><span class="span"><?= $count['count'] ?></span> avis déposés</p>


    <a href="newmdp"><input class="changemdp" type="submit" value="Modifier son mot de passe"></a>
    <a href="deconnexion"><input class="changemdp" type="submit" value="Se déconnecter"></a>





</body>
<footer>



    <div class="profil-footer">

        <div class="faq"><a href="faq">FAQ</a></div>
        <a href="#top"> <img src="src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="contact">Nous contacter</a></div>
        <div class="legal"><a href="mentionlegal">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>