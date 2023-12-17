<?php

include '../classes/user.php';


if(!$_POST){
    header('Location: ../login.php');
}

$email = $_POST['email'];
$pass = $_POST['pass'];
