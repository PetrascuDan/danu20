<?php
    session_start();
    require_once 'connect.php';
    
    $name = $_POST['name'];
    $from = $_POST['email'];
    $topic = $_POST['topic'];
    $message = toCorrectString($_POST['message']);

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

    function toCorrectString($str){
        $str = htmlspecialchars($str);
        $str = urldecode($str);
        $str = trim($str);
        return stripslashes($str);
    }
?>