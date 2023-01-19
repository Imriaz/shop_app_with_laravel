<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Product::truncate();

        $user1 = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user2 = User::factory()->create([
            'name' => 'Imriaz',
            'email' => 'imriaz@example.com',
        ]);

        $story = Category::create([
            'name' => 'Story',
        ]);

        $peraphychology = Category::create([
            'name' => 'Peraphychology',
        ]);
        
        $deyal = Product::create([
            'user_id' => $user1->id,
            'category_id' => $story->id,
            'title' => 'Deyal',
            'author' => 'Humaiyun Ahmed',
            'price' => '299',
        ]);

        Product::create([
            'user_id' => $user1->id,
            'category_id' => $peraphychology->id,
            'title' => 'Maya Sorgo',
            'author' => 'Mostaque Ahmed',
            'price' => '399',
        ]);

        Product::create([
            'user_id' => $user2->id,
            'category_id' => $peraphychology->id,
            'title' => 'Chaya Sorgo',
            'author' => 'Mostaque Ahmed',
            'price' => '359',
        ]);

    }
}
