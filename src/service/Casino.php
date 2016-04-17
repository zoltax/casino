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
}