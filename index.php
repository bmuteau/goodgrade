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
    false, //profil
    true, //scannqrcode
    false, // result
    true, // subscription
    true, // warning 
    false, // register
    false, // deconnexion

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
    "etprofile" => 2, // mettre la variable de nom en fonction de la recherche ?
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
    "profil" => 13,
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



);

$filesPossible = array(
    "pages/confidentiality.php",
    "pages/contact.php",
    "pages/etprofile.php",
    "pages/etregister.php",
    "pages/etregistersec.php",
    "pages/faq.php",
    "pages/favorite.php",
    "pages/forgot.php",
    "pages/home.php",
    "pages/howtouse.php",
    "pages/login.php",
    "pages/mentionlegal.php",
    "pages/paiementdone.php",
    "pages/profil.php",
    "pages/scannqrcode.php",
    "pages/searchresult.php",
    "pages/subscription.php",
    "pages/warning.php",
    "pages/persoregister.php",
    "pages/deconnexion.php",

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
