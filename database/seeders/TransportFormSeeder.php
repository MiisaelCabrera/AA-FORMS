<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class TransportFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '7')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        Question::factory()->create([
            'question' => 'Indique el número de automóviles (con motor de combustión) que son propiedad y directamente gestionados por la entidad. Incluya vehículos subcontratados a terceros. Adjunte su evidencia en formato Word y etiquételo con la clave 7.1.',
            'name' => 'cars',
            'number' => 1,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el número promedio de automóviles (con motor de combustión) que entran diariamente a su entidad tomando en consideración fechas festivas y periodos vacacionales. Adjunte su evidencia en formato Word y etiquételo con la clave 7.2.',
            'name' => 'cars_entry',
            'number' => 2,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el número promedio de motocicletas (con motor de combustión) que entran diariamente a su entidad tomando en consideración fechas festivas y periodos vacacionales. Adjunte su evidencia en formato Word y etiquételo con la clave 7.3.',
            'name' => 'bikes',
            'number' => 3,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el índice de vehículos motorizados por persona en su entidad. El cálculo es automático con base a los indicadores 2.1, 2.3, 2.4, 7.2 y 7.3.',
            'name' => 'motorized_vehicles_per_person',
            'number' => 4,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el número promedio de pasajeros que son transportados por los vehículos institucionales. Puede estimarlo a partir de la disponibilidad de asientos del servicio de transporte.',
            'name' => 'passengers',
            'number' => 5,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el promedio total de viajes realizado por los vehículos de transporte de la entidad en un año.',
            'name' => 'trips',
            'number' => 6,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique la distancia aproximada diaria de trayecto de un vehículo (autobús, auto, motocicleta) dentro de la entidad en kilómetros; por ejemplo, la distancia de la entrada principal del campus hasta el estacionamiento.',
            'name' => 'vehicle_distance',
            'number' => 7,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
        ]);
        $question = Question::factory()->create([
            'question' => 'Seleccione la medida que promueve y/o incentiva el uso de vehículos de cero emisiones (bicicletas, scooters, patinetas, patines, automóviles eléctricos, motocicletas eléctricas, etc.) para el transporte dentro del campus. Indique su respuesta seleccionando la celda que mejor le convenga. Adjunte su evidencia en formato Word y etiquételo con la clave 7.8.',
            'name' => 'zero_emission_program',
            'number' => 8,
            'category_id' => 7,
            'type' => 'verticalradio',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //Side headings
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
                    'name' => '0',
                    'text' => 'No hay vehículos cero emisiones disponibles',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '3',
                    'text' => 'Estos no son posibles o prácticos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '6',
                    'text' => 'Estos vehículos están disponibles, pero no los proporciona la entidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '8',
                    'text' => 'Si hay vehículos de cero emisiones disponibles, proporcionados por la universidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '8',
                    'text' => 'Los vehículos cero emisiones están disponibles y son proporcionados por la universidad de forma gratuita. Estos son regularmente usados por la comunidad.',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
            }
            //Top headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Medida',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Indique el número promedio diario de vehículos cero emisiones (bicicletas, scooters, patinetas, patines, automóviles eléctricos, motocicletas eléctricas, etc.) que ingresan a su entidad. Contabilice vehículos de la universidad y propiedad privada. Adjunte su evidencia en formato Word y etiquételo con la clave 7.9.',
            'name' => 'zero_emission_vehicles',
            'number' => 9,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el índice de vehículos de cero emisiones por persona en su entidad. El cálculo es automático con base a los indicadores 2.1, 2.3, 2.4 y 7.8.',
            'name' => 'zero_emission_vehicles_per_person',
            'number' => 10,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el área total de estacionamientos de tierra de su entidad en metros cuadrados. Puede estimar o validar esta área utilizando la función de mapas de Google. Adjunte su evidencia en formato Word y etiquételo con la clave 7.11.',
            'name' => 'parking_area',
            'number' => 11,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el área total de estacionamientos encarpetados de su entidad en metros cuadrados (asfalto, cemento, chapopote, etc.). Puede estimar o validar esta área utilizando la función de mapas de Google. Adjunte su evidencia en formato Word y etiquételo con la clave 7.12.',
            'name' => 'paved_parking_area',
            'number' => 12,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'needsEvidence' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de estacionamientos de tierra de su entidad. El cálculo es automático con base a los indicadores 1.2 y 7.11.',
            'name' => 'dirt_parking_percentage',
            'number' => 13,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de estacionamiento de pavimentos de su entidad. El cálculo es automático con base a los indicadores 1.2 y 7.12.',
            'name' => 'paved_parking_percentage',
            'number' => 14,
            'category_id' => 7,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        $question = Question::factory()->create([
            'question' => 'Programas e iniciativas que propongan la disminución de área de estacionamiento y el uso de vehículos privados en la entidad. Adjunte su evidencia en formato Word y etiquételo con la clave 7.15.',
            'name' => 'parking_reduction_program',
            'number' => 15,
            'category_id' => 7,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headings
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
                    'text' => 'Programa para limitar o disminuir el área de estacionamiento en la entidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Iniciativas para disminuir el uso de vehículos motorizados privados en el campus (días sin automóviles, uso compartido de automóviles, cobro elevado de tarifas de estacionamiento, becas para la movilidad, uso compartido de bicicletas, abonos a tarifas bajas, limitación del coche de los estudiantes, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
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
        $question = Question::factory()->create([
            'question' => 'Programas e iniciativas que propongan la seguridad vial y la movilidad urbana sostenible. Adjunte su evidencia en formato Word y etiquételo con la clave 7.16.',
            'name' => 'sustainable_mobility_program',
            'number' => 16,
            'category_id' => 7,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headings
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
                    'text' => 'Caminos peatonales disponibles en la entidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Caminos peatonales disponibles y diseñados para la seguridad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Hay caminos peatonales disponibles, diseñados para la seguridad y conveniencia',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Senderos peatonales disponibles, diseñados para la seguridad y la comodidad, y en algunas partes cuentan con características adaptadas para personas con discapacidad.',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Caminos peatonales equipados con iluminación',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Instalaciones viales adaptadas y adecuadas para personas con discapacidad ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Estaciones y/o servicio de reparación de bicicletas dentro de la entidad',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
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
                    'name' => '7',
                    'text' => 'En planeación',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'En función',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Transporte, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato Word y etiquételo con la clave 7.17.',
            'name' => 'comment',
            'number' => 17,
            'category_id' => 7,
            'type' => 'textarea',
            'required' => true,
            'needsEvidence' => true,
        ]);

    }
}
