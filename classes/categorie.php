<?php
  include '../config.php';
class categorie{
    private $idCat;
    private $nom;

    public function __construct(){
        
    }
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop,$val){
         $this->$prop = $val ;
    }
    //Ajouter une categorie
    public function ajouterCat($nom){
         $stmt = Db::connexion()->prepare("INSERT INTO categorie (nomCateorie) VALUES (:nomCateorie)");
         $stmt->bindParam(":nomCateorie",$nom);
         $stmt->execute();

    }
    
}

$c = new categorie();
// $c->ajouterCat("allo");