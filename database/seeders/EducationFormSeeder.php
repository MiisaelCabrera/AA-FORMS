<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class EducationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = Question::where('category_id', '8')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }


        $question = Question::factory()->create([
            'question' => 'Indique el número de programas educativos que se ofrecen en su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 8.1.',
            'name' => 'educational_programs',
            'number' => 1,
            'category_id' => 8,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Nivel académico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Educación media superior (preparatoria)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'TSU',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Licenciatura',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Maestría',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Especialidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Doctorado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
            }
            //Top Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cantidad de programas educativos',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Indique número y nombre de programas educativos que tienen una orientación explícita hacia el cuidado del medio ambiente o la sostenibilidad. Adjunte su evidencia en formato Word y etiquételo con la clave 8.2.',
            'name' => 'environmental_programs',
            'number' => 2,
            'category_id' => 8,
            'type' => 'tableintegername',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            Multiinput::create([
                'type' => 'mainheading',
                'name' => '',
                'text' => 'Programas educativos con orientación explícita hacia el cuidado del medio ambiente',
                'question_id' => $question->id,
                'x' => 0,
                'y' => 0,
            ]);
            //x=1
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Nivel académico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Educación media superior (preparatoria)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'TSU',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Licenciatura',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Maestría',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Especialidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Doctorado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
            }
            //x=2
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'number',
                    'text' => 'Numero',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
            //x=3
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'name',
                    'text' => 'Nombres',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
            }
        }

        $question = Question::factory()->create([
            'question' => 'Número total de cursos o materias que se ofrecen en su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 8.3..',
            'name' => 'courses',
            'number' => 3,
            'category_id' => 8,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Nivel académico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Educación media superior (preparatoria)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'TSU',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Licenciatura',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Maestría',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Especialidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Doctorado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
            }
            //Top Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cantidad de cursos y/o materias que oferta la entidad',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }

        $question = Question::factory()->create([
            'question' => '. Número de cursos o materias relacionados con temas ambientales y/o de sostenibilidad que se ofrecen en su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 8.4.',
            'name' => 'environmental_courses',
            'number' => 4,
            'category_id' => 8,
            'type' => 'tableintegername',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            Multiinput::create([
                'type' => 'mainheading',
                'name' => '',
                'text' => 'Programas educativos con orientación explícita hacia el cuidado del medio ambiente',
                'question_id' => $question->id,
                'x' => 0,
                'y' => 0,
            ]);
            //x=1
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Nivel académico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Educación media superior (preparatoria)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'TSU',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Licenciatura',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Maestría',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Especialidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Doctorado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
            }
            //x=2
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'number',
                    'text' => 'Numero',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
            //x=3
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'name',
                    'text' => 'Nombres',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de programas educativos que tienen una orientación explícita hacia el cuidado del medio ambiente o la sostenibilidad. El cálculo es automático con base a los indicadores 8.1 y 8.2.',
            'name' => 'environmental_programs_percentage',
            'number' => 5,
            'category_id' => 8,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de cursos o materias relacionados con temas ambientales y/o de sostenibilidad que se ofrecen en su entidad con respecto al total de asignaturas. El cálculo es automático con base a los indicadores 8.3 y 8.4.',
            'name' => 'environmental_courses_percentage',
            'number' => 6,
            'category_id' => 8,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);

        $question = Question::factory()->create([
            'question' => 'Fondos totales que se destinan a la investigación en su entidad (pesos mexicanos). Se deben incluir recursos económicos de origen interno y externo. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.7.',
            'name' => 'research_funds',
            'number' => 7,
            'category_id' => 8,
            'type' => 'multinumber',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Internos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2021',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2022',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2023',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio MXN',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio USD',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Externos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2021',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2022',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2023',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio MXN',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio USD',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
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
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'e',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'f',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'g',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 9,
                ]);

                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'h',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'i',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'j',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 12,
                ]);
            }

        }
        $question = Question::factory()->create([
            'question' => 'Fondos totales que se destinan a la investigación sobre sostenibilidad y medio ambiente (pesos mexicanos).  Se deben incluir recursos económicos de origen interno (no incluir recursos destinados al mantenimiento y o compra de equipos ajenos al proyecto específico ya que eso se considera en el criterio de Infraestructura) y externos. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.8.',
            'name' => 'environmental_research_funds',
            'number' => 8,
            'category_id' => 8,
            'type' => 'multinumber',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Internos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2021',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2022',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2023',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio MXN',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio USD',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Externos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2021',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2022',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => '2023',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio MXN',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio USD',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
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
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'e',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'f',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'g',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 9,
                ]);

                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'h',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'i',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'j',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 12,
                ]);
            }

        }

        Question::factory()->create([
            'question' => 'La relación entre la financiación de la investigación sobre sostenibilidad y medio ambiente y la financiación total de la investigación Se calcula automáticamente considerando los indicadores 8.7 y 8.8. Utilizando la siguiente fórmula: ',
            'name' => 'environmental_research_funds_percentage',
            'number' => 9,
            'category_id' => 8,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        $question = Question::factory()->create([
            'question' => 'Número de publicaciones académicas sobre sostenibilidad y medio ambiente generadas en su entidad (artículos, capítulos de libro, libros, manuales, guías).  Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.10.',
            'name' => 'environmental_publications',
            'number' => 10,
            'category_id' => 8,
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
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio MXN',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio USD',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
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
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'e',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 5,
                ]);

            }

        }
        $question = Question::factory()->create([
            'question' => 'Número de tesis sobre sostenibilidad y medio ambiente generadas anualmente en su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.11.',
            'name' => 'environmental_thesis',
            'number' => 11,
            'category_id' => 8,
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
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio MXN',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Promedio USD',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
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
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'e',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 5,
                ]);

            }

        }
        $question = Question::factory()->create([
            'question' => 'Número de publicaciones que se editan sobre sostenibilidad y medio ambiente generadas en su entidad (revistas, suplementos). Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.12.',
            'name' => 'environmental_publications_edited',
            'number' => 12,
            'category_id' => 8,
            'type' => 'multinumber',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Académicas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Divulgación ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
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


            }

        }
        $question = Question::factory()->create([
            'question' => 'Número de eventos (académicos, culturales y de divulgación de la ciencia) relacionados con la sostenibilidad y el medio ambiente, que se realizan anualmente en su entidad (conferencias, talleres, sensibilización, formación práctica, festivales, ferias etc.) puede incluir las modalidades presencial, virtual o mixta. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.13.',
            'name' => 'environmental_events',
            'number' => 13,
            'category_id' => 8,
            'type' => 'multinumber',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Académicos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a profesores ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a alumnos ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a público en general ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Culturales',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a profesores ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a alumnos ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a público en general ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Divulgación de la ciencia',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a profesores ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a alumnos ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);

                Multiinput::factory()->create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'Dirigidos a público en general ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
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
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'e',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'f',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'g',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'h',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'number',
                    'name' => 'i',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 12,
                ]);


            }

        }

        Question::factory()->create([
            'question' => 'Número de actividades organizadas por agrupaciones estudiantiles relacionadas con la sostenibilidad y medio ambiente, que se realizan anualmente en su entidad (seminarios, seminarios web, capacitaciones, eventos deportivos, bazar sobre materiales reciclados, extensión comunitaria, etc.) puede incluir las modalidades presencial, virtual o mixta. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.14.',
            'name' => 'environmental_student_activities',
            'number' => 14,
            'category_id' => 8,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);

        $question = Question::factory()->create([
            'question' => 'Número y nombre de programas académicos que mantienen algún tipo de colaboración internacional, en su entidad (investigación, un curso en línea, un viaje educativo, una doble titulación, un intercambio académico o estudiantil). Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.15.',
            'name' => 'environmental_collaboration_agreements',
            'number' => 15,
            'category_id' => 8,
            'type' => 'tableintegername',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            Multiinput::create([
                'type' => 'mainheading',
                'name' => '',
                'text' => 'Programas educativos con orientación explícita hacia el cuidado del medio ambiente',
                'question_id' => $question->id,
                'x' => 0,
                'y' => 0,
            ]);
            //x=1
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Nivel académico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Licenciatura',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Maestría',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Especialidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Doctorado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
            }
            //x=2
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'number',
                    'text' => 'Numero',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
            //x=3
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'name',
                    'text' => 'Nombres',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
            }
        }

        Question::factory()->create([
            'question' => 'Número de proyectos de servicio comunitario relacionados con temas de sostenibilidad y medio ambiente, organizados por y/o con participación de estudiantes que se realizan en su entidad anualmente. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.16.',
            'name' => 'environmental_community_projects',
            'number' => 16,
            'category_id' => 8,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);

        Question::factory()->create([
            'question' => '8.17 Número de emprendimientos relacionados con temas de sostenibilidad y medio ambiente, organizados por y/o con participación de estudiantes que surgen en su entidad anualmente. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.17.',
            'name' => 'environmental_entrepreneurship',
            'number' => 17,
            'category_id' => 8,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Educación e investigación, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.18.',
            'name' => 'comment',
            'number' => 18,
            'category_id' => 8,
            'type' => 'textarea',
            'needsEvidence' => true,
        ]);





    }
}
