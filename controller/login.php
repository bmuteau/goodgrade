<?php

global $hlp, $db;
$result = -1;
$error = "";
$hlp->disconnected();

if (isset($_POST['login'])) {
    $result = $hlp->connexion($_POST['mail'], $_POST['password']);
}
if ($result > -1) {
    if ($result == 0) {
        header("location:home");
    } else if ($result == 1) {
        $error = " Le mot de passe est incorrect ! ";
    } else if ($result == 2) {
        $error = "Le compte n'existe pas !";
    } else {
        $error = "Il y'a une erreur de connexion!";
    }
}


include 'template/login.php';
