<?php
include '../template/header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../styles/contact.css" rel="stylesheet">
<link href="../styles/footer.css" rel="stylesheet">


<div id="top"></div>

<body>

    <h1 class="contacte">Nous contacter </h1>

    <form>
        <input type="text" placeholder="Nom"> <br />
        <input type="text" placeholder="Prénom"><br />
        <input type="email" placeholder="Email" required><br />
        <input type="text" placeholder="Titre"><br />
        <textarea rows="5" cols="33" required> Entrer votre message </textarea><br />
        <input type="submit" class="submit" placeholder="Envoyer ">

    </form>

</body>

<footer>



    <div class="footer">

        <div class="faq"><a href="#">FAQ</a></div>
        <a href="#top"> <img src="../src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="#">Nous contacter</a></div>
        <div class="legal"><a href="#">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>