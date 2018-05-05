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
	
	if(isset($_POST['inputPseudo']) && isset($_POST['inputEmail'])){
		
		$sql = "SELECT COUNT(*) FROM utilisateur WHERE pseudo = '" .$_POST['inputPseudo']. "' AND email = '" .$_POST['inputEmail']."'";
		$sql2 = "SELECT * FROM utilisateur WHERE pseudo = '" .$_POST['inputPseudo']. "' AND email = '" .$_POST['inputEmail']."'";
		$result = mysqli_query($conn, $sql) or die('Erreur !');
		$result2 = mysqli_query($conn, $sql2) or die('Erreur !');
		$data = mysqli_fetch_array($result);
		$data2 = mysqli_fetch_array($result2);
		
		mysqli_free_result($result);
		mysqli_close($conn);
		
		if($data[0] == 1){
			session_start();
			$_SESSION['pseudo'] = $_POST['inputPseudo'];
			$sql = "UPDATE session SET connecte = 1 WHERE idUtilisateur = '".$data2['idUtilisateur']."'";
			mysqli_query($conn, $sql) or die('Erreur !');
			$sql = "UPDATE session SET connecte = 0 WHERE idUtilisateur <> '".$data2['idUtilisateur']."'";
			mysqli_query($conn, $sql) or die('Erreur !');
			header('Location: garde.php');
			exit();
		}
		else{
			header('Location: connexion.php');
			exit();
		}
	}
?>