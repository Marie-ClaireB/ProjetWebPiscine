<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    $database="ece_socialmedia";
    $db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    $db_found=mysqli_select_db($db_handle,$database);
    if($db_found){
    	$sql="SELECT titre FROM publication ORDER BY datePublication DESC, heurePublication DESC LIMIT 1";
    	$result=mysqli_query($db_handle,$sql);
    	while($data=mysqli_fetch_assoc($result)){
            echo $data['titre'];
        }//endwhile
    }//endif
    else{
        echo "Data base not found";
    }
    mysqli_close($db_handle);
?>