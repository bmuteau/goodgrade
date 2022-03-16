<?php
global $db, $hlp;

$id = $_SESSION['id'];

require_once('lib/phpqrcode/qrlib.php');



$path = "public/qrcode/";
$file = $path . uniqid() . ".png";



QRcode::png($id, $file);




include 'template/scannqrcode.php';
