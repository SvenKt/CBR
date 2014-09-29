<?php
 
class DB_Functions {
 
    private $db;
	private $con;
 
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->con = $this->db->connect();
    }
     
	public function getSpeisen() {
		$sql = "SELECT * FROM ".DB_TABLE;
		//$result = mysql_query($sql) or die ("Fehler");
		$result = $this->con->query($sql);// or die ("Fehler");
		$speisen = null;
		while($row = mysqli_fetch_assoc($result)) {
			$speisen[] = $row;
		}
		return $speisen;
	}
	
	public function addSpeise($input, $neuesRezept){
		$sql = "INSERT INTO ".DB_TABLE." VALUES (NULL, ";
		foreach(Hamming::$attribute as $attribut) {
			$sql.=$input[$attribut['spalte']]." , ";
		}
		$sql.="'".$neuesRezept."',NULL,1);";
		return $this->con->query($sql);
	}
	
	public function createTable() {
		$sql = "CREATE TABLE IF NOT EXISTS `rezept` (`id` int(11) NOT NULL AUTO_INCREMENT, `warm` int(11) DEFAULT NULL, `zeit` int(11) DEFAULT NULL, `personen` int(11) DEFAULT NULL, `gesund` int(11) DEFAULT NULL, `hunger` int(11) DEFAULT NULL, `vegetarisch` int(11) DEFAULT NULL, `kochen` int(11) DEFAULT NULL, `ergebnis` varchar(40) DEFAULT NULL, `flickr` varchar(50) DEFAULT NULL, beliebt int(11) DEFAULT 0, PRIMARY KEY (`id`))";
		return $this->con->query ($sql);
	}
}	
?>