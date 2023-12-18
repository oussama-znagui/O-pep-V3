<?php
include '../config.php';

class user {
    private $id_user;
    private $name;
    private $mail;
    private $pass;
    private $role;


    public function __construct(){

    }
    public function __get($prop){
        return $this->$prop;
    }
    public function signup($name,$mail,$pass,$role){
        $stmt = Db::connexion()->prepare("INSERT INTO utilisateur (nom,email,passwordUser,role) VALUES (:nom,:email,:passwordUser,:role)");
        $stmt->bindParam(":nom",$name);
        $stmt->bindParam(":email",$mail);
        $stmt->bindParam(":passwordUser",$pass);
        $stmt->bindParam(":role",$role);
        $stmt->execute();

    }
    public function setInfo($name,$mail,$pass,$role){
        $this->name = $name;
        $this->mail = $mail;
        $this->pass = $pass;
        $this->role = $role;
    }


    public function checkEmail($mail){
        $sql = Db::connexion()->prepare("SELECT email from utilisateur where email = :email");
        $sql->bindParam(":email",$mail);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;
        }
        else {
            return true;
        }
    }
    public function get(){
        if($this->role == 'client'){
            echo 'alooo';
        }
    }

    public function login($email,$pass){
        $sql  = db::connexion()->prepare("SELECT * from utilisateur where email = :mail AND passwordUser = :pass");
        $sql->bindParam(":mail",$email);
        $sql->bindParam(":pass",$pass);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    

   
}






