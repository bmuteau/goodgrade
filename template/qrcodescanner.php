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

        <a id="btn-scan-qr"> Scanner un qrcode
            <a />

            <canvas hidden="" id="qr-canvas"></canvas>

            <div id="qr-result" hidden="">
                <b>Data:</b> <span id="outputData"></span>
            </div>
    </div>

    <script src="script/qrCodeScanner.js"></script>



</body>

</html>