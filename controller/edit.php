<?php





global $db, $hlp;
$id = $hlp->myGet('id');

$connect = $db->connect();
if ($connect != null) {

    $stm = $connect->prepare("SELECT * FROM avis WHERE report= 1 ");
    $stm->execute();
    $warning = $stm->fetchAll();

    $stm = $connect->prepare("SELECT * FROM subscription1  ");
    $stm->execute();
    $order = $stm->fetchAll();

    $stm = $connect->prepare("SELECT * FROM user ORDER BY id DESC LIMIT 0,6 ");
    $stm->execute();
    $register = $stm->fetchAll();

    $stm = $connect->prepare("SELECT * FROM company ORDER BY id DESC LIMIT 0,6  ");
    $stm->execute();
    $register = $stm->fetchAll();

    $stm = $connect->prepare("SELECT * FROM avis ORDER BY id DESC LIMIT 0,6");
    $stm->execute();
    $avis = $stm->fetchAll();

    $stm = $connect->prepare("UPDATE avis SET report=0 WHERE id = $id");
    $stm->execute();
}


include 'template/backoffice.php';
