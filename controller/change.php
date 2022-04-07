<?php

global $db, $hlp;

if ($hlp->isConnected() == true) {
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
                        $updateavatar = $connect->prepare("UPDATE users SET image=:image WHERE id=:id");
                        $updateavatar->execute(array(
                            'image' => $_SESSION['id'] . "." . $extensionUpload,
                            'id' => $_SESSION['id'],
                        ));

                        if (isset($_POST['save'])) {

                            $_SESSION['image'] = $_SESSION['id'];
                            header('location:profile');
                        }
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

    include 'template/change.php';
} else {
    header('location:home');
}
