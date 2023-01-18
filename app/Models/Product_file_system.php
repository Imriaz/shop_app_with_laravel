<?php
namespace App\Models;
use Illuminate\Support\Facades\File;

class Product
{
    public static function all(){

        $files = File::files(resource_path('products'));
return array_map(function ($file) {
    return $file->getContents();
}, $files);
        // return File::files(resource_path('products'));
    }

    public static function find($slug) {
    
    if(! file_exists($path = resource_path("products/{$slug}.html"))){
        dd($path);
        throw new modelNotFoundException();
    }
    return cache()->remember('products.{$path}', 5, fn ()=> file_get_contents($path));
}
}