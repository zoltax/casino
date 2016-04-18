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
        $casinoRepository = new Casino($casinoGateway);
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
        $this->casinoService->persist($request->all());
        return redirect('/casino');
    }

    public function edit($id)
    {
        $casino = $this->casinoService->getById($id);

        return view('add',['casino' => $casino]);
    }

    public function delete($id)
    {
        $status = $this->casinoService->delete($id);
        return redirect('/casino');

    }

}
