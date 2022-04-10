@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Quantidade</th>
                            <th>Moeda</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($cotacaos as $cotacao)
                          <tr>
                            <td>{{ $cotacao->id }}</th>
                            <td>{{ $cotacao->quantidade }}</td>
                            <td>{{ $cotacao->moeda }}</td>
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
