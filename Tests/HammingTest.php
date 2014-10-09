<?php
include_once 'include/DB_Functions.php';
include_once 'hamming.php';
class HammingTest extends PHPUnit_Framework_TestCase {
	public function testHamming() {
		$input = null;
		foreach(Hamming::$attribute as $attribut) {
			$input[$attribut['spalte']] = 0;
		}
		
		$hamming = new Hamming();
		$ergebnisse = $hamming->run($input);
	
		$this->assertEquals('null', $ergebnisse[0]['speise']);
		$this->assertEquals('eins', $ergebnisse[1]['speise']);
	}
	
}