<?php

class OpeningTimeRepositoryTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{
		$openingTimeRepository = new \CC\Repository\OpeningTime('');
		$this->assertEquals('CC\Repository\OpeningTime',get_class($openingTimeRepository));

		// class implements the interface, so we need to test for methods

		$this->assertTrue(method_exists($openingTimeRepository,'getById'));
		$this->assertTrue(method_exists($openingTimeRepository,'persist'));
		$this->assertTrue(method_exists($openingTimeRepository,'delete'));
	}


	public function testAddGateway()
	{
		$gateway = Mockery::mock()->
			shouldReceive('getById')->andReturn([])->mock();

		$openingTimeRepository = new \CC\Repository\OpeningTime($gateway);
		$this->assertTrue(property_exists($openingTimeRepository,'gateway'));
	}


	public function testGetById()
	{

		$data = [
			'id' => 1
 		];

		$openingTimeEntity = (new \CC\Factory\OpeningTime())->createFromData($data);

		$gateway = Mockery::mock()->
			shouldReceive('getById')->andReturn($openingTimeEntity->asArray())->mock();

		$openingTimeRepository = new \CC\Repository\OpeningTime($gateway);
		$returnedEntity = $openingTimeRepository->getById(1);

		$this->assertEquals($openingTimeEntity, $returnedEntity);
		$this->assertNotNull($returnedEntity->getId());
	}


	public function testPersist()
	{
		$data = [];

		$openingTimeEntity = (new \CC\Factory\OpeningTime())->createFromData($data);

		$gateway = Mockery::mock()->
		shouldReceive('persist')->andReturn($openingTimeEntity->asArray())->mock();

		$openingTimeRepository = new \CC\Repository\OpeningTime($gateway);
		$returnedEntity = $openingTimeRepository->persist($data);

		$this->assertEquals($openingTimeEntity, $returnedEntity);
	}

	public function testDelete()
	{

		$data = [
			'id' => NULL
		];

		$openingTimeEntity = (new \CC\Factory\OpeningTime())->createFromData($data);

		$gateway = Mockery::mock()->
			shouldReceive('delete')->andReturn($openingTimeEntity->asArray())->mock();

		$openingTimeRepository = new \CC\Repository\OpeningTime($gateway);
		$returnedEntity = $openingTimeRepository->delete(1);

		$this->assertNull($returnedEntity->getId());

	}

	public function testGetOpeningTimeByCasinoId()
	{
		$data = [
			'id'            => 1,
			'day'           => 'Monday',
			'opening_time'  => '07:00',
			'closing_time'  => '19:00'
		];

		$openingTimeEntity = (new \CC\Factory\OpeningTime())->createFromData($data);

		$gateway = Mockery::mock()->
		shouldReceive('getByCasinoId')->andReturn([$openingTimeEntity->asArray()])->mock();

		$openingTimeRepository = new \CC\Repository\OpeningTime($gateway);
		$returnedEntities = $openingTimeRepository->getByCasinoId(1);

		$this->assertTrue(is_array($returnedEntities));

		$entity = array_pop($returnedEntities);

		$this->assertEquals($openingTimeEntity, $entity);
	}


}