<?php
    session_start();

    if(isset($_SESSION['info'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head> 
    <title>"Rezumat Amintiri din copilărie I"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="css\login-style.css">
    <link rel="stylesheet" href="css\user.css">
    <link rel="stylesheet" href="css\menu-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body background="img\back.jpg">
    <?php include 'menu.php';?>
    
    <h1 class="LoginTitle" align="center">Intra în cont</h1>
    
    <div class="loginDiv" style="background-color:whitesmoke; opacity:0.88;" align="justify">
        <div class="log-reg-container">
            <div class="login-form">
                <form class="form_login" action="handlers\signin.php" method="post">
                    <p class="mainText">Login:*</p>      
                    <p><input type="text" placeholder="Login" name="login" required></p>
                    <p class="mainText">Parola:*</p>  
                    <p><input type="password" placeholder="Password" name="pass" required></p>  
                    <p><input type="submit" value="Trimite" name="SubmitLog"></p>  
                    <?php 
                        if(isset($_SESSION["login-message"])){
                            echo '<p class="login-msg"> ' . $_SESSION["login-message"] . ' </p>';
                        }
                        unset($_SESSION["login-message"]);
                    ?>
                </form> 
            </div>
            <div class="to-register">
                <p class="toregText">Nu aveți cont?</p>
                <a href="register.php" class="to-reg">Înregistrează cont nou</a>
            </div>
        </div>
    </div>
    
</body>
</html>