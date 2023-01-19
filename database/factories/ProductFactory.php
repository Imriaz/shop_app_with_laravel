<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this -> faker -> User::factory(),
            'category_id' => $this -> faker -> Category::factory(),
            'title' => $this -> faker->sentence,
            'author' => $this -> faker->name,
            'price' => $this -> faker->randomNumber,
        ];
    }
}
