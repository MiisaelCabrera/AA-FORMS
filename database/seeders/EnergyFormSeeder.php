<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class EnergyFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '3')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        $question = Question::factory()->create([
            'question' => 'Índique la cantidad total de aparatos electrónicos en uso dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo.',
            'name' => 'total_electronic_devices',
            'number' => 1,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
        ]); {
            //x = 1
            {

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Electrodoméstico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Refrigerador',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Horno de microondas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Horno eléctrico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Licuadora',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Calentador de agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Estufa de gas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Estufa eléctrica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Parrillas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Lavadoras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Secadora de gas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Secadora eléctrica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Plancha',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Lavavajillas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'n',
                    'text' => 'Television',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 15,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'o',
                    'text' => 'Monitores y/o pantallas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 16,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'p',
                    'text' => 'Computadoras de escritorio',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 17,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'q',
                    'text' => 'Laptops',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 18,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'r',
                    'text' => 'Ventiladores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 19,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 's',
                    'text' => 'Aire acondicionado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 20,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 't',
                    'text' => 'Calefacción',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 21,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'u',
                    'text' => 'Proyectores de acetato',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 22,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'v',
                    'text' => 'Proyectores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 23,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'w',
                    'text' => 'Copiadoras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 24,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'x',
                    'text' => 'Teléfono',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 25,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'y',
                    'text' => 'Radios',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 26,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'z',
                    'text' => 'Cafeteras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 27,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'A',
                    'text' => 'Campana de flujo laminar',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 28,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'B',
                    'text' => 'Sites de comunicaciones',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 29,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'C',
                    'text' => 'Equipos de laboratorio de 110v',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 30,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'D',
                    'text' => 'Equipos de laboratorio de 200v',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 31,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'E',
                    'text' => 'Equipos de sonifo',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 32,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'F',
                    'text' => 'Tablets',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 33,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'G',
                    'text' => 'Celulares',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 34,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'H',
                    'text' => 'Iluminación (bombillas, lámparas, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 35,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'I',
                    'text' => 'Generadores eléctricos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 36,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'J',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 37,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 38,
                ]);

            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'cantidad',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Índique la cantidad de aparatos electrónicos energéticamente eficientes y/o de bajo consumo en uso dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo. Algunos ejemplos de éstos son: aire acondicionado con tecnología inverter, bombillas LED, computadoras con certificación Energy Star, refrigeradores de alta eficiencia, generadores eléctricos, etc. Adjunte su evidencia en formato Word y etiquételo con la clave 3.2.',
            'name' => 'total_energy_efficient_devices',
            'number' => 2,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x = 1
            {

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Electrodoméstico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Refrigerador',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Horno de microondas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Horno eléctrico',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Licuadora',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Calentador de agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Estufa de gas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Estufa eléctrica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Parrillas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Lavadoras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Secadora de gas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Secadora eléctrica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Plancha',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Lavavajillas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'n',
                    'text' => 'Television',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 15,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'o',
                    'text' => 'Monitores y/o pantallas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 16,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'p',
                    'text' => 'Computadoras de escritorio',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 17,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'q',
                    'text' => 'Laptops',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 18,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'r',
                    'text' => 'Ventiladores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 19,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 's',
                    'text' => 'Aire acondicionado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 20,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 't',
                    'text' => 'Calefacción',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 21,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'u',
                    'text' => 'Proyectores de acetato',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 22,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'v',
                    'text' => 'Proyectores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 23,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'w',
                    'text' => 'Copiadoras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 24,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'x',
                    'text' => 'Teléfono',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 25,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'y',
                    'text' => 'Radios',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 26,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'z',
                    'text' => 'Cafeteras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 27,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'A',
                    'text' => 'Campana de flujo laminar',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 28,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'B',
                    'text' => 'Sites de comunicaciones',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 29,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'C',
                    'text' => 'Equipos de laboratorio de 110v',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 30,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'D',
                    'text' => 'Equipos de laboratorio de 200v',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 31,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'E',
                    'text' => 'Equipos de sonifo',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 32,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'F',
                    'text' => 'Tablets',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 33,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'G',
                    'text' => 'Celulares',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 34,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'H',
                    'text' => 'Iluminación (bombillas, lámparas, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 35,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'I',
                    'text' => 'Generadores eléctricos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 36,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'J',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 37,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 38,
                ]);

            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'cantidad',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de aparatos electrónicos energéticamente eficientes y/o de bajo consumo utilizados en su entidad. El cálculo es automático con base a los indicadores 3.1 y 3.2.',
            'name' => 'percentage_energy_efficient_devices',
            'number' => 3,
            'category_id' => 3,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true
        ]);
        Question::factory()->create([
            'question' => 'Indique el área total de edificios inteligentes dentro de la entidad en metros cuadrados. Un edificio considerado “Edificio Inteligente” debe cumplir al menos con una de las siguientes características: automatización, seguridad (seguridad física, sensores de presencia, videovigilancia/circuito cerrado de televisión), energía, agua (saneamiento, descargas sanitarias automáticas), ambiente interior (confort térmico y calidad del aire), e iluminación (iluminación de bajo consumo). Tome en cuenta plantas bajas y otros pisos de los edificios. ',
            'name' => 'total_smart_buildings',
            'number' => 4,
            'category_id' => 3,
            'type' => 'number',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de implementación de edificios inteligentes en su entidad. El cálculo es automático con base a los indicadores 1.5 y 3.4. ',
            'name' => 'percentage_smart_buildings',
            'number' => 5,
            'category_id' => 3,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true
        ]);
        $question = Question::factory()->create([
            'question' => 'Indique la cantidad de fuentes de energía renovable presentes en su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 3.6',
            'name' => 'total_renewable_energy_sources',
            'number' => 6,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //x=1
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Fuentes de energía renovable',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Solar',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Eólica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Biomasa',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Biogas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Hidroeléctrica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Geotérmica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Biocomustibles',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cantidad',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Indique la cantidad de energía producida (en kilovatios/hora) por las fuentes de energía renovable reportadas en el indicador 3.6.',
            'name' => 'total_energy_produced',
            'number' => 7,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
        ]); {
            //x=1
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Fuentes de energía renovable',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Solar',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Eólica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Biomasa',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Biogas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Hidroeléctrica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Geotérmica',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Biocomustibles',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Energía producida (KW/h)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Indique el número de edificios totales de su entidad y aquellos que están construidos o renovados con base en alguna política o normativa para edificios sustentables. Adjunte su evidencia en formato Word y etiquételo con la clave 3.8.',
            'name' => 'total_sustainable_buildings',
            'number' => 8,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Área de la política o normativa implementada',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Ventilación natural',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Iluinación natural total',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Administrador de energía del edificio',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);

            }
            //top headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Número total de edificios de la entidad',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Número de edificios construidos o renovados con políticas y/o normativas sustentables ',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'La tabla propuesta por Woo y Choi (2013) enlista las fuentes de emisión de gases de efecto invernadero. Con base en ella, indique cual es el estatus del programa destinado a reducir las emisiones de los gases de efecto invernadero (GEI) propuesto por su entidad. Puede seleccionar más de una respuesta.',
            'name' => 'greenhouse_gas_emission_program',
            'number' => 9,
            'category_id' => 3,
            'type' => 'tablecheckbox',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Estatus del programa',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '0',
                    'text' => 'No se necesita ese programa en nuestra entidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '2',
                    'text' => 'El programa es necesario, pero no se cuenta con él',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '4',
                    'text' => 'Programa en preparación (viable)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '6',
                    'text' => 'Los programas tienen como objetivo reducir el alcance 1 de emisiones (véase tabla de la parte inferior)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '6',
                    'text' => 'Los programas tienen como objetivo reducir el alcance 2 de emisiones (véase tabla de la parte inferior)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '6',
                    'text' => 'Los programas tienen como objetivo reducir el alcance 3 de emisiones (véase tabla de la parte inferior)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);

            }
            //top headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Respuesta',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Indique dentro de la celda el estatus de los programas implementados por su entidad sobre riesgo, impactos, mitigación, adaptación, reducción de impactos y alerta temprana del cambio climático. Adjunte su evidencia en formato Word y etiquételo con la clave 3.10.',
            'name' => 'climate_change_program',
            'number' => 10,
            'category_id' => 3,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Programa',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Riesgo',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Impactos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Mitigación',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Adaptación',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Reducción de impactos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Alerta temprana del cambio climático',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
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
                    'text' => 'Programa en preparación',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '5',
                    'text' => 'Comunidades circundantes',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '8',
                    'text' => 'Comunidades aledañas y a nivel nacional',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'Comunidades circundantes, a nivel nacional, regional e internacional',
                    'question_id' => $question->id,
                    'x' => 6,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => '¿Su entidad actualmente cuenta con la implementación de algún programa innovador sobre Energía y Cambio Climático? Indique en la celda la cantidad de programas existentes relacionados a su entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 3.11.',
            'name' => 'innovative_programs',
            'number' => 11,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Temattica del programa',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Sistema inteligente de salud y confort interior',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Nuevo enfoque energético',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Nuevas soluciones a los problemas de mitigación del cambio climático',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);

            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cantidad ',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => '¿Cuál es el consumo promedio anual de gas en su entidad? Indique la respuesta en litros.',
            'name' => 'annual_gas_consumption',
            'number' => 12,
            'category_id' => 3,
            'type' => 'number',
            'required' => true,
        ]);
        $question = Question::factory()->create([
            'question' => 'Indique la cantidad de instalaciones de gas que se encuentren en su entidad. Recuerde tomar en cuenta aquellas empleadas para actividades de aprendizaje, laboratorios y bienestar del personal docente y administrativo. Adjunte su evidencia en formato Word y etiquételo con la clave 3.13.',
            'name' => 'total_gas_installations',
            'number' => 13,
            'category_id' => 3,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side Headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Instalaciones de gas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Calefacción central',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Cocina',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Laboratorios (quemadores, hornos, calentadores)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Calentadores de agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Otros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Sumatoria',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);

            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cantidad ',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Energía y Cambio Climáticos, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. Adjunte su evidencia en formato Word y etiquételo con la clave 3.14.',
            'name' => 'comment',
            'number' => 14,
            'category_id' => 3,
            'type' => 'textarea',
            'needsEvidence' => true,
        ]);

        $question = Question::factory()->create([
            'question' => 'Indique el consumo de electricidad total en kilovatios/hora (KW/h) y mesos mexicanos (MXN) por año de su entidad. Contabilice la energía utilizada en los últimos 12 meses en toda el área de la entidad para todos los fines (iluminación, calefacción, refrigeración, funcionamiento de laboratorios universitarios, etc.). Esta respuesta no es exacta, ya que se reportará la cantidad de electricidad equivalente en porcentaje al área ocupada de las entidades que compartan medidor).',
            'name' => 'total_electricity_consumption',
            'number' => 15,
            'category_id' => 3,
            'type' => 'tableinteger',
            'visibility' => 'admins',
        ]); {
            //x=1
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Periodo de facturación',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Enero - Febrero',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Marzo - Abril',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Mayo - Junio',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Julio - Agosto',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Septiembre - Octubre',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Noviembre - Diciembre',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'sumatory',
                    'text' => 'Total',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => 'promedy',
                    'text' => 'Promedio',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);

            }
            //y=1
            {
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Consumo de electricidad (KW/h)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Costo (MXN)',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Calcule el índice de consumo de electricidad empleada por persona de su entidad en KW/h por persona. Apóyese de los indicadores 2.1, 2.3, 2.4. y 3.15. ',
            'name' => 'electricity_consumption_per_person',
            'number' => 16,
            'category_id' => 3,
            'type' => 'number',
            'visibility' => 'admins',
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje del uso de energía renovable por año. Apóyese de los indicadores 3.7 y 3.15',
            'name' => 'percentage_renewable_energy_usage',
            'number' => 17,
            'category_id' => 3,
            'type' => 'number',
            'visibility' => 'admins',
            'autoAnswer' => true,
        ]);
        $question = Question::factory()->create([
            'question' => 'Calcule la huella de carbono anual de su entidad, excluyendo la huella proveniente de fuentes secundarias como comida, compras y ropa. El cálculo de la huella de carbono se puede realizar en función de la etapa de cálculo que se indica en www.carbonfootprint.com. Esta determinación consiste en la suma del uso de electricidad por año y el uso del transporte por año. Esta se mide en toneladas métricas (MT) de dióxido de carbono (CO2). ',
            'name' => 'carbon_footprint',
            'number' => 18,
            'category_id' => 3,
            'type' => 'multinumber',
            'autoAnswer' => true,
            'visibility' => 'admins',
        ]); {
            //x=1
            {
                Multiinput::create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'A) Consumo de electricidad anual',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'B) Transporte por año (Autobuses)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'C) Transporte por año (Automóvil)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::create([
                    'type' => 'label',
                    'name' => '',
                    'text' => 'D) Transporte por año (Motocicleta)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
            }
            //x=2
            {
                Multiinput::create([
                    'type' => 'number',
                    'name' => 'a',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::create([
                    'type' => 'number',
                    'name' => 'b',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 2,
                ]);
                Multiinput::create([
                    'type' => 'number',
                    'name' => 'c',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 3,
                ]);
                Multiinput::create([
                    'type' => 'number',
                    'name' => 'd',
                    'text' => '',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 4,
                ]);
            }
        }

        Question::factory()->create([
            'question' => 'Calcular la huella de carbono total emitida por persona dentro de su entidad. Reporte la respuesta en toneládas métricas de dióxido de carbono por persona. Apóyese en los indicadores 2.1, 2.3, 2.4 y 3.18.',
            'name' => 'carbon_footprint_per_person',
            'number' => 19,
            'category_id' => 3,
            'type' => 'number',
            'autoAnswer' => true,
            'visibility' => 'admins',
        ]);

    }
}
