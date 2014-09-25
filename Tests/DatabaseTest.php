<?php
include 'include/DB_Functions.php';
include 'hamming.php';
class DatabaseTest extends PHPUnit_Framework_TestCase {
	public function testInsert() {
		$db = new DB_Functions();
		$this->assertTrue($db->createTable(), 'Tabelle konnte nicht erstellt werden');
		$input = null;
		foreach(Hamming::$attribute as $attribut) {
			$input[$attribut['spalte']] = 0;
		}	
		$this->asserTrue($db->addSpeise($input, "Test"), 'Speisen konnten nicht hinzugefügt werden.');
	}
	
}