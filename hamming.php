<?php
include_once 'include/DB_Functions.php';
class Hamming {
	private $data;
	public static $attribute = array(
		array(
			'spalte' => 'warm',
			'title' => "Wie ist es draußen?", 
			"select" => array('Warm', 'Kalt'),
			'wert' => 1
		),
		array(
			'spalte' => 'zeit',
			'title' => "Wie viel Zeit hast du?", 
			"select" => array('Viel', 'Wenig'),
			'wert' => 1
		),
		array(
			'spalte' => 'personen',
			'title' => "Anzahl der Personen?", 
			"select" => array('Viele', 'Wenig'),
			'wert' => 1
		),
		array(
			'spalte' => 'gesund',
			'title' => "Hast du Lust auf was Gesundes?", 
			"select" => array('Ja', 'Nein'),
			'wert' => 1
		),
		array(
			'spalte' => 'hunger',
			'title' => "Hast du Hunger?", 
			"select" => array('Ja', 'Nein'),
			'wert' => 0.5
		),
		array(
			'spalte' => 'vegetarisch',
			'title' => "Vielleicht veggie?", 
			"select" => array('jo', 'Bäh, nein danke!'),
			'wert' => 2
		),
		array(
			'spalte' => 'kochen',
			'title' => "Kannst du Kochen?", 
			"select" => array('Ja', 'Ja, Tiefkühlpizza'),
			'wert' => 2
		)
	);
	
	public function __construct(){
		$db = new DB_Functions();
		$this->data = $db->getSpeisen();
	}
	
	public function run($input, $anzahl = 10){
		$summeGewichtung = 0;
		foreach(Hamming::$attribute as $attribut) {
			$summeGewichtung += $attribut['wert'];
		}
	
		$result = array();
		foreach($this->data as $entry) {
			$i = 0; 			//zählvariable i
			$diff = 0; 			//differenz zwischen 0 und 1 der einzelnen attribute
			$calc_result = '';	//deklarierung der 'calcultaion-result' variable (hamming ergebnis)
			foreach(Hamming::$attribute as $attribut) {
				$index = $attribut['spalte'];
				$diff += abs($input[$index] - $entry[$index]) * $attribut['wert'];
			}
			$calc_result=(1-($diff/$summeGewichtung));
			$result[] = $calc_result;
		}
		//Elemente Sortieren:
		array_multisort($result, SORT_DESC, $this->data, SORT_ASC);
		
		$ergebnisse = array();
		
		// Wenn mehr verlangt als vorhanden, dann nur so viel wie da ist:
		$anzahl = ($anzahl > count($this->data) ? count($this->data) : $anzahl);
		
		for($i= 0 ; $i < $anzahl ; $i++ ) {
			$ergebnisse[$i]['speise'] = $this->data[$i]['ergebnis'];
			$ergebnisse[$i]['wert'] = round($result[$i],2);
			$ergebnisse[$i]['flickr'] = $this->data[$i]['flickr'];
			$ergebnisse[$i]['id'] = $this->data[$i]['id'];
			$ergebnisse[$i]['beliebt']= $this->data[$i]['beliebt'];
		}
		return $ergebnisse;
	}
}
?>