<?php

namespace App\Http\Controllers;

use App\Gateway;
use CC\Repository\Casino;
use Illuminate\Http\Request;

class CasinoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {

        $casinoGateway = new Gateway\Casino();
        $casinoRepository = new Casino($casinoGateway);
        $casinoService = new \CC\Service\Casino($casinoRepository);

        $data = $casinoService->getAll();

        print_r($data);
    }

    public function add()
    {
        return view('add');
    }

    public function save(Request $request)
    {

        $casinoGateway = new Gateway\Casino();
        $casinoRepository = new Casino($casinoGateway);
        $casinoService = new \CC\Service\Casino($casinoRepository);

        $input = $request->all();

        $data = $casinoService->persist($input);

        print_r($data);
//        die;
    }

}
