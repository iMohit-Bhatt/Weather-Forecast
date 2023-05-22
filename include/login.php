<?php
session_start();

    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "dbconnect.php";

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM users Where email = '$email'";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Error" .mysqli_error($conn);
    }

    $row = mysqli_fetch_assoc($result);

    if($email == $row['email'] && $pass == $row['pass']){
        echo "Login Successfull";
        header("Location: ../weather_forecast.php");
        // $_SESSION['user_id'] = $row['id'];
        // $_SESSION['email'] = $row['email'];
        // $_SESSION['name'] = $row['name'];

    }
    
    else{
    $_SESSION['showIC'] = true;
    header("Location: ../log_in.php");
    }

    // $sql = "SELECT * from users where email= '$email' AND password = '$pass'";
    // $result = mysqli_query($conn, $sql);
    // $num = mysqli_num_rows($result);
    //     if($num == 1){
    //         $login = true;
    //     }

    //     else{
    //         $showError = "Invalid Credentials";
    //     }
}

?>