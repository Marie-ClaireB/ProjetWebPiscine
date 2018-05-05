<?php
$_FILES['titre']     
$_FILES['accessibilite']    
$_FILES['description']         

$date = date("Y-m-d");
$time = date("H:i:s");

	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	$database="ece_socialmedia";
	$db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	$db_found=mysqli_select_db($db_handle,$database);
	if($db_found){
		$sql1="INSERT INTO publication (titre, accessibilite, contenu, datePublication, heurePublication, typePublication)
			  VALUES (titre,accessibilite, description, date, time, 1,)";
			  $result=mysqli_query($db_handle,$sql1);
	}//endif
	else{
		echo "Data base not found";
	}
	mysqli_close($db_handle);
?>