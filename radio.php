<?php
require_once("includes/initialiser.php");
if(isset($_POST['submit'])){
if(!empty($_FILES)){
	try{
	
	
//var_dump($_FILES['photo']);
$fichier=$_FILES['photo']['name'];
$fichier_tmp=$_FILES['photo']['tmp_name'];
$fich_exten=strchr($fichier,'.');
$req=$bd->requete("select max(id) as max from radio");
$code=0;
while($row=mysqli_fetch_array($req)){
	$code=$row['max']+1;
}
$dest='images/'.$code.$fich_exten;
echo '<script> alert('.$dest.')</script>';
     if( move_uploaded_file($fichier_tmp,$dest)){
	 
    $date = date("Y-m-d");
                $heure = date("H:i"); 
		
$sql1 =$bd->requete ('INSERT INTO radio  VALUES ("","'.htmlentities(trim($_POST['nom'])).'","'.htmlentities(trim($_POST['prenom'])).'","'.htmlentities(trim($_POST['med'])).'","images/'.$code.''.$fich_exten.'","'.$date.'",0)');
//mysqli_query($connec,$sql1) or die ('Erreur SQL !'.'<br />'.mysqli_error($connec));
 echo "<script>alert('envoie avec success'); window.location.replace('radio.php'); </script>";
 }
	 	
}


catch (SQLException $e){
echo $e;	
}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
	          <link rel="icon" href="" type="image/png" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->   
          <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
		</head>
		<body>
<div class="row">
 <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
   <div class="col-sm-6 col-sm-offset-0 form-box">
   <br>
		 <span class="pull-left" style="color:#fff;font-size:24px">EPH ZIGHOUD YOUCEF TENES</span>	
</div>		 
                    <!-- TOGGLE NAVIGATION -->
      
					</ul>
</div>
<br>
<div class="row">

<div class="col-sm-6 col-sm-offset-0 form-box">
<div class="col-sm-12 col-sm-offset-0 form-box" style="border:1px solid #99F;border-radius: 10px;direction:ltr;text-align:left">
<p >
<span style="font-size:24px"><u>Malade </u></span><br>

</p>
 <form  name="form1" role="form"  action="<?php echo $_SERVER['PHP_SELF'] ?>" class="registration-form" id="buttonGroupForm"  method="post" enctype="multipart/form-data"  accept-charset="utf8_unicode_ci" >

 
   <div class="row">                        
<div class="col-md-12">
												 <div class="form-group" style ="dir:ltr;text-align:left" >
									
                                      <label class="col-md-5 control-label pull-left" style="color:green">NOM </label>	    
                                        <div class="col-md-7 ">  
                                            									
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                             <input type="text" name="nom" id="nom" class="form-control" required   />						
                                            </div>                                            
                                        </div>
										</div>
			
   </div>
  </div>
  </br>
   <div class="row">
   <div class="col-md-12">
												 <div class="form-group" style ="dir:rtl;" >
									
                                      <label class="col-md-5 control-label pull-left" style="color:green">PRENOM </label>	    
                                        <div class="col-md-7 ">  
                                            									
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                             <input type="text" name="prenom" id="prenom" class="form-control" required   />						
                                            </div>                                            
                                        </div>
										</div>
   </div>
   </div>
   </br>
   <div class="row">
   <div class="col-md-12">
												 <div class="form-group" style ="dir:rtl;" >
									
                                      <label class="col-md-5 control-label pull-left" style="color:green">MEDECIN </label>	    
                                        <div class="col-md-7 ">  
                                            									
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user-md"></span></span>
                                             <input type="text" name="med" id="med" class="form-control" required   />						
                                            </div>                                            
                                        </div>
										</div>
   </div>
   </div>
   </br>
   		  <div class="row">
   <div class="col-md-12">
												 <div class="form-group" style ="dir:rtl;" >	
<label class="col-md-5 control-label pull-left" style="color:green">CLICHE </label>	    
                                        <div class="col-md-7 ">  												 
 <input type='file' accept='image/*' id="photo1" name='photo' class="filestyle"  onchange='readURL(this,"photo");' required />


</div>
</div>
</div>
</div>

 </br>
   		 												 
 
    <button class="btn btn-primary pull-right" type = "submit" style="background:#20820d;" name = "submit"  >  Envoyer</button>




   
  </form>
   
</div>

</br>
</br>
</br>
<center><button type="button" value="liste" class="btn btn-info " onclick="affiche();">VOIR LISTE<span class="fa fa-eye"></span></center></button>
</br>



										</div>
<div class="col-sm-6 col-sm-offset-0 form-box" style="">
<img id="photo" class="img-responsive" src="images/default.jpg?time=<?php echo time(); ?>" style="height:750px;width:800px" />
</div>

</div>

<div class="message-box sm animated fadeIn " data-sound="alert" id="mb-liste_attente" >
		<div class="row ">
		<br>
		<div class="col-sm-8 col-sm-offset-2" style="background:#fff">
            <div class="pull-right">
						<div>
						<br><br>
                           <button class="btn btn-danger fa fa-times btn-lg mb-control-close"></button> 
						   </div>
                        </div>
						<br><br><br><br><br><br>
            
				  
                              
				 <div id="liste">
				 </div>
				  	<script>
					
						//setInterval('load_liste()',500);
					function load_liste(){
					$("#liste").load('ajax_liste2.php');	
					}
					
					
					</script>
                        <h3><div id="supr"></div> </h3>                   
                        <center><h3><p> </p></h3></center>
						<div id="peres">
						
					    </div>
						
                    
                    <div class="mb-footer">
                        <div class="pull-right">
                         
                        </div>
                    </div>
					</div>
                    </div>
            
            
        </div>
		
  <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
		<script type="text/javascript" src="js/demo_tables.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
				        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
		         <script type="text/javascript" src="js/demo_tables.js"></script> 
			       <script type="text/javascript" src="js/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>	
		<!-- END THIS PAGE PLUGINS --> 
  <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/rangeslider/jQAllRangeSliders-min.js"></script>       
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
		   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.js"></script>
        <!-- END THIS PAGE PLUGINS--> 		
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>  
		<script>
	function affiche(){
			$("#mb-liste_attente").show();
			load_liste();
		}
	
	function readURL(input,imag) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
					var img='#'+imag;
                    $(img)
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        } 
		 $('.mb-control-close').on('click',function(){

			 	$('#mb-liste_attente').hide(); 
				
            // $('#mb-ouverture').hide();				
		  })
		</script>
</body>
</html>