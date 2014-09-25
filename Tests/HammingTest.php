<?php
class HammingTest extends PHPUnit_Framework_TestCase {
	public function testHamming() {
		$this->assertEquals(-1, -1);
	}
	
	public function testFailure() {
		// Sollte einem Fehler erzeugen
		$this->assertEquals(0,1);
	}
}