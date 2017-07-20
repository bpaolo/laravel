{{ Session::get('message') }}
<h1>List Products</h1>
 
    @foreach($allProducts as $product)
        Product: <h4><a href="/projectLaravel/public/products/{{ $product->id }}">{{ $product->name }}</a></h4>
        Quantity:<p>{{ $product->quantity }}</p>
        Price: <p>{{ $product->price }}</p>
        Description:<p>{{ $product->description }}</p>
        <a href="/projectLaravel/public/products/{{ $product->id }}/edit">Edit</a>
        <form action="/projectLaravel/public/products/{{ $product->id }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="Del">
        </form>
        <hr>
    @endforeach