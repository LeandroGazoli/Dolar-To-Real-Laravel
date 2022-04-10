@component('mail::message')
# Cotação criada com sucesso

Quantidade:
{{ $data['quantidade'] }}
<br>
Valor em Reais:
{{ $data['valorOriginal'] }}
<br>
Moeda da cotação:
{{ $data['moeda'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
