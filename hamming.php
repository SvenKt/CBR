<?php
// include 'include/DB_Functions.php';
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
			'title' => "Was Vegetarisches?", 
			"select" => array('jo', 'Bäh, nein danke!'),
			'wert' => 1
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
		echo "Hamming initalisiert<br>";
	}
	
	public function run($input){
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
		
		for($i= 0 ; $i < count($this->data) ; $i++ ) {
			echo $this->data[$i]['ergebnis'].' '.round($result[$i],2).'<br>';
		}
	}
}
?>