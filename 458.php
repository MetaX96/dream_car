<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salon samochodowy - DreamCar</title>

    <!-- Bootstrap -->
	<link href="../css/bootstrap.css?222222" rel="stylesheet">
	<link href="../css/animations.css" rel="stylesheet">
	<link href="../css/fbytts.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>


	<div style="display: flex; justify-content: center;"><img style="max-width: 200px; max-height: 200px;" alt="logo" src="../images/mefarius_logo.png"></div>



	<div class="container">
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
				<li><a href="../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Strona Główna</a></li>
				<li class="active"><a href="../samochody.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Samochody <span class="sr-only">(current)</span></a></li>
				<li><a href="../regulamin.html"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Regulamin salonu</a></li>
				<li><a href="../kontakt.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Kontakt</a></li>
			  </ul>
			</div>
		  </div>
		</nav>

        <div style="width: 100%;" class="panel panel-default slideUp">
          <div class="panel-heading">
                <h3 class="panel-title" style="font-size: 0.9vw;"><span aria-hidden="true"></span>Ferrari 458</h3>
          </div>
		  <div class="panel-body">
            <div style="color: #d7ba40; font-size: 0.9vw; width: 40%; margin-right: 0px; float:left;">
				<img src="458.jpg" alt="Audi A6" style="width:100%">
            </div>
			<div style="color: #d7ba40; font-size: 0.9vw; width: 20%; float:left; margin: 5%; margin-top: 1%;">
				 <ul>
    				<li>Marka pojazdu: 		Ferrari</li>
    				<li>Model pojazdu: 		458 Italia</li>
    				<li>Rok produkcji:		2015</li>
    				<li>Pojemność skokowa:	4 497 cm3</li>
    				<li>Rodzaj paliwa:		Benzyna</li>
    				<li>Moc:				605 KM</li>
    				<li>Skrzynia biegów:	Automatyczna hydrauliczna</li>
    				<li>Typ:				Coupe</li>
    				<li>Liczba miejsc:		2</li>
 				</ul>
            </div>
			<div style="color: red; font-size: 0.9vw; float: right; width: 20%;">
				<?php
				require('../mysql_connect.php');

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM Modele";
				$result = $conn->query($sql);
				
				$x = $_SERVER['PHP_SELF'];
				$y = substr($x, 17); 
				$z = substr($y, 0, strpos($y, ".php"));
				
				while($row = $result->fetch_assoc()) {
														if ($row['Nazwa'] == $z){
															echo 'Cena: '.$row['cena'].' PLN<br>';
															echo 'Dostepność: '.$row['ilosc'].' sztuk.<br><br><br>';
														}
				}
				echo 'Jesteś zainteresowany?<br>
					Prosimy o kontakt.<br>
					<a href="http://szefjesttylkojeden.gbzl.pl/dreamcar/kontakt.php" target="_blank">KLIKNIJ TUTAJ</a>';
				?>
			</div>
		  </div>
		</div>

	</div>

  </body>
</html>