<h1>Create new product</h1>


@extends('products.default')

@section('content')
 <form class="" action="/projectLaravel/public/products" method="POST">
		    <input type="text" name="name" value="" placeholder="name">
		    {{ ($errors->has('name')) ? $errors->first('name') : '' }}<br>
		    <input type="text" name="quantity" value="" placeholder="quantity">
		    {{ ($errors->has('quantity')) ? $errors->first('quantity') : '' }}<br>
		    <input type="text" name="price" value="" placeholder="price">
		    {{ ($errors->has('price')) ? $errors->first('price') : '' }}<br>
		    <textarea name="description" rows="8" cols="40" placeholder="description"></textarea>
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <input type="submit" value="Save">
		</form>
@stop