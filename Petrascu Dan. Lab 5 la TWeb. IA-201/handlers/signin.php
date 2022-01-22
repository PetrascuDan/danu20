<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $error_fields = [];

    if(strlen($login) < 3 || $login === ''){
        $error = [
            "message" => 'Loginul nu poate fi mai mic de 3 caractere!',
            "field" => 'login'
        ];
        $error_fields[] = $error;
    }

    if(strlen($password) < 8 || $password === ''){
        $error = [
            "message" => 'Parola nu poate fi mai mică decât 8!',
            "field" => 'pass'
        ];
        $error_fields[] = $error;  
    }

    if(!empty($error_fields)){
        $response = [
            "status" => false, 
            "type" => 1,
            "fields" => $error_fields
        ];
        echo json_encode($response);
        die();
    }
    
    $password = md5($password);

    $check_user =  mysqli_query($connect, "SELECT * FROM `login` WHERE `login` = '$login' AND `password` = '$password'");
    
    $user = mysqli_fetch_assoc($check_user);

    if(mysqli_num_rows($check_user) > 0){
        $_SESSION['info'] = [
            "login" => $user['login'],
            "email" => $user['Email']
        ]; 
        $_SESSION['success'] = "Ați intrat cu succes în cont!";
            
        $response = [
            "status" => true, 
            "message" => 'Ați intrat cu succes în cont!'
        ];
        echo json_encode($response);
    }else{
        $response = [
            "status" => false,
            "message" => 'Loginul sau parola incorectă!',
            "type" => 2
        ];
        echo json_encode($response);
    }
    //mysql_close($connect);
?>