<h1>Product List</h1>

<ul>
@foreach($products as $product)
    <li>{{ $product->name }} - {{ $product->price }}</li>
@endforeach
</ul>
