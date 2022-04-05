<?php

$sent = false;


if (isset($_POST['send'])) {
    $headers = 'FROM:' . $_POST['email'];
    mail(
        'muteaub@gmail.com',
        'formulaire de contact',
        "Nom : " . $_POST['name'] . "\n" .
            "Prénom: " . $_POST['firstname'] . "\n" .
            "Email: " . $_POST['email'] . "\n" . "\n" .
            "Objet du mail : " . $_POST['object'] . "\n" .
            " Message : " . $_POST['message'],
        $headers
    );
    $sent = true;
}

include 'template/header.php';
include 'template/contact.php';
