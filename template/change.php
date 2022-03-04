<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <h1 class="title">editer votre profil! </h1>
        <div class="container">

            <form method="POST" action="" enctype="multipart/form-data">
                <div class="lname"><label>fname<input type="text" name='fname' value="<?= $_SESSION['firstname'] ?>"></label></div>
                <div class="fname"><label>lname<input type="text" name='lname' value="<?= $_SESSION['lastname'] ?>"></label></div>
                <div class="pseudos"><label>pseudos<input type="text" name='pseudo' value="<?= $_SESSION['pseudo'] ?>"></label></div>
                <div class="mail"><label>mail<input type="text" name='email' value="<?= $_SESSION['email'] ?>"></label></div>
                <div class="postalcode"><label>Code postal<input type="text" name='postalcode' value="<?= $_SESSION['postalcode'] ?>"></label></div>
                <label>Avatar</label><br />
                <input type="file" name="avatar">


                <input type="submit" value="sauvegarder" name="save">


            </form>
            <?php if (isset($msg)) {
                echo $msg ?>
            <?php }

            ?>
        </div>
    </body>

</html>