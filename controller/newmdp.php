<?php
global $db, $hlp;

if (isset($_POST['send'])) {
    $_SESSION['password'] = $_POST['newpass'];
    $result = $hlp->newMdp($_POST['newpass'], $_SESSION['id']);
}

include 'template/newmdp.php';
include 'template/header.php';
