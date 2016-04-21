<?php

namespace CC\Entity;


class Casino extends AbstractEntity {


	private $name           = NULL;
	private $postCode       = NULL;
	private $houseNumber    = NULL;
	private $address        = NULL;
	private $city           = NULL;
	private $latitude       = NULL;
	private $longitude      = NULL;
	private $openingTime    = [];
	private $isValid        = True;
	private $error          = "";

	public function getError()
	{
		return $this->error;
	}

	public function setError($error)
	{
		$this->error = $error;
	}

	public function setAsValid()
	{
		$this->isValid = True;
	}

	public function setAsInvalid()
	{
		$this->isValid = False;
	}

	public function valid()
	{
		return $this->isValid;
	}

	/**
	 * @return null
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * @param null $longitude
	 */
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
	}

	/**
	 * @return null
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * @param null $latitude
	 */
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
	}

	/**
	 * @return null
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param null $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

	/**
	 * @return null
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param null $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}

	/**
	 * @return null
	 */
	public function getHouseNumber()
	{
		return $this->houseNumber;
	}

	/**
	 * @param null $houseNumber
	 */
	public function setHouseNumber($houseNumber)
	{
		$this->houseNumber = $houseNumber;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return null
	 */
	public function getPostCode()
	{
		return $this->postCode;
	}

	/**
	 * @param null $postCode
	 */
	public function setPostCode($postCode)
	{
		$this->postCode = $postCode;
	}

	public function getOpeningTimes()
	{
		return $this->openingTime;
	}

	public function addOpeningTime(OpeningTime $time)
	{
		$this->openingTime[] = $time;
		return $this;
	}

	public function asArray()
	{
		return [
			'id'            => $this->getId(),
			'name'          => $this->getName(),
			'post_code'     => $this->getPostCode(),
			'house_number'  => $this->getHouseNumber(),
			'address'       => $this->getAddress(),
			'city'          => $this->getCity(),
			'latitude'      => $this->getLatitude(),
			'longitude'     => $this->getLongitude(),
		];
	}

}