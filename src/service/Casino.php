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

		$geoData = $this->casinoRepository->getLocalisationByPostCode($data['post_code']);

		$data = array_merge($data,$geoData);

//		$entity = (new \CC\Factory\Casino())->createFromData($data);

		$entity = $this->casinoRepository->persist($data);

		return $entity->asArray();

	}

	public function delete($id)
	{
		return $this->casinoRepository->delete($id);
	}

}