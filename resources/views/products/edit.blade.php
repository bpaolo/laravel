<h1>Edit Product</h1>
<form action="/projectLaravel/public/products/{{ $detailproduct->id }}" method="POST">
    <input type="text" name="name" value="{{ $detailproduct->name }}" placeholder="Name">
    {{ ($errors->has('name')) ? $errors->first('name') : '' }}<br>
    <input type="text" name="quantity" value="{{ $detailproduct->quantity }}" placeholder="quantity">
    {{ ($errors->has('quantity')) ? $errors->first('quantity') : '' }}<br>
    <input type="text" name="price" value="{{ $detailproduct->price }}" placeholder="price">
    {{ ($errors->has('price')) ? $errors->first('price') : '' }}<br>
    <textarea name="description" rows="8" cols="40" placeholder="Description">{{ $detailproduct->description }}</textarea>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Save">
</form>