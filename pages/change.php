<?php

global $db, $hlp;
if (isset($_FILES['avatar']) and !empty($_FILES['avatar']['name'])) {
    $maxSize = 2097152;
    $extensionsValid = array('jpg', 'jpeg', 'png', 'gif');
    if ($_FILES['avatar']['size'] <= $maxSize) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        if (in_array($extensionUpload, $extensionsValid)) {
            $path = "public/avatar/" . $_SESSION['id'] . "." . $extensionUpload;
            $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
            if ($result) {
                $connect = $db->connect();
                if ($connect != null) {
                    $updateavatar = $connect->prepare("UPDATE users SET avatar=:avatar WHERE id=:id");
                    $updateavatar->execute(array(
                        'avatar' => $_SESSION['id'] . "." . $extensionUpload,
                        'id' => $_SESSION['id'],
                    ));
                    header('location:profil');
                } else {
                    $msg = "Il y'a eu une erreur pendant l'importation de votre photo";
                }
            } else {
                $msg = "Votre photo de profil doit être dans un des formats jpg,png,jpeg ou gif !";
            }
        } else {
            $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
        }
    }
}
if (isset($_POST['save'])) {
    $_SESSION['lastname'] = $_POST['lname'];
    $_SESSION['firstname'] = $_POST['fname'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['postalcode'] = $_POST['postalcode'];



    $result = $hlp->editInfo($_POST['lname'], $_POST['fname'], $_POST['pseudo'], $_POST['email'], $_POST['postalcode'], $_SESSION['id']);
}


?>

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