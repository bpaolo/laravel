<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;


class ProductsController extends Controller
{
    /*public function index()
    {
        $products = Product::orderBy('name', 'desc')->paginate(10);
        return view('products.index',['products' => $products]);
    }*/
    public function index()
    {
        $products = Product::all();
        return view('products.index',['allProducts' => $products]);
    }
  
    public function create()
    {
    	return view('products.create');
    }
  
    public function store(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $product = new Product;
        $product->name        = $request->name;
        $product->description = $request->description;
        $product->quantity    = $request->quantity;
        $product->price       = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product created successfully!');
    }
  
    public function show($id)
    {
        $product = Product::findOrFail($id);
        if(!$product){
        	abort(404);
        }
        return view('products.details')->with('detailproduct', $product);
    }
  
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        if(!$product){
        	abort(404);
        }
        return view('products.edit')->with('detailproduct', $product);
    }
  
    public function update(Request $request, $id)
    {
    	$this->validate($request, [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name        = $request->name;
        $product->description = $request->description;
        $product->quantity    = $request->quantity;
        $product->price       = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }
  
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('alert-success','Product hasbeen deleted!');
    }
}
