<?php
if(!$_POST){
    header('Location: ../index.php');
}
include '../config.php';
$nom = $_POST['nom'] . ' ' .$_POST['Pnom'];

$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if(empty($_POST['nom']) || empty($_POST['Pnom'])){
    ('veuillez saisir votre nom et votre prenom');

}
if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
     die('veuillez saisir un email valide');
}
if($pass != $cpass){
    die('les mots de pass ne sont pas identiques');
}

$sql = "INSERT INTO utilisateur (nom,email,passwordUser) VALUES (?,?,?)";

