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







    }
}
