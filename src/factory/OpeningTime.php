<?php

namespace CC\Factory;

class OpeningTime implements FactoryInterface
{

	public function createFromData($data)
	{
		$openingTimesEntity = new \CC\Entity\OpeningTime();

		if (isset($data['id']))
		{
			$openingTimesEntity->setId($data['id']);
		}

		if (isset($data['day']))
		{
			$openingTimesEntity->setDay($data['day']);
		}

		if (isset($data['opening_time']))
		{
			$openingTimesEntity->setOpeningTime($data['opening_time']);
		}

		if (isset($data['closing_time']))
		{
			$openingTimesEntity->setClosingTime($data['closing_time']);
		}

		return $openingTimesEntity;
	}

}