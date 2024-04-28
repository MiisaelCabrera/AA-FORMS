<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class WasteFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '5')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        $question = Question::factory()->create([
            'question' => 'Indique si en su entidad está vigente algún programa o política que fomente la reducción, reutilización y el reciclaje de los residuos sólidos urbanos universitarios marcando la celda adecuada. Estos programas y políticas pueden ir dirigidos a alentar al personal académico, administrativo y estudiantil en el empleo de las 3R (Reducir, Reutilizar, Reciclar). Adjunte su evidencia en formato Word y etiquételo con la clave 5.1.',
            'name' => '3r_program',
            'number' => 1,
            'category_id' => 5,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Programas, política o tecnología',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'q',
                    'text' => 'Las 3 R para estudiantes',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Las 3 R para personal académico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Las 3 R para personal administrativo',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
            }
            //Top headings
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
                    'name' => '3',
                    'text' => 'En planeación',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '7',
                    'text' => 'Recién implementado',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'Consolidado',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Cantidad total de residuos sólidos urbanos (RSU) producidos anualmente en kilogramos. Estos residuos se componen de aquellos materiales de desecho. Podemos encontrarlos en los puntos de recolección de residuos. Este resultado puede obtenerlo al pesar sus residuos durante diez días. Posteriormente calcule un promedio. El resultado obtenido multiplíquelo por 240, suponiendo que son los días hábiles.',
            'name' => 'total_waste',
            'number' => 2,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad total de residuos orgánicos compostables producidos anualmente en kilogramos. Estos residuos se componen de restos vegetales, alimentos no procesados, poda y materia vegetal desechados. No se toman en cuenta cárnicos, restos de barrido ni alimentos procesados. Este resultado puede obtenerlo al segregar la fracción orgánica compostable de sus residuos durante diez días y posteriormente obtener un promedio. El resultado obtenido de la segregación, multiplíquelo por 240, suponiendo que son los días hábiles.',
            'name' => 'organic_waste',
            'number' => 3,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad de residuos orgánicos compostables tratados anualmente en kilogramos. Esto significa que se debe de cuantificar la cantidad de orgánicos que han sido llevados a composteros dentro o fuera de la entidad (contratación de un servicio de elaboración de composta o unihuertos universitarios). ',
            'name' => 'treated_organic_waste',
            'number' => 4,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de tratamiento de residuos orgánicos compostables. El cálculo es automático con base a los indicadores 5.2 y 5.4.',
            'name' => 'percentage_treated_organic_waste',
            'number' => 5,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad total de residuos inorgánicos (no peligrosos) producidos anualmente en kilogramos. Estos residuos se componen de papel, cartón, diferentes plásticos, unicel, tela, etc. Este resultado puede obtenerlo al segregar la fracción inorgánica de sus residuos durante diez días y posteriormente obtener un promedio. El resultado obtenido de la segregación, multiplíquelo por 240, suponiendo que son los días hábiles.',
            'name' => 'inorganic_waste',
            'number' => 6,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad de residuos inorgánicos (no peligrosos) tratados anualmente en kilogramos. Esto significa que se debe de cuantificar la cantidad de residuos inorgánicos que han sido tratados (reciclados, reutilizados, aprovechados) dentro de la entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 5.7.',
            'name' => 'treated_inorganic_waste',
            'number' => 7,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de tratamiento de residuos inorgánicos (no peligrosos). El cálculo es automático con base a los indicadores 5.2 y 5.7',
            'name' => 'percentage_treated_inorganic_waste',
            'number' => 8,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad de residuos peligrosos y/o de manejo controlado producidos anualmente en su entidad en kilogramos. Aquí se cuantifican las pilas, tóneres genéricos, lámparas de fluorescentes, sólidos contaminados, sobrantes de reactivos usados en laboratorios de docencia e investigación, reactivos químicos vencidos o caducados, RPBI, etc. Adjunte su evidencia en formato Word y etiquételo con la clave 5.9. ',
            'name' => 'dangerous_waste',
            'number' => 9,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad de residuos peligrosos y/o de manejo controlado tratados in situ en kilogramos. Esto incluye el tratamiento de los residuos para disminución de volúmenes empelando técnicas físicas, químicas o biológicas dentro de la entidad.',
            'name' => 'treated_dangerous_waste',
            'number' => 10,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Cantidad de residuos peligrosos y/o de manejo controlado enviados a tratamiento y/o confinamiento en kilogramos. Esto incluye las recolecciones de residuos realizadas por empresas autorizadas por la SEMARNAT. ',
            'name' => 'sent_dangerous_waste',
            'number' => 11,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de tratamiento de residuos peligrosos y/o de manejo controlado. El cálculo es automático con base a los indicadores 5.9, 5.10 y 5.11.',
            'name' => 'percentage_treated_dangerous_waste',
            'number' => 12,
            'category_id' => 5,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        $question = Question::factory()->create([
            'question' => '¿Su entidad cuenta con alguna política de reducción de producción de residuos peligrosos y/o de manejo controlado? Adjunte su evidencia en formato Word y etiquételo con la clave 5.13.',
            'name' => 'dangerous_waste_reduction_policy',
            'number' => 13,
            'category_id' => 5,
            'type' => 'select',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            Multiinput::factory()->create([
                'type' => 'select',
                'name' => 'si',
                'text' => 'Si',
                'question_id' => $question->id,
                'x' => 1,
                'y' => 1,
            ]);
            Multiinput::factory()->create([
                'type' => 'select',
                'name' => 'no',
                'text' => 'No',
                'question_id' => $question->id,
                'x' => 1,
                'y' => 2,
            ]);
        }
        $question = Question::factory()->create([
            'question' => 'Indique si en su entidad está vigente algún programa o política que fomente el tratamiento de aguas residuales en su entidad. Marque la celda que mejor describa el estado de los programas o tecnologías implementadas para los sistemas de tratamiento de aguas residuales existentes en su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 5.14.',
            'name' => 'waste_water_program',
            'number' => 14,
            'category_id' => 5,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Programa, política o tecnología',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Tratamiento preliminar',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Tratamiento Primario',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Tratamiento Secundario',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Tratamiento Terciario',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
            }
            //x = 2
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Descri[pción',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cribado para eliminar sólidos grandes, desgranado para eliminar arena y otros materiales pesados, y eliminación de aceites y grasas (Rejas, rejillas, tamices, mallas, etc)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Incluye sedimentación y coagulación-floculación
                    (Adición de sustancias químicas para fomentar la precipitación de los contaminantes)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Sistemas de crecimiento adjuntos o sistemas de crecimiento suspendidos (Tratamiento biológicos aerobios y anaerobios)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'Técnicas de reutilización como desinfección, filtración y oxidación avanzada para purificar aún más el agua para su reutilización en procesos industriales o riego (o3, osmosis inversa, cloración, uv etc)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 5,
                ]);

            }
            //Top headings 
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '0',
                    'text' => 'Ninguno',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '3',
                    'text' => 'En planeación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '7',
                    'text' => 'Recién implementado',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'Consolidado',
                    'question_id' => $question->id,
                    'x' => 6,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Residuos, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. Adjunte su evidencia en formato Word y etiquételo con la clave 5.15.',
            'name' => 'comment',
            'number' => 15,
            'category_id' => 5,
            'type' => 'textarea',
            'required' => true,
            'needsEvidence' => true,
        ]);


    }
}
