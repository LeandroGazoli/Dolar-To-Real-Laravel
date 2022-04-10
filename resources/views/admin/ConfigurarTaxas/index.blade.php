@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Configurar taxas</div>




                <div class="card-body">
                    <form action="{{ route('taxas.update', ['taxa' => $taxa->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="PagamentoBoleto" class="form-label">Pagamento em boleto</label>
                                    <input class="form-control" type="text" name="boleto" id="PagamentoBoleto" value="{{ $taxa->boleto ?? old('boleto') }}" oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>
                                @error('boleto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="PagamentoCartao" class="form-label">Pagamento em cartão</label>
                                    <input class="form-control" type="text" name="cartao" id="PagamentoCartao" value="{{ $taxa->cartao ?? old('cartao') }}" oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>
                                @error('cartao')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="taxabasica" class="form-label">Taxa em % de cobrança até R$ 3.700</label>
                                    <input class="form-control" type="text" name="taxabasica" id="taxabasica" value="{{ $taxa->taxabasica ?? old('taxabasica') }}" oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>
                                @error('taxabasica')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="taxamax" class="form-label">Taxa em % de cobrança acima R$ 3.700 </label>
                                    <input class="form-control" type="text" name="taxamax" id="taxamax" value="{{ $taxa->taxamax ?? old('taxamax') }}" oninput="this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>
                                @error('taxamax')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button>Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>
@endsection
