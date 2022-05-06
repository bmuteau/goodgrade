<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abonnement - GoodGrade</title>


<link href="styles/style.css" rel="stylesheet">

<div id="top"></div>

<body>
    <h1 class="subscription-title">Nos abonnements </h1>

    <ul>

        <li class="formule">
            <div class="subscription-name">L'abonnement tout inclus</div>
            <div class="subscription-description">Cette offre comprend : <br />
                - Une <b>tablette 7" </b> pour une utilisation directe.<br />
                - Un <b>support tablette </b> réglable pour la positionner où vous voulez.<br />
                - Une <b>documentation complète</b> par mail et papier pour l'utilisation de la tablette et GoodGrade. <br />
                - Un accès au service après vente <b>prioritaire</b>. <br />
                - <b>Engagement d'un an </b>, une fois l'engagement terminé, l'abonnement passe automatiquement à 9,99€.
            </div>
            <div class="price">19,99€ le premier puis 12,99€ par mois</div>
        </li>
        <li class="formule">
            <div class="subscription-name">L'abonnement sans engagement</div>
            <div class="subscription-description">Cette offre comprend: <br />
                - <b>Aucun accessoire</b> n'est livré avec cette offre, vous devrez donc avoir votre tablette ou téléphone. <br />
                - Le <b>générateur de QrCode</b> directement depuis votre espace personnelle. <br />
                - Vous recevrez à votre adresse mail <b>une documentation </b>pour utiliser GoodGrade. <br />
                - <b>Aucun engagement</b>, vous pouvez l'arrêter quand vous voulez par mail.

            </div>
            <div class="price"> 9,99€ par mois</div>
        </li>
    </ul>


    <div class="howtosubscribed">

        <p class="subscriber"> Pour souscrire à un abonnement, merci de remplir le formulaire ci-joint, nous prendrons contact avec vous ! </p>
        <form method="POST" class="subscription-form">
            <input type="text" name="name" placeholder="Nom" onclick="javascript:this.placeholder = '';"> <br />
            <input type="email" name="email" placeholder="Email" onclick="javascript:this.placeholder = '';" required><br />
            <input type="tel" name="tel" placeholder="Numéros de téléphone" onclick="javascript:this.placeholder = '';" required><br />
            <label>Choisir un abonnement : </label></br>
            <select name="subscription" id="subs">
                <option value="tout-inclus">Tout inclus</option>
                <option value="sans-engagement">Sans engagement</option>
            </select></br>
            <input type="submit" name="send" class="next" placeholder="Envoyer ">

        </form>
        <?php

        if ($sent == true) {



        ?>

            <div class="validateMail">
                <p>Nous avons bien reçu votre demande, nous allons vous recontacter très rapidement ! </p>
            </div>

        <?php
        }
        ?>



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