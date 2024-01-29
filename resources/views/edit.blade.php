<div>

    @foreach ($products as $product)
        <form action="{{ route('products.update', $product->id) }}" method="post">
            
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="name" value="{{ $product['name'] }}">
                <input type="text" name="name" placeholder="description" value="{{ $product['description'] }}">
                <input type="text" name="name" placeholder="quantite" value="{{ $product['quantite'] }}">
                <input type="text" name="name" placeholder="price" value="{{ $product['price'] }}">
                <input type="submit">

        </form>
    @endforeach

</div>
