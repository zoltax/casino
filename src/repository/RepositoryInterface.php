<?php

namespace CC\repository;


interface RepositoryInterface {

	public function __construct($casinoGateway,$localisationGateway);

	public function getById($id);

	public function persist($data);

	public function delete($id);


}