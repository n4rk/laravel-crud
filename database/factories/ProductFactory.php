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
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // 'products' is the category
            'price' => $this->faker->numberBetween(1000, 25000), // price between 1 and 100 with 2 decimal places
            'quantity' => $this->faker->numberBetween(5, 100), // stock between 0 and 100
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
