<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(6);
        $slug = strtolower(str_replace(" ", "-", $title));
        return [
            'title' => fake()->sentence(6),
            'content' => fake()->realText(3500),
            'slug' => $slug,
            'image' => "",
            'count' => fake()->numberBetween(500, 5000),
        ];
    }
}
