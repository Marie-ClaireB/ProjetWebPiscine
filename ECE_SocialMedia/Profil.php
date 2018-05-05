<!doctype html>
<html lang="en">
  <head>
    <!-- Header général -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <title>ECE SOCIAL MEDIA - Profil</title>
    <!-- Icone d'onglet -->
    <link rel="icon" href="ECE_SocialMedia/ece.ico">

    <!-- Custom styles for this template -->
    <link href="profil.css" rel="stylesheet">
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
          <li class="nav-item">
            <a class="nav-link disabled" href="garde.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="Reseau.php">Mon Reseau</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="sr-only">(current)</span>Mon Profil</a>
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

    <!-- ICI CODE POUR LE CONTENU-->
    <main role="main" class="container">
        <img src="?.jpg" width="100" height="100"><!--Image profil utilisateur-->
        <div class="card-body">
          <h2><?php include('profil_utilisateur_prenom.php'); ?><?php include('profil_utilisateur_nom.php'); ?></h2>
          <p class="card-text">Description : <?php include('profil_utilisateur_description.php'); ?></p>

      </div>
        <div class="d-flex justify-content-between align-items-center">
      <div> <a href="?.?"><!--lien du cv--><img src="cv.jpg" width="50" height="50"/><!--icone du cv--></a></div>
      <div class="card-body">
        <p class="card-text">CV</p>
      </div>
      <div> <a href="?.?"><!--lien de la carte de visite--><img src="carte de visite.jpg" width="50" height="50"/><!--icone de la carte de visite--></a></div>
      <div class="card-body">
        <p class="card-text">Carte de visite</p>
      </div>
      <div> <a href="?.?"><!--lien de l'archive--><img src="archive.jpg" width="50" height="50"/><!--icone de l'archive--></a></div>
      <div class="card-body">
        <p class="card-text">Archive</p>
      </div>
        </div>
    <!--Partie album-->  
    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img src="Deus Vult.jpg" alt="Card image cap" width="120" length="120"><!--Image profil des autres-->
              <div class="card-body">
                <p class="card-text">Description de Jean Michel</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img src="Tao To King.jpg" alt="Card image cap" width="100" length="100"><!--Image profil des autres-->
              <div class="card-body">
                <p class="card-text">Description de Lao</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img src="Hadoken Hadoken Hadoken.jpg" alt="Card image cap" width="100" length="100"><!--Image profil des autres-->
              <div class="card-body">
                <p class="card-text">Description de Ryu</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


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
                <a class="dropdown-item" href="#">Ryu</a>
                <a class="dropdown-item" href="#">Lao Tseu</a>
                <a class="dropdown-item" href="#">Selahedin</a>
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