<?php

namespace CC\Repository;


class OpeningTime {

	private $gateway = NULL;

	public function __construct($gateway)
	{
		$this->gateway = $gateway;
	}

	public function getById($id)
	{
		$data =  $this->gateway->getById($id);
		$entity = (new \CC\Factory\OpeningTime())->createFromData($data);
		return $entity;

	}

	public function persist($data)
	{
		$data = $this->gateway->persist($data);
		$entity = (new \CC\Factory\OpeningTime())->createFromData($data);
		return $entity;
	}

	public function delete($id)
	{
		$data = $this->gateway->delete($id);
		$entity = (new \CC\Factory\OpeningTime())->createFromData($data);
		return $entity;
	}

	public function getByCasinoId($id)
	{
		$data = $this->gateway->getByCasinoId($id);
		$factory = new \CC\Factory\OpeningTime();

		$openingHours = [];

		foreach ( $data as $openingHour )
		{
			$entity = $factory->createFromData($openingHour);
			$openingHours[] = $entity;
		}

		return $openingHours;
	}
}