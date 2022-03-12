<?php

if (isset($_POST['send'])) {

    $result = $hlp->postAvis($_POST['note'], $_POST['avis'], $_SESSION['used'], $_SESSION['id']);
}

if ($result > -1) {
    if ($result == 0) {
        // header("location:home");
    } else if ($result == 1) {
        $error = " Erreur ";
    } else if ($result == 2) {
        $error = "Erreur de connexion !";
    } else {
        // header("location:home");
    }
}
if (isset($_POST['save'])) {
    global $db;
    $connect = $db->connect();
    if ($connect != null) {
        $stm = $connect->prepare("UPDATE avis SET used=1 WHERE id=? ");
        $stm->execute(array(

            $used,
            $id,

        ));
        header('location:profil');
        $db->disconnect();
    }
}

include 'template/choice.php';
