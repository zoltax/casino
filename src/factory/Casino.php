<?php

namespace CC\Factory;


class Casino {

	public function createFromData($data)
	{
		$casinoEntity = new \CC\Entity\Casino();

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

		return $casinoEntity;
	}


}