<?php

use CC\Entity;

class CasinoEntityTest extends PHPUnit_Framework_TestCase {

	public function testClass(){

		$casinoEntity = new Entity\Casino();

		$this->assertEquals('CC\Entity\Casino',get_class($casinoEntity));
//		print_r(get_class($casinoEntity));
	}


	public function testCasinoName()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getName());
		$casino->setName("Test name");
		$this->assertEquals('Test name', $casino->getName());
	}
}