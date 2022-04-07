<?php
session_start();


use Application\Database;
use Application\HelperFunctions;



$db_class_name = "Application\Database";

$autoloader_db = function ($db_class_name) {
    // on prépare le terrain : on remplace le séparteur d'espace de nom par le séparateur de répertoires du système
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $db_class_name);
    // on construit le chemin complet du fichier à inclure :
    // il faut que l'autoloader soit toujours à la racine du site : tout part de là avec __DIR__
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    // on vérfie que le fichier existe et on l'inclut
    // sinon on passe la main à une autre autoloader (return false)
    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_db);

$hlp_class_name = "Application\HelperFunctions";

$autoloader_hlp = function ($hlp_class_name) {
    // on prépare le terrain : on remplace le séparteur d'espace de nom par le séparateur de répertoires du système
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $hlp_class_name);
    // on construit le chemin complet du fichier à inclure :
    // il faut que l'autoloader soit toujours à la racine du site : tout part de là avec __DIR__
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    // on vérfie que le fichier existe et on l'inclut
    // sinon on passe la main à une autre autoloader (return false)
    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_hlp);


$db = new Application\Database();
$db = new Database();
$hlp = new Application\HelperFunctions();
$hlp = new HelperFunctions();



$urlword = array();
if (isset($_GET['url'])) {
    $urlword = explode("/", $_GET['url']);
} else {
    array_push($urlword, "");
}

$connectionNeeded = array(

    false, // notfound
    false, // contact
    false, // etprofil
    false, // inscriptionpro
    false, // etregister
    false, // faq
    false, // forgot
    false, // home
    false, // howtouse
    false, // login
    false, // mentionlegal
    false, //profil
    false, //scannqrcode
    false, // subscription
    false, // register
    false, // deconnexion
    false, // confidentiality
    false, // change
    false, //newmdp
    true, // qrcodescanner
    false, //backoffice


);

$adminNeeded = array(

    false, // notfound
    false, // contact
    false, // etprofil
    false, // inscriptionpro
    false, // etregister
    false, // faq
    false, // forgot
    false, // home
    false, // howtouse
    false, // login
    false, // mentionlegal
    false, //profil
    false, //scannqrcode
    false, // subscription
    false, // register
    false, // deconnexion
    false, // confidentiality
    false, // change
    false, //newmdp
    false, // qrcodescanner
    true, //backoffice


);


$urlsPossible = array(
    "notfound" => 0,
    "contact" => 1,
    "etprofile" => 2,
    "inscriptionpro" => 3,
    "etregister" => 3,
    "etregistersec" => 4,
    "faq" => 5,
    "forgot" => 6,
    "home" => 7,
    "" => 7,
    "howtouse" => 8,
    "utilisation" => 8,
    "login" => 9,
    "mentionlegal" => 10,
    "profil" => 11,
    "scannqrcode" => 12,
    "generator" => 12,
    "subscription" => 13,
    "abonnement" => 13,
    "persoregister" => 14,
    "register" => 14,
    "deconnexion" => 15,
    "confidentiality" => 16,
    "confidentialite" => 16,
    "change" => 17,
    "newmdp" => 18,
    "qrcodescanner" => 19,
    "backoffice" => 20,





);

$filesPossible = array(
    "controller/notFound.php", //0
    "controller/contact.php", //1
    "controller/etprofile.php", //2
    "controller/etregister.php", //3
    "controller/etregistersec.php", //4
    "controller/faq.php", //5
    "controller/forgot.php", //6
    "controller/home.php", //7
    "controller/howtouse.php", //8
    "controller/login.php", //9
    "controller/mentionlegal.php", //10
    "controller/profil.php", //11
    "controller/scannqrcode.php", //12
    "controller/subscription.php", //13
    "controller/persoregister.php", //14
    "controller/deconnexion.php", //15
    "controller/confidentiality.php", //16
    "controller/change.php", //17
    "controller/newmdp.php", //18
    "controller/qrcodescanner.php", //19
    "controller/backoffice.php", //20


);



if (count($urlword) > 0 && array_key_exists($urlword[0], $urlsPossible)) {
    $idUrl = $urlsPossible[$urlword[0]];
    if ($connectionNeeded[$idUrl] == true && $hlp->isConnected() == false) {
        $idUrl = 17;
    }
    if ($adminNeeded[$idUrl] == true && $hlp->isAdmin() == false) {
        $idUrl = 0;
    }
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
} else {
    $idUrl = 0;
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
}
