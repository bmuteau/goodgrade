<?php
global $hlp, $db;

$idFound = false;
$company_name = "";
$company_img = "";
$note = "";
$avis = "";

$id_company = $_SESSION['userTargetId'];

if (empty($id_user)) {
    $id_user = "";
} else {
    $id_user = $_POST['name'];
}



if (!empty($_POST['note'])) {
    $note = $_POST['note'];
}
if (!empty($_POST['avis'])) {
    $avis = $_POST['avis'];
}

if (isset($_POST['sendId'])) {
    if (isset($_SESSION['userTargetId'])) {
        unset($_SESSION['userTargetId']);
    }
    if (isset($_SESSION['company_name'])) {
        unset($_SESSION['company_name']);
    }
    if (isset($_SESSION['company_img'])) {
        unset($_SESSION['company_img']);
    }
    if (isset($_SESSION['note'])) {
        unset($_SESSION['note']);
    }
    if (isset($_SESSION['avis'])) {
        unset($_SESSION['avis']);
    }
    $resStock = $hlp->idInfo($_POST['companyId']);
    if (count($resStock) > 0) {
        $idFound = true;
        $_SESSION['userTargetId'] = $_POST['companyId'];
        $_SESSION['company_name'] = $resStock['company_name'];
        $_SESSION['company_img'] = $resStock['image'];
    }
}
if (isset($_POST['validId'])) {
    unset($_SESSION['company_name']);
    header('location:etprofile?id=' . $id_company);


    $connect = $db->connect();
    if ($connect != null) {
        $stm = $connect->prepare("INSERT INTO avis(id_company,id_user,note,avis) VALUES (?,?,?,?)");
        $stm->execute(array(
            $id_company,
            $id_user,
            $note,
            $avis,
        ));
    }
}
if (isset($_SESSION['company_name'])) {
    $company_name = $_SESSION['company_name'];
}
if (isset($_SESSION['company_img'])) {
    $company_img = $_SESSION['company_img'];
}
if (isset($_POST['note'])) {
    $note = $_POST['note'];
}
if (isset($_POST['avis'])) {
    $avis = $_POST['avis'];
}

include 'template/qrcodescanner.php';
