<?php

namespace Database\Factories;

use App\Models\Tojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tojo>
 */
class TojoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->company(),
            'location'=>fake()->city(),
            'description'=>fake()->paragraph(10),
            
        ];
    }
}
