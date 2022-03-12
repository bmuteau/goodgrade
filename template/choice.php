<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faites un choix</title>
</head>

<body>
    <h1>Déposer un avis maintenant</h1> <br />
    <input type="submit" name="save" value="Conserver votre QrCode pour plus tard">
    <form method="POST">
        <p>$image1 entreprise</p>
        <label for="">NOTE</label><br />
        <input name="note" type="number" min="1" max="5"><br />
        <label for="">AVIS</label><br />
        <textarea name="avis"></textarea><br />

        <input type="submit" name="send" value="ENVOYER">
    </form>
</body>

</html>