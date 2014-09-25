<?php
include '../include/DB_Functions.php';
include '../hamming.php';
class DatabaseTest extends PHPUnit_Framework_TestCase {
	public function testInsert() {
		$input = null;
		foreach(Hamming::$attribute as $attribut) {
			$input[$attribut['spalte']] = 0;
		}	
		$db = new DB_Functions();
		$db->addSpeise($input, "Test");
	}
	
}