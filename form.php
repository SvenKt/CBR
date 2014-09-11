<?php
// include 'hamming.php';
class Form {
	public static function create($input = null){
		echo '<form action="index.php" method="post">';
		foreach(Hamming::$attribute as $attribut) {
			echo $attribut['title'];
			echo '<select name="'.$attribut['spalte'].'">';
				echo '<option value="1" '.(($input[$attribut['spalte']] == 1) ? 'selected':'').'>'.$attribut['select'][0].'</option>';
				echo '<option value="0" '.(($input[$attribut['spalte']] == 0) ? 'selected':'').'>'.$attribut['select'][1].'</option>';
			echo '</select><br>';
			
		}
		echo '<input type="submit" value="Submit">';
		echo '</form>';
	}
	
	public static function datenGesendet(){
		return ($_SERVER['REQUEST_METHOD'] === 'POST') ;
	}
	
	public static function auslesen() {
		$input = null;
		foreach(Hamming::$attribute as $attribut) {
			$input[$attribut['spalte']] = $_POST[$attribut['spalte']];
		}
		return $input;
	}
}
?>