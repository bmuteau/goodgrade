<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Créer sa page entreprise - GoodGrade</title>


<link rel="shortcut icon" type="image/png" href="src/favicon/favicon-32x32.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

<link href="styles/etregistersec.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">

<body>

    <a href="home"> <img src="src/Logo1.png" class="logo"></a>

    <h1 class="thanks"> Merci pour votre confiance </h1>
    <h2 class="desc">Pour créer la page de votre établissement, veuillez compléter les champs suivant :</h2>
    <form>

        <select name="eta" id="et-select" required>
            <option value="">--Choisissez votre secteur--</option>
            <option value="resto">Restauration </option>
            <option value="hotel">Hôtel</option>
            <option value="hr">Hôtel-Restaurant</option>

        </select><br />
        <textarea rows="5" cols="33" onclick="javascript:this.placeholder = '';" placeholder=" Presentez votre établissement en quelques lignes... " required></textarea><br />
        <input type="url" onclick="javascript:this.placeholder = '';" placeholder="Votre site Web ou page Facebook" required> <br />
        <input type="number" onclick="javascript:this.placeholder = '';" placeholder="Numéros de rue" required> <br />
        <input type="text" onclick="javascript:this.placeholder = '';" placeholder="Nom de rue" required> <br />

        <fieldset>
            <legend>Vos photos d'établissement</legend>
            <br />
            <input type="file"><br />
            <input type="file"><br />
            <input type="file"><br />
            <p class="more">Pour ajouter plus de photos, merci de bien vouloir faire une demande directement par le formulaire de contact ! </p>
        </fieldset>

        <input type="button" value="Envoyer" class="send">

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