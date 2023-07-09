Endereço de entrega
<br><br>

Rua: 
{{ $address->street }}
<br>
Número: 
{{ $address->number }}
<br>
Cep: 
{{ $address->cep }}
<br>
Bairro: 
{{ $address->district }}
<br>
Cidade: 
{{ $address->city }}
<br>
Estado: 
{{ $address->state }}
<br>
{{ $address->country }}


<a href="{{ route('payment') }}">Confirmar endereço de entrega</a>