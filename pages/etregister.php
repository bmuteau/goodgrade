<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type="image/png" href="../src/favicon/favicon-32x32.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

<link href="../styles/etregister.css" rel="stylesheet">
<link href="../styles/footer.css" rel="stylesheet">

<body>

    <a href="../pages/home.php"> <img src="../src/Logo1.png" class="logo"></a>

    <h1 class="title"> Enregister son établissement </h1>
    <h2 class="registeret"><a href="../pages/persoregister.php"> ou s'inscrire </a> </h2>

    <form method="POST">
        <p class="rules">Tous les champs sont obligatoires</p>
        <br />
        <input name="gerantname" type="text" placeholder="NOM DU GERANT" onclick="javascript:this.placeholder = '';" required>
        <br />
        <input name="etname" type="text" placeholder="NOM DE L'ETABLISSEMENT" onclick="javascript:this.placeholder = '';" required>
        <br />
        <input name="phone" type="number" placeholder="NUMEROS DE TELEPHONE" onclick="javascript:this.placeholder = '';" required>
        <br />
        <input name="mail" type="email" placeholder="EMAIL" autocomplete="off" onclick="javascript:this.placeholder = '';" requiered>
        <br />
        <input name="password" type="password" placeholder=" MOT DE PASSE" autocomplete="off" onclick="javascript:this.placeholder = '';" required>
        <br />
        <input name="postal" type="number" placeholder="CODE POSTAL" onclick="javascript:this.placeholder = '';" required>
        <br />



        <input name="sendregister" type="submit" class="submitsend" value="S'inscrire"><br />
        <a href="login" class="already">J'ai déjà un compte ! </a>

    </form>

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