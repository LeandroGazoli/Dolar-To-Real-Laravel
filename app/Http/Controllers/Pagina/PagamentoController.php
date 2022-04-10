<?php

namespace App\Http\Controllers\Pagina;

use App\Http\Controllers\Controller;
use App\Mail\cotacaoMail;
use App\Models\cotacao;
use App\Models\taxas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PagamentoController extends Controller
{
    public function index(Request $request)
    {

        $regras = [
            'quantidade' => 'required|numeric|min:900|max:900000',
        ];

        $traducao = [
            'quantidade.required' => 'Favor inserir um valor válido',
            'quantidade.max' => 'O valor deve ser menor que 900.000',
            'quantidade.min' => 'O valor deve ser maior que 900'
        ];
        $request->validate($regras, $traducao);

        $r = $request->all();
        $taxas = taxas::first();
        $data = $taxas;
        $r['brl'] = (float)$r['brl'];
        $data['valorOriginal'] = $r['brl'];
        if($r['brl'] > 3700 ){
            $r['brl'] = $r['brl'] + ($r['brl'] * ((float)$taxas->taxamax / 100));
        } else {
            $r['brl'] = $r['brl'] + ($r['brl'] * ((float)$taxas->taxabasica / 100));
        }
        $data['quantidade'] = $r['quantidade'];
        $data['moeda'] = $r['moeda'];
        $data['taxaBoleto'] =  $r['brl'] + ($r['brl'] * ((float)$taxas->boleto / 100));
        $data['taxaCartao'] = $r['brl'] + ($r['brl'] * ((float)$taxas->cartao / 100));
        $data['user_id'] = Auth::user()->id;
        // dd($data);

        DB::insert('insert into cotacaos (user_id, valorOriginal, quantidade, moeda, taxaBoleto, taxaCartao ) values (?, ?, ?, ?, ?, ?)', [$data['user_id'], $data['valorOriginal'], $data['quantidade'],$data['moeda'], $data['taxaBoleto'], $data['taxaCartao'] ]);

        // dd($cotacao->user_id = $data['user_id']);

        Mail::to(Auth::user()->email)->send(new cotacaoMail($data));

        return view('public.pagamento.index', compact('r', 'taxas', 'data'));
    }
}