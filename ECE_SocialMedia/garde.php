<!doctype html>
<html lang="en">
	<head>
		<!-- Header général -->
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
		<title>ECE SOCIAL MEDIA - Accueil</title>
		<!-- Icone d'onglet -->
		<link rel="icon" href="ece.ico">

		<!-- Custom styles for this template -->
		<link href="garde.css?" rel="stylesheet">
	</head>

	<body>

		<!-- COCE NAVBAR-->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<!--<img src="logoECE.png" alt="Logo">-->
			<a class="navbar-brand" href="#">ECE SOCIAL MEDIA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="Reseau.php">Mon Reseau</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="Profil.php">Mon Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="Notifications.php">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Messagerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="Emplois.php">Emplois</a>
					</li>
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
				</form>
			</div>
		</nav>

		<!-- ICI CODE POUR LE CONTENEUR  FAUT RAJOUTER DES ICONES ICI SI ON VEUT-->
		<main role="main" class="container">
			<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
				<div class="lh-100">
					<h6 class="mb-0 text-white lh-100">Evènements</h6>
				</div>
			</div>

			<div class="my-3 p-3 bg-white rounded box-shadow">
				<h6 class="border-bottom border-gray pb-2 mb-0">Récents évènements</h6>
				<div class="media text-muted pt-3">
					<img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
					<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
						<strong class="d-block text-gray-dark"><?php include('evenements_titre.php'); ?></strong>
						<?php include('evenements_contenu.php'); ?>
					</p>
				</div>
			</div>

			<!-- ICI CODE POUR LA ZONE DE MESSAGES (FAUT RAJOUTER UNE ICONE DE MESSAGERIE MAIS ON VERRA CA ENSEMBLE-->
			<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
      
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropup">
							<a class="nav-link dropdown-toggle" href="https://getbootstrap.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Messages</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown10">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</main>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>