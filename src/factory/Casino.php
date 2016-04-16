<?php

namespace CC\Factory;


class Casino implements FactoryInterface {

	public function createFromData($data)
	{
		$casinoEntity = new \CC\Entity\Casino();

		if (isset($data['id']))
		{
			$casinoEntity->setId($data['id']);
		}

		if (isset($data['name']))
		{
			$casinoEntity->setName($data['name']);
		}

		if (isset($data['address']))
		{
			$casinoEntity->setAddress($data['address']);
		}

		if (isset($data['post_code']))
		{
			$casinoEntity->setPostCode($data['post_code']);
		}

		if (isset($data['house_number']))
		{
			$casinoEntity->setHouseNumber($data['house_number']);
		}

		if (isset($data['city']))
		{
			$casinoEntity->setCity($data['city']);
		}

		if (isset($data['longitude']))
		{
			$casinoEntity->setLongitude($data['longitude']);
		}

		if (isset($data['latitude']))
		{
			$casinoEntity->setLatitude($data['latitude']);
		}

		if (isset($data['opening_times']))
		{
			$openingTimeFactory = new OpeningTime();
			foreach ($data['opening_times'] as $openingTimeData)
			{
				$openingTimeEntity = $openingTimeFactory->createFromData($openingTimeData);
				$casinoEntity->addOpeningTime($openingTimeEntity);
			}
		}

		return $casinoEntity;
	}


}