<?php

namespace CC\Repository;


class Casino implements RepositoryInterface {

	private $casinoGateway = NULL;
	private $localisationGateway = NULL;

	public function __construct($casinoGateway,$localisationGateway)
	{
		$this->casinoGateway = $casinoGateway;
		$this->localisationGateway = $localisationGateway;
	}

	public function getById($id)
	{
		$data =  $this->casinoGateway->getById($id);
		$entity = (new \CC\Factory\Casino())->createFromData($data);
		return $entity;
	}

	public function persist($data)
	{
		$data = $this->casinoGateway->persist($data);
		$entity = (new \CC\Factory\Casino())->createFromData($data);
		return $entity;
	}

	public function delete($id)
	{
		return $this->casinoGateway->delete($id);
	}

	public function getAll()
	{
		$data = $this->casinoGateway->getAll();
		$entities = [];
		foreach ( $data as $casino)
		{
			$entity = (new \CC\Factory\Casino())->createFromData($casino);
			$entities[] = $entity;
		}

		return $entities;

	}

	public function getLocalisationByPostCode($postCode)
	{
		return $this->localisationGateway->getLocalisationByPostCode($postCode);
	}

}