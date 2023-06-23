
{{ $category->name }}
<br><br>

@foreach($products as $products)

    {{ $products->name }}
    <br>
    {{ $products->description }}
    <br>
    {{ $products->price }}
    <br><br>

@endforeach