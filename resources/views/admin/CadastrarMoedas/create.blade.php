@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de moedas</div>

                <div class="card-body">
                    <form action="{{ route('cadastrarMoedas.store') }}" method="POST" id="form">
                        @method('POST')
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome da moeda</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="moedas">Insira a abreveação da moeda</label>
                            <input class="form-control" type="text" name="moeda" id="moedas" required>
                            <a class="btn btn-secondary" id="verificarMoeda" onclick="apiMoedas()">verificar se existe moeda</a>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descricao da moeda</label>
                            <textarea required name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button onclick="sendForm()" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/cadastroMoedas.js') }}"></script>
@endsection
