<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "opep_v2";

$conn = new mysqli($server,$user,$pass,$db);
if($conn->connect_error){
    die('erroooor');
}