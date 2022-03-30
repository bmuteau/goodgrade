<?php
global $hlp, $db;


$connect = $db->connect();


$stm = $connect->prepare("SELECT company_name,id FROM company ORDER BY id DESC LIMIT 0,6");
$stm->execute();
$last = $stm->fetchAll();

$allCompany = "";
if ($hlp->myGet('q') != null) {
    $q = htmlspecialchars($hlp->myGet('q'));
    $allCompany = $connect->query('SELECT * FROM company WHERE company_name LIKE "%' . $q . '%" ORDER BY id DESC');
}

include 'controller/header.php';
include 'template/home.php';
