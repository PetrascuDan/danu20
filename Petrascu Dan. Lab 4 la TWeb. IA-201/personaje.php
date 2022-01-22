<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
    <title>"Rezumat Amintiri din copilărie I"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/menu-style.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
<body background="img\back.jpg">
    <?php include 'menu.php';?>
    
    <h1 class="Nume_poveste" align="center" style="color:white"><i>Amintiri din copilărie I</i></h1>
    
    <h2 class="nume_rezumat" align="center">Personaje</h2>
    <div class="table1div">
        <font face="Montserrat">
        <table class="table1" align="center" border="5" style="border-color:#950101; background-color:whitesmoke; opacity:0.88;color:black" cellpadding="5">
        <tr>
            <th>Nică</th>
            <th>Smaranda</th>
            <th>Moș Vasile</th>
            <th>părintele Ioan</th>
            <th>Stefan</th>
            <th>Smărăndița</th>
        </tr>
        <tr>
            <td><img src="img\Nica.png" width="100%" height="100%"></td>
            <td><img src="img\Smaranda.png" width="100%" height="100%"></td>
            <td><img src="img\Mos.png" width="100%" height="80%"></td>
            <td><img src="img\Parinte.png" width="100%" height="80%"></td>
            <td class="Temporal" align="center">Temporal nu este</td>
            <td class="Temporal" align="center">Temporal nu este</td>
        </tr>
        <tr>
            <td class = "scroll_buttonInfo" align="center" colspan="6" align="justify"><button class = "scroll_buttonInfoButton" onclick="hiddenClickButton('InfoPers')">Informatia despre personaje</button></td>
        </tr>
        <tr class="Info" id="InfoPers">
            <td align="justify">&nbsp;&nbsp;&nbsp;Nica al lui Stefan a Petrei Ciubotariul care nu este altcineva decat autorul personaj in aceasta opera. El este chipul copilului universal din orice timp si orice loc a carui preocupare este jocul si poznele nevinovate.</td>
            <td align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Mama, Smaranda Creanga este chipul cel mai indragit din Amintiri din copilarie catre care se indreapta cu respect recunostinta si admiratie autorul. Ea este o femeie preocupata de gospodarie si grija fata de copiii ei. Fata de Nica manifesta o atitudine mai aparte, caci a mostenit-o in unele privinte, talentul de a povesti".</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
        </tr>
        <script src="js/personaje.js"></script>
        <tr class="Info">
            <td align="center" colspan="6" align="justify"><b>Alte personaje:</b><br><b>Episodice:</b> Mătuşa Mărioara, mătuşa Măriuca,moş Fotea, bădiţa Vasile, David Creangă, Irinuca, Moş Fotea, Nic-ă a lui Costache, Bogorogea;<br>
            <b>Colective:</b> „băeţii şi fetele din sat”;<br></td>
        </tr>
        </table>
        </font>
    </div>
    
    
    <div class="table2div">
        <font face="Montserrat">
        <table class="table2" align="center" border="5" style="border-color:#950101; background-color:whitesmoke; opacity:0.88;color:black" cellpadding="5">
        <tr>
            <th>Nică</th>
            <th>Smaranda</th>
            <th>Moș Vasile</th>
        </tr>
        <tr>
            <td><img src="img\Nica.png" width="100%" height="100%"></td>
            <td><img src="img\Smaranda.png" width="100%" height="100%"></td>
            <td><img src="img\Mos.png" width="100%" height="80%"></td>
        </tr>
        <tr>
            <td class = "scroll_buttonInfo" align="center" colspan="3" align="justify"><button class = "scroll_buttonInfoButton" onclick="hiddenClickButton('InfoPers1')">Informatia despre personaje</button></td>
        </tr>
        <tr class="Info" id="InfoPers1">
            <td class="simple-text" align="justify">&nbsp;&nbsp;&nbsp;Nica al lui Stefan a Petrei Ciubotariul care nu este altcineva decat autorul personaj in aceasta opera. El este chipul copilului universal din orice timp si orice loc a carui preocupare este jocul si poznele nevinovate.</td>
            <td class="simple-text" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Mama, Smaranda Creanga este chipul cel mai indragit din Amintiri din copilarie catre care se indreapta cu respect recunostinta si admiratie autorul. Ea este o femeie preocupata de gospodarie si grija fata de copiii ei .Fata de Nica manifesta o atitudine mai aparte, caci a mostenit-o in unele privinte ,,talentul de a povesti".</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
        </tr>
        <script src="js/personaje.js"></script>
        <tr>
            <th>părintele Ioan</th>
            <th>Stefan</th>
            <th>Smărăndița</th>
        </tr>
        <tr>
            <td><img src="img\Parinte.png" width="100%" height="80%"></td>
            <td class="Temporal" align="center">Temporal nu este</td>
            <td class="Temporal" align="center">Temporal nu este</td>
        </tr>
        <tr>
            <td class = "scroll_buttonInfo" align="center" colspan="3" align="justify"><button class = "scroll_buttonInfoButton" onclick="hiddenClickButton('InfoPers2')">Informatia despre personaje</button></td>
        </tr>
        <tr class="Info" id="InfoPers2">
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
            <td class="Temporal" align="center" align="justify">Temporal nu este</td>
        </tr>
        <script src="js/personaje.js"></script>
        <tr class="Info">
            <td class="simple-text" align="center" colspan="3" align="justify"><b>Alte personaje:</b><br><b>Episodice:</b> Mătuşa Mărioara, mătuşa Măriuca,moş Fotea, bădiţa Vasile, David Creangă, Irinuca, Moş Fotea, Nic-ă a lui Costache, Bogorogea;<br>
            <b>Colective:</b> „băeţii şi fetele din sat”;<br></td>  
        </tr>
        </table>
        </font>
    </div>
    
</body>
</html>