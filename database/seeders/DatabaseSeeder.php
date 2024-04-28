<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Multiinput;
use App\Models\Entity;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $this->call([
            EntitiesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            InfraestructureFormSeeder::class,
            EnviromentFormSeeder::class,
            EnergyFormSeeder::class,
            ConsumptionFormSeeder::class,
            WasteFormSeeder::class,
            WaterFormSeeder::class,
            TransportFormSeeder::class,
            EducationFormSeeder::class,
        ]);


    }
}
