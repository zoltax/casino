<?php

namespace CC\Entity;


abstract class AbstractEntity {

	private $id = NULL;

	public function getId() {
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

}