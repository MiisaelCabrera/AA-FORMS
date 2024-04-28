<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entity;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Entity::factory()->create([
            'name' => 'Universidad autónoma de San Luis Potosí',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de ingeniería',
        ]);
        Entity::factory()->create([
            'name' => 'Agenda ambiental',
        ]);

    }
}
