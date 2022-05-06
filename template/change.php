<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <h1 class="change-title">Modifier mes informations ! </h1>
        <div class="change-container">

            <form method="POST" action="" enctype="multipart/form-data">
                <div class="lname"><label>Mon prénom:</label></br><input type="text" name='fname' value="<?= $_SESSION['firstname'] ?>"></div>
                <div class="fname"><label>Mon nom:</label></br><input type="text" name='lname' value="<?= $_SESSION['lastname'] ?>"></div>
                <div class="pseudos"><label>Mon pseudo :</label></br> <input type="text" name='pseudo' value="<?= $_SESSION['pseudo'] ?>"></div>
                <div class="mail"><label>Mon adresse mail:</label></br> <input type="text" name='email' value="<?= $_SESSION['email'] ?>"></div>
                <div class="postalcode"><label>Mon code postal:</label></br><input type="text" name='postalcode' value="<?= $_SESSION['postalcode'] ?>"></div></br>
                <label>Mon image de profil</label><br />
                <input type="file" name="avatar"></br>

                <input type="submit" value="Enregistrer mes informations" name="save" class="changeInfo">


            </form>
            <?php if (isset($msg)) {
                echo $msg ?>
            <?php }

            ?>
        </div>
    </body>
    <footer>



        <div class="home-footer">

            <div class="faq"><a href="faq">FAQ</a></div>
            <a href="#top"> <img src="src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
            <div class="contact"><a href="contact">Nous contacter</a></div>
            <div class="legal"><a href="mentionlegal">Mentions légales</a></div>
            <div class="copyright">GoodGrade, site d'avis sécurisé</div>

        </div>
    </footer>

</html>