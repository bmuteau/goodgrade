<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mot de passe oublié - GoodGrade</title>


<link rel="shortcut icon" type="image/png" href="src/favicon/favicon-32x32.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

<link href="styles/forgot.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">

<body>

    <a href="home"> <img src="src/Logo1.png" class="logo"></a>

    <h1 class="title"> Mot de passe oublié ? </h1>

    <div class="body">

        <form method="post">
            <div class="container">
                <label for="email">Saisir votre adresse mail </label><br />
                <input type="email" placeholder="Entrer votre adresse mail" name="email" required>
                <button type="submit">Envoyer un mot de passe aléatoire</button>
            </div>
            <a href="login" class="log">Se connecter</a>
            <?php
            if ($messageE || $messageG != "") {
            ?>
                <div class="message">

                    <?= $messageE ?>
                </div>
                <div class="messageG">

                    <?= $messageG ?>
                </div>
            <?php
            }
            ?>
        </form>
        </form>
    </div>

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