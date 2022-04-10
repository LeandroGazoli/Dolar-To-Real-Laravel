<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CadastroMoeda;
use Illuminate\Http\Request;

class CadastroMoedasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moedas = CadastroMoeda::paginate();
        return view('admin.CadastrarMoedas.index', compact('moedas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CadastrarMoedas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:40',
            'moeda' => 'required|min:3|max:3',
            'descricao' => 'required|max:255'
        ];

        $request->validate($regras);

        CadastroMoeda::create($request->all());
        $moedas = CadastroMoeda::paginate();
        return redirect()->route('cadastrarMoedas.index', compact('moedas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $createMoeda = CadastroMoeda::find($id);
        $createMoeda->delete();
        $moedas = CadastroMoeda::paginate();
        return redirect()->route('cadastrarMoedas.index', compact('moedas'));
    }
}
