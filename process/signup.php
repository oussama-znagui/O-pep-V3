<?php
include 'config.php'
$nom = $_POST['nom'];
$pnom = $_POST['Pnom'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if(empty($nom) || empty($pnom)){
    die('veuillez saisir votre nom et votre prenom');
}
if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
     die('veuillez saisir un email valide');
}
if($pass != $cpass){
    die('les mots de pass ne sont pas identiques');
}

