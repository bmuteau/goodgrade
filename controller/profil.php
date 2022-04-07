<?php
global $db, $hlp;

if ($hlp->isConnected() == true) {
    $connect = $db->connect();

    if ($connect != null) {
        $avis = $connect->prepare("SELECT COUNT(*) AS count FROM avis WHERE id_user=?");
        $avis->execute(array($_SESSION['id']));
        $count = $avis->fetch();
    }


    include 'template/header.php';
    include 'template/profil.php';
} else {
    include 'template/notFound.php';
}
