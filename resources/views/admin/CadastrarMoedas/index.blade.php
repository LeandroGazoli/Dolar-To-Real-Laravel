@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('cadastrarMoedas.create') }}" class="btn btn-success">
                        Cadastrar nova moeda
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">Moeda</th>
                              <th scope="col">Descrição</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($moedas as $moeda)
                            <tr>
                                <td>{{ $moeda->id }}</td>
                                <td>{{ $moeda->nome }}</td>
                                <td>{{ $moeda->moeda }}</td>
                                <td>{{ $moeda->descricao }}</td>
                                <td>
                                    <form method="POST" action="{{ route('cadastrarMoedas.destroy', ['cadastrarMoeda' => $moeda->id]) }}">
                                       @csrf
                                       @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETAR</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
