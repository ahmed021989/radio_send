<?php
require_once("includes/initialiser.php");
?>

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
	<style>
* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/

  height: 400px;
}
</style>
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
 // lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  //lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
</head>
<body onload=" if( window.localStorage )
{
	if( !localStorage.getItem('firstLoad') )
	{
		localStorage['firstLoad'] = true;
		window.location.reload();
	}  
	else
		localStorage.removeItem('firstLoad');
}"><!--onload="load_alert_audio()" --> 
<div id="aler_aud">
</div>
<div class="row">
	<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
		<div class="col-xs-6 col-xs-offset-0 form-box">
			<br>
			<span class="pull-left" style="color:#fff;font-size:24px">EPH ZIGHOUD YOUCEF TENES:   UMC</span>	
		</div>		 
		<!-- TOGGLE NAVIGATION -->
		<div class="col-xs-6 col-xs-offset-0 form-box"  >

			<li class="xn-icon-button " style="text-size:28px !important">

				<a onclick="affiche();" data-toggle="tooltip" data-placement="bottom" title="liste d'attente" style="cursor:pointer;font-size:20px"><span class="fa fa-bell-o"></span></a>
				<div class="informer informer-danger" id="aler"  style="font-size:20px">
					<?php  

					?>
				</div>

				<script>
					setInterval('load_alert()',500);
					function load_alert(){
						$("#aler").load('ajax_alert.php');
					}	

					setInterval('load_alert_audio()',60000);
					function load_alert_audio(){
						$("#aler_aud").load('ajax_alert_audio.php');	

					}
					
					
				</script>

			</li>
			<br>
			<button type="button" id="btn_historique" style="font-size:14px" class="btn btn-warning lg  pull-right" onclick="affiche2();" >historique <span class="fa fa-history"></span></button>

		</div>




	</div>
</ul>
</div>
<br>
<div class="row">

	<div class="col-xs-3 col-xs-offset-0 form-box">
		<div class="col-xs-12 col-xs-offset-0 form-box" style="border:1px solid #99F;border-radius: 10px;direction:ltr;text-align:left">
			<p >
				<span style="font-size:24px"><u>Malade </u></span><br>
				<p style="font-size:16px">
					<?php 

					$sql=$bd->requete("select * from radio where traiter=1"); 
					while($row=mysqli_fetch_array($sql)){
						echo "NOM : <b>".$row['nom']."</b></br> PRENOM :<b>".$row['prenom']."</b></br> MEDECIN :<b>".$row['med'];
					}
					?> </b></br>

				</p>
			</p>
		</div>
	</br>
	<div class="col-xs-12 col-xs-offset-0 form-box" style="border:1px solid #99F;border-radius: 10px;direction:ltr;text-align:left">
		<div class="form-group">
			<label class="col-md-2 control-label" style="color:green"> Effets</label>
			<div class="col-md-10">                                                                                            
				<select class="form-control select" id="effet"  name="effet" required  onchange="effect();" >
					<option value="1"> Aucun  </option>
					<option value="zoom"> zoom  </option>
					<option value="brightness"> Brightness  </option>
					<option value="contrast"> Contrast  </option>
					<option value="invert"> Invert  </option>
					<option value="sepia"> Sepia  </option>
				</select>

			</div>
		</div> 
	</div>

	<div class="col-xs-12 col-xs-offset-0 form-box" style="border:1px solid #99F;border-radius: 10px;direction:ltr;text-align:left">
		<form class="range-field" >
			<input type="range" min="1" max="200" id="range" oninput="effect();" value="100"/>
		</form>

	</div>
	<div class="col-xs-12 col-xs-offset-0 form-box" style="border:1px solid #99F;border-radius: 10px;direction:ltr;text-align:left">
	</br></br></br></br></br></br></br>		
	<form  action="index.php" method="post">
	</br></br></br>
	<span style="color:red"><strong><u>Supprimer l'historique</u></strong><br>
	NB:La suppression se fait en cas de la lenteur de l'application  </br></span>
