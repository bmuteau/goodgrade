<?php


if (isset($_GET['id'])) {
    $getid = $_GET['id'];
    $profils = $_GET['image'];
    $profils = $_GET['image2'];
    $profils = $_GET['image3'];
} elseif (isset($_SESSION['id'])) {
    $getid = $_SESSION['id'];
    $title = $_SESSION['company_name'];
    $image = $_SESSION['image'];
    $image2 = $_SESSION['image2'];
    $image3 = $_SESSION['image3'];
}



global $db, $hlp;

$connect = $db->connect();
if ($connect != null) {

    $note =  $connect->prepare("SELECT avg (note) AS moyenne FROM avis  WHERE id_company=39 ");
    $note->execute(array($getid));
    $moyenne = $note->fetch();
}

if ($connect != null) {
    $avis = $connect->prepare("SELECT COUNT(*) AS nombre FROM avis WHERE id_company=39");
    $avis->execute(array($getid));
    $nombre = $avis->fetch();
}
if ($connect != null) {
    $query = $connect->prepare("SELECT pseudo,image,avis,note FROM avis INNER JOIN users ON avis.id_user=users.id WHERE id_company=39");
    $query->execute(array($getid));
    $posts = $query->fetchAll();
}



// si l'id avec la session n'est pas determiné alors récupéré les informations 
if ($connect != null) {
    $query = $connect->prepare("SELECT company_name,phone,adress,description,website,company.image,image2,image3,note,avis,pseudo 
                                FROM company
                                INNER JOIN avis ON company.id=avis.id_company
                                INNER JOIN users ON avis.id_user=users.id 
                                WHERE company.id=39");
    $query->execute(array($getid));
    $profils = $query->fetchAll();
}

include 'template/header.php';
include 'template/etprofile.php';
