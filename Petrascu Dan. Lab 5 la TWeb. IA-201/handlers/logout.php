<?php
    session_start();
    unset($_SESSION['info']);
    $_SESSION['logout'] = "Ați ieșit din cont!";
    header('Location: ../login.php');
?>