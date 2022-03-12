<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mon générateur GoodGrade - GoodGrade</title>


<link rel="shortcut icon" type="image/png" href="src/favicon/favicon-32x32.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

<link href="styles/scannqrcode.css" rel="stylesheet">


<body>

    <a href="home"> <img src="src/Logo1.png" class="logo"></a>

    <p class="center">Déposer un avis </p>

    <div class="wrapper">
        <?php echo "<img class='qrcodes' src='" . $file . "' />"; ?>
        <button class="dl"><a href='public/qrcode/622a06a0493ec.png' download="qrcode">Télécharger son QrCode </a></button>

        <div class="rules">
            <ul>
                <li>Scanne le QrCode</li>
                <li>Connecte-toi à ton compte</li>
                <li>Dépose l'avis maintenant ou plus tard ! </li>
                <li> Merci </li>


            </ul>
        </div>
    </div>


</body>