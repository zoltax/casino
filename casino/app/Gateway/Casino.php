<?php

namespace App\Gateway;

use Symfony\Component\Debug\Debug;

class Casino {

	public function test()
	{
		$data = \App\Casino::all()->toArray();

		print_r($data);
		die("a");
	}

	public function getById($id)
	{
		$data = \App\Casino::where('id',$id)
			->get()
			->toArray();

		if ( count($data) == 1)
		{
			return array_pop($data);
		}

		return False;

	}

	public function getAll()
	{
		$data = \App\Casino::all()
			->toArray();

		if ( ! empty($data))
		{
			return $data;
		}

		throw new \Exception("bu");
	}

	public function persist($data)
	{

		if ( isset($data['id']) && !empty($data['id']))
		{
			$casino = \App\Casino::where('id',$data['id'])->first();
			$casino->fill($data);
		}
		else
		{

			$casino = \App\Casino::create($data);
		}

		$casino->save();
		return $casino->toArray();
	}

	public function delete($id)
	{
		$casino = \App\Casino::where('id',$id)->first();
		if ($casino)
		{
			$casino->delete();
			return true;
		}
		return false;
	}

}