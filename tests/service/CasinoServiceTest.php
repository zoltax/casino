<?php

class CasinoServiceTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{
		$casinoRepository = new \CC\Repository\Casino('');

		$casinoService = new CC\Service\Casino($casinoRepository);
		$this->assertEquals("CC\Service\Casino",get_class($casinoService));

		$this->assertTrue(property_exists($casinoService,'casinoRepository'));
	}


	public function testGetById()
	{
		$casinoEntity = (new \CC\Factory\Casino())->createFromData(['id' => 1]);

		$casinoRepository = Mockery::mock('\CC\Repository\Casino')
			->shouldReceive('getById')->andReturn($casinoEntity)
			->mock();

		$casinoService = new CC\Service\Casino($casinoRepository);

		$data = $casinoService->getById(1);

		$this->assertEquals($data,$casinoEntity);
	}

}