<?php
define("host","localhost");
define("user","root");
define("pass","");
define("db","opep_v2");


    class Db{
        private $host;
        private $user; 
        private $pass;
        private $db;


        public function __construct(){
        
        }
       public static function connexion(){
                try{
                    $conn = new PDO("mysql:host=". host . ";dbname=". db ,  user  ,  pass);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    
                    return $conn;
                }catch(PDOException $e){
                    echo 'connexion 0' . $e->getMessage();
                 }
            
        }
        

    }
    
    // $connexion =  db::connexion();
 


    