<title>Accueil - GoodGrade</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="styles/home.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">




<div id="top"></div>

<body>
    <div id="main">
        <br>

        <br>
        <br>
        <br>
        <br>

        <form method="GET">
            <input class="search" type="search" name="q" placeholder="Rechercher un établissement">
            <input type="submit" name="send" value="envoyer" hidden>

        </form>


        <?php if ($hlp->myGet('q') == null) { ?>

            <h1 class="title">NOS RECOMMANDATIONS </h1>

            <div class="bestResto">

                <h2 class="subtitle">Les restaurants du moment </h2>


                <?php foreach ($rest as $rests) : ?>

                    <p class="result">
                        <?=
                        $rests['company_name'] . $rests['nombre'] . round($rests['note'], 1, PHP_ROUND_HALF_EVEN) . $rests['postalcode'] ?>
                    </p>
                    <img src="public/avatar/<?php echo $rests['image'] ?>">
                <?php endforeach ?>

            </div>

            <div class="bestHotel">

                <h2 class="subtitle">Les hôtels du moment </h2>


                <?php foreach ($hotel as $hotels) : ?>

                    <p class="result">
                        <?=
                        $hotels['company_name'] . $hotels['nombre'] . round($hotels['note'], 1, PHP_ROUND_HALF_EVEN) . $rests['postalcode'] ?>
                    </p>
                    <img src="public/avatar/<?php echo $hotels['image'] ?>">
                <?php endforeach ?>

            </div>


            <h1 class="new">NOUVEAUX ETABLISSEMENTS INSCRITS </h1>
            <ul class="list">
                <?php foreach ($last as $lasts) : ?>

                    <?= '<a href="etprofile?id=' . $lasts['id'] . ' ">' . '<li>' . $lasts['company_name'] . '</a>' . '</li>' ?>

                <?php endforeach ?>

            </ul>

    </div>
<?php } elseif ($allCompany->rowCount() > 0) {
?>

    <ul>

        <?php

            while ($a = $allCompany->fetch()) { ?>
            <li><?= $a['company_name'] ?></li>

        <?php }

        ?>

    </ul>
<?php
        } else { ?>
    <p>Aucun résultat pour : <?= $q ?> </p>
<?php
        }
?>



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