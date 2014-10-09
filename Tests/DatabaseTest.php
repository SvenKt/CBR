<?php
include_once 'include/DB_Functions.php';
include_once 'hamming.php';
class DatabaseTest extends PHPUnit_Framework_TestCase {
	/**
     * @before
     */
	public function testInsert() {
		$db = new DB_Functions();
		// es soll nur einmal addSpeise aufgerufen werden:
		if($db->getSpeisen() == null) {
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

		$this->assertNotNull($speisen, "keine Speisen bekommen");
			
		// Check alle Hammingattribute:
		foreach(Hamming::$attribute as $attribut) {
			$this->assertEquals(0, $speisen[0][$attribut['spalte']]);
			$this->assertEquals(1, $speisen[1][$attribut['spalte']]);
		}

		//Check ergebnis
		$this->assertEquals('null', $speisen[0]['ergebnis']);
		$this->assertEquals('eins', $speisen[1]['ergebnis']);
	}	
	
	public function testChangeBeliebt(){
		$db = new DB_Functions();		
		$this->assertTrue($db->changeBeliebt(1, 1));
		$irgendneVariable = $db->getSpeisen();
		$this->assertEquals(1, $irgendneVariable[0]['beliebt'], 'Beliebtheit nicht gestiegen');
	}
}