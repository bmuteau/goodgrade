<?php
global $db, $hlp;

$id = $hlp->myGet('id');
$userAccount = false;

$companyData = array(
    'id' => "",
    'name' => "",
    'firstimg' => "",
    'secimg' => "",
    'thirdimg' => "",
    'desc' => "",
    'tel' => "",
    'www' => "",
    'gps' => "",

);
if ($hlp->myGet('id') != null) {
    $change = $hlp->getCompanyModel($hlp->myGet('id'));
    $userAccount = true;
    $companyData['uid'] = $change[0]['id'];
    $companyData['name'] = $change[0]['company_name'];
    $companyData['firstimg'] = $change[0]['image'];
    $companyData['secimg'] = $change[0]['image2'];
    $companyData['thirdimg'] = $change[0]['image3'];
    $companyData['desc'] = $change[0]['description'];
    $companyData['tel'] = $change[0]['phone'];
    $companyData['www'] = $change[0]['website'];
    $companyData['gps'] = $change[0]['adress'];
} elseif (isset($_SESSION['accountType']) && $_SESSION['accountType'] == "company") {
    $companyData['uid'] = $change[0]['id'];
    $companyData['name'] = $_SESSION['company_name'];
    $companyData['firstimg'] = $_SESSION['img'];
    $companyData['secimg'] = $change[0]['image2'];
    $companyData['thirdimg'] = $change[0]['image3'];
    $companyData['desc'] = $change[0]['description'];
    $companyData['tel'] = $change[0]['phone'];
    $companyData['www'] = $change[0]['website'];
    $companyData['gps'] = $change[0]['adress'];
} else {
    header('location:home');
}



$connect = $db->connect();



if ($connect != null) {

    $note =  $connect->prepare("SELECT avg (note) AS moyenne FROM avis  WHERE id_company=? ");
    $note->execute(array($companyData['uid']));
    $moyenne = $note->fetch();
}

if ($connect != null) {
    $avis = $connect->prepare("SELECT COUNT(*) AS nombre FROM avis WHERE id_company=? AND report=0");
    $avis->execute(array($companyData['uid']));
    $nombre = $avis->fetch();
}
if ($connect != null) {
    $query = $connect->prepare("SELECT * FROM avis INNER JOIN users ON avis.pseudo=users.pseudo  WHERE id_company=? AND report=0 ORDER BY avis.id DESC");
    $query->execute(array($companyData['uid']));
    $posts = $query->fetchAll();
}


if (isset($_POST['warning'])) {
    $report = $_POST['value'];
    $avisId = $posts[0][0];

    if ($connect != null) {
        $stm = $connect->prepare("UPDATE avis SET report=$report WHERE id=$avisId");
        $stm->execute();
        $db->disconnect();
        header('location:etprofile?id=$id');
    }
    $_SESSION['report'] = $report;
    $result = $hlp->warning($_POST['value']);
}


include 'template/header.php';
include 'template/etprofile.php';
