<?php
  define('DB_SERVER','localhost');
  define('DB_USER','root');
  define('DB_PASS','');
  $database="ece_socialmedia";
  $db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found=mysqli_select_db($db_handle,$database);
  if($db_found){
    session_start();
    $idUti=$_SESSION[idUtilisateur];
    $sql="SELECT * FROM utilisateur  WHERE idUtilisateur=$idUti";
    $result=mysqli_query($db_handle,$sql);
    $data=mysqli_fetch_row($result);



    }
  mysqli_close($db_handle);    
?>