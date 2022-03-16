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

    false, // confidentiality
    false, // contact
    false, // etprofil
    false, // inscriptionpro
    false, // etregister
    false, // faq
    true, // favorite
    false, // forgot
    false, // home
    false, // howtouse
    false, // login
    false, // mentionlegal
    true, // paiementdone
    true, //profil
    true, //scannqrcode
    false, // result
    true, // subscription
    true, // warning 
    false, // register
    false, // deconnexion
    false,
    true,
    true,
    true,
    true,
    false,
    false,
    false,





);

// $adminNeeded = array(

//     false,
//     false,
//     false,
//     false,
//     true,
//     true,
//     false,
//     false,
//     false,
//     true,
//     false,
//     true,
//     false,
//     false,

// );
$urlsPossible = array(
    "confidentiality" => 0,
    "confidentialite" => 0,
    "contact" => 1,
    "etprofile" => 2,
    "inscriptionpro" => 3,
    "etregister" => 3,
    "etregistersec" => 4,
    "faq" => 5,
    "favorite" => 6,
    "forgot" => 7,
    "home" => 8,
    "" => 8,
    "howtouse" => 9,
    "utilisation" => 9,
    "login" => 10,
    "mentionlegal" => 11,
    "paiementdone" => 12,
    "profile" => 13,
    "scannqrcode" => 14,
    "generator" => 14,
    "result" => 15,
    "searchresult" => 15,
    "resultat" => 15,
    "subscription" => 16,
    "abonnement" => 16,
    "warning" => 17,
    "signalement" => 17,
    "persoregister" => 18,
    "register" => 18,
    "deconnexion" => 19,
    "notfound" => 20,
    "change" => 21,
    "newmdp" => 22,
    "choice" => 23,
    "qrcodescanner" => 24,
    "identity" => 25,
    "backoffice" => 26,




);

$filesPossible = array(
    "controller/confidentiality.php",
    "controller/contact.php",
    "controller/etprofile.php",
    "controller/etregister.php",
    "controller/etregistersec.php",
    "controller/faq.php",
    "controller/favorite.php",
    "controller/forgot.php",
    "controller/home.php",
    "controller/howtouse.php",
    "controller/login.php",
    "controller/mentionlegal.php",
    "controller/paiementdone.php",
    "controller/profil.php",
    "controller/scannqrcode.php",
    "controller/searchresult.php",
    "controller/subscription.php",
    "controller/warning.php",
    "controller/persoregister.php",
    "controller/deconnexion.php",
    "controller/notFound.php",
    "controller/change.php",
    "controller/newmdp.php",
    "controller/choice.php",
    "controller/qrcodescanner.php",
    "controller/identityqrcode.php",
    "controller/backoffice.php",

);



if (count($urlword) > 0 && array_key_exists($urlword[0], $urlsPossible)) {
    $idUrl = $urlsPossible[$urlword[0]];
    if ($connectionNeeded[$idUrl] == true && $hlp->isConnected() == false) {
        $idUrl = 6;
    }
    // if ($adminNeeded[$idUrl] == true && $hlp->isAdmin() == false) {
    //     $idUrl = 0;
    // }
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
} else {
    $idUrl = 0;
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
}
