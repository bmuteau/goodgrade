<?php

global $hlp, $db;

if (isset($_SESSION['image'])) {
    $image = $_SESSION['image'];
}

include 'template/header.php';
