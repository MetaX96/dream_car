<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salon samochodowy - DreamCar</title>

    <!-- Bootstrap -->
	<link href="css/bootstrap.css?222222" rel="stylesheet">
	<link href="css/animations.css" rel="stylesheet">
	<link href="css/fbytts.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	

	<div style="display: flex; justify-content: center;"><img style="max-width: 200px; max-height: 200px;" alt="logo" src="images/mefarius_logo.png"></div>
	

		
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
				<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Strona Główna <span class="sr-only">(current)</span></a></li>
				<li><a href="samochody.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Samochody</a></li>
				<li><a href="regulamin.html"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Regulamin salonu</a></li>
				<li><a href="kontakt.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Kontakt</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	
		<div class="panel panel-success slideRight" id="object" style="width: 20%; float: left;">
			<div class="panel-heading">
				<h3 class="panel-title" style="font-size: 0.9vw;"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> LOGOWANIE</h3>
			</div>
			
			<div class="panel-body" style="font-size: 0.9vw;">
			<?php
				session_start();
				mysql_connect("localhost","metax55","4e2esysy");
				mysql_select_db("metax55_dreamcar");
				
				function filtruj($zmienna)
				{
					if(get_magic_quotes_gpc())
						$zmienna = stripslashes($zmienna); // usuwamy slashe

					// usuwamy spacje, tagi html oraz niebezpieczne znaki
					return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
				}

				if (isset($_POST['loguj']))
				{
					$login = filtruj($_POST['login']);
					$haslo = filtruj($_POST['haslo']);
					$ip = filtruj($_SERVER['REMOTE_ADDR']);

					// sprawdzamy czy login i hasło są dobre
					if ($login == 'MetaX' || $login == 'Ballas') {
						if (mysql_num_rows(mysql_query("SELECT login, password FROM Users WHERE login = '".$login."' AND password = '".$haslo."';")) > 0)
						{
							$_SESSION['zalogowany'] = true;
							$_SESSION['login'] = $login;
						}
					} else
					{
						if (mysql_num_rows(mysql_query("SELECT login, password FROM Users WHERE login = '".$login."' AND password = '".md5($haslo)."';")) > 0)
						{
							$_SESSION['zalogowany'] = true;
							$_SESSION['login'] = $login;
						}
						else echo "Wpisano złe dane.";
					}
				}
				
				if ($_SESSION['zalogowany'] == true) {
					echo "Witaj ".$_SESSION['login']."!";
					echo '<form action="index.php" method="POST">';
					echo '<br><br><button type="submit" name="wyloguj" class="btn btn-primary"> Wyloguj</button> </form>';
					if (isset($_POST['wyloguj'])){
						$_SESSION['zalogowany'] = false;
						header('Location: index.php');
					}
				} else 
				{
					echo '
						<form action="index.php" method="POST">
							<div class="form-group">
								<a href="register.php">Zarejestruj się</a><br><br>
								<label for="exampleInputEmail1">LOGIN</label>
								<input type="text" class="form-control" name="login" placeholder="Login">
							</div>
						  <div class="form-group">
								<label for="exampleInputPassword1">HASŁO</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło" name="haslo">
						  </div>
						  <button type="submit" name="loguj" class="btn btn-primary">Zaloguj</button>
						</form>
						';
				}
			?>

		  </div>
		</div>
			
		<div class="panel panel-warning slideLeft" id="object" style="width: 70%; float: right; overflow: auto;">
		  <div class="panel-body">
			<img style="max-width: 100%;" alt="zdjecie salonu" src="images/salon.jpg">
		  </div>
		</div>
		
		
		<div style="width: 20%; clear: left; height: 100px; overflow: auto;" class="panel panel-default slideUp">
		  <div class="panel-body">
			<div style="padding-top: 5%;text-align: center;" class="social-networks">
				<a target="_blank" href="#" class="fb">FB</a>
				<a href="#" class="yt">YT</a>
				<a href="#" class="ts">TS</a>
			</div>
		  </div>
		</div>

        <div style="width: 20%; clear: left; overflow: auto;" class="panel panel-default slideUp">
          <div class="panel-heading">
                <h3 class="panel-title" style="font-size: 0.9vw;"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> INFORMACJE</h3>
          </div>
		  <div class="panel-body">
            <span style="color: #d7ba40; font-size: 0.9vw;">
                Salon „Dream Car” znajduje się w Lubaniu przy ulicy Mostowej 6. Budynek o powierzchni 5000m2 mieści w sobie biurową część salonu oraz wystawę najbardziej popularnych modeli znanych marek. 
				Salon istnieje na rynku od 1999r. Jest to rodzinna firma. Salon przed zakupem daje możliwość skorzystania z jazdy próbnej wybranym samochodem. 
				Większość modeli samochodów jest dostępna „od ręki” w salonie, jednak niektóre modele są sprowadzane na życzenie klienta. 
				Całą procedura sprowadzenia samochodu nie trwa więcej niż tydzień.
            </span>
		  </div>
		</div>
		
	</div>

  </body>
</html>