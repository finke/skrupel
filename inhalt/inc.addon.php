<?php
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

