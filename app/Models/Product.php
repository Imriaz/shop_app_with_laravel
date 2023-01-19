<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'author', 'price'];
    protected $with = ['category', 'publisher'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function publisher(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
