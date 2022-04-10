@extends('public.layouts.estrutura')

@section('content')
<div class="container pagamento rounded-2">
    <div class="row m-0">
        <div class="col-md-7 col-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="row box-right">
                        <div class="col-md-8 ps-0 ">
                            <p class="h1 fw-bold d-flex"> <span class=" fas fa-dollar-sign textmuted pe-1 h6 align-text-top mt-1"></span>{{ $data['moeda'] }} {{ $data['quantidade'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="row box-right">
                        <div class="col-md-12 ps-0 ">
                        <p class="h7 fw-bold mb-1">Pagemento por cartão</p>
                        <p class="textmuted h8 mb-2">Inserir informações para pagamento</p>
                        <div class="form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card border-0"> <input class="form-control" type="text" placeholder="Numero do Cartão"> <span class="far fa-credit-card"></span> </div>
                                </div>
                                <div class="col-6"> <input class="form-control my-3" type="text" placeholder="MM/YY"> </div>
                                <div class="col-6"> <input class="form-control my-3" type="text" placeholder="cvv"> </div>

                            </div>
                            <div class="btn btn-primary d-block h8">Pagar agora <span class="fas fa-dollar-sign ms-2"></span>{{ number_format($data['taxaCartao'], 2, '.', '') }}<span class="ms-3 fas fa-arrow-right"></span></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="row box-right">
                        <div class="col-md-12 ps-0 ">
                        <p class="h7 fw-bold mb-1">Pagemento por Boleto</p>
                        <div class="form">
                            <div class="btn btn-primary d-block h8">Baixar boleto </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-12 ps-md-5 p-0 ">
            <div class="box-left">
                <p class="textmuted h8">Ordem de pagamento</p>
                <p class="fw-bold h7">{{ Auth::user()->name }}</p>
                <div class="h8">
                    <div class="row m-0 border mb-3">
                        <div class="col-3 h8 pe-0 ps-2">
                            <p class="textmuted py-2">Items</p> <span class="d-block py-2 border-bottom">Boleto</span> <span class="d-block py-2">Cartão</span>
                        </div>
                        <div class="col-3 text-center p-0">
                            <p class="textmuted p-2">Qty</p> <span class="d-block p-2 border-bottom">{{ $data['quantidade'] }}</span> <span class="d-block p-2">{{ $data['quantidade'] }}</span>
                        </div>
                        <div class="col-3 p-0 text-center h8 border-end">
                            <p class="textmuted p-2">Preço</p> <span class="d-block border-bottom py-2"><span class="fas fa-dollar-sign"></span>{{ number_format($r['brl'], 2, '.', '') }}</span> <span class="d-block py-2 "><span class="fas fa-dollar-sign"></span>{{ number_format($r['brl'], 2, '.', '') }}</span>
                        </div>
                        <div class="col-3 p-0 text-center">
                            <p class="textmuted p-2 fw-bold">Total</p>
                            <span class="d-block py-2 border-bottom fw-bold">
                                <span class="fas fa-dollar-sign"></span>
                                {{ number_format($data['taxaBoleto'], 2, '.', '') }}
                            </span>
                            <span class="d-block py-2 fw-bold">
                                <span class="fas fa-dollar-sign"></span>
                                {{ number_format($data['taxaCartao'], 2, '.', '') }}
                            </span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
