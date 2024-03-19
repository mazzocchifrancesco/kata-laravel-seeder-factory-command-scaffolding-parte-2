<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class PageController extends Controller
{
  public function index()
  {
    $featured_products = Product::where('featured', 1)->orderBy('price')->limit(5)->get();
    return view('home', compact('featured_products'));
  }
}