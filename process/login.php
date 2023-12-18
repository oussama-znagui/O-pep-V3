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
    if($_SESSION['user']['role'] == 'client'){
        header('Location: ../login.php');
    }elseif($_SESSION['user']['role'] == 'admin'){
            // header('Location: ../login.php');
    }
}

