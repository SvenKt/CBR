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
		echo '<table width=100%>
			<tr>
				<td width =10%>
					<button type="submit" class="btn btn-success" name="hamming">Submit</button>
				</td>
				<td width=90%>
						<button type="submit" class="btn btn-warning" name="newSpeise">Oder Speise einfügen!</button>
					
				</td>
			</tr>
			</table>
			</form>
			';
	}
		
	public static function datenGesendet(){
		
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			if(isset($_POST['addSpeise'])){
				return "addSpeise";
			}
			if(isset($_POST['hamming'])){
				return "hamming";
			}
			if(isset($_POST['newSpeise'])){
				return 'newSpeise';
			}
		}
		return null;
		
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