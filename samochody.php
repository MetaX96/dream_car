<?php
require('mysql_connect.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Modele";
$result = $conn->query($sql);


//Dane do strony
$current = "samochody.php"; //strona glowna sms shopa np. ?page_id=4 lub sms.php
$wlasciciel = "szef.pl"; //nazwa wlasciciela strony
$oprogramowanie = "inne"; // wpisz na jakim oprogramowaniu bedzie dzialac sms shop: wp, inne
$offer = array(array()); // nie ruszaj!


$offer[1]['offer_type'] = "item"; 
$offer[1]['image'] = "https://puu.sh/Ex80F/20f514d3af.png";
$offer[1]['item_name'] = "Renault";
$offer[1]['opis'] = '
<a href="">Megane</a>
<a href="">Koleos</a>
<a href="">Clio</a>
';

$offer[2]['offer_type'] = "item"; 
$offer[2]['image'] = "https://puu.sh/Ex81P/355ecb5217.png";
$offer[2]['item_name'] = "Audi";
$offer[2]['opis'] = '
<b><font color="#ffcc00">Przywileje SPONSORA</font></b>
<br><br>
<img style="max-width: 100%; max-height: 100%" alt="Mania tanczy jak szalony" src="https://puu.sh/zVmfK/758234c0df.png"><br>
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze, aby usługa została poprawnie dostarczona.</font>
';



$offer[3]['offer_type'] = "item"; 
$offer[3]['image'] = "https://puu.sh/Ex82p/e3a3d853d9.png";
$offer[3]['item_name'] = "Volvo";
$offer[3]['opis'] = '
<b><font color="#228B22">UnBan</font></b>
<br><br>
-Zostałeś zbanowany? Kup unbana na serwerze mefarius.eu<br>
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze mefarius.eu</font>
';


$offer[4]['sms_id'] = 31036; //id uslugi
$offer[4]['offer_type'] = "item"; 
$offer[4]['image'] = "https://puu.sh/Ex82T/d661548902.png";
$offer[4]['item_name'] = "Mercedes";
$offer[4]['opis'] = '
<b><font color="#ffcc00">MEFARIUS CASE</font></b>
<br><br>
<img style="max-width: 60%; max-height: 60%" alt="Mania tanczy jak szalony" src="https://puu.sh/zVmOI/dc6f8b807e.png">
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze mefarius.eu</font>
';


$offer[5]['sms_id'] = 31037; //id uslugi
$offer[5]['offer_type'] = "item"; 
$offer[5]['image'] = "https://puu.sh/Ex83u/6c1b456a2e.png";
$offer[5]['item_name'] = "Skoda";
$offer[5]['opis'] = '
<b><font color="#ffcc00">MEFARIUS CASE</font></b>
<br><br>
<img style="max-width: 60%; max-height: 60%" alt="Mania tanczy jak szalony" src="https://puu.sh/zVmOI/dc6f8b807e.png">
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze mefarius.eu</font>
';


$offer[6]['sms_id'] = 31038; //id uslugi
$offer[6]['offer_type'] = "item"; 
$offer[6]['image'] = "https://puu.sh/Ex83S/7fb79df3e6.png";
$offer[6]['item_name'] = "Peugeot";
$offer[6]['opis'] = '
<b><font color="#ffcc00">MEFARIUS CASE</font></b>
<br><br>
<img style="max-width: 60%; max-height: 60%" alt="Mania tanczy jak szalony" src="https://puu.sh/zVmOI/dc6f8b807e.png">
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze mefarius.eu</font>
';


$offer[7]['sms_id'] = 31039; //id uslugi
$offer[7]['offer_type'] = "item"; 
$offer[7]['image'] = "https://puu.sh/Ex7eP/631e267654.png";
$offer[7]['item_name'] = "Volkswagen";
$offer[7]['opis'] = '
<b><font color="DarkCyan">Turbo</font><font color="#8B008B">Drop</font></b>
<br>
<font color="lime">&#8657;100%&#8657;</font> Większy drop!
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze mefarius.eu</font>
';

$offer[8]['sms_id'] = 31041; //id uslugi
$offer[8]['offer_type'] = "item"; 
$offer[8]['image'] = "http://puu.sh/EBy3K/bc5b77e11c.jpg";
$offer[8]['item_name'] = "Ferrari";
$offer[8]['opis'] = '
<b><font color="#FF69B4">KOX</font></b>
<br>
Zabrakło <font color="#FF69B4">KOXÓW</font>?
<br><br><br>
<font color="red">Musisz być ZALOGOWANY na serwerze mefarius.eu</font>
';

/*
?========================?
	KONIEC KONFIGURACJI
?========================?
*/
?>



<!DOCTYPE html>
<html lang="pl_PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salon samochodowy - DreamCar</title>

    <!-- Bootstrap -->
	<link href="css/bootstrap.css?" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link href="css/animations.css" rel="stylesheet">
	
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	

	<div style="display: flex; justify-content: center;"><img style="max-width: 200px; max-height: 200px;" alt="logo" src="images/mefarius_logo.png"></div>
		
	<div class="container" style="margin: 0 auto;">
		<nav class="navbar navbar-default slideDown" id="object">
		  <div class="container-fluid">
			<div style="margin-right: 7%;" class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> DreamCar.pl</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Strona Główna</a></li>
				<li class="active"><a href="samochody.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Samochody <span class="sr-only">(current)</span></a></li>
				<li><a href="regulamin.html"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Regulamin salonu</a></li>
				<li><a href="kontakt.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Kontakt</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="panel panel-info" style="overflow: auto;">
			  
                <?php
                if($_GET['pokaz'] != "" && $erno == 0)
                {
                    
                    $from = "0";
                    $to = count($offer);
                    while($from < $to)
                    {	
                        $from++;
                        if($_GET['pokaz'] == "item".$from)
                        {
                          echo '<div class="panel-heading">
                                <h3 class="panel-title"><center>'.$offer[$from]['item_name'].'</center></h3>
                              </div>';
                        ?>
<!--
                           <div style="margin: 15px;">
                                <form class="form-horizontal" action="" method="post">
                                    
                                    <center>
                                        <br>Aby zakupić <?php echo $offer[$from]['item_name']; ?> wyślij sms o treści: <b>HPAY.<?php echo $offer[$from]['code']; ?></b> (Koszt: <?php echo $offer[$from]['price']; ?> PLN) na numer <b><?php echo $offer[$from]['number']; ?></b>. Niżej wpisz otrzymany kod oraz swój nick.
                                        <br><br>
                                        Nick: <input type="text" name="nick" size="10" maxlength="20">
                                        <span style="margin-left: 100px;"></span>
                                        Kod: <input type="text" name="check" size="10" maxlength="8">
                                        <input type="hidden" name="offer" value="<?php echo $offer[$from]['offer_type']; ?>">
                                        <input type="hidden" name="numer" value="<?php echo $from; ?>">
                                        <br><br><input class="btn btn-primary" type="submit" name="submit" onclick="return confirm('UWAGA! Upewnij się, że postać jest zalogowana i masz miejsce w ekwipunku. Inaczej mogą być problemy z przyjściem przedmiotów!')" value="Kup !"/>
                                        <br><br>

                                </form>
                                        <br>
                                        <br>Serwis SMS obsługiwany przez: <a href="http://www.homepay.pl" target="_blank">Homepay.pl</a><br>
                                        Reklamacje składamy tutaj: <a href="http://www.homepay.pl/reklamacje/" target="_blank">Homepay.pl</a><br>
                                        Korzystanie z serwisu jest jednozanczne z akceptacją <span style="text-align: center;"><a href="http://homepay.pl/regulamin/regulamin_sms_premium/" target="_blank">Regulaminu serwisu SMS</a> oraz <a href="http://mefarius.eu/regulamin.html" target="_blank">Regulaminu Mefarius.eu</a></span>
                                        <br>Usługa dostepna w sieciach: Orange, Plus GSM, T-Mobile, Play.<br>
                                    </center>

                            </div>
					   -->
					               <?php
                                            if(isset($offer[$from]['opis'])) {
												echo '<div style="background-color: #0b1d18; width:70%; padding: 35px; border:1px solid black; margin: 0px auto;">';
													while($row = $result->fetch_assoc()) {
														if ($row['Marka_ID'] == $from){
															echo '<a href="modele/'.$row['Nazwa'].'.php">'.$row["Nazwa"].'</a><br>';
															//echo '<a href="'.$row['Nazwa'].'.php">'.$row["Nazwa"].'</a><br>';
														}
													}
												echo '</div>';
											}

                                        ?>
                                     

                        <?php
                        echo '<div class="panel-body">';
                        }
                    }
                }
                
                if($_GET['pokaz'] == "" && $erno == 0)
                {
                    
                    echo '<div class="panel-heading">
                            <h3 class="panel-title"><center><strong>Marki Samochodowe</strong></center></h3>
                          </div>';
                    echo '<center><div class="panel-body">';
                    $from = "1";
                    $to = count($offer);
                    echo'<table>';
                    $n = 0;
                    $tr = false;
                    while($from < $to)
                    {

                        if(!($n%4) AND !$tr) 
                        {
                            echo '<tr>';
                            $tr = true;
                        }
                        echo'<td><form method="post" action="'.$_SERVER['REQUEST_URI'].$zn.'?pokaz=item'.$from.'">';
                        if ($from%5 || $from%10) echo '	<div class="panel panel-primary" style="float: left; margin-left: 70px;">';
                        else echo '	<div class="panel panel-primary" style="float: left;">
                                        <div class="panel-body">';
                        echo'<input type="submit" name="item'.$from.'" value="" style="width: 250px; height: 250px; background: url('.$offer[$from]['image'].');">';
                        echo '</div></div></form></td>';
                        
                        $n++;
                        if(!($n%4) AND $tr)
                        {
                            echo '</tr>';
                            $tr = false;
                        }
                    //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^	
                        $from++;
                    }
                    echo'</table>';
                }
                ?> 
			</center></div>
		</div>
	
	</div>

  </body>
</html>
