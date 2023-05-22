<?php

$server = "localhost";
$username = "root";
$passowrd = "";
$database = "users";

$conn = mysqli_connect($server, $username, $passowrd, $database);

if(!$conn){
    die("Error" . mysqli_connect_error());
}



?>