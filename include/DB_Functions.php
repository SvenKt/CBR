<?php
 
class DB_Functions {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
	
	public function getSpeisen() {
		$sql = "SELECT * FROM ".DB_TABLE;
		//$result = mysql_query($sql) or die ("Fehler");
		$result = mysql_query($sql);// or die ("Fehler");
		$speisen = null;
		while($row = mysql_fetch_assoc($result)) {
			$speisen[] = $row;
		}
		return $speisen;
	}
	
	public function addSpeise($input, $neuesRezept){
		$sql = "INSERT INTO ".DB_TABLE." VALUES (NULL, ";
		foreach(Hamming::$attribute as $attribut) {
			$sql.=$input[$attribut['spalte']]." , ";
		}
		$sql.="'".$neuesRezept."'".",NULL,1);";
		mysql_query($sql);
	}
}	
?>