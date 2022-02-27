<?php
include 'template/header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abonnement - GoodGrade</title>


<link href="styles/subscription.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">

<div id="top"></div>

<body>
    <h1 class="title">Votre abonnement </h1>

    <p class="desc">Retrouver vos ici votre abonnement en cours ou choisissez en un. </p>
    <!-- Si abonné, affiché l'abonnement avec le temps restant (en jours) -->

    <h2 class="ifsubscriber" style="visibility: hidden;"> Vous êtes abonné depuis le $VARIABLE_SubscribeDate avec la formule $VARIABLE_SubscribeFormule</h2>

    <ul>
        <li class="formule">
            <div class="name">L'abonnement tout inclus</div>
            <div class="description">Cette offre comprend : <br />
                - Une <b>tablette 7" </b> pour une utilisation directe.<br />
                - Un <b>support tablette </b> réglable pour la positionner où vous voulez.<br />
                - Une <b>documentation complète</b> par mail et papier pour l'utilisation de la tablette et GoodGrade. <br />
                - Un accès au service après vente <b>prioritaire</b>. <br />
                - <b>Engagement d'un an </b>, une fois l'engagement terminé, l'abonnement passe automatiquement à 9,99€.
            </div>
            <div class="price">19,99€ le premier puis 12,99€ par mois</div>
        </li>
        <li class="formule">
            <div class="name">L'abonnement sans engagement</div>
            <div class="description">Cette offre comprend: <br />
                - <b>Aucun accessoire</b> n'est livré avec cette offre, vous devrez donc avoir votre tablette ou téléphone. <br />
                - Le <b>générateur de QrCode</b> directement depuis votre espace personnelle. <br />
                - Vous recevrez à votre adresse mail <b>une documentation </b>pour utiliser GoodGrade. <br />
                - <b>Aucun engagement</b>, vous pouvez l'arrêter quand vous voulez par mail.

            </div>
            <div class="price"> 9,99€ par mois</div>
        </li>
    </ul>


    <form>

        <label class="label">
            Sélectionner l'abonnement qui vous convient:
        </label> <br />
        <div class="check">
            <input type="radio" id="subsall" name="subsall">
            <label for="subsall">L'abonnement tout inclus</label> <br />
            <input type="radio" id="subsno" name="subsall">
            <label for="subsno">L'abonnement sans engagement</label>
        </div>

        <label class="label">
            Entrer vos informations de livraison
        </label> <br />
        <div class="info">
            <input type="text" placeholder="NOM DE L'ETABLISSEMENT" onclick="javascript:this.placeholder = '';" required><br />
            <input type="text" placeholder="ADRESSE" onclick="javascript:this.placeholder = '';" required><br />
            <input type="text" placeholder="CODE POSTAL" onclick="javascript:this.placeholder = '';" required><br />
            <input type="text" placeholder="VILLE" onclick="javascript:this.placeholder = '';" required><br />
            <input type="text" placeholder="NUMEROS DE TELEPHONE" onclick="javascript:this.placeholder = '';" required><br />
            <input type="submit" class="next" value="SUIVANT"> <br />
        </div>
    </form>

    <div class="paiement" style="visibility: hidden;">FORMULAIRE DE PAIEMENT</div>
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