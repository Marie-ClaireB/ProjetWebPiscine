<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Header général -->
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		
		<title>Connexion</title>
		<!-- Icone d'onglet -->
		<link rel="icon" href="ece.ico">
		
		<!-- CSS personnalisé pour cette page -->
		<link href="connexion.css?v=4" rel="stylesheet">
	</head>

	<body class = "centrerText">
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
		<div id="resultat"></div>

		<form class="formCo" action="checkCo.php" method="post">
			<h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
			<label for="inputPseudo" class ="sr-only">Pseudo</label>
			<input type="text" id="inputPseudo" name="inputPseudo" class = "form-control" placeholder="Pseudo" required autofocus>
			<label for="inputEmail" class="sr-only">Adresse mail</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Adresse mail" required>
			<!--
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			-->
			<!--
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Se souvenir de moi
				</label>
			</div>
			-->
			<button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
			<div align="center"><a href="inscription.php">Vous n'avez pas de compte? Inscrivez-vous!</a></div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</body>
</html>