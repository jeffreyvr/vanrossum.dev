<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::published()->paginate(12);

        return view('products.index',compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('products.show',compact('product'));
    }

    public function buy($slug)
    {
        return Product::where('slug', $slug)->first();
    }
}
