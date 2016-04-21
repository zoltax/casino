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
		return $casinoEntity->asArray();
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
		$entity = (new \CC\Factory\Casino())->createFromData($data);

		$isValid = $entity->valid();

		if ( $isValid )
		{
			$geoData = $this->casinoRepository->getLocalisationByPostCode($entity->getPostCode());
			$data = array_merge($entity->asArray(),$geoData);
			$this->casinoRepository->persist($data);
			return True;
		} else {
			return $entity->getError();
		}

	}

	public function getLocalisationByPostCode($postCode)
	{
		return $this->casinoRepository->getLocalisationByPostCode($postCode);
	}

	public function delete($id)
	{
		return $this->casinoRepository->delete($id);
	}

	public function getNearest($postCode)
	{
		return $this->casinoRepository->getNearestCasinos($postCode);

	}


}