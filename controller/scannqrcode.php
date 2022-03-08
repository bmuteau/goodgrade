<?php
global $db, $hlp;


require_once('lib/phpqrcode/qrlib.php');


$path = "public/qrcode/";
$file = $path . uniqid() . ".png";

$text = 'https://www.google.com';
QRcode::png($text, $file);








include 'template/scannqrcode.php';
