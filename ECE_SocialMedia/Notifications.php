<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="Aller sur la pageport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notifications</title>
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
	<link href="Notifications.css" rel="stylesheet">
	<link href="garde.css" rel="stylesheet">

  </head>

  <body>

    <!--header>
      
    </header-->

    <!--main role="main"-->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<!--<img src="logoECE.png" alt="Logo">-->
			<a class="navbar-brand" href="#">ECE SOCIAL MEDIA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link disabled" href="garde.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="Reseau.php">Mon Reseau</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="Profil.php">Mon Profil</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Notifications <span class="sr-only">(current)</span></a>
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

      <section class="jumbotron text-center">
		  <h1>Notifications</h1>
      </section>

        <div class="container">

          <!--div class="row"-->
            
            
		<div class="media text-muted pt-3">
		
			<img src="Img/notif.png" alt="photo" height="100">
			<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><?php include('NotifTitre1.php'); ?></strong>
            <?php include('NotifContenu1.php'); ?>
          </p>
		  <!--button type="button" class="btn btn-sm btn-outline-secondary">Aller sur sa page</button-->
        
		</div>

			
		<div class="media text-muted pt-3">
			<img src="Img/notif.png" alt="photo" height="100">
			<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><?php include('NotifTitre2.php'); ?></strong>
            <?php include('NotifContenu2.php'); ?>
          </p>
        </div>
		
         <div class="media text-muted pt-3">
			<img src="Img/notif.png" alt="photo" height="100">
			<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><?php include('NotifTitre3.php'); ?></strong>
            <?php include('NotifContenu3.php'); ?>
          </p>
        </div>

            
            
          <!--/div-->
        </div>
		
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

    <!--/main-->

    <!--footer>
      
    </footer-->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	

  </body>
</html>
