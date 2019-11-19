<!DOCTYPE html>
<html lang="pl_PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salon samochodowy - DreamCar</title>

    <!-- Bootstrap -->
	<link href="css/bootstrap.css?122222" rel="stylesheet">
	<link href="css/animations.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
				<li class="active"><a href="kontakt.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Kontakt <span class="sr-only">(current)</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="panel panel-success fadeIn" id="object">
		  <div class="panel-heading">
			<h3 align="center" class="panel-title">Kontakt</h3>
		  </div>
		  <div class="panel-body">
			
			
			<form action="kontakt.php" method="POST" class="form-horizontal">
			  <fieldset>
				<legend>Wiadomość do Właścicieli salonu.</legend>
				<div class="form-group">
				  <label for="select" class="col-lg-2 control-label">Rodzaj problemu:</label>
				  <div class="col-lg-10">
					<select class="form-control" id="select">
						<option>Błąd na stronie</option>
						<option>Problem z wyświetlaniem zawartości</option>
						<option>Brakujący model pojazdu</option>
						<option>Inne</option>
					</select>
				  </div>
				</div>
				<div class="form-group">
				  <label for="inputEmail" class="col-lg-2 control-label">Twój Adres Email:</label>
				  <div class="col-lg-10">
					<input type="email" class="form-control" id="inputEmail" placeholder="Email np. jan@wp.pl">
				  </div>
				</div>
				<div class="form-group">
				  <label for="inputPassword" class="col-lg-2 control-label">Twoje imię i nazwisko</label>
				  <div class="col-lg-10">
					<input type="text" class="form-control" id="inputDefault" placeholder="IMIĘ I NAZWISKO">
				  </div>
				</div>
				<div class="form-group">
				  <label for="textArea" class="col-lg-2 control-label">Szczegółowy opis:</label>
				  <div class="col-lg-10">
					<textarea class="form-control" rows="5" id="textArea"></textarea>
				  </div>
				</div>
				<div style="margin-right: 100px;" align="right" class="checkbox">
				  <label>
					<input type="checkbox"> Akceptuje Regulamin Salonu
				  </label>
				 </div>
				<div class="form-group">
				  <div class="col-lg-10 col-lg-offset-2">
					<button type="reset" class="btn btn-default">Wyczyść</button>
					<button type="submit" class="btn btn-primary">Wyślij</button>
				  </div>
				</div>
			  </fieldset>
			</form>
			
			
			
		  </div>
		</div>
		
		<div class="panel panel-success slideUp" id="object">
		  <div class="panel-heading">
				<h3 align="center" class="panel-title">Dane firmy</h3>
		  </div>
		  <div class="panel-body" style="text-align: center;">
				<h2>
					Dream Car sp. z o.o. <br>
					ul. Mostowa 6<br>
					59-800 Lubań<br>
				</h2>
		  </div>
		</div>
	
	</div>

  </body>
</html>