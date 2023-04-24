<?php
session_start();
include 'admin/config/dbcon.php';

if(isset($_POST['register_btn'])){
    $firstName = mysqli_real_escape_string($con, $_POST['firstname']); //thoát các ký tự đặc biệt trong một chuỗi để có thể sử dụng nó một cách an toàn trong truy vấn MySQL
    $lastName = mysqli_real_escape_string($con, $_POST['lastname']);
    $userName = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $passWord = mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirm_password']);

    if($passWord == $confirmPassword){

        //Check email in DB
        $checkEmail_query = "SELECT email FROM users WHERE email='$email'";
        $checkEmail_query_run = mysqli_query($con, $checkEmail_query);

        if(mysqli_num_rows($checkEmail_query_run) > 0){
            $_SESSION['message'] = "Already email exits";
            header("Location: register.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users(firstname, lastname, username, email, password) VALUES ('$firstName', '$lastName', '$userName', '$email', '$passWord')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run){
                $_SESSION['message'] = "Registered Successfully";
                header("Location: login.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "Something went wrong!";
                header("Location: register.php");
                exit(0);
            }
        }
        
    }
    else
    {
        $_SESSION['message'] = "Password and Confirm Password doest not match";
        header("Location: register.php");
        exit(0);
    }
}
else
{
    header("Location: register.php");
    exit(0);
}
?>