<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Mon générateur GoodGrade - GoodGrade</title>


<link rel="shortcut icon" type="image/png" href="src/favicon/favicon-32x32.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">


<body>

    <a href="home"> <img src="src/Logo1.png" class="logo"></a>

    <p class="scannqrcode-center">Déposer un avis </p>

    <div class="wrapper">
        <?= "<img class='qrcodes' src='" . $file . "' />"; ?>

        <div class="scannqrcode-rules">
            <ul class="scannqrcode-list">
                <li>Scanne le QrCode</li>
                <li>Connecte-toi à ton compte</li>
                <li>Dépose l'avis maintenant ou plus tard ! </li>
                <li> Merci </li>


            </ul>
        </div>
    </div>


</body>