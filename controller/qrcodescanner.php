<?php
global $hlp, $db;





if (isset($_POST['validId'])) {
    $result = $hlp->pushQrcode($_SESSION['id']);
}


include 'template/qrcodescanner.php';
