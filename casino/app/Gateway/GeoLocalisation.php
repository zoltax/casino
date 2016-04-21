<?php

namespace App\Gateway;


use Illuminate\Support\Facades\DB;

class GeoLocalisation {

	public function getLocalisationByPostCode($postCode)
	{

		$response = file_get_contents("http://uk-postcodes.com/postcode/$postCode.json");

		$data = json_decode($response);

		$lat = $data->geo->lat;
		$long = $data->geo->lng;

		return [
			'latitude' => $lat,
			'longitude' => $long
		];

	}


	public function getNearest($data)
	{

		return DB::select('SELECT id,name,latitude, longitude,house_number,post_code,address,city, SQRT(
			POW(69.1 * (latitude - '.$data['latitude'].'), 2) +
			POW(69.1 * ('.$data['longitude'].' - longitude) * COS(latitude / 57.3), 2)) AS distance
			FROM casino HAVING distance < 2025 ORDER BY distance;');

	}

}