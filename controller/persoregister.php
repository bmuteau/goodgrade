<?php

global $db, $hlp;
$result = -1;
$error = "";

if (isset($_POST['sendregister'])) {
    $result = $hlp->createAccount($_POST['lastname'], $_POST['firstname'], $_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['postalcode'], isset($_POST['newsletter']));
}
if ($result > -1) {
    if ($result == 0) {
        header('location:home');
    } else if ($result == 1) {
        $error = " Adresse mail déjà utilisée ! ";
    } else if ($result == 2) {
        $error = "Erreur de connexion !";
    } else {
        $error = "Le compte n'a pas été créé!";
    }
}



include 'template/persoregister.php';
