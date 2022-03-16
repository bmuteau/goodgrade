<!DOCTYPE html>
<html>

<head>
    <title>QR Code Scanner</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0," />
    <link rel="stylesheet" href="styles/scanner.css" />
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
                <h2>Merci de bien vouloir verifier les informations avant de cliquer sur suivant !</h2>
                <img src="public/etimg/<?= $company_img ?>">
                <form method="POST">
                    <label>Votre pseudo:</label><br />
                    <input type="text" value="<?= $_SESSION['pseudo'] ?>" disabled><br />
                    <label>Nom de l'établissement:</label><br />
                    <input type="text" value="<?= $company_name ?>" disabled> </br>
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