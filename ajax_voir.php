 <?php
require_once("includes/initialiser.php");
$req0=$bd->requete('update radio set traiter=2 where id!='.$_POST['id'].' AND traiter!=0');
$req=$bd->requete('update radio set traiter=1 where id='.$_POST['id'].'');



?>