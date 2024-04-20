<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ['text', 'number', 'checkbox', 'select', 'textarea', 'table', 'dynamicTable'];
        return [
            'question' => $this->faker->name,
            'name' => $this->faker->name,
            'number' => rand(1, 9),
            'category_id' => rand(1, 9),
            'type' => $type[rand(0, 6)],
            'autoAnswer' => false,
            'needsEvidence' => false,
            'required' => false,
        ];
    }
}
