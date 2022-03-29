<head>
    <title> <?= $companyData['name'] ?>- GoodGrade</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="styles/etprofile.css" rel="stylesheet">
    <link href="styles/footer.css" rel="stylesheet">
</head>


<div id="top"></div>

<body>
    <h1 class="title"> <?= $companyData['name'] ?></h1>
    <?php if ($hlp->isCompany()) {
    } else { ?>

        <img src="src/iconfinder_favorite_heart_like_love_valentine_290111.svg" class="favorite">
    <?php } ?>





    <?php if ($hlp->isCompany() == false) { ?>
        <img src="public/etimg/<?= $companyData['firstimg'] ?>" id="main">
        <div id="thumbnails">
            <img src="public/etimg/<?= $companyData['firstimg'] ?>">
            <img src="public/etimg/<?= $companyData['secimg'] ?>">
            <img src="public/etimg/<?= $companyData['thirdimg'] ?>">

        </div>

    <?php  } else { ?>
        <img src="public/etimg/<?= $companyData['firstimg'] ?>" id="main">
        <div id="thumbnails">
            <img src="public/etimg/<?= $companyData['firstimg'] ?>">
            <img src="public/etimg/<?= $companyData['secimg'] ?>">
            <img src="public/etimg/<?= $companyData['thirdimg'] ?>">

        </div>
    <?php } ?>


    <p class="description"><?= $companyData['desc'] ?></h2>

    <div class="picto">
        <a class="phone" href="tel:<?= $companyData['tel'] ?>"> <img src="src/iconfinder_local_phone_352510.svg"> </a>
        <a class="web" href="<?= $companyData['www'] ?>"> <img src="src/iconfinder_language_web_326663.svg"></a>
        <a class="gps" href="https://maps.google.com/maps?q=<?= $companyData['gps'] ?>"><img src="src/iconfinder_adress_gps_location_pin_position_1564524.svg"></a>
    </div>

    <div class="nbr">
        <p>Note de nos utilisateurs : </p>
        <p class="note">
            <?= round($moyenne['moyenne'], 1, PHP_ROUND_HALF_EVEN)  ?> /5
        </p>
    </div>
    <p class="nbravis"><?= $nombre['nombre'] ?> avis</p>

    <ul>
        <?php foreach ($posts as $post) : ?>
            <li class="avis">
                <div class="profil"><img src="public/avatar/<?= $post['image'] ?>" class="img"></div>
                <div class="name"><?= $post['pseudo'] ?></div>
                <div class="post"><?= $post['avis'] ?></div>
                <div class="warning">
                    <?php if ($hlp->isCompany() == true) { ?>
                        SIGNALER
                    <?php } ?>

                </div>
                <div class="notes"><?= $post['note'] ?>/5</div>
            </li>
        <?php endforeach ?>
    </ul>


</body>



<footer>



    <div class="footer">

        <div class="faq"><a href="faq.php">FAQ</a></div>
        <a href="#top"> <img src="src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="contact">Nous contacter</a></div>
        <div class="legal"><a href="mentionlegal">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>


<script src="script/slider.js"></script>