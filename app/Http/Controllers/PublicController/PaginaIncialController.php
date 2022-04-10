<?php

namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use App\Models\Admin\CadastroMoeda;
use Illuminate\Http\Request;

class PaginaIncialController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function moedas()
    {
    //    $moedas = CadastroMoeda::all();

       return response(CadastroMoeda::all());
    }
}
