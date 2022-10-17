<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $this->authorize('view', $product);

        return view('products.show', compact('product'));
    }

    public function index()
    {
        $products = Product::published()->paginate(8);

        return view('products.index', compact('products'));
    }
}
