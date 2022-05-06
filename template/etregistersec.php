<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Créer sa page entreprise - GoodGrade</title>


<link rel="shortcut icon" type="image/png" href="src/favicon/favicon-32x32.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<body>

    <a href="home"> <img src="src/Logo1.png" class="logo"></a>

    <h1 class="thanks"> Merci pour votre confiance </h1>
    <h2 class="desc">Pour créer la page de votre établissement, veuillez compléter les champs suivant :</h2>
    <form method="POST" class="etregistersec-form" action="" enctype="multipart/form-data">

        <select name="eta" id="et-select" required>
            <option value="">--Choisissez votre secteur--</option>
            <option value="Restaurant">Restauration </option>
            <option value="hotel">Hôtel</option>
            <option value="hotelRestaurant">Hôtel-Restaurant</option>

        </select><br />
        <textarea name="description" rows="5" cols="33" onclick="javascript:this.placeholder = '';" placeholder=" Presentez votre établissement en quelques lignes... " required></textarea><br />
        <input name="website" type="url" onclick="javascript:this.placeholder = '';" placeholder="Votre site Web ou page Facebook"> <br />
        <input name="adress" type="text" onclick="javascript:this.placeholder = '';" placeholder="Adresse" required> <br />

        <fieldset>
            <legend>Vos photos d'établissement</legend>
            <center>
                <br />
                <input name="image" type="file"><br />
                <input name="image2" type="file"><br />
                <input name="image3" type="file"><br />
            </center>
        </fieldset>


        <?php
        if ($result > 0) {
        ?>
            <div class="error"><?= $error  ?></div>
        <?php
        }



        ?>

        <input name="send" type="submit" value="Envoyer" class="send">

        <form>
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