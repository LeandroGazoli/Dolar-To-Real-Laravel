<?php

namespace App\Http\Controllers;

use App\Models\taxas;
use Illuminate\Http\Request;

class TaxasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxa = taxas::first();
        // dd($taxas);
        return view('admin.ConfigurarTaxas.index', compact('taxa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taxas  $taxas
     * @return \Illuminate\Http\Response
     */
    public function show(taxas $taxas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taxas  $taxas
     * @return \Illuminate\Http\Response
     */
    public function edit(taxas $taxas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taxas  $taxas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regras = [
            'boleto' => 'required',
            'cartao' => 'required',
            'taxamax' => 'required',
            'taxabasica' => 'required'
        ];
        $request->validate($regras);

        // dd($taxas);
        $taxa = taxas::find($id);
        $taxa->update($request->all());
        // $taxa = taxas::first();
        return redirect()->route('taxas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taxas  $taxas
     * @return \Illuminate\Http\Response
     */
    public function destroy(taxas $taxas)
    {
        //
    }
}