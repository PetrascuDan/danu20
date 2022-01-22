<?php
    session_start();
    require_once 'connect.php';
    require_once 'functions.php';
    
    $name = toCorrectString($_POST['name']);
    $from = toCorrectString($_POST['email']);
    $topic = toCorrectString($_POST['topic']);
    $message = toCorrectString($_POST['message']);

    try{
        $name= mysqli_real_escape_string($connect, $name);
        $from = mysqli_real_escape_string($connect, $from);
        $topic = mysqli_real_escape_string($connect, $topic);
        $message = mysqli_real_escape_string($connect, $message);

        $to = "petrascudanu2@gmail.com";
    
        $error_fields = [];

        if($from === '' || !filter_var($from, FILTER_VALIDATE_EMAIL)) {
            $error = [
                "message" => 'Introduceti corect emailul!',
                "field" => 'email'
            ];
            $error_fields[] = $error;
        }

        if($name === ''){
            $error = [
                "message" => 'Introduceți numele!',
                "field" => 'name'
            ];
            $error_fields[] = $error;     
        }

        if($topic === ''){
            $error = [
                "message" => 'Introduceți tema!',
                "field" => 'tema'
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

        $headers = "From: $from" . "\r\n" . 
            "Reply-To: $from" . "\r\n" . 
            "X-Mailer: PHP/" . phpversion();

        if(mail($to, $topic, $message, $headers)){
            mysqli_query($connect, "INSERT INTO `contacts`(`id`, `name`, `tema`, `message`, `email`, `date`) VALUES (NULL, '$name', '$topic', '$message', '$from', now())");
        
            $response = [
                "status" => true,
                "message" => 'Mesajul a fost trimis cu success!'   
            ];
            echo json_encode($response);
        }else{
            $response = [
                "status" => false,
                "message" => 'Eroare de trimitere a mesajului!',
                "type" => 2
            ];
            echo json_encode($response);
        }
    }catch(Exception $e){
        echo 'Eroare: ',  $e->getMessage(), "\n";
    } 
?>