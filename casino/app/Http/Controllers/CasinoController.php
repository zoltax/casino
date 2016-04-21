<?php

namespace App\Http\Controllers;

use App\Gateway;
use CC\Repository\Casino;
use Illuminate\Http\Request;

class CasinoController extends Controller
{
    private $casinoService = NULL;

    public function __construct()
    {
        $casinoGateway = new Gateway\Casino();
        $localisationGateway = new Gateway\GeoLocalisation();
        $casinoRepository = new Casino($casinoGateway,$localisationGateway);
        $this->casinoService = new \CC\Service\Casino($casinoRepository);
    }

    public function index()
    {
        $casinos = $this->casinoService->getAll();
        return view('index',['casinos' => $casinos]);
    }

    public function add()
    {
        return view('add');
    }

    public function save(Request $request)
    {
        $status = $this->casinoService->persist($request->all());

        if ( $status === True)
        {
            return redirect('/casino');
        } else {
            return view('add',['error' => $status]);
        }

    }

    public function edit($id)
    {
        $casino = $this->casinoService->getById($id);

        return view('add',['casino' => $casino]);
    }

    public function delete($id)
    {
        $this->casinoService->delete($id);
        return redirect('/casino');

    }

    public function find(Request $request)
    {
        $data = $request->all();

        if (empty($data['post_code']))
        {
            return view('postcode');
        }
        else
        {
            $casinos = $this->casinoService->getNearest($data['post_code']);
            $localisation = $this->casinoService->getLocalisationByPostCode($data['post_code']);

            return view('find',['casinos' => $casinos,'localisation' => $localisation ]);
        }

    }

}
