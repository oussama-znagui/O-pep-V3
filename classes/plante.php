<?php
    //  include '../config.php';
class  plante {
        private $idPlante;
        private $nom;
        private $prix;
        private $image;
        private $idCategorie;
        private Categorie $categorie;

        public function __construct($idp,$n,$p,$i,$idc){
            $this->idPlante = $idp;
            $this->nom = $n;
            $this->prix = $p;
            $this->image = $i;
            $this->idCategorie = $idc;


    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    
    public function __get($prop){
        return $this->$prop;
    }
     public function getPrix(){
        return $this->prix;
    }

    public static function getPlants(){
        $sql = Db::connexion()->query('SELECT * from plante Join categorie where plante.idCategorie = categorie.idCategorie');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $arrayPlants = array();
        
        foreach($result as $row){
            $p = new plante($row['idPlante'],$row['nom'],$row['prix'],$row['image'],$row['idCategorie']);
            
            // $p->__set('idPlante',$row['idPlante']);
            //  $p->__set('nom',$row['nom']);
            //   $p->__set('prix',$row['prix']);
            //    $p->__set('image',$row['image']);
            //    $p->__set('idCategorie',$row['idCategorie']);
          
               array_push($arrayPlants,$p);
        }
       
        return $arrayPlants;
    }

    public static function filtrer($idc){
        $sql = db::connexion()->query("SELECT * from plante where idCategorie = $idc");

    }
  
    }


