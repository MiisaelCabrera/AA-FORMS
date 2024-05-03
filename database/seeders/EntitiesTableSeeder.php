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
            'name' => 'Agenda Ambiental',
        ]);
        Entity::factory()->create([
            'name' => 'CICSaB',
        ]);
        Entity::factory()->create([
            'name' => 'Coordinación Académica Región Altiplano Oeste',
        ]);
        Entity::factory()->create([
            'name' => 'Coordinación Académica Región Huasteca Sur',
        ]);
        Entity::factory()->create([
            'name' => 'CIACyT',
        ]);
        Entity::factory()->create([
            'name' => 'Departamento de Físico-Matemáticas',
        ]);
        Entity::factory()->create([
            'name' => 'Escuela Preparatoria de Matehuala',
        ]);                
        Entity::factory()->create([
            'name' => 'Facultad de Agronomía y Veterinaria',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Ciencias',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Ciencias de la Comunicación',
        ]);        
        Entity::factory()->create([
            'name' => 'Facultad de Ciencias de la Información',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Ciencias Químicas',
        ]);        
        Entity::factory()->create([
            'name' => 'Facultad de Ciencias Sociales y Humanidades',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Contaduría y Administración',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Derecho',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Economía',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Enfermería y Nutrición',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Estomotalogía',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Estudios Profesionales Zona Huasteca',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Ingeniería',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Medicina',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad de Psicología',
        ]);
        Entity::factory()->create([
            'name' => 'Facultad del Hábitat',
        ]);
        Entity::factory()->create([
            'name' => 'Instituto de Física',
        ]);
        Entity::factory()->create([
            'name' => 'Instituto de Geología',
        ]);
        Entity::factory()->create([
            'name' => 'Instituto de Zonas Desérticas',
        ]);
        Entity::factory()->create([
            'name' => 'IICO',
        ]);
        Entity::factory()->create([
            'name' => 'Instituto de Metalurgia',
        ]);
        Entity::factory()->create([
            'name' => 'Unidad Académica Multidisciplinaria Región Altiplano',
        ]);
        Entity::factory()->create([
            'name' => 'Unidad Académica Multidisciplinaria Zona Media',
        ]);
        
    }
}
