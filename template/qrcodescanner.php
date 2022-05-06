<!DOCTYPE html>
<html>

<head>
    <title>QR Code Scanner</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0," />
    <link rel="stylesheet" href="styles/style.css" />
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
    </script>
</head>

<body>
    <div id="container">


        <a id="btn-scan-qr">
            Scanner un QrCode
            <a />

            <canvas hidden="" id="qr-canvas"></canvas>

            <div id="qr-result" hidden="">

                <form method="POST">
                    <input type="text" name="companyId" id="companyId" required>
                    <input type="submit" name="sendId" id="sendId">
                </form>
            </div>

            <?php if (isset($_SESSION['company_name'])) {
            ?>
                <h1>Avant de déposer votre avis, merci de bien lire les quelques règles de bonne usage: </h1>
                <ul>
                    <li>En cas d'avis négatif, expliquer ce qui selon vous aurait était meilleur à faire.</li>
                    <li>N'utiliser pas de mots vulguaire.</li>
                    <li>Respecter l'établissement qui vous a reçu, même si votre experience n'a pas était très bonne.</li>
                    <li>Eviter le language SMS.</li>
                </ul>

                <h2>Voilà, si votre commentaire respecte ses quelques règles, votre avis ne risque aucune suppression et vous pourrez aider d'autre internaute.</h2>
                <h2>Merci de bien vouloir verifier les informations avant de cliquer sur suivant !</h2>
                <img src="public/etimg/<?= $company_img ?>">
                <form method="POST">
                    <label>Votre pseudo:</label><br />
                    <label for="name" onclick="javascript:this.placeholder = 'Anonyme';">Cliquer sur votre pseudo pour être anonyme</label></br>
                    <input type=" text" id="name" name="name" placeholder="<?= $_SESSION['pseudo'] ?>" onclick="javascript:this.placeholder = 'Anonyme';" readonly="readonly"><br />
                    <label>Nom de l'établissement:</label><br />
                    <input type=" text" value="<?= $company_name ?>" disabled> </br>
                    <label for="note">NOTE</label><br />
                    <input name="note" type="number" min="1" max="5"><br />
                    <label for="avis">AVIS</label><br />
                    <textarea name="avis"></textarea><br />
                    <input type="submit" name="validId" value="Envoyer">
                </form>
            <?php  } ?>


    </div>
    <script src="script/qrCodeScanner.js"></script>
</body>

</html>