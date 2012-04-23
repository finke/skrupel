<?php
class AddonSystem{
private $_ext_path = dirname(__FILE__).'/../../addons/';
private $_extensions = array();
define('ADDON', '');

/**
*Startet das Addonsystem
*
*
*@autor finke
*
*/
  public function __construct(){
    $ext = scandir($path);
    foreach($ext as $dir){
      if(is_dir($path.$dir) && file_exist($path.$dir.'/config.txt') && file_exist($path.$dir.'/main.php')){
      include $path.$dir.'/main.php';
	  if(is_subclass_of($dir, 'SkrupelAddon')) $this->_extensions[] = new $dir;
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
  public function trip_event($name, $options=null, &$lambda =NULL){
	foreach($this->_extensions as $extension){
	  return $extension->trip_event($name, $options, &$lambda);
	}
  }
}