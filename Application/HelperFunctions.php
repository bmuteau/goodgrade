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

        $cle = rand(1000000, 9000000);
        $email = $_POST['email'];

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
    public static function prepareProPage(string $email, string $eta, string $description, string $website, string $adress, string $image, string $image2, string $image3)
    {
        if (self::isProAccountExist($email)) {
            return 1; // email existe deja
        }
        global $db;
        $connect = $db->connect();
        if ($connect != null) {
            $stm = $connect->prepare("INSERT INTO company(eta,description,website,adress,image,image2,image3) VALUES (?,?,?,?,?,?,?)");

            $stm->execute(array(

                $eta,
                $description,
                $website,
                $adress,
                $image,
                $image2,
                $image3,


            ));
            var_dump($stm->errorInfo());



            $db->disconnect();
            if (self::isProAccountExist($email)) {

                return 0; // aucun probleme
            }
            return 3; // erreur a la creation
        }
        return 2; // pas de connexion a la bdd
    }
    public static function isConnected(): bool
    {
        if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
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

            if ($stmresult) {
                if (password_verify($password, $stmresult['password'])) {
                    $_SESSION['email'] = $stmresult['email'];
                    $_SESSION['firstname'] = $stmresult['firstname'];
                    $_SESSION['lastname'] = $stmresult['lastname'];
                    $_SESSION['postalcode'] = $stmresult['postalcode'];
                    $_SESSION['pseudo'] = $stmresult['pseudo'];
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
                        $_SESSION['email'] = $stmresult['email'];

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
}
