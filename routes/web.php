<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
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
    $products = Product::get();
    return view('products', [
        'products' => $products
    ]);
});

Route::get('/products/{product:title}', function (Product $product) {
    return view('product', [
        'product' => $product
    ]);
})->where('path', "[A-z_0-9]+");

Route::get('/categories/{category:name}', function (Category $category) {
    return view('products', [
        'products' => $category->products
    ]);
} );

Route::get('/publisher/{publisher:name}', function (User $publisher) {

    return view('products', [
        'products' => $publisher->products
    ]);
} );

// Route::get('/products/{product}', function ($id) {
//     return view('product', [
//         'product' => Product::find($id)
//     ]);

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
// })->where('path', "[A-z_0-9]+");
