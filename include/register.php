<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "dbconnect.php";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $exists = false;

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result1 = mysqli_query($conn,$sql);
    if(!$result1){
        echo "Something went Wrong!";
        exit;
    }

    $row_count = mysqli_num_rows($result1);
    if($row_count == 0){
        $sql = "INSERT INTO `users`(`name`, `phone`, `email`, `pass`, `date`) VALUES ('$name','$phone','$email','$pass', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "Error" .mysqli_error($conn);
            echo "Registration Failed";
        }
        else{
            echo "Registration Successfull";
            $_SESSION['showAlert'] = true;
            header("Location: ../index.php");
        }
    }
    else{
        $_SESSION['showAlert'] = False;
        header("Location: ../index.php");
    }
    }





    // if($row_count != 0){
    //     $_SESSION['showAlert'] = false;
    //     header("Location: ../index.php");
    //     exit;
    // }
    // else{
    // $sql = "INSERT INTO `users`(`name`, `phone`, `email`, `pass`, `date`) VALUES ('$name','$phone','$email','$pass', current_timestamp())";

    // $result = mysqli_query($conn, $sql);

    // if(!$result){
    //     echo "Error" .mysqli_error($conn);
    //     echo "Registration Failed";
    // }

    // echo "Registration Successfull";
    // $_SESSION['showAlert'] = true;
    // header("Location: ../index.php");
    // }
// }
?>