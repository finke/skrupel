<?php
defined('EXTENSION') or die();
require_once 'inhalt/classes/class.skrupelAddon.php';
class MyAddon extends SkrupelAddon{

	public function __construct(){
		//Arbeiten, die beim initialisieren der Sitzung noetig sind.
	}
	public function __destruct() {
		//Aufraemarbeiten beim beenden des Seitenaufrufes
	}
	public function trip_event($name){
		//Hir kommt dann rein, was passiert, wenn ein bestimtes event (Zugende, spielende...) eingetretenist
	}
}
