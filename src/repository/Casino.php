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
	}

	public function persist($data)
	{
	}

	public function delete($id)
	{
	}
}