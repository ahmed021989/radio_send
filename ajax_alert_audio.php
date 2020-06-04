<?php 
require_once("includes/initialiser.php");
 $sql0=$bd->requete("select count(*) as sum from radio where traiter=0"); 
while($row=mysqli_fetch_array($sql0)){
		
	//echo $row['sum'];
	if( $row['sum']>0){
	echo "<script> var snd = new Audio('audio/beep.mp3');
        snd.play();</script>";
	}

}
?>