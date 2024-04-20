<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Multiinput>
 */
class MultiinputFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->name,
            'name' => $this->faker->name,
            'text' => $this->faker->name,
            'question_id' => 1,
            'x' => 1,
            'y' => 1,
        ];
    }
}
