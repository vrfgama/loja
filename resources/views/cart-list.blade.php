Valor total da compra: R${{ $tt_price }}
<br>
Total de itens no carrinho: {{ $tt_amount }}
<br>
<a href="{{ route('checkout.address') }}">Fechar compra</a>


<br><br>

@foreach($list as $item)

    {{ $item->name }}
    <br>
    {{ $item->amount }}
    <br>
    {{ $item->price }}
    <br><br>

@endforeach
