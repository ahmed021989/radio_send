<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
$project_path = dirname(__FILE__);
$project_path = str_replace('includes', '', $project_path);
defined('SITE_ROOT') ? null : 
	define('SITE_ROOT',$project_path);
	
defined('SITE_PATH') ? null : 
	define('SITE_PATH',dirname($_SERVER['PHP_SELF']));
    
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.'includes');

// charger fichier config  avant tout
require_once(LIB_PATH.DS.'config.php');



require_once(LIB_PATH.DS.'bd.php');

// charger  classes
//require_once(LIB_PATH.DS.'radio.php');










//require_once(LIB_PATH.DS.'contact_us.php');




?>