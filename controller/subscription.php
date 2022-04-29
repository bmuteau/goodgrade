<?php
global $db, $hlp;
if ($hlp->isCompany() == true) {

    $sent = false;


    if (isset($_POST['send'])) {
        $headers = 'FROM:' . $_POST['email'];
        mail(
            'muteaub@gmail.com',
            'Abonnement',
            "Nom : " . $_POST['name'] . "\n" .
                "Email: " . $_POST['email'] . "\n" . "\n" .
                "Numéros de téléphone: " . $_POST['tel'] . "\n" . "\n" .
                "Abonnement choisi: " . $_POST['subscription'] . "\n" .
                $headers
        );
        $sent = true;
    }

    include 'template/header.php';
    include 'template/subscription.php';
} else {
    header('location:home');
}
