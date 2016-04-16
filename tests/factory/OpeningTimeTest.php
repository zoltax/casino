<?php

use CC\Factory;

class OpeningTimeFactoryTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{
		$openingTimeFactory = new Factory\OpeningTime();
		$this->assertEquals('CC\Factory\OpeningTime',get_class($openingTimeFactory));
	}

	public function testCreateFromData()
	{
		$openingTimeFactory = new Factory\OpeningTime();
		$openingTime = $openingTimeFactory->createFromData([]);

		$this->assertEquals("CC\Entity\OpeningTime",get_class($openingTime));
	}

	public function testCreateFromDay()
	{

		$data = [
			'day' => 'Monday',
		];

		$openingTimeFactory = new Factory\OpeningTime();
		$openingTime = $openingTimeFactory->createFromData($data);

		$this->assertEquals($data['day'], $openingTime->getDay());

	}

	public function testCreateFromOpeningTime()
	{

		$data = [
			'opening_time' => '07:00',
		];

		$openingTimeFactory = new Factory\OpeningTime();
		$openingTime = $openingTimeFactory->createFromData($data);

		$this->assertEquals($data['opening_time'], $openingTime->getOpeningTime());

	}

	public function testCreateFromClosingTime()
	{

		$data = [
			'closing_time' => '19:00',
		];

		$openingTimeFactory = new Factory\OpeningTime();
		$openingTime = $openingTimeFactory->createFromData($data);

		$this->assertEquals($data['closing_time'], $openingTime->getClosingTime());

	}

}