<?php
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	$database="ece_socialmedia";
	$db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	$db_found=mysqli_select_db($db_handle,$database);
	if($db_found){
		$sql1=SELECT * FROM `publication` WHERE typePublication=1 ORDER BY datePublication DESC, heurePublication DESC;
		$result=mysqli_query($db_handle,$sql1);
		while($data=mysqli_fetch_assoc($result)){
			echo "ID:".$data['ID'].'<br>';
			echo "Prenom:".$data['Prenom'].'<br>';
			echo "Nom:".$data['Nom'].'<br>';
			echo "DateEmbauche:".$data['DateEmbauche'].'<br>';
			echo "ID_Travail:".$data['ID_Travail'].'<br>';
			echo "Salaire:".$data['Salaire'].'<br>';
			echo "ID_Patron:".$data['ID_Patron'].'<br>';
			echo "ID_Dept:".$data['ID_Dept'].'<br>';
		}//endwhile
	}//endif
	else{
		echo "Data base not found";
	}
	mysqli_close($db_handle);
?>