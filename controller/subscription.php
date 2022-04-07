<?php

if ($hlp->isCompany() == true) {
    include 'template/header.php';
    include 'template/subscription.php';
} else {
    header('location:home');
}
