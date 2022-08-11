<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("product.index", compact("products"));
    }


    public function create()
    {
        return view("product.create");
    }


    public function store(Request $request)
    {
        // storing into database
        $product = new Product();
        $product->item = $request->item;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->save();

        return redirect()->route('product.index');
    }


    public function delete($product)
    {
        $product = Product::find($product);
        $product->delete();

        return redirect()->route('product.index');
    }


    public function edit($product)
    {
        $product = Product::find($product);
        return view('product.edit',compact("product"));
    }


    public function update(Request $request)
    {
        // updatng this record into databsae
        $product = Product::find($request->product_id);
        $product->item = $request->item;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->save();

        return redirect()->route('product.index');
    }
}
