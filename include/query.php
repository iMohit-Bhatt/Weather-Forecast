<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "dbconnect.php";
    $email = $_POST["email"];
    $query = $_POST["query"];


$sql = "INSERT INTO `query`(`email`, `query`, `date`) VALUES ('$email','$query', current_timestamp())";    
    $result1 = mysqli_query($conn,$sql);
    if(!$result1){
        echo "Something went Wrong!";
        exit;
    }


    else{
        header("Location: ../landing.php");
    }

    }

?>