<?php
defined('ADDON') or die();
require_once 'inhalt/classes/class.skrupelAddon.php';
class MyAddon extends SkrupelAddon{

	public function __construct(){
		//Arbeiten, die beim initialisieren der Sitzung noetig sind.
	}
	public function __destruct() {
		//Aufraemarbeiten beim beenden des Seitenaufrufes
	}
	public function trip_event($name){
		//Hir kommt dann rein, was passiert, wenn ein bestimtes event (Zugende,spielende...) eingetretenist
		//Mien Vorschlag wegs Uebersichtlcihkeit, ein Swichtch, welcher die relevanten Events abfaengt
		// und je eine private Funktion, welche sie verarbeitet
		switch($name){
			case PLAYER_DIE:
				return $this->player_die();
			break;
			case ROUND_END:
				return $this->round_end();
			break;
		}
	}
	
	private function player_die(){
	}
	private function round_end(){
	}
}
