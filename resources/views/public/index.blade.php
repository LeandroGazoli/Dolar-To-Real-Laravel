@extends('public.layouts.estrutura')

@section('content')
<main>
    <section>
        <article id="topo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol id="breadcrumbs" class="breadcrumb">
                            <li>
                                <a>Página inicial</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h1>Faça sua cotação agora mesmo</h1>
                        <p>Solução em câmbio para você Comprar Dólar Online com praticidade e segurança!</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form action="{{ route('pagamento') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>Faça sua simulação agora</h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="Moeda" class="form-label">Selecione uma moeda</label>
                                        <select name="moeda" id="Moeda" class="form-select"></select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="qtd" class="form-label">Insire a quantidade</label>
                                        <input type="text" name="quantidade" class="form-control" id="qtd" required>
                                    </div>
                                    @error('quantidade')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="Moeda-2" class="form-label">Selecione uma moeda </label>
                                        <select name="moeda-2" id="Moeda-2" class="form-select">
                                            <option value="BRL">BRL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="qtd-2" class="form-label">Insire a quantidade</label>
                                        <input type="text" name="brl" class="form-control" id="qtd-2" required>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    @guest
                                        <a href="/register">Faça login para comprar</a>
                                    @endguest

                                    @auth
                                        <button class="btn btn-success">COMPRAR AGORA</button>
                                    @endauth

                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </article>
    </section>
</main>
<script src="{{ asset('js/main.js') }}"></script>
@endsection
