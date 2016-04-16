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

	public function testCreateFromDataHouseCity()
	{
		$data = [
			'city' => "Newcastle upon Tyne"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getCity(),$data['city']);
	}

	public function testCreateFromDataHouseLongitude()
	{
		$data = [
			'longitude' => "-1.72395354606773"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getLongitude(),$data['longitude']);
	}

	public function testCreateFromDataHouseLatitude()
	{
		$data = [
			'latitude' => "54.9844250712142"
		];

		$casinoFactory = new CC\Factory\Casino();
		$casino = $casinoFactory->createFromData($data);

		$this->assertEquals("CC\Entity\Casino",get_class($casino));

		$this->assertEquals($casino->getLatitude(),$data['latitude']);
	}



}