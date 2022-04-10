<?php

namespace App\Http\Controllers;

use App\Mail\cotacaoMail;
use App\Models\Admin\CadastroMoeda;
use App\Models\cotacao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $usuarios = User::all();
        $moedas = CadastroMoeda::all();
        if($usuarios->count() === 1 && !$moedas->count() > 0){
            $user = user::find(Auth::user()->id);
            $user->permission_id = 1;
            $user->save();
            return view('admin.finalizarCadastro.index');
        }
        $cotacaos = cotacao::all();

        return view('home', compact('cotacaos'));
    }
}