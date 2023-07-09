<?php

require_once('config/config.php');
require_once('lib/core.php');

$module = isset($_REQUEST['module'])? safe ($_REQUEST['module']) : $config['default_module'];

$action = isset($_REQUEST['action'])? safe ($_REQUEST['action']) : $config['default_action'];

$controller_file = 'controllers/'.ucfirst($module).'Controller.php';

//echo $controller_file;

if(!file_exists($controller_file)){
    trigger_error('Invalid Controller');
    exit; 
    
//pour tp - faire sortir dans controller base - action error (c'est ca qu'on appelle ici)

}

require_once($controller_file);

$function = strtolower($module).'_controller_'.$action;

//echo $function;

if(!function_exists($function)) {
    trigger_error('Invalid Controller Action');
    exit;
}

call_user_func($function, $_REQUEST);
 

?>