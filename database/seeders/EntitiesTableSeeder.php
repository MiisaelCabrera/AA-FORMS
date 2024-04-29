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
            'name' => 'Universidad Autónoma de San Luis Potosí',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Ingeniería',
        ]);
        Entity::factory()->create([
            'name' => 'Agenda Ambiental',
        ]);

    }
}
