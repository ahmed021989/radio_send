  <?php 
	require_once("includes/initialiser.php");	
?>	
 <table id="table2" class="table ">
			 					   <thead>
                                            <tr>
                                          <th >nom</th>
												 <th>prenom</th>
												  <th>médecin</th>
												  <th>date </th>
												   <th>action </th>
												  

												
                                                
                                            </tr>
                                        </thead>
										<tbody >
                
					
				  <?php
				
				$sql3=$bd->requete("select * from radio where traiter=2 order by id DESC");
				
while($row=mysqli_fetch_array($sql3)){
	echo "<tr id=".$row['id']." style='font-weight:bold'><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['med']."</td><td>".$row['dat']."</td><td><button class='btn btn-info' onclick='voir(".$row['id'].")'>VOIR</button></td></tr>";
}
  
				  ?>
				    </tbody>
				  </table>
				  	<script>			              
      $('#table2').dataTable( 
{

 "searching": true,
	"paging":true,
		 "ordering": false,
 
} ); 
</script>