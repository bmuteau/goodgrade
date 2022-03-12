<!DOCTYPE html>
<html>

<head>
    <title>QR Code Scanner</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="stylesheet" href="styles/scanner.css" />
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
    </script>
</head>

<body>


    <div id="container">
        <h1>QR Code Scanner</h1>




        <h1>Avant de passer à l'étape suivante, veuillez vérifier les informations suivante : </h1>
        <a id="btn-scan-qr">
            Scanner un QrCode
            <a />



            <canvas hidden="" id="qr-canvas"></canvas>

            <div id="qr-result" hidden="">

            </div>
    </div>



    <form method="POST">
        <label>Votre pseudo</label> </br>
        <input type="text" name="iduser" value="<?= $_SESSION['pseudo']  ?>" disabled></br>

        <label>Le nom de l'établissement</label></br>
        <input type="text" name="company_name" id="outputData" value="" disabled></br>
        <input type="submit" name="validId" value="OK">
    </form>

    </div>


    <script src="script/qrCodeScanner.js"></script>



</body>

</html>