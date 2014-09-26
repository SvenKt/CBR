<?php
include 'include/DB_Functions.php';
include 'hamming.php';
class DatabaseTest extends PHPUnit_Framework_TestCase {
	/**
     * @beforeClass
     */
	public function testInsert() {
		$db = new DB_Functions();
		// es soll nur einmal addSpeise aufgerufen werden:
		if($db->getSpeisen() != null) {
			$this->assertTrue($db->createTable(), 'Tabelle konnte nicht erstellt werden');
			$input = null;
			foreach(Hamming::$attribute as $attribut) {
				$input_0[$attribut['spalte']] = 0;
				$input_1[$attribut['spalte']] = 1;
			}	
			$this->assertTrue($db->addSpeise($input_0, "null"), 'Speisen konnten nicht hinzugefügt werden.');
			$this->assertTrue($db->addSpeise($input_1, "eins"), 'Speisen konnten nicht hinzugefügt werden.');
		};
	}
	
	public function testGetSpeisen(){
		$db = new DB_Functions();
		$speisen = $db->getSpeisen();
				
		// Check alle Hammingattribute:
		foreach(Hamming::$attribute as $attribut) {
			$this->assertEquals(0, $speisen[0][$attribut['spalte']]);
			$this->assertEquals(1, $speisen[1][$attribut['spalte']]);
		}
		
		//Check ergebnis
		$this->assertEquals('null', $speisen[0]['ergebnis']);
		$this->assertEquals('eins', $speisen[1]['ergebnis']);
	}	
}