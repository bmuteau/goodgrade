<?php

global $db, $hlp;
$result = -1;
$error = "";

if (isset($_POST['sendregister'])) {
    $result = $hlp->createAccountProOne($_POST['gerantname'], $_POST['etname'], $_POST['phone'], $_POST['email'], $_POST['password'], $_POST['postalcode']);
}
if ($result > -1) {
    if ($result == 0) {
        header("location:etregistersec");
    } else if ($result == 1) {
        $error = " Adresse mail déjà utilisée ! ";
    } else if ($result == 2) {
        $error = "Erreur de connexion !";
    } else {
        $error = "Le compte n'a pas été créé!";
    }
}


include 'template/etregister.php';
