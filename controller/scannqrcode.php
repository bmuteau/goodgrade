<?php
global $db, $hlp;

$id = $_SESSION['company_name'];

require_once('lib/phpqrcode/qrlib.php');



$path = "public/qrcode/";
$file = $path . uniqid() . ".png";



QRcode::png($id, $file);




include 'template/scannqrcode.php';
