<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Product;

class ProductController extends Controller
{
    public function show(Product $product): View
    {
        $this->authorize('view', $product);

        return view('products.show', compact('product'));
    }

    public function index(): View
    {
        $products = Product::published()->paginate(8);

        return view('products.index', compact('products'));
    }
}
