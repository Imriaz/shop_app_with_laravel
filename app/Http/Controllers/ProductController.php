<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index() {
        $products = Product::latest();

    if(request("search")) {
        $products-> where('title', 'like', '%' . request('search') . '%')
        -> orWhere('author', 'like', '%' . request('search') . '%');
    }
    
    return view('products', [
        'products' => $products->get(),
        'categories' => Category::all(),
    ]);
    }
}
