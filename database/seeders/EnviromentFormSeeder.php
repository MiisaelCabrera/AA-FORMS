<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class EnviromentFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '2')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        $question = Question::factory()->create([
            'question' => '¿Cuál es el número total de estudiantes que asisten de forma presencial a su entidad? Estos son aquellos que se encuentran registrados y activos en un semestre, excluyendo a los estudiantes de intercambio extranjero y de cursos cortos. Reporte también su género.',
            'name' => 'number_students',
            'number' => 1,
            'category_id' => 2,
            'type' => 'multinumber',
            'required' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Total',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Mujeres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Hombres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
            }
            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
            }

        }
        $question = Question::factory()->create([
            'question' => '¿Cuál es el número total de estudiantes en línea? Estos son aquellos que estén registrados exclusivamente para llevar clases en línea. Reporte también su género.',
            'name' => 'number_students_online',
            'number' => 2,
            'category_id' => 2,
            'type' => 'multinumber',
            'required' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Total',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Mujeres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Hombres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
            }

            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
            }

        }
        $question = Question::factory()->create([
            'question' => '¿Cuál es el número total de personal académico de su entidad que asiste de manera presencial? (Incluyendo profesores de tiempo completo, asignatura, medio tiempo, hora clase y técnicos académicos). Reporte también su género.',
            'name' => 'number_academic_staff',
            'number' => 3,
            'category_id' => 2,
            'type' => 'multinumber',
            'required' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Total',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Mujeres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Hombres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
            }
            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
            }

        }
        $question = Question::factory()->create([
            'question' => '¿Cuál es el número total de personal administrativo de su entidad que asiste de manera presencial? (Incluyendo mantenimiento, intendencia, servicios de salud, deportes). Reporte también su género.',
            'name' => 'number_administrative_staff',
            'number' => 4,
            'category_id' => 2,
            'type' => 'multinumber',
            'required' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Total',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Mujeres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Hombres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
            }
            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'integer',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
            }

        }
        Question::factory()->create([
            'question' => 'Calcule el índice de población en espacios abiertos de su entidad. El cálculo es automático con base a los indicadores 1.2, 1.4, 2.1, 2.3 y 2.4',
            'name' => 'population_index_open_spaces',
            'number' => 5,
            'category_id' => 2,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true
        ]);
        $question = Question::factory()->create([
            'question' => '¿Cuál es el presupuesto total de los últimos 3 años de su entidad? Repórtelos en pesos mexicanos (MXN). (Tome en cuenta las inversiones en infraestructura, instalaciones, costos de personal, investigación, programas y otros). Adjunte su evidencia en una hoja de cálculo en formato Excel y etiquételo con la clave 2.6.',
            'name' => 'total_budget',
            'number' => 6,
            'category_id' => 2,
            'type' => 'multinumber',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2021',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2022',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2023',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
            }

            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
            }

        }
        $question = Question::factory()->create([
            'question' => '¿Cuáles han sido los presupuestos destinados a esfuerzos de sostenibilidad en su entidad en los últimos 3 años? Repórtelos por año en pesos mexicanos (MXN). Se toman en cuenta las inversiones en infraestructura, instalaciones, costos de personal, investigación, programas y otros relacionados con los esfuerzos de sostenibilidad. Adjunte su exidencia en una hoja de cálculo en formato Excel y etiquételo con la clave 2.7.',
            'name' => 'budget_sustainability',
            'number' => 7,
            'category_id' => 2,
            'type' => 'multinumber',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2021',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2022',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2023',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
            }

            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
            }

        }
        Question::factory()->create([
            'question' => '¿Cuál es el porcentaje del presupuesto destinado a esfuerzos de sostenibilidad en su entidad? El cálculo es automático con base a los indicadores 2.6 y 2.7.',
            'name' => 'percentage_budget_sustainability',
            'number' => 8,
            'category_id' => 2,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true
        ]);
        $question = Question::factory()->create([
            'question' => 'Marque la celda que indique el estado en el que se encuentran las instalaciones de la entidad con respecto a su adecuación para personas en situación o condición de discapacidad, necesidades especiales y/o atención de maternidad.  Adjunte su evidencia en formato Word y etiquételo con la clave 2.9.',
            'name' => 'facilities_state',
            'number' => 9,
            'category_id' => 2,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Biblioteca',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Aulas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Baños',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Salas de lactancia',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Estacionamientos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Transporte universitario',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Guardería',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Pasos peatonales',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Rampas funcionales',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Oficinas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Ascensores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Señaletica en braile',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
            }

            //Top Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '0',
                    'text' => 'Ninguno',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '2',
                    'text' => 'Política vigente',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '5',
                    'text' => 'Instalaciones en planificación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '7',
                    'text' => 'Instalaciones parcialmente disponibles y operadas',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'Existencia de instalaciones en pleno funcionamiento',
                    'question_id' => $question->id,
                    'x' => 6,
                    'y' => 1,
                ]);
            }

        }
        $question = Question::factory()->create([
            'question' => 'Marque la celda que indique el estado de los ítems destinados a la seguridad y protección del personal que puedan estar presentes dentro de su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 2.10.',
            'name' => 'items_state',
            'number' => 10,
            'category_id' => 2,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Seguridad pasiva (infraestructura destinada a la mitigación y no expansión de siniestros)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Extintores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Hidrantes',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Regaderas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Lavaojos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Botiquín de emergencias',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Señalización',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Números de emergencia a la mano',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Circuito cerrado de televisión (Cámaras de seguridad)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Línea directa de emergencia',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Botón de emergencia',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Personal capacitado para responder a emergencias',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Tiempo de respuesta ante accidentes (<10 minutos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'n',
                    'text' => 'Tiempo de respuesta ante delitos (<10 minutos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 15,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'o',
                    'text' => 'Tiempo de respuesta ante incendios (<10 minutos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 16,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'p',
                    'text' => 'Tiempo de respuesta ante desastres naturales (<10 minutos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 17,
                ]);
            }

            //Top Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '0',
                    'text' => 'Ninguno',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '2',
                    'text' => 'En planeación',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '5',
                    'text' => 'En proceso de instalación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '8',
                    'text' => 'Disponible y accesible',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'En correcto funcionamiento',
                    'question_id' => $question->id,
                    'x' => 6,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Marque la celda que indique el estado de la infraestructura destinada a la atención de la salud de los estudiantes, académicos y personal administrativo que puedan estar presentes dentro de su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 2.11.',
            'name' => 'health_infrastructure_state',
            'number' => 11,
            'category_id' => 2,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {//Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Centros de atención médica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Enfermerías',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'PIPS',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Departamento de atención psicológica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Primeros auxilios',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Clínicas destinadas a la comunidad UASLP',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Clínicas (Centros comunitarios destinados al público)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);


            }

            //Top Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '0',
                    'text' => 'Ninguno',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '2',
                    'text' => 'En planeación',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '5',
                    'text' => 'En proceso de instalación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '8',
                    'text' => 'Disponible y accesible',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'En correcto funcionamiento',
                    'question_id' => $question->id,
                    'x' => 6,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Si en tu entidad existe algún programa de conservación de la biodiversidad, marca las celdas que indiquen el tipo de especies que se albergan y el estatus del programa. Si la conservación se lleva a cabo en otro lugar, su entidad puede incluirlos y colocar esa área de conservación en el área total del campus (pregunta 1.2). Adjunte su evidencia en formato Word y etiquételo con la clave 2.12.',
            'name' => 'biodiversity_program',
            'number' => 12,
            'category_id' => 2,
            'type' => 'dinamyctable',
        ]); {
            //Flora 
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Programas, laboratorios, iniciativas y/o proyectos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Número de especies',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Género/Especies',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Objeto de la conservación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
            }
            //Fauna
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Programas, laboratorios, iniciativas y/o proyectos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Número de especies',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Género/Especies',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Objeto de la conservación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 2,
                ]);
            }
            //Vida silvestre
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Programas, laboratorios, iniciativas y/o proyectos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Número de especies',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Género/Especies',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Objeto de la conservación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 3,
                ]);
            }
            //Recursos genéticos para la conservación, alimentación y la agricultura
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Programas, laboratorios, iniciativas y/o proyectos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Número de especies',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Género/Especies',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Objeto de la conservación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 4,
                ]);
            }

        }
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Entorno, por favor, escriba al respecto. Adjunte su evidencia en formato Word y etiquétalo con la clave 2.13.',
            'name' => 'comment',
            'number' => 13,
            'category_id' => 2,
            'type' => 'textarea',
            'needsEvidence' => true,
        ]);
    }
}
