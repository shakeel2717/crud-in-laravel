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
}
