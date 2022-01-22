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
                <form class="form_login" id="login-form">
                    <p class="mainText">Login:*</p>      
                    <p><input type="text" placeholder="Login" name="login"></p>
                    
                    <label class="msg-login msg"></label>
                    
                    <p class="mainText">Parola:*</p>  
                    <p><input type="password" placeholder="Password" name="pass"></p> 
                    
                    <label class="msg-pass msg"></label>
                    
                    <p><input type="submit" class="login-btn" value="Trimite" name="SubmitLog"></p>  
                    <p class="login-msg"></p>
                    <?php 
                        if(isset($_SESSION["register-success"])){
                            echo '<p class="reg-msg"> ' . $_SESSION["register-success"] . ' </p>';
                            unset($_SESSION["register-success"]);
                        }elseif(isset($_SESSION["logout"])){
                            echo '<p class="out-msg"> ' . $_SESSION["logout"] . ' </p>';
                            unset($_SESSION["logout"]);
                        }
                    ?> 
                </form> 
            </div>
            <div class="to-register">
                <p class="toregText">Nu aveți cont?</p>
                <a href="register.php" class="to-reg">Înregistrează cont nou</a>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>    
    
<script src="js/login-validate.js"></script>
    
</body>
</html>