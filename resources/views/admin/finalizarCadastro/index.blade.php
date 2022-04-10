@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vamos finalizar a configuração do site.

                    <ul>
                        <li>
                            <a href="{{ route('cadastrarMoedas.index') }}">Adicionar moedas</a>
                        </li>
                        <li>
                            <a href="{{ route('taxas.index') }}">Cadastrar taxas</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Voltar ao deshboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
