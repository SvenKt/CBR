<?php
class Form {	
	public static function auslesen() {
		$input = null;
		foreach(Hamming::$attribute as $attribut) {
			$input[$attribut['spalte']] = $_POST[$attribut['spalte']];
		}
		return $input;
	}
}
?>