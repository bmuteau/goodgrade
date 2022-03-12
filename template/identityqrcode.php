<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de l'établissement</title>
</head>

<body>
    <h1>Avant de passer à l'étape suivante, veuillez vérifier les informations suivante : </h1>
    <form action="POST">
        <label>Votre pseudos</label><br />
        <p><?= $_SESSION['pseudo'] ?></p>
        <label>Nom de l'établissement</label><br />
        <p>$company_name</p>

        <input type="submit" name="send" value="Suivant">
    </form>
</body>

</html>