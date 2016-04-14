<?php

use CC\Entity;

class AbstractEntityTest extends PHPUnit_Framework_TestCase {

	public function testClass(){

		$abstractEntity = $this->getMockForAbstractClass('CC\Entity\AbstractEntity');
		$this->assertNull($abstractEntity->getId());
		$abstractEntity->setId(1);
		$this->assertEquals(1, $abstractEntity->getId());
	}

}