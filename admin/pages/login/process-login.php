<?php
    include ("../../core/config_db.php");

    session_start();
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Query get user where username
        $query = "SELECT id,username,password FROM admin where username=?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $user = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($user)==0){
            $_SESSION["login_error"] = "username";
            header('Location: ../../../index.php'); 
            exit();
        }

        $user_data = mysqli_fetch_assoc($user);
        
        if(password_verify($password,$user_data["password"])){
            $_SESSION["login"] = "admin";
            header('Location: ../certificate/seminar-certificate.php');
        }else{
            $_SESSION["login_error"] = "password";
            header('Location: ../../../index.php'); 
            exit();
        }



    }

?>