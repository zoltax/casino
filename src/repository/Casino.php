<?php

namespace CC\Repository;


class Casino implements RepositoryInterface {

	private $gateway = NULL;

	public function __construct($gateway)
	{
		$this->gateway = $gateway;
	}

	public function getById($id)
	{
		$data =  $this->gateway->getById($id);
		$entity = (new \CC\Factory\Casino())->createFromData($data);
		return $entity;

	}

	public function persist($data)
	{
		$data = $this->gateway->persist($data);
		$entity = (new \CC\Factory\Casino())->createFromData($data);
		return $entity;
	}

	public function delete($id)
	{
		$data = $this->gateway->delete($id);
		$entity = (new \CC\Factory\Casino())->createFromData($data);
		return $entity;
	}

	public function getAll()
	{
		$data = $this->gateway->getAll();
		$entities = [];
		foreach ( $data as $casino)
		{
			$entity = (new \CC\Factory\Casino())->createFromData($casino);
			$entities[] = $entity;
		}

		return $entities;

	}
}