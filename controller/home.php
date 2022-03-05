<?php
global $hlp, $db;


$connect = $db->connect();
$stm = $connect->prepare("SELECT company_name FROM company ORDER BY id DESC LIMIT 0,6");
$stm->execute();
$last = $stm->fetchAll();


include 'controller/header.php';
include 'template/home.php';
