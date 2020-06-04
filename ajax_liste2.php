  <?php 
	require_once("includes/initialiser.php");	
?>	
 <table id="table3" class="table ">
			 					   <thead>
                                            <tr>
                                          <th >nom</th>
												 <th>prenom</th>
												  <th>médecin</th>
												  <th>date envoi</th>
												  <th>cliché</th>
												  
												  

												
                                                
                                            </tr>
                                        </thead>
										<tbody >
                
					
				  <?php
				
				$sql3=$bd->requete("select * from radio where traiter=0 order by id DESC");
				
while($row=mysqli_fetch_array($sql3)){
	echo "<tr id=".$row['id']." style='font-weight:bold;color:green'><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['med']."</td>  <td>".$row['dat']."</td><td><img src='".$row['src']."' width='50' height='50'/></td></tr>";
}
  			$sql4=$bd->requete("select * from radio where traiter=2 or traiter=1 order by id DESC limit 5");
				
while($row=mysqli_fetch_array($sql4)){
	echo "<tr id=".$row['id']."><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['med']."</td><td>".$row['dat']." </td><td><img src='".$row['src']."' width='50' height='50'/><span class='fa fa-check'> vu</span></td></tr>";
}
				  ?>
				    </tbody>
				  </table>
				  	<script>			              
      $('#table3').dataTable( 
{

 "searching": true,
	"paging":true,
		 "ordering": false,
 
} ); 
</script>