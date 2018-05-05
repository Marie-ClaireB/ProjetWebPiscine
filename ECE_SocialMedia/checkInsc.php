<?php
	
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'ece_socialmedia';
	
	//Connexion
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	//Check
	if(mysqli_connect_errno()){
		echo "Failed" .mysqli_connect_error();
	}
	
	if(isset($_POST['inputNom']) && isset($_POST['inputPrenom']) && isset($_POST['inputPseudo']) && isset($_POST['inputEmail'])){
		
		$sql = "SELECT COUNT(*) FROM utilisateur WHERE email = '" .$_POST['inputEmail']."'";
		$sql2 = "SELECT COUNT(*) FROM utilisateur WHERE pseudo = '" .$_POST['inputPseudo']."'";
		$result = mysqli_query($conn, $sql) or die('Erreur !');
		$result2 = mysqli_query($conn, $sql2) or die('Erreur !');
		$data = mysqli_fetch_array($result);
		$data2 = mysqli_fetch_array($result2);
		
		mysqli_free_result($result);
		mysqli_free_result($result2);
		
		if($data[0] > 0){
			/*echo htmlspecialchars('Un compte est deja lie a cette adresse mail', ENT_QUOTES);
			$message = "Un compte est deja lie a cette adresse mail";
			echo "<script type='text/javascript'>alert('$message');</script>";
			sleep(2);*/
			header('Location: inscription.php');
			exit();
		}
		else if($data2[0] > 0){
			/*echo htmlspecialchars('Ce pseudo est deja pris', ENT_QUOTES);
			$message = "Ce pseudo est deja pris";
			echo "<script type='text/javascript'>alert('$message');</script>";
			sleep(5);*/
			header('Location: inscription.php');
			exit();
		}
		else{
			$sql = "INSERT INTO utilisateur (typeUtilisateur, etatUtilisateur, nom, prenom, pseudo, email) VALUES (1, 'etudiant', '".$_POST['inputNom']."', '".$_POST['inputPrenom']."', '".$_POST['inputPseudo']."', '".$_POST['inputEmail']."')";
			$sql2 = "SELECT * FROM utilisateur WHERE pseudo = '" .$_POST['inputPseudo']. "' AND email = '" .$_POST['inputEmail']."'";
			$result2 = mysqli_query($conn, $sql2) or die('Erreur !');
			$data2 = mysqli_fetch_array($result2);
			mysqli_query($conn, $sql) or die('Erreur !');
			mysqli_free_result($result);
			/*echo htmlspecialchars('Compte creer', ENT_QUOTES);*/
			session_start();
			$id = intval($data2['idUtilisateur']);
			$_SESSION['pseudo'] = $_POST['inputPseudo'];
			$sql = "UPDATE session SET connecte = 1 WHERE idUtilisateur = ".$id."";
			mysqli_query($conn, $sql) or die('Erreur !');
			$sql = "UPDATE session SET connecte = 0 WHERE idUtilisateur <> ".$id."";
			mysqli_query($conn, $sql) or die('Erreur !');
			header('Location: garde.php');
			exit();
		}
	}
	mysqli_close($conn);
?>