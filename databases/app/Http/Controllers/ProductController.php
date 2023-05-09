<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index():View
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
}
