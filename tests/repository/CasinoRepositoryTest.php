<?php

class CasinoRepositoryTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{
		$casinoRepository = new \CC\Repository\Casino('','');
		$this->assertEquals('CC\Repository\Casino',get_class($casinoRepository));

		// class implements the interface, so we need to test for methods

		$this->assertTrue(method_exists($casinoRepository,'getById'));
		$this->assertTrue(method_exists($casinoRepository,'persist'));
		$this->assertTrue(method_exists($casinoRepository,'delete'));
	}

	public function testAddGateway()
	{
		$casinoGateway = Mockery::mock()->
			shouldReceive('getById')->andReturn([])->mock();

		$localisationGateway = Mockery::mock()->
		shouldReceive('getById')->andReturn([])->mock();

		$casinoRepository = new \CC\Repository\Casino($casinoGateway,$localisationGateway);
		$this->assertTrue(property_exists($casinoRepository,'casinoGateway'));
		$this->assertTrue(property_exists($casinoRepository,'localisationGateway'));
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


		$casinoGateway = Mockery::mock()->
			shouldReceive('getById')->andReturn($casinoEntity->asArray())->mock();

		$localisationGateway = Mockery::mock();

		$casinoRepository = new \CC\Repository\Casino($casinoGateway,$localisationGateway);
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

		$localisationGateway = Mockery::mock();

		$casinoRepository = new \CC\Repository\Casino($gateway,$localisationGateway);
		$data = $casinoRepository->persist($casinoEntity->asArray());

		$this->assertEquals($casinoEntity, $data);
	}

	public function testDelete()
	{

		$gateway = Mockery::mock()->
			shouldReceive('delete')->andReturn(true)->mock();

		$localisationGateway = Mockery::mock();

		$casinoRepository = new \CC\Repository\Casino($gateway,$localisationGateway);
		$status = $casinoRepository->delete(1);

		$this->assertTrue($status);

	}

	public function testGetAll()
	{
		$data = [
			'id' => 1
		];

		$casinoEntity = (new \CC\Factory\Casino())->createFromData($data);
		$gateway = Mockery::mock()->
			shouldReceive('getAll')->andReturn([$casinoEntity->asArray()])->mock();

		$localisationGateway = Mockery::mock();

		$casinoRepository = new \CC\Repository\Casino($gateway,$localisationGateway);
		$data = $casinoRepository->getAll();

		$this->assertEquals([$casinoEntity],$data);

	}

	public function testGeoLocalisation()
	{
		$resp = '{"postcode":"NE15 6NW","geo":{"lat":54.975307836474464,"lng":-1.6739561458838577,"easting":420967.0,"northing":564570.0,"geohash":"http://geohash.org/gcyb9zvn3upv"},"administrative":{"council":{"title":"Newcastle upon Tyne","uri":"http://statistics.data.gov.uk/id/statistical-geography/E08000021","code":"E08000021"},"ward":{"title":"Benwell and Scotswood","uri":"http://statistics.data.gov.uk/id/statistical-geography/E05001089","code":"E05001089"},"constituency":{"title":"Newcastle upon Tyne Central","uri":"http://statistics.data.gov.uk/id/statistical-geography/E14000831","code":"E14000831"}}}';

		$gateway = Mockery::mock();;

		$localisationGateway = Mockery::mock()->
		shouldReceive('getLocalisationByPostCode')->andReturn($resp)->mock();

		$casinoRepository = new \CC\Repository\Casino($gateway,$localisationGateway);
		$data = $casinoRepository->getLocalisationByPostCode('NE156NW');

		$this->assertEquals($data, json_decode($resp));
	}



}