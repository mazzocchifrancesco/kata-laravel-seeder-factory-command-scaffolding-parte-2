<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $currency = '€';
        return view('products.index', compact('products', 'currency'));
    }

    public function show(Product $product)
    {
        $currency = '€';
        return view('products.show', compact('product', 'currency'));
    }
}
