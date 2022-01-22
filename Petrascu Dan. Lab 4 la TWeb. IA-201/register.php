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
                <form class="form_register" action="handlers\signup.php" method="post" enctype="multipart/form-data">
                    <p class="pRegtext">Login:*</p>
                    <p><input id="p1" name="log" type="text" placeholder="Login" required>
                        
                    <?php 
                        if(isset($_SESSION["messageLogin"])){
                            echo '<p class="msg"> ' . $_SESSION["messageLogin"] . ' </p>';
                        }
                        unset($_SESSION["messageLogin"]);
                    ?>
                        
                    <p class="pRegtext">Parola:*</p>
                    <p><input id="p2" name="pass" type="password" placeholder="Password" required></p>
                    <p class="pRegtext">Repetați parola:*</p>
                    <p><input id="p3" name="passrepeat" type="password" placeholder="Repeat Password" required></p>
                    
                    <?php 
                        if(isset($_SESSION["messagePass2"])){
                            echo '<p class="msg"> ' . $_SESSION["messagePass2"] . ' </p>';
                        }
                        unset($_SESSION["messagePass2"]);
                    ?>
                    
                    <p class="pRegtext">Email:*</p>
                    <p><input id="p4" name="Email" type="text" placeholder="Email" required></p>
                    
                    <?php 
                        if(isset($_SESSION["messageEmail"])){
                            echo '<p class="msg"> ' . $_SESSION["messageEmail"] . ' </p>';
                        }
                        unset($_SESSION["messageEmail"]);
                    ?>
                    
                    <input type="submit" value="Trimite" name="SubmitLog">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>