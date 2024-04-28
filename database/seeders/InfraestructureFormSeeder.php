<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class InfraestructureFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '1')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        $question = Question::factory()->create([
            'question' => '¿Cuál de las siguientes opciones describe mejor la configuración de su entidad?',
            'name' => 'settings_description',
            'number' => 1,
            'category_id' => 1,
            'type' => 'select',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {

            Multiinput::create([
                'type' => 'select',
                'name' => 'suburban',
                'text' => 'Suburbano',
                'question_id' => $question->id,
                'x' => 1,
                'y' => 1,
            ]);

            Multiinput::create([
                'type' => 'select',
                'name' => 'urban',
                'text' => 'Urbano',
                'question_id' => $question->id,
                'x' => 1,
                'y' => 1,
            ]);

            Multiinput::create([
                'type' => 'select',
                'name' => 'city',
                'text' => 'Centro de la ciudad',
                'question_id' => $question->id,
                'x' => 1,
                'y' => 1,
            ]);
        }
        Question::factory()->create([
            'question' => '¿Cuál es el área total de su entidad? (Se reporta en metros cuadrados y se consideran estacionamientos, áreas verdes, edifcios, aulas, canchas).',
            'name' => 'area_total',
            'number' => 2,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el área total de su entidad destinada a actividades académicas y administrativas? (Se reporta en metros cuadrados. Incluya edificios administrativos, edificios para actividades estudiantiles y de personal, clases, invernaderos y comedores. Los jardines, campos y otras áreas solo deben contarse si son utilizadas con fines académicos y/o recreativos, como conferencias, prácticas, capacitaciones, eventos, ferias, etc.)',
            'name' => 'area_activities',
            'number' => 3,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es la superficie total de la planta baja de los edificios de su entidad? (Se reporta en metros cuadrados. Considere para el cálculo el área total de las partes de la planta baja de los edificios universitarios en su entidad).',
            'name' => 'area_ground_floor',
            'number' => 4,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el área total de edificios de su entidad? (Se reporta en metros cuadrados). Proporcionar información del área ocupada por edificios, es decir, proporcionar el área total de todos los pisos, incluidas las plantas bajas y otros pisos de los edificios universitarios en su entidad.',
            'name' => 'area_buildings',
            'number' => 5,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el porcentaje de espacios abiertos en su entidad? El cálculo es automático con base a los indicadores 1.2 y 1.4.',
            'name' => 'percentage_open_spaces',
            'number' => 6,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el área de cubierta vegetal forestal de su entidad? (Se reporta en metros cuadrados). Proporcione el porcentaje del área de su entidad cubierta de vegetación en forma de bosque, no incluir jardineras. Adjunte su evidencia fotográfica en formato Word y etiquételo con la clave 1.7.',
            'name' => 'area_forest_vegetation',
            'number' => 7,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el porcentaje de cubierta vegetal forestal de su entidad? El cálculo es autómatico con base a los indicadores 1.2 y 1.7.',
            'name' => 'percentage_forest_vegetation',
            'number' => 8,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el área de vegetación plantada de su entidad? (Se reporta en metros cuadrados. No contabilice los bosques. Se pueden contar áreas de jardín, techos verdes, invernaderos, jardineras, plantaciones internas, jardines verticales y canchas de fútbol). Adjunte su evidencia fotográfica en formato Word y etiquételo con la clave 1.9.',
            'name' => 'area_planted_vegetation',
            'number' => 9,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el porcentaje de vegetación plantada de su entidad? El cálculo es autómatico con base a los indicadores 1.2 y 1.9.',
            'name' => 'percentage_planted_vegetation',
            'number' => 10,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con superficies que permitan la absorción de agua, especifique el área en metros cuadrados. Estas áreas excluyen los bosques y la vegetación plantada. Tome en cuenta, por ejemplo: tierra, bloques de concreto, campo sintético, estacionamientos sin asfalto, camellones, pozos de absorción, concreto permeable, adoquín. Adjunte su evidencia fotográfica en formato Word y etiquételo con la clave 1.11.',
            'name' => 'area_water_absorption',
            'number' => 11,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el porcentaje de superficies que permitan la absorción de agua de su entidad? El cálculo es automático con base a los indicadores 1.2 y 1.11.',
            'name' => 'percentage_water_absorption',
            'number' => 12,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Si su entidad tuvo actividades de operación y mantenimiento en los edificios que la conforman, especifiqué el área ocuapada por los mismos en metros cudrados. (Se consideran la construcción de nuevos edificios y las actividades de mantenimiento de rutina del edificio). Adjunte su evidencia fotográfica en formato Word y etiquételo con la clave 1.13.',
            'name' => 'area_building_maintenance',
            'number' => 13,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => '¿Cuál es el porcentaje de actividades de operación y mantenimiento de los edificios de su entidad? El cálculo es automático con base a los indicadores 1.5 y 1.13.',
            'name' => 'percentage_building_maintenance',
            'number' => 14,
            'category_id' => 1,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Infraestructura, por favor, escriba al respecto. Adjunte su evidencia en formato Word y etiquételo con la clave 1.15.',
            'name' => 'comment',
            'number' => 15,
            'category_id' => 1,
            'type' => 'textarea',
            'needsEvidence' => false,
        ]);
    }
}
