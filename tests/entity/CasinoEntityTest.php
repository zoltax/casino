<?php

use CC\Entity;

class CasinoEntityTest extends PHPUnit_Framework_TestCase {

	public function testClass(){

		$casinoEntity = new Entity\Casino();
		$this->assertEquals('CC\Entity\Casino',get_class($casinoEntity));
	}

	public function testCasinoName()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getName());
		$casino->setName("Test name");
		$this->assertEquals('Test name', $casino->getName());
	}

	public function testCasinoLocationPostCode()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getPostCode());
		$casino->setPostCode('NE15 6NW');
		$this->assertEquals('NE15 6NW', $casino->getPostCode());
	}

	public function testCasinoLocationHouseNumber()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getHouseNumber());
		$casino->setHouseNumber(1);
		$this->assertEquals(1, $casino->getHouseNumber());
	}

	public function testCasinoLocationAddress()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getAddress());
		$casino->setAddress("Green Tree Court");
		$this->assertEquals("Green Tree Court", $casino->getAddress());
	}

	public function testCasinoLocationCity()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getCity());
		$casino->setCity("Newcastle upon Tyne");
		$this->assertEquals("Newcastle upon Tyne", $casino->getCity());
	}

	public function testCasinoLocationLatitude()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getLatitude());
		$casino->setLatitude("54.9844250712142");
		$this->assertEquals("54.9844250712142", $casino->getLatitude());
	}

	public function testCasinoLocationLongitude()
	{
		$casino = new Entity\Casino();
		$this->assertNull($casino->getLongitude());
		$casino->setLongitude("-1.72395354606773");
		$this->assertEquals("-1.72395354606773", $casino->getLongitude());
	}

	public function testGetDataAsAnArray()
	{
		$casino = new Entity\Casino();
		$data = $casino->asArray();
		$this->assertCount(8, $data);
		$this->assertArrayHasKey('id', $data);
		$this->assertArrayHasKey('name', $data);
		$this->assertArrayHasKey('post_code', $data);
		$this->assertArrayHasKey('house_number', $data);
		$this->assertArrayHasKey('address', $data);
		$this->assertArrayHasKey('city', $data);
		$this->assertArrayHasKey('latitude', $data);
		$this->assertArrayHasKey('longitude', $data);
	}

	public function testAddOpeningTimes()
	{
		$casino = new Entity\Casino();
		$this->assertEmpty($casino->getOpeningTimes());

		$openingTime = new Entity\OpeningTime();
		$openingTime->setDay('Monday');
		$openingTime->setOpeningTime('7:00');
		$openingTime->setClosingTime('13:00');

		$casino->addOpeningTime($openingTime);

		$openingTimes = $casino->getOpeningTimes();
		$this->assertCount(1,$openingTimes);

		$this->assertEquals($openingTime, array_pop($openingTimes));
		$casino->addOpeningTime($openingTime);
		$this->assertCount(2, $casino->getOpeningTimes());
	}

	public function testIsValid()
	{
		$casino = new Entity\Casino();

		$this->assertTrue($casino->valid());
		$casino->setAsInvalid();

		$this->assertFalse($casino->valid());
		$casino->setAsValid();
		$this->assertTrue($casino->valid());

	}

	public function testSetError()
	{
		$casino = new Entity\Casino();

		$this->assertEmpty($casino->getError());

		$casino->setError("name");

		$this->assertEquals($casino->getError(),"name");
	}

}