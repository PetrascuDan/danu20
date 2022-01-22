<?php
    session_start();
    require_once 'connect.php';
    
    $login = $_POST['log'];
    $password = $_POST['pass'];
    $repeat = $_POST['passrepeat'];
    $email = $_POST['Email'];
    $check_login =  mysqli_query($connect, "SELECT `login` FROM `login` WHERE `login` = '$login'");

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["messageEmail"] = 'Introduceți corect email!';
        header('Location: ../register.php');
    }elseif(mysqli_num_rows($check_login) > 0){
        $_SESSION["messageLogin"] = 'Utilizatorul cu acest login deja există!';
        header('Location: ../register.php');
    }elseif($password === $repeat){
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `login`(`id`, `login`, `password`, `Email`) VALUES (NULL, '$login', '$password', '$email')");
        header('Location: ../login.php');  
    }else{
        $_SESSION["messagePass2"] = 'Parolele trebuie să se repete!';
        header('Location: ../register.php');
    }
    mysql_close($connect);
?>
