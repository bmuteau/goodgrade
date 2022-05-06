<title>Formulaire de contact - GoodGrade</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="styles/style.css" rel="stylesheet">


<div id="top"></div>

<body>

    <h1 class="contacte">Nous contacter </h1>

    <form method="POST" class="form-contact">
        <input type="text" name="name" placeholder="Nom" onclick="javascript:this.placeholder = '';"> <br />
        <input type="text" name="firstname" placeholder="Prénom" onclick="javascript:this.placeholder = '';"><br />
        <input type="email" name="email" placeholder="Email" onclick="javascript:this.placeholder = '';" required><br />
        <input type="text" name="object" placeholder="Titre" onclick="javascript:this.placeholder = '';"><br />
        <textarea rows="5" name="message" cols="33" required> Entrer votre message </textarea><br />
        <input type="submit" name="send" class="submit" placeholder="Envoyer ">

    </form>
    <?php

    if ($sent == true) {



    ?>

        <div class="validateMail">
            <p>Le mail à bien été envoyé ! </p>
        </div>

    <?php
    }
    ?>
</body>
<footer>



    <div class="footer-contact">

        <div class="faq"><a href="faq">FAQ</a></div>
        <a href="#top"> <img src="src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="contact">Nous contacter</a></div>
        <div class="legal"><a href="mentionlegal">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>