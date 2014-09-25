<?php
class Submit {
	
	public static $inData;
	
	public static function createField($input){
	
	 
		echo '<form action="index.php" method="post">';
		foreach(Hamming::$attribute as $attribut) {
			echo '<input type="hidden" name="'.$attribut['spalte'].'" value="'.$input[$attribut['spalte']].'">';
		}
		echo '<table width=100%>
			<tr>
				<td width =90%>
					<input class="infield" type="text" name="infield" value="Hier eigenes Gericht eintragen" class="field">
				</td>
				<td width="10%">
					<button type="submit" class="btn btn-success" name="addSpeise">Eintrag senden!</button>
				</td>
			</tr>
			</table>
			';
		echo '</form>';
		echo '</body>
			</html>';


	}
	
	
	/*public function fillIntoDB($baseArray){
		require_once 'include/DB_connect.php';
		require_once 'include/config.php';
		$base= new DB_connect();
		$base->connect();
		
		$sql = "INSERT INTO".DB_TABLE." VALUES ("$baseArray[0]", "$baseArray[1]", "$baseArray[2]", "$baseArray[3]", "$baseArray[4]", "$baseArray[5]", "$baseArray[6]", "$baseArray[7]", "$baseArray[8]", "$baseArray[9]" );" ;
		$result = mysql_query($sql);// or die ("Fehler");
		$speisen = null;
		while($row = mysql_fetch_assoc($result)) {
			$speisen[] = $row;
		}
		
		
	
	}

*/

}





?>