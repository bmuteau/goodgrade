<?php

namespace Application;

class HelperFunctions
{
    public function __construct()
    {
    }
    public static function isAccountExist(string $email): bool
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM users WHERE email = ? ");
            $stm->execute(array($email));
            if ($stm->fetch()) {
                $db->disconnect();
                return true;
            }
            $db->disconnect();
        }
        return false;
    }
    public static function createAccount(string $pseudo, string $firstname, string $lastname, string $email, string $password, string $postalcode, int $newsletter)
    {
        var_dump($newsletter);
        if (self::isAccountExist($email)) {
            return 1; // email existe deja
        }
        global $db;



        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("INSERT INTO users(pseudo,firstname,lastname,email,password,postalcode,newsletter) VALUES (?,?,?,?,?,?,?)");
            $stm->execute(array(

                $pseudo,
                $firstname,
                $lastname,
                $email,
                password_hash($password, PASSWORD_DEFAULT),
                $postalcode,
                $newsletter,


            ));


            var_dump($stm->errorInfo());
            $db->disconnect();
            if (self::isAccountExist($email)) {
                self::connexion($email, $password);

                return 0; // aucun probleme
            }
            return 3; // erreur a la creation
        }
        return 2; // pas de connexion a la bdd
    }
    public static function isProAccountExist(string $email): bool
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM company WHERE email = ? ");
            $stm->execute(array($email));
            if ($stm->fetch()) {
                $db->disconnect();
                return true;
            }
            $db->disconnect();
        }
        return false;
    }
    public static function createAccountProOne(string $manager_name, string $company_name, string $phone, string $email,   string $password, string $postalcode)
    {
        if (self::isProAccountExist($email)) {
            return 1; // email existe deja
        }

        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("INSERT INTO company(manager_name,company_name,phone,email,password,postalcode) VALUES (?,?,?,?,?,?)");


            $stm->execute(array(

                $manager_name,
                $company_name,
                $phone,
                $email,
                password_hash($password, PASSWORD_DEFAULT),
                $postalcode,


            ));
            var_dump($stm->errorInfo());



            $db->disconnect();
            if (self::isProAccountExist($email)) {
                self::connexion($email, $password);

                return 0; // aucun probleme
            }
            return 3; // erreur a la creation
        }
        return 2; // pas de connexion a la bdd
    }
    public static function prepareProPage(string $eta, string $description, string $website, string $adress,  int $id)
    {
        if (self::isProAccountExist($id)) {
            return 1; // email existe deja
        }
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("UPDATE company SET type=?,description=?,website=?,adress=? WHERE id=?");

            $stm->execute(array(

                $eta,
                $description,
                $website,
                $adress,
                $id,


            ));

            $db->disconnect();
            if (self::isProAccountExist($id)) {

                return 0; // aucun probleme
            }
            return 3; // erreur a la creation
        }
        return 2; // pas de connexion a la bdd
    }
    public static function isConnected(): bool
    {
        if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['spec'])) {
            return true;
        }
        return false;
    }
    public static function isAdmin()
    {
        if (self::isConnected() == false) {
            return false;
        }
        if ($_SESSION['admin'] == 1) {
            return true;
        }
        return false;
    }
    public static function connexion(string $email, string $password)
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM users WHERE email=? ");
            $stm->execute(array($email));
            $stmresult = $stm->fetch();
            unset($_SESSION['accountType']);

            if ($stmresult) {
                if (password_verify($password, $stmresult['password'])) {
                    $_SESSION['id'] = $stmresult['id'];
                    $_SESSION['accountType'] = "users";
                    $_SESSION['email'] = $stmresult['email'];
                    $_SESSION['firstname'] = $stmresult['firstname'];
                    $_SESSION['lastname'] = $stmresult['lastname'];
                    $_SESSION['postalcode'] = $stmresult['postalcode'];
                    $_SESSION['pseudo'] = $stmresult['pseudo'];
                    $_SESSION['image'] = $stmresult['image'];
                    $_SESSION['spec'] = $stmresult['spec'];
                    $_SESSION['password'] = $password;


                    return 0; // tout est ok
                } else {
                    return 1; // password incorect
                }
            } else {
                $stm = $connect->prepare("SELECT * FROM company WHERE email=? ");
                $stm->execute(array($email));
                $stmresult = $stm->fetch();
                if ($stmresult) {
                    if (password_verify($password, $stmresult['password'])) {
                        $_SESSION['accountType'] = "company";
                        $_SESSION['id'] = $stmresult['id'];
                        $_SESSION['crdate'] = $stmresult['crdate'];
                        $_SESSION['manager_name'] = $stmresult['manager_name'];
                        $_SESSION['company_name'] = $stmresult['company_name'];
                        $_SESSION['email'] = $stmresult['email'];
                        $_SESSION['phone'] = $stmresult['phone'];
                        $_SESSION['adress'] = $stmresult['adress'];
                        $_SESSION['postalcode'] = $stmresult['postalcode'];
                        $_SESSION['type'] = $stmresult['type'];
                        $_SESSION['image'] = $stmresult['image'];
                        $_SESSION['image2'] = $stmresult['image2'];
                        $_SESSION['image3'] = $stmresult['image3'];
                        $_SESSION['description'] = $stmresult['description'];
                        $_SESSION['website'] = $stmresult['website'];
                        $_SESSION['spec'] = $stmresult['spec'];

                        $_SESSION['password'] = $password;

                        return 0; // tout est ok
                    } else {
                        return 1; // password incorect

                    }
                }
            }
            return 2; // email erronné
        }
        return 3; // erreur avec de connexion avec la DB 


    }
    public static function disconnected()
    {
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
        }
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);
        }


        if (isset($_SESSION['password'])) {
            unset($_SESSION['password']);
        }
    }
    public static function editInfo(string $pseudo, string $firstname, string $lastname, string $email, string $postalcode,  int $id)
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("UPDATE users SET pseudo=?,firstname=?,lastname=?,email=?,postalcode=? WHERE id=? ");
            $stm->execute(array(

                $pseudo,
                $firstname,
                $lastname,
                $email,
                $postalcode,

                $id,

            ));
            header('location:profil');
            $db->disconnect();
        }
    }
    public static function newMdp(string $password, int $id)
    {
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("UPDATE users SET password=? WHERE id=? ");
            $stm->execute(array(

                password_hash($password, PASSWORD_DEFAULT),
                $id,

            ));
            header('location:profil');
            $db->disconnect();
        }
    }
    public static function addImage($image, $champ)
    {
        global $db;
        $maxSize = 2097152;
        $extensionsValid = array('jpg', 'jpeg', 'png', 'gif');

        if (isset($image) and !empty($image['name'])) {
            if ($image['size'] <= $maxSize) {
                $extensionUpload = strtolower(substr(strrchr($image['name'], '.'), 1));
                if (in_array($extensionUpload, $extensionsValid)) {
                    $path = "public/etimg/" . $_SESSION['id'] . $champ . "." . $extensionUpload;
                    $result = move_uploaded_file($image['tmp_name'], $path);
                    if ($result) {
                        $connect = $db->connect();

                        if ($connect != null) {
                            $updateavatar = $connect->prepare("UPDATE company SET $champ=:image WHERE id=:id");
                            $updateavatar->execute(array(
                                'image' => $_SESSION['id'] . "$champ" . "." . $extensionUpload,
                                'id' => $_SESSION['id'],
                            ));
                            var_dump($updateavatar->errorInfo());
                        } else {
                            $msg = "Il y'a eu une erreur pendant l'importation de votre photo";
                        }
                    } else {
                        $msg = "Votre photo de profil doit être dans un des formats jpg,png,jpeg ou gif !";
                    }
                } else {
                    $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
                }
            }
        }
    }
    public static function isCompany()
    {
        if (self::isConnected() == false) {
            return false;
        }
        if ($_SESSION['spec'] == 1) {
            return true;
        }
        return false;
    }
    public static function getCompanyModel(int $id)
    {
        global $db;
        $res = array();

        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("SELECT * FROM company WHERE id=? ");
            $stm->execute(array($id));
            return $stm->fetchAll();
        }
        return $res;
    }
    public static function myGet(string $index): ?string
    {
        $url = $_SERVER["REQUEST_URI"];
        $exp =  explode("?", $url, 2);
        if (count($exp) <= 1)
            return null;
        $gets = explode("&", $exp[1]);
        foreach ($gets as $get) {
            $idval = explode("=", $get, 2);
            if (count($idval) == 2 && $idval[1] != "" && $idval[0] == $index) {
                return $idval[1];
            }
        }
        return null;
    }
}
