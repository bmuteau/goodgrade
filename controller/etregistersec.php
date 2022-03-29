<?php

global $db, $hlp;
$result = -1;
$error = "";

if (isset($_FILES['image'])) {
    $hlp->addImage($_FILES['image'], 'image');
    $hlp->addImage($_FILES['image2'], 'image2');
    $hlp->addImage($_FILES['image3'], 'image3');
}





if (isset($_POST['send'])) {

    $result = $hlp->prepareProPage($_POST['eta'], $_POST['description'], $_POST['website'], $_POST['adress'], $_SESSION['id']);
}

if ($result > -1) {
    if ($result == 0) {
        // header("location:home");
    } else if ($result == 1) {
        $error = " Erreur ";
    } else if ($result == 2) {
        $error = "Erreur de connexion !";
    } else {
        header("location:home");
    }
}

include 'template/etregistersec.php';
