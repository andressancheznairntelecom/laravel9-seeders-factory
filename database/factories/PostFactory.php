<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->paragraph(),
            'color' => $this->faker->safeColorName(),
            'phone' => $this->faker->numberBetween(600000000,700000000),
            'author' => $this->faker->name,
            'author_age' => $this->faker->numberBetween(20,80)
        ];
    }
}
