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
    <link rel="stylesheet" href="css\register-style.css">
    <link rel="stylesheet" href="css\user.css">
    <link rel="stylesheet" href="css\menu-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body background="img\back.jpg">
    <?php include 'menu.php';?>
    
    <h1 class="RegTitle" align="center">Registrarea</h1>
    
    <div class="regDiv" style="background-color:whitesmoke; opacity:0.88;" align="justify">
        <div class="register" id="reg">
            <div class="reg_container">
                <form class="form_register" id="register-form">
                    <p class="pRegtext">Login:*</p>
                    <p><input id="p1" name="login" type="text" placeholder="Login">
                        
                    <label class="msg msg-login"></label>
                    
                    <p class="pRegtext">Parola:*</p>
                    <p><input id="password" name="password" type="password" placeholder="Password"></p>
                    
                    <label class="msg msg-password"></label>
                    
                    <p class="pRegtext">Repetați parola:*</p>
                    <p><input id="p3" name="passrepeat" type="password" placeholder="Repeat Password"></p>
                    
                    <label class="msg msg-passrepeat"></label>

                    <p class="pRegtext">Email:*</p>
                    <p><input id="p4" name="Email" type="text" placeholder="Email"></p>
                    
                    <label class="msg msg-Email"></label>
                    
                    <input type="submit" class="register-btn" value="Trimite" name="SubmitLog">
                </form>
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>  
    
<script src="js/register-validate.js"></script>
    
</body>
</html>