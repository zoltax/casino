<?php

use CC\Factory;

class CasinoTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{

		$casinoFactory = new Factory\Casino();
		$this->assertEquals('CC\Factory\Casino',get_class($casinoFactory));
	}

	public function testCreateFromData()
	{
		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData([]);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));
	}

	public function testCreateFromDataId()
	{
		$data = [
			'id' => 1
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

//		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getId(),$data['id']);
	}


	public function testCreateFromDataName()
	{
		$data = [
			'name' => "Filip's casino"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getName(),$data['name']);
	}

	public function testCreateFromDataAddress()
	{
		$data = [
			'address' => "Green Tree Court"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getAddress(),$data['address']);
	}

	public function testCreateFromDataPostCode()
	{
		$data = [
			'post_code' => "NE15 6NW"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getPostCode(),$data['post_code']);
	}

	public function testCreateFromDataHouseNumber()
	{
		$data = [
			'house_number' => "10"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getHouseNumber(),$data['house_number']);
	}

	public function testCreateFromDataCity()
	{
		$data = [
			'city' => "Newcastle upon Tyne"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getCity(),$data['city']);
	}

	public function testCreateFromDataLongitude()
	{
		$data = [
			'longitude' => "-1.72395354606773"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getLongitude(),$data['longitude']);
	}

	public function testCreateFromDataLatitude()
	{
		$data = [
			'latitude' => "54.9844250712142"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getLatitude(),$data['latitude']);
	}

	public function testCreateFromDataAddOpeningHours()
	{
		$data = [
			'opening_times' => [
				[
					'id' => NULL,
					'day' => 'Monday',
					'opening_time' => '07:00',
					'closing_time' => '19:00',
				]
			]
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals($data['opening_times'][0], $casino->getOpeningTimes()[0]->asArray());
	}



}