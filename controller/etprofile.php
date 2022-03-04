<?php

if (isset($_GET['id'])) {
    $getid = $_GET['id'];
} elseif (isset($_SESSION['id'])) {
    $getid = $_SESSION['id'];
}


global $db, $hlp;

$title = $_SESSION['company_name'];
$image = $_SESSION['image'];
$image2 = $_SESSION['image2'];
$image3 = $_SESSION['image3'];

$connect = $db->connect();
if ($connect != null) {

    $note =  $connect->prepare("SELECT avg (note) AS moyenne FROM avis  WHERE id_company=? ");
    $note->execute(array($getid));
    $moyenne = $note->fetch();
}

if ($connect != null) {
    $avis = $connect->prepare("SELECT COUNT(*) AS nombre FROM avis WHERE id_company=?");
    $avis->execute(array($getid));
    $nombre = $avis->fetch();
}
if ($connect != null) {
    $query = $connect->prepare("SELECT pseudo,image,avis,note FROM avis INNER JOIN users ON avis.id_user=users.id WHERE id_company=?");
    $query->execute(array($getid));
    $posts = $query->fetchAll();
    var_dump($posts);
}
// si l'id avec la session n'est pas determiné alors récupéré les informations 

include 'template/header.php';
include 'template/etprofile.php';
