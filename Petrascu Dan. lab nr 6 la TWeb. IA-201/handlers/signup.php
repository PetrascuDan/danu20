<?php
    session_start();
    require_once 'connect.php';
    require_once 'functions.php';
    
    $login = toCorrectString($_POST['login']);
    $password = toCorrectString($_POST['password']);
    $passrepeat = toCorrectString($_POST['passrepeat']);
    $email = toCorrectString($_POST['email']);
    
    try{
            $login = mysqli_real_escape_string($connect, $login);
        $password = mysqli_real_escape_string($connect, $password);
        $passrepeat = mysqli_real_escape_string($connect, $passrepeat);
        $email = mysqli_real_escape_string($connect, $email);

        $error_fields = [];

        if($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = [
                "message" => 'Introduceti corect emailul!',
                "field" => 'Email'
            ];
            $error_fields[] = $error;
        }

        if(strlen($login) < 3 || $login === ''){
            $error = [
                "message" => 'Loginul trebuie să fie mai lung de 3 caractere!',
                "field" => 'login'
            ];
            $error_fields[] = $error;
        }

        if(strlen($password) < 8 || $password === ''){
            $error = [
                "message" => 'Parola nu poate fi mai mică decât 8!',
                "field" => 'password'
            ];
            $error_fields[] = $error;
        }

        if($passrepeat === '' || $passrepeat !== $password){
            $error = [
                "message" => 'Parolele nu se aseamănă!',
                "field" => 'passrepeat'
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

        $check_login =  mysqli_query($connect, "SELECT `login` FROM `login` WHERE `login` = '$login'");

        //În caz dacă acest login deja există
        if(mysqli_num_rows($check_login) > 0){
            $error = [
                "message" => 'Utilizatorul cu acest login deja există!',
                "field" => 'login'
            ];
            $error_fields[] = $error;

            $response = [
                "status" => false,
                "type" => 1,
                "fields" => $error_fields
            ];
            echo json_encode($response);
        }else{
            $password = md5($password);
            mysqli_query($connect, "INSERT INTO `login`(`id`, `login`, `password`, `Email`) VALUES (NULL, '$login', '$password', '$email')");
            $_SESSION["register-success"] = 'Registrarea a avut loc cu success!';

            $response = [
                "status" => true, 
                "message" => 'Registrarea a avut loc cu success!'
            ];
            echo json_encode($response);
        }
    }catch(Exception $e){
        echo 'Eroare: ',  $e->getMessage(), "\n";
    } 
    //mysql_close($connect);
?>
