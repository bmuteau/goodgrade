<?php
global $db, $hlp;

if ($hlp->isSubscribed() == true) {
    $id = $_SESSION['id'];

    require_once('lib/phpqrcode/qrlib.php');




    $path = "public/qrcode/";
    $file = $path . date('U') . ".png";



    QRcode::png($id, $file);




    include 'template/scannqrcode.php';
} else {
    header('location:subscription');
}