</br>
<div class="row" style="background:#47465d">
	<select id="nbr" name='nbr' >
		<option value="0">selectionner la période a supprimé</option>
		<option value="90">90 jours précédents</option>
		<option value="60">60 jours précédents</option>
		<option value="30">30 jours précédents</option>


	</select>
	<button type="submit" name="submit" id="submit" value="vider" >supprimer</button>
</div>
<?php  
function vider($nbr){
	/* Fichier à supprimer */
	global $bd;
	$dt=date("Y-m-d");
	$dt_moin=date("Y-m-d",strtotime($dt.'-'.$nbr.' days'));
	$req=$bd->requete('select * from radio where dat<="'.$dt_moin.'"');
	$i=0;
	while($row=$bd->fetch_array($req)){
		
		$fichier = $row['src'];

		if( file_exists ( $fichier)){
			unlink( $fichier ) ;

			++$i;
		}

  /* Alternative: 

  @unlink( $fichier ) ; */
  

}
$req=$bd->requete('delete from radio where dat<="'.$dt_moin.'"');
echo "<script> alert('".$i." fichiers supprimer'); </script>";
}
if(isset($_POST['submit'])){
	vider($_POST['nbr']); 
}

?>

</form>
</div>

</div>

<div class="col-xs-9 col-xs-offset-0 img-zoom-container" style="">
	<img id="myimage" class="img-responsive col-xs-6" src="<?php
	$sql2=$bd->requete("select * from radio where traiter=1");
	while($row=mysqli_fetch_array($sql2)){
		echo $row['src'];
	}
	?>?time=<?php echo time(); ?>" style="height:600px;" />
	<div id="myresult" class="img-zoom-result col-xs-6"></div>
</div>

</div>

<div class="message-box sm animated fadeIn "  id="mb-liste_attente" >
	<div class="row ">
		<br>
		<div class="col-xs-8 col-xs-offset-2" style="background:#fff">
			<div class="pull-right">
				<div>
					<br><br>
					<button class="btn btn-danger fa fa-times btn-lg mb-control-close"></button> 
				</div>
			</div>
			<h2>liste d'attente</h2>
			<br><br>



			<div id="liste">
			</div>
			<script>

				setInterval('load_liste()',500);
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
<!--MESSAGE BOX HISTORIQUE -->
<div class="message-box sm animated fadeIn "  id="mb-historique" >

	<div class="row ">
		<br>
		<div class="col-xs-8 col-xs-offset-2" style="background:#fff">
			<div class="pull-right">
				<div>
					<br><br>
					<button class="btn btn-danger fa fa-times btn-lg mb-control-close"></button> 
				</div>
			</div>
			<h1>historique</h1>
			<br>
           <!-- <div class="row">
			<div class="col-xs-6">
				<input type="text" id="nom" autocomplete="off" class="form-control " placeholder="NOM MALADE" oninput="load_historique()"/> 
				</div>
				<div class="col-xs-6">
                   <input type="date" id="dat"  class="form-control" /> 
				</div>
			</div>		<!--fin row -->		   
			<div id="historique">
			</div>
			<script>

						//setInterval('load_liste()',500);
						function load_historique(){

							$("#historique").load('ajax_historique.php');	
					//alert(nom);
					
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
	
 imageZoom("myimage", "myresult");
	function effect(){
		
		var a=document.getElementById("effet").value;
		var b=document.getElementById("range").value;
			//alert(a);
			if(a!="1"){
				$("#myimage").css("filter", ""+a+"("+b+"%)");
				$("#myresult").css("filter", ""+a+"("+b+"%)");
				
			}
			
			if(a=="1"){
				$("#myimage").css("filter", "none");
				$("#myresult").css("filter", "none");
				
			}

			
			if(a=="zoom"){
				document.getElementById('myimage').style.height=(b*8)+"px";
				document.getElementById('myimage').style.width=(b*8)+"px";
				 imageZoom("myimage", "myresult");
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
		function affiche2(){
			$("#mb-historique").show();
			load_historique();
		}
		$('.mb-control-close').on('click',function(){

			$('#mb-liste_attente').hide(); 
			$('#mb-historique').hide(); 
            // $('#mb-ouverture').hide();				
        });
       

    </script>

</body>
</html>