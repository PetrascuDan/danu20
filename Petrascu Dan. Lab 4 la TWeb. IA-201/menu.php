<?php

echo '<header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo">
                    <a class="home_link" href="index.php"><img class="logo" src="img\BookBox_Logo.png" alt=""></a>
                </div>
                <nav class="nav">
                    <a class="nav_link" href="personaje.php">PERSONAJE</a>
                    <a class="nav_link" href="alte-povesti.php">ALTE POVEȘTI ALE AUTORULUI</a>
                    <a class="nav_link" href="index.php#surse">REFERINȚE</a>
                    <a class="nav_link" href="contacts.php">CONTACTE</a>
                </nav>
                 <div class="header_profile">';
                    if(!empty($_SESSION['info'])){
                        echo '<img class="user" src="img\user.png" alt="" onclick = ClickButtonUser("info_user") >';
                    }else{
                        echo '<a class="login-form" href="login.php"><img class="user" src="img\user.png" alt=""></a>';
                    }
                echo '<div class="info_user" id="info_user">
                        <div class="info_container">
                            <h3 class="logTitle" align="center">Utilizatorul</h3>';
                        echo '<p class="info-text">Login: <span>' . $_SESSION["info"]["login"] . ' </span></p>';
                        echo '<p class="info-text">Email: <span>' . $_SESSION["info"]["email"] . ' </span></p>';    
                            echo '<form class="info_form" action="handlers\logout.php">
                                    <input type="submit" value="Iesire" name="SubmitLog">
                            </form>
                        </div>
                    </div>
                </div>
                <script src="js\drop.js"></script>
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn"><i class="fa fa-bars"></i></button>
                        <div class="dropdown-content">
                            <a href="Personaje.html">PERSONAJE</a>
                            <a href="Alte-povesti.html">ALTE POVEȘTI ALE AUTORULUI</a>
                            <a href="#surse">REFERINȚE</a>
                            <a href="Contacts.html">CONTACTE</a>
                        </div>
                </div>
            </div>
        </div>
</header>';
                                        
                                        
?>