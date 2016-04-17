<?php


namespace CC\Service;


class Casino {

	private $casinoRepository = NULL;

	public function __construct(\CC\Repository\Casino $repository)
	{
		$this->casinoRepository = $repository;
	}


	public function getById($id)
	{
		$casinoEntity = $this->casinoRepository->getById($id);
		return $casinoEntity;
	}

	public function getAll()
	{
		$casinoEntities = $this->casinoRepository->getAll();

		$dataToReturn = [];

		foreach ( $casinoEntities as $casino)
		{
			$dataToReturn[] = $casino->asArray();
		}

		return $dataToReturn;

	}

	public function persist($data)
	{
		//$entity = (new \CC\Factory\Casino())->createFromData($data);

		$entity = $this->casinoRepository->persist($data);

		return $entity->asArray();

	}

}