<?php

class CasinoRepositoryTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{
		$casinoRepository = new \CC\Repository\Casino('');
		$this->assertEquals('CC\Repository\Casino',get_class($casinoRepository));

		// class implements the interface, so we need to test for methods

		$this->assertTrue(method_exists($casinoRepository,'getById'));
		$this->assertTrue(method_exists($casinoRepository,'persist'));
		$this->assertTrue(method_exists($casinoRepository,'delete'));
	}

	public function testAddGateway()
	{
		$gateway = new stdClass();

		$casinoRepository = new \CC\Repository\Casino($gateway);
		$this->assertTrue(property_exists($casinoRepository,'gateway'));
	}


}