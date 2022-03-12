<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backoffice</title>
</head>

<body>

    <h1>Bienvenue <?= $_SESSION['pseudo'] ?> sur votre espace modération</h1>

    <fieldset>
        <div class="warning">SIGNALEMENT</div>
        <!-- Boucle qui récupère les commentaires avec le statut report = 1  -->

    </fieldset>
    <fieldset>
        <div class="lastregister">Dernères inscriptions</div>
    </fieldset>
    <fieldset>
        <div class="lastmsg">Derniers commentaires</div>
    </fieldset>
    <fieldset>
        <div class="command">Commande en cours </div>
    </fieldset>

</body>

</html>