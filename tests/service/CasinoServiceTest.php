<?php

class CasinoServiceTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{
		$casinoRepository = new \CC\Repository\Casino('','');

		$casinoService = new CC\Service\Casino($casinoRepository);
		$this->assertEquals("CC\Service\Casino",get_class($casinoService));

		$this->assertTrue(property_exists($casinoService,'casinoRepository'));
	}


	public function testGetById()
	{

		$data = [
			'id' => 1,
			'name' => 'Filip',
			'post_code' => 'NE15 6NW',
			'house_number' => 10,
			'address' => 'Greet Tree Court',
			'city' => 'Newcastle upon Tyne',
			'latitude' => '1.23',
			'longitude' => '35',

		];

		$casinoEntity = (new \CC\Factory\Casino())->createFromData($data);

		$casinoRepository = Mockery::mock('\CC\Repository\Casino')
			->shouldReceive('getById')->andReturn($casinoEntity)
			->mock();

		$casinoService = new CC\Service\Casino($casinoRepository);

		$returnedData = $casinoService->getById(1);

		$this->assertEquals($data,$returnedData);
	}

	public function testGetAll()
	{
		$casinoEntity = (new \CC\Factory\Casino())->createFromData(['id' => 1]);

		$casinoRepository = Mockery::mock('\CC\Repository\Casino')
			->shouldReceive('getAll')->andReturn([$casinoEntity])
			->mock();

		$casinoService = new CC\Service\Casino($casinoRepository);

		$data = $casinoService->getAll(1);

		$this->assertEquals($data,[$casinoEntity->asArray()]);
	}

	public function testPersist()
	{
		$data = [
			'id' => 1,
			'name' => 'Filip',
			'post_code' => 'NE15 6NW',
			'house_number' => 10,
			'address' => 'Greet Tree Court',
			'city' => 'Newcastle upon Tyne',
			'latitude' => '1.23',
			'longitude' => '35',

		];

		$casinoEntity = (new \CC\Factory\Casino())->createFromData($data);

		$casinoRepository = Mockery::mock('\CC\Repository\Casino')
			->shouldReceive('persist')->andReturn($casinoEntity)
			->shouldReceive('getLocalisationByPostCode')->andReturn([])
			->mock();

		$casinoService = new CC\Service\Casino($casinoRepository);

		$entity = $casinoService->persist($data);

		$this->assertEquals($entity, $data);


	}

	public function testDelete()
	{
		$casinoRepository = Mockery::mock('\CC\Repository\Casino')
			->shouldReceive('delete')->andReturn(true)
			->mock();

		$casinoService = new CC\Service\Casino($casinoRepository);
		$status = $casinoService->delete(1);

		$this->assertTrue($status);

	}

	public function testFineNearest()
	{

		$data =
			[
				[
				'latitude' => '54.975307836474',
				'longitude' => '-1.6739561458839',
				'distance' => '39.66252087009066'
				]
			];

		$casinoRepository = Mockery::mock('\CC\Repository\Casino')
			->shouldReceive('getNearestCasinos')->andReturn($data)
			->mock();

		$casinoService = new CC\Service\Casino($casinoRepository);

		$nearest = $casinoService->getNearest("NE146NW");

		$this->assertEquals($data,$nearest);
	}



}