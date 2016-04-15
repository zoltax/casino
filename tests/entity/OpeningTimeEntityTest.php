<?php

use CC\Entity;

class OpeningTimeEntityTest extends PHPUnit_Framework_TestCase {

	public function testClass()
	{

		$openingTimeEntity = new Entity\OpeningTime();
		$this->assertEquals('CC\Entity\OpeningTime',get_class($openingTimeEntity));
	}

	public function testDay()
	{
		$openingTimeEntity = new Entity\OpeningTime();
		$this->assertNull($openingTimeEntity->getDay());
		$openingTimeEntity->setDay('Monday');
		$this->assertEquals('Monday',$openingTimeEntity->getDay());
	}

	public function testOpeningTime()
	{
		$openingTimeEntity = new Entity\OpeningTime();
		$this->assertNull($openingTimeEntity->getOpeningTime());
		$openingTimeEntity->setOpeningTime('07:00');
		$this->assertEquals('07:00',$openingTimeEntity->getOpeningTime());
	}

	public function testCloseTime()
	{
		$openingTimeEntity = new Entity\OpeningTime();
		$this->assertNull($openingTimeEntity->getClosingTime());
		$openingTimeEntity->setClosingTime('07:00');
		$this->assertEquals('07:00',$openingTimeEntity->getClosingTime());
	}

	public function testGetDataAsAnArray() {
		$openingTimeEntity = new Entity\OpeningTime();
		$data = $openingTimeEntity->asArray();
		$this->assertCount(3, $data);
		$this->assertArrayHasKey('day', $data);
		$this->assertArrayHasKey('openingTime', $data);
		$this->assertArrayHasKey('closingTime', $data);
	}

}