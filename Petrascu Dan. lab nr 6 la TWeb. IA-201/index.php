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
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/menu-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body background="img\back.jpg">
    <?php include 'menu.php';?>
    
    <h1 class="Nume_poveste" align="center"><i>Amintiri din copilărie I</i></h1>
    <h2 class="nume_rezumat" align="center">REZUMAT</h2>
    
    <?php
        if(isset($_SESSION['success'])){
            echo '<p class="login"> ' . $_SESSION['success'] . ' </p>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['time'])){
            echo '<p class="time"> ' . $_SESSION['time'] . ' </p>';
            unset($_SESSION['time']);
        }
    ?>
        
    <div class="text" style="background-color:whitesmoke; opacity:0.88;" align="justify">
    <font face='Montserrat'>
        <p><img class="image1" src="img\Cap1.jpg" alt="Amintiri din copilărie I" align="left">&nbsp;&nbsp;&nbsp;&nbsp;În prima parte autorul ne povestește cum părinții se certau din cauza lui. Mama sa, Smaranda, voia neapărat să-l dea la școală ca să ajungă preot iar tatăl său nu voia spunând că nu are bani pentru asta. Situația s-a schimbat  într-o duminică, când a venit în vizită David Creangă, bunicul lui Nică. Acesta a spus că îl ia pe băiat și îl va duce la școală, la Broșteni. David le-a explicat că e bine să știi carte și că este păcat de omul neînvățat. Pe lângă aceasta, Creangă ne mai povestește și alte întâmplări.</p>
            
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Caprele Irinucăi –  După ce bunicul David îl duce pe Nică și pe încă un tovarăș de-al lui la Broșteni, acesta i-a cazat la o femeie, Irinuca. Casa ei era o cocioabă veche iar  pe lângă aceasta, ea mai avea un țap și două capre care erau slabe și râioase. Acestea dormeau în tinda casei. Bărbatul și fata Irinucăi lucrau la pădure toată săptămâna. La școală cei doi băieți au mers bine în afara faptului că profesorul a poruncit unui om să-i tundă la piele pe cei doi, că aveau plete. După ce trecu iarna, în primăvară băieții s-au trezit plini de râie de la caprele Irinucăi. Cei doi s-au uns cu leșie, au stat la soare și apoi au intrat să se scalde în Bistrița. Dar cu toate acestea încă nu au scăpat de râie. Într-o zi, când Irinuca era dusă prin sat, băieții  s-au suit pe munte, mai sus de casa ei, și au urnit o stâncă din locul ei astfel încât să se ducă la vale. A dărâmat gardul și casa Irinucăi, a făcut bucăți o capră și s-a numai în Bistrița. Speriați, copiii și-au luat lucrurile și au pornit la drum spre Pipirig. Uitând de râie și de bucuria pe care i-o făcuseră Irinucăi, cei doi s-au bucurat de vreme, cât a fost frumoasă. La un moment dat a pornit o vijelie cumplită urmată de o ninsoare cum se cade. Au înnoptat în munți, dogoriți de flacăra unui foc uriaș. A doua zi, spre seară, au ajuns la bunicul David din Pipirig. Bunica i-a poftit la masă și apoi i-a vindecat de râie ungându-i cu unsoare de mesteacăn. Peste câteva zile a aflat și bunicul despre paguba Irinucăi, pentru care a plătit patru galbeni. În sâmbăta Paștilor a ajuns și Nică acasa la ai săi, în Humulești. Nică nu fost deloc bucuros deoarece au râs toate fetele de el, văzându-l tuns de tot.</p>
        
        <div class="container_photo" align="justify">
            <div class="slider">
                <div class="slider-line">
                    <img class="image-line" src="img\Copac.jpg" alt="">
                    <img class="image-line" src="img\book.jpg" alt="">
                    <img class="image-line" src="img\casa.jpg" alt="">
                </div>
            </div>
            <p class="p-slide">&nbsp;&nbsp;&nbsp;&nbsp;Calul Bălan și Sf. Nicolae – Autorul își amintește cu drag de meleagurile natale și de oamenii gospodari din jurul său. Un loc aparte îl ocupă părintele Ioan, om bun și vrednic. El a înfrumusețat cimitirul și a construit o chilie pentru școala satului. Împreună cu bădița Vasile, dascălul bisericii, părintele a mers prin sat și i-a îndemnat pe oameni să-și dea copii la școală. Astfel s-au adunat o mulțime de băieți și fete, dornici de carte dar și de năzdrăvănii. Ca să-i liniștească, părintele Ioan a adus la școală un scan numit Calul Bălan și un bici numit Sf. Nicolae. Prima pedepsită a fost chiar Smărăndița popii, o copilă ageră și zdravănă care întrecea pe toată luma. Când părintele  a descoperit că băieții aveau ceasloavele murdare, pline de muște moarte, i-a poftit pe toți să încalece pe Calul Bălan și să-și ia răsplata. Dar ca să-i îmbuneze pe copii, le aducea colaci de la biserică și cum bădița Vasile, învățătorul, era om de treabă toate mergeau strună. </p> 
        </div>
        <script src="js\app.js"></script>
    </font>
    </div>  
    
    <script src = "js\leave.js"></script>
    <h2 class="Reference" align="center"><a id="surse"></a>Referințe:</h2>

    <div class="linkuri">
        <ul class="inner_links">
            <li class="i-link"><a class="link" onclick="leavePage()" href="http://allinoane.blogspot.com/2016/08/amintiri-din-copilarie-fisa-de-lectura.html">Amintiri din copilărie - fișă de lectură</a></li>
            <li class="i-link"><a class="link" onclick="leavePage()" href="https://lucibrezaiu.wordpress.com/2014/09/06/rezumat-amintiri-din-copilarie/">Rezumat „Amintiri din copilărie”</a></li>
        </ul>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    
<script src="js/register-validate.js"></script>
    
    
</body>
</html>