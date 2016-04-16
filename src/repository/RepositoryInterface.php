<?php

namespace CC\repository;


interface RepositoryInterface {

	public function __construct($gateway);

	public function getById($id);

	public function persist($data);

	public function delete($id);


}