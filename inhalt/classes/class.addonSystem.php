<?php
class AddonSystem{
private $_ext_path = dirname(__FILE__).'/../../extend/';
private $_extensions = array();

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
      if(is_dir($path.$dir) && file_exist($path.$dir.'/include.php')){
      include $path.$dir.'/include.php';
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
  public function trip_event($name){
	foreach($this->_extensions as $extension){
	  $extension->trip_event($name);
	}
  }
}