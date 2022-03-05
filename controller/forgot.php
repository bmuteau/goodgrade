<?php
global $db;

$messageE = "";
$messageG = "";

$connect = $db->connect();
if ($connect != null) {
    if (isset($_POST['email'])) {
        $stm = $connect->prepare("SELECT * FROM users WHERE email = ?");
        $stm->execute(array($_POST['email']));
        if ($stm->fetch()) {
            $password = uniqid();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


            $header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $subject = ' GoodGrade - Votre mot de passe temporaire a changer ';
            $message =
                "<html>
            <head>
            <meta charset=\"UTF-8\">

            <style>

.mail {
    text-align: center;
    font-family: \"Source Sans Pro\";
}
b {
    font-size: 35px;
}
.sign {
    text-align: right;
    position: absolute;
    right: 38%;
}
            </style>
            </head>

            <body>
<div class=\"mail\">

    
               Bonjour, voici votre nouveau mot de passe: 
               <br/>
               <br/>
               <br/>

                
               <b>$password</b> 
                <br/>
                <br/> 
                <br/>




 Penser à le changer depuis votre espace personnel pour plus de sécurité.<br/>
 <br/>
 <br/>
                
               <div class=\"sign\"> Bonne journée à vous,<br/> 
                 L'équipe GoodGrade</div>
</div>
            </body>

            </html>";


            if (mail($_POST['email'], $subject, $message, $header)) {

                $stm = $connect->prepare("UPDATE users SET password = ? WHERE email = ?");
                $stm->execute(array($hashedPassword, $_POST['email']));
                $messageG = "Veuillez récupérer le mot de passe temporaire <br/> envoyé à votre boite mail pour vous connecter ! ";

                $stm = $connect->prepare("SELECT * FROM users WHERE email = ?");
                $stm->execute(array($_POST['email']));
            } else {
                $messageE = "Une erreur est survenue";
            }
        } else {
            $messageE = "Il n'existe pas de compte à cette adresse mail";
        }
        $db->disconnect();
    }
}


include 'template/forgot.php';
