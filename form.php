<?php
// include 'hamming.php';
class Form {
	public static function create($input = null){
		echo '<form action="index.php" method="post">';
		foreach(Hamming::$attribute as $attribut) {
			echo '<div class="row" style="padding-bottom:10px"><div class="col-sm-5">';
			echo $attribut['title'];
			echo '</div><div class="col-sm-7">';
			echo '<select class="selectpicker" name="'.$attribut['spalte'].'">';
				echo '<option value="1" '.(($input[$attribut['spalte']] == 1) ? 'selected':'').'>'.$attribut['select'][0].'</option>';
				echo '<option value="0" '.(($input[$attribut['spalte']] == 0) ? 'selected':'').'>'.$attribut['select'][1].'</option>';
			echo '</select><br>';
			echo '</div></div>';
		}
		echo '<button type="submit" class="btn btn-success">Submit</button>';
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