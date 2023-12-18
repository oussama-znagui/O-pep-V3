<?php

include '../classes/user.php';


if(!$_POST){
    header('Location: ../login.php');
}

$email = $_POST['email'];
$pass = $_POST['pass'];

$user1 = new user();
if($user1->login($email,$pass) > 0){
    session_start();
    $_SESSION['user'] = $user1->login($email,$pass);
    if($_SESSION['user']['Role'] == 'client'){
        header('Location: ../client.php');
    }elseif($_SESSION['user']['Role'] == 'admin'){
            // header('Location: ../login.php');
    }
}

