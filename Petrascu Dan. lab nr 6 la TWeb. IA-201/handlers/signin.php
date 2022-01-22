<?php
    session_start();
    require_once 'connect.php';
    require_once 'functions.php';

    $login = toCorrectString($_POST['login']);
    $password = toCorrectString($_POST['password']);
    
    try{
        $login = mysqli_real_escape_string($connect, $login);
        $password = mysqli_real_escape_string($connect, $password);

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

        $check_user =  mysqli_query($connect, "SELECT * FROM `login` WHERE `login` = '$login'");

        if(mysqli_num_rows($check_user) > 0){
            $user = mysqli_fetch_assoc($check_user);
            $password = md5($password);
            if($user['password'] === $password){

                $lastOnline = mysqli_query($connect, "SELECT `last_online` FROM `login` WHERE `login` = '$login' AND `last_online` != 'NULL'");
                if(mysqli_num_rows($lastOnline) > 0){
                    $online = mysqli_fetch_assoc($lastOnline);
                    $last_entry = $online['last_online'];
                    $_SESSION['time'] = "Ultima data intrată - $last_entry";
                }

                mysqli_query($connect, "UPDATE `login` SET `last_online`=now() WHERE `login` = '$login'");

                $_SESSION['info'] = [
                    "login" => $user['login'],
                    "email" => $user['Email']
                ];             
                $_SESSION['success'] = "Ați intrat cu succes în cont!";

                $response = [
                    "status" => true
                ];
                echo json_encode($response);
                die();
            }
        }
        $response = [
            "status" => false,
            "message" => 'Loginul sau parola incorectă!',
            "type" => 2
        ];
        echo json_encode($response);
    //mysql_close($connect);
    }catch(Exception $e){
        echo 'Eroare: ',  $e->getMessage(), "\n";
    }
?>