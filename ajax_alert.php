<?php 
require_once("includes/initialiser.php");
 $sql0=$bd->requete("select count(*) as sum from radio where traiter=0"); 
while($row=mysqli_fetch_array($sql0)){
		
	echo $row['sum'];
	

}
?>