<?php
global $hlp, $db;


$connect = $db->connect();


$stm = $connect->prepare("SELECT company_name,id FROM company ORDER BY id DESC LIMIT 0,6");
$stm->execute();
$last = $stm->fetchAll();

$reco =  $connect->prepare("SELECT avg (note) AS note ,COUNT(avis.id) AS nombre, company_name,type,image,postalcode FROM avis INNER JOIN company ON avis.id_company=company.id WHERE type='Restaurant' GROUP BY company_name");
$reco->execute();
$rest = $reco->fetchAll();

$reco =  $connect->prepare("SELECT avg (note) AS note ,COUNT(avis.id) AS nombre, company_name,type,image,postalcode FROM avis INNER JOIN company ON avis.id_company=company.id WHERE type='hotel' GROUP BY company_name");
$reco->execute();
$hotel = $reco->fetchAll();


$allCompany = "";
if ($hlp->myGet('q') != null) {
    $q = htmlspecialchars($hlp->myGet('q'));
    $allCompany = $connect->query('SELECT * FROM company WHERE company_name LIKE "%' . $q . '%" ORDER BY id DESC');
}

include 'controller/header.php';
include 'template/home.php';
