
<?php
include '../classes/user.php';


if(!$_POST){
    header('Location: ../index.php');
}

$nom = $_POST['nom'] . ' ' .$_POST['Pnom'];

$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$role = $_POST['role'];
if(empty($_POST['nom']) || empty($_POST['Pnom'])){
    ('veuillez saisir votre nom et votre prenom');

}
if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
     die('veuillez saisir un email valide');
}
if($pass != $cpass){
    die('les mots de pass ne sont pas identiques');
}else{

    $newUSer = new User();
    if($newUSer->checkEmail($email)){
        $newUSer->signup($nom,$email,$pass,$role);
        $newUSer->setInfo($nom,$email,$pass,$role);
            header('Location: ../login.php');   
    }
    else{
        die("l'email que vous avez saisi existe deja");
    }
}



