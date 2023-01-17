<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('products');
});

Route::get('/products/{product}', function ($slug) {
//find a post by it's slug and pass it to the view called "product"

    $product = Product::find($slug);
    return view('product', [
        'product' => $product
    ]);

    // $path = __DIR__ . "/../resources/products/{$slug}.html";
    // if(! file_exists($path)){
    //     // dd("File does not exist");
    //     abort(404);
    // }

    // $product = file_get_contents($path);
    // $product = Cache::remember('products.{$path}', now()->addMinutes(1), function () use ($path) {
    //     var_dump("Hello cache!");
    //     return file_get_contents($path);
    // });
    // $product = Cache::remember('products.{$path}', now()->addMinutes(1), fn ()=> file_get_contents($path));

    // return view('product', [
    //     'product' => $product
    // ]);
})->where('path', "[A-z_0-9]+");
