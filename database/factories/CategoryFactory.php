<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'number' => rand(1, 15),
            'controller' => $this->faker->name,	
        ];
    }
}
