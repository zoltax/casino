<?php

namespace CC\Entity;


class OpeningTime extends AbstractEntity {

	private $day        = NULL;
	private $openingTime   = NULL;
	private $closingTime  = NULL;

	/**
	 * @return null
	 */
	public function getClosingTime()
	{
		return $this->closingTime;
	}

	/**
	 * @param null $closingTime
	 */
	public function setClosingTime($closingTime)
	{
		$this->closingTime = $closingTime;
	}

	/**
	 * @return null
	 */
	public function getOpeningTime()
	{
		return $this->openingTime;
	}

	/**
	 * @param null $openingTime
	 */
	public function setOpeningTime($openingTime)
	{
		$this->openingTime = $openingTime;
	}

	/**
	 * @return mixed
	 */
	public function getDay()
	{
		return $this->day;
	}

	/**
	 * @param $day
	 * @return $this
	 */
	public function setDay($day)
	{
		$this->day = $day;
		return $this;
	}

	/**
	 * @return array
	 */
	public function asArray()
	{
		return [
			'id'            => $this->getId(),
			'day'           => $this->getDay(),
			'opening_time'  => $this->getOpeningTime(),
			'closing_time'  => $this->getClosingTime()
		];
	}


}