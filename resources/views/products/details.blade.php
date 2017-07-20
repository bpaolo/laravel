<h1>detail Product</h1>
<form action="/projectLaravel/public/products/{{ $detailproduct->id }}" method="POST">
    <input type="text" name="name" value="{{ $detailproduct->name }}" placeholder="Name" disabled>
    {{ ($errors->has('name')) ? $errors->first('name') : '' }}<br>
    <input type="text" name="quantity" value="{{ $detailproduct->quantity }}" placeholder="quantity">
    {{ ($errors->has('quantity')) ? $errors->first('quantity') : '' }}<br>
    <input type="text" name="price" value="{{ $detailproduct->price }}" placeholder="price">
    {{ ($errors->has('price')) ? $errors->first('price') : '' }}<br>
    <textarea name="description" rows="8" cols="40" placeholder="Description" disabled>{{ $detailproduct->description }}</textarea>
    <a href="/projectLaravel/public/products">Cancel</a>
</form>