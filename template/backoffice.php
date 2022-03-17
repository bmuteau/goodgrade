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
        <div class="warning">SIGNALEMENT
            <form method="POST">
                <ul>
                    <?php foreach ($warning as $warnings) : ?>

                        <?=
                        "<li>" .
                            "<h2> Avis : </h2>" . $warnings['avis'] . "</br>" .
                            "<h2> Note : </h2>" . $warnings['note'] . "</br>" .
                            "<a href='backoffice?id=$warnings[0]'>X</a></br>" . // Supprimer
                            "<a href='edit?id=$warnings[0]'> V</a></br>" . // Editer
                            "</li>"
                        ?>

                    <?php endforeach ?>
                </ul>
            </form>
        </div>
    </fieldset>

    <fieldset>
        <div class="lastregister">Dernères inscriptions

            <ul>
                <?php foreach ($register as $registers) : ?>

                    <?= "<li>" .
                        $registers['email'] . "</br>" .

                        "</li>"                ?>

                <?php endforeach ?>
            </ul>
        </div>
    </fieldset>

    <fieldset>
        <div class="lastmsg">Derniers commentaires
            <ul>
                <?php foreach ($avis as $avi) : ?>

                    <?= '<li>' .
                        '<h2> Avis : </h2>' . $avi['avis'] . '</br>' .
                        '<h2> Note : </h2>' . $avi['note']  . '</br>' .
                        '<h2> Etablissement : </h2>' . $avi['id_company'] . '</br>' .
                        '<h2> Utilisateur n° : </h2>' . $avi['id_user']  .
                        '</li>' ?>

                <?php endforeach ?>
            </ul>
        </div>
    </fieldset>

    <fieldset>
        <div class="command">Commande en cours
            <ul>
                <?php foreach ($order as $orders) : ?>

                    <?= "<li>" . "<h2> Date d'abonnement : </h2>" . $orders['crdate'] . "</br>" .
                        "<h2> Entreprise : </h2>" . $orders['id_company'] . "</br>" .
                        "<h2> Statut : 0= commandé et 1=envoyé </h2>" . $orders['statut'] . "</br>" .

                        "</li>"                ?>

                <?php endforeach ?>
            </ul>
        </div>
    </fieldset>

</body>

</html>