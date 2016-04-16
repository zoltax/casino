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
		$gateway = Mockery::mock()->
		shouldReceive('getById')->andReturn([])->mock();

		$casinoRepository = new \CC\Repository\Casino($gateway);
		$this->assertTrue(property_exists($casinoRepository,'gateway'));
	}

	public function testGetById()
	{

		$data = [
			'id' => 1
 		];

		$casinoEntity = (new \CC\Factory\Casino())->createFromData($data);


		$gateway = Mockery::mock()->
		shouldReceive('getById')->andReturn($casinoEntity->asArray())->mock();

		$casinoRepository = new \CC\Repository\Casino($gateway);
		$returnedEntity = $casinoRepository->getById(1);

		$this->assertEquals($casinoEntity, $returnedEntity);
		$this->assertNotNull($casinoEntity->getId());
	}

	public function testPersist()
	{
		$data = [];

		$casinoEntity = (new \CC\Factory\Casino())->createFromData($data);

		$gateway = Mockery::mock()->
		shouldReceive('persist')->andReturn($casinoEntity->asArray())->mock();

		$casinoRepository = new \CC\Repository\Casino($gateway);
		$data = $casinoRepository->persist($casinoEntity->asArray());

		$this->assertEquals($casinoEntity, $data);
	}

//	public function testDelete()
//	{
//		$data = [];
//
//		$casinoEntity = (new \CC\Factory\Casino())->createFromData($data);
//	}



}