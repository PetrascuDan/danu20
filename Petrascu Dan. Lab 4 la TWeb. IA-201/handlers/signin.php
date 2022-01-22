<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['pass'];
    
    $password = md5($password);
    
    $check_user =  mysqli_query($connect, "SELECT * FROM `login` WHERE `login` = '$login' AND `password` = '$password'");
    
    $user = mysqli_fetch_assoc($check_user);

    if(mysqli_num_rows($check_user) > 0){
        $_SESSION['info'] = [
            "login" => $user['login'],
            "email" => $user['Email']
        ];
        
        header("Location: ../index.php");
    }
    else{
        $_SESSION['login-message'] = "Loginul sau parola incorectă!";
        header("Location: ../login.php");
    }
    mysql_close($connect);
?>