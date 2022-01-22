<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
    <title>"Rezumat Amintiri din copilărie I"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="css/contacts-style.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/menu-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body background="img\back.jpg">
    <?php include 'menu.php';?>
    
    <h1 class="ContTitle" align="center">Contacte</h1>
    
    <div class="contactsDiv" style="background-color:whitesmoke; opacity:0.88;" align="justify">
        <div class="contacts" id="reg">
            <div class="cont_container">
                <form class="form_contacts" action="handlers\contact.php" method="post" enctype="multipart/form-data">
                    <p class="pCtext">Numele vostru:*</p>
                    <p><input id="p1" name="name" type="text" placeholder="Numele" required>
                    <p class="pCtext">Emailul vostru:*</p>
                    <p><input id="p2" name="email" type="text" placeholder="Email" required></p>
                    <?php 
                        if(isset($_SESSION["messageEmail"])){
                            echo '<p class="msg"> ' . $_SESSION["messageEmail"] . ' </p>';
                        }
                        unset($_SESSION["messageEmail"]);
                    ?>
                    <p class="pCtext">Cui adresat:*</p>
                    <p><select name="adress" id="p3" size="1" multiplename="adresat">
                            <option>admin(admininstrator)</option>
                        </select></p>
                    <p class="pCtext">Tema:*</p>
                    <p><input id="p4" name="tema" type="text" placeholder="Tema" required></p>
                    <p class="pCtext">Mesajul:</p>
                    <p><textarea id="p5" name="message" type="text" placeholder="Mesajul vostru"></textarea></p>
                    <input type="submit" value="Trimite" name="SubmitLog">
                    
                    <?php 
                        if(isset($_SESSION["message_success"])){
                            echo '<p class="msg_success"> ' . $_SESSION["message_success"] . ' </p>';
                            unset($_SESSION["message_success"]);
                        }elseif(isset($_SESSION["message_fail"])){
                            echo '<p class="msg_fail"> ' . $_SESSION["message_fail"] . ' </p>';
                            unset($_SESSION["message_fail"]);
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>