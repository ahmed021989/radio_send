<?php
require_once("../includes/initialiser.php");
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
 <form class="form-horizontal" name="form1"  id = "form1" action="<?php echo $_SERVER['PHP_SELF'] ?> method="post">
                           
<div class="col-md-6">
												 <div class="form-group" style ="dir:rtl;" >
									
                                      <label class="col-md-5 control-label pull-left" style="color:green">NOM </label>	    
                                        <div class="col-md-7 ">  
                                            									
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                             <input type="text" name="nom" id="nom" class="form-control" readonly   />						
                                            </div>                                            
                                        </div>
										</div>
   </div>
   
   <div class="col-md-6">
												 <div class="form-group" style ="dir:rtl;" >
									
                                      <label class="col-md-5 control-label pull-left" style="color:green">PRENOM </label>	    
                                        <div class="col-md-7 ">  
                                            									
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                             <input type="text" name="prenom" id="prenom" class="form-control" readonly   />						
                                            </div>                                            
                                        </div>
										</div>
   </div>
   
   <div class="col-md-6">
												 <div class="form-group" style ="dir:rtl;" >
									
                                      <label class="col-md-5 control-label pull-left" style="color:green">MEDECIN </label>	    
                                        <div class="col-md-7 ">  
                                            									
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                             <input type="text" name="med" id="med" class="form-control" readonly   />						
                                            </div>                                            
                                        </div>
										</div>
   </div>
   
  </form>
   
</div>
</br>



										</div>
<div class="col-sm-6 col-sm-offset-0 form-box" style="">
<img id="img" class="img-responsive" src="<?php
$sql2=$bd->requete("select * from radio where traiter=1");
while($row=mysqli_fetch_array($sql2)){
	echo $row['src'];
}
?>?time=<?php echo time(); ?>" style="height:800px;width:800px" />
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
					$("#liste").load('ajax_liste.php');	
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
	
		
		function effect(){
			var a=$("#effet").val();
			var b=$("#range").val();
			//alert(a);
			if(a!="1"){
		$("#img").css("filter", ""+a+"("+b+"%)");
			}
			
				if(a=="1"){
			$("#img").css("filter", "none");	
			}
		
			
			if(a=="zoom"){
$("#img").css("height", ""+(b*8)+"px");
$("#img").css("width", ""+(b*8)+"px");
			}				
			
		}
		function voir(id){
		$("#mb-liste_attente").hide();
		$.ajax({
	method:"post",
	url:"ajax_voir.php",
	data: {id:id},
	success:function(resultData){
		document.location.replace('index.php');
	}
		});
		
			
		}
		function affiche(){
			$("#mb-liste_attente").show();
			load_liste();
		}
		 $('.mb-control-close').on('click',function(){

			 	$('#mb-liste_attente').hide(); 
            // $('#mb-ouverture').hide();				
		  })
		  $('#table3').dataTable( 
{

 "searching": true,
	"paging":true,
		 "ordering": false,
 
} ); 
		</script>
</body>
</html>