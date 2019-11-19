<!DOCTYPE html>
<html lang="pl_PL">
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
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Strona Główna</a></li>
				<li><a href="samochody.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Samochody</span></a></li>
				<li><a href="regulamin.html"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Regulamin salonu</a></li>
				<li><a href="kontakt.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Kontakt</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		<div class="panel panel-success slideRight" id="object" style="width: 100%; text-align: center">
			<div class="panel-heading">
				<h3 class="panel-title" style="font-size: 0.9vw;"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> REJESTRACJA</h3>
			</div>
			
			<div class="panel-body" style="font-size: 0.9vw;">
			<form method="POST" action="register.php">
				<b>Login:</b> <input type="text" name="login"><br><br>
				<b>Hasło:</b> <input type="password" name="haslo1"><br><br>
				<b>Powtórz hasło:</b> <input type="password" name="haslo2"><br><br>
				<b>Email:</b> <input type="text" name="email"><br><br>
				<input type="submit" value="Utwórz konto" name="rejestruj" class="btn btn-primary"><br><br>
				<?php
					mysql_connect("localhost","metax55","4e2esysy");
					mysql_select_db("metax55_dreamcar");

					function filtruj($zmienna)
					{
						if(get_magic_quotes_gpc())
							$zmienna = stripslashes($zmienna); // usuwamy slashe

						// usuwamy spacje, tagi html oraz niebezpieczne znaki
						return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
					}

					if (isset($_POST['rejestruj']))
					{
						$login = filtruj($_POST['login']);
						$haslo1 = filtruj($_POST['haslo1']);
						$haslo2 = filtruj($_POST['haslo2']);
						$email = filtruj($_POST['email']);

						// sprawdzamy czy login nie jest już w bazie
						if (empty($login) || empty($haslo1) || empty($haslo2) ||  empty($email)) {
							echo "Proszę o wypełnienie wszystkich pól.";
						} else {
							if (mysql_num_rows(mysql_query("SELECT login FROM `Users` WHERE login = '".$login."';")) == 0) 
							{
								if ($haslo1 == $haslo2) // sprawdzamy czy hasła takie same
								{
									mysql_query("INSERT INTO `Users` (`Users_ID`, `login`, `password`, `email`)
										VALUES ('', '".$login."', '".md5($haslo1)."', '".$email."');");

									echo "Konto zostało utworzone!";
								}
								else echo "Hasła nie są takie same";
							}
							else echo "Podany login jest już zajęty.";
						}
					}
					?>
			</form>
			</div>
		</div>
	</div>
  </body>
 </html>