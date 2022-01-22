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
                <form class="form_contacts" id="cont-form">
                    <p class="pCtext">Numele vostru:*</p>
                    <p><input id="p1" name="name" type="text" placeholder="Numele">
                        
                    <label class="msg-name msg"></label>    
                        
                    <p class="pCtext">Emailul vostru:*</p>
                    <p><input id="p2" name="email" type="text" placeholder="Email"></p>
                    
                    <label class="msg-email msg"></label>
                    
                    <p class="pCtext">Cui adresat:*</p>
                    <p><select name="adress" id="p3" size="1" multiplename="adresat">
                            <option>admin(admininstrator)</option>
                        </select></p>
                    <p class="pCtext">Tema:*</p>
                    <p><input id="p4" name="tema" type="text" placeholder="Tema"></p>
                    
                    <label class="msg-tema msg"></label>
                    
                    <p class="pCtext">Mesajul:</p>
                    <p><textarea id="p5" name="message" type="text" placeholder="Mesajul vostru"></textarea></p>
                    <input type="submit" class="sent-btn" value="Trimite" name="SubmitLog">
                    
                    <p class="msg_success"></p>        
                    <p class="msg_fail"></p>
                    
                </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>    
    
<script src="js/contacts-validate.js"></script>
 
</body>
</html>