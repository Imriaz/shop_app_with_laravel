<?php
namespace App\Models;

class Product
{
public static function find($slug) {
    if(! file_exists($path = resource_path("products/{$slug}.html"))){
        // abort(404);
        throw new modelNotFoundException();
    }
    return cache()->remember('products.{$path}', now()->addMinutes(1), fn ()=> file_get_contents($path));
}
}