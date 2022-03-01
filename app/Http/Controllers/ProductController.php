<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Product $product)
    {
        return view('products', [
        'products' => Product::latest()->paginate(6)
    ]);
}

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
