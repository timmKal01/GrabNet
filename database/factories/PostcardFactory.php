<?php

namespace Database\Factories;

use App\Models\Tojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\postcard>
 */
class PostcardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'skill' => fake()->numberBetween(0, 100),
            'tojo_id'=> Tojo::inRandomOrder()->first()->id,
            
        ];
    }
}
