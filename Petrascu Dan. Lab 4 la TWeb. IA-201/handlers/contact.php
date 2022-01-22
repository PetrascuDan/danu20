<?php
    session_start();
    require_once 'connect.php';
    
    $name = $_POST['name'];
    $from = $_POST['email'];
    $topic = $_POST['tema'];
    $message = $_POST['message'];

    $to = "petrascudanu2@gmail.com";
    
    if(!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["messageEmail"] = 'Introduceți corect email!';
        header('Location: ../contacts.php');
    }
    else{
        $message = htmlspecialchars($message);
        $message = urldecode($message);
        $message = trim($message);

        $headers = "From: $from" . "\r\n" . 
            "Reply-To: $from" . "\r\n" . 
            "X-Mailer: PHP/" . phpversion();
        if(mail($to, $topic, $message, $headers)){
            $_SESSION["message_success"] = 'Mesajul a fost trimis cu success!';
            header('Location: ../contacts.php');
        }else{
            $_SESSION["message_fail"] = 'Eroare de trimitere a mesajului!';
            header('Location: ../contacts.php');
        } 
    }
?>