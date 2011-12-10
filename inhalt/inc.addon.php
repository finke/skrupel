<?php
/**
*Startet das Addonsystem
*
*
*@autor finke
*
*/
function init_addon_system(){
if(defined('EXTENSION')){
  return false;
}
define('EXTENSION', true);
$path = dirname(__file__).DIRECTORY_SEPARATOR.'extend'.DIRECTORY_SEPARATOR;
global $extends = array();
$ext = scandir($path);
foreach($ext as $dir){
  if(is_dir($path.$dir) && file_exist($path.$dir.DIRECTORY_SEPARATOR.'include.php')){
    include $path.$dir.DIRECTORY_SEPARATOR.'include.php';
	global $extends[] = new $dir;
  }
}
}

/**
*
*Wird von den Seiten aufgerufen, wenn ein Event eingetreten ist
*@autor finke
*
*
*/
function trip_a_event($name){

