<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class WaterFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '6')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        $question = Question::factory()->create([
            'question' => 'Indique si la entidad cuenta con alguna política, programa y/o tecnología que fomente la conservación del agua. Marque la celda que corresponda a la etapa del programa. Adjunte su evidencia en formato Word y etiquételo con la clave 6.1.',
            'name' => 'water_program',
            'number' => 1,
            'category_id' => 6,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
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
                    'name' => 'a',
                    'text' => 'Cuidado de cuerpos de agua superficiales (ríos, lagos, estanques)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Recolección de lluvia',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Implementación de tanques de agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Pozos de recarga',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Bordos de agua/ embalses',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Humedales artificiales',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Otro',
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
            'question' => 'Indique si la entidad cuenta con alguna política, programa y/o tecnología que fomente el uso de agua reciclada. Marque la celda que corresponda a la etapa del programa. Adjunte su evidencia en formato Word y etiquételo con la clave 6.2.',
            'name' => 'recycled_water_program',
            'number' => 2,
            'category_id' => 6,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side Headers
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
                    'text' => 'Uso de agua reciclada para descarga de inodoros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Uso de agua reciclada para lavar automóviles',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Uso de agua reciclada para regar áreas verdes',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Uso de agua reciclada para regar macetas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Otro',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
            }
            //Top Headers
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
            'question' => 'Índique la cantidad total de aparatos electrónicos y muebles que usan agua para operar dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo. Adjunte su evidencia en formato Word y etiquételo con la clave 6.3.',
            'name' => 'efficient_water_program',
            'number' => 3,
            'category_id' => 6,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Política, aparato eléctrico o mueble',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Grifos para lavado manos convencionales (válvula con torniquete)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Llaves para llenado de cubetas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Sanitarios convencionales',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Sistemas de riego para áreas verdes',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Bombas de extracción de pozo',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Regaderas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Lavaojos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Otro',
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
            'question' => 'Índique la cantidad total de aparatos electrónicos y muebles que ahorran agua dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo. Algunos ejemplos de éstos se refieren a acciones y accesorios para el uso eficiente de agua. Adjunte su evidencia en formato Word y etiquételo con la clave 6.4.',
            'name' => 'electric_water_program',
            'number' => 4,
            'category_id' => 6,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Aparato eléctrico o mueble',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Grifos para lavado manos automatizados',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Grifos para lavado manos dosificadores',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Llaves para llenado de cubetas sin goteras',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Sanitarios con desfogue eficiente',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Sanitarios con tanques de descarga menores de 6 L',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Implementación de botellas dentro de los tanques sanitarios para ahorro de agua por descarga',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Implementación de dispositivos destinados al ahorro de agua por descarga de inodoros',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Número telefónico para reporte de fugas a la vista',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Horarios para riego de jardines por la mañana o por la noche',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Sistema automatizado de riego',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Campañas de concientización sobre el cuidado del agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Foros, pláticas y talleres sobre el cuidado del agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Otro',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
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
        Question::factory()->create([
            'question' => 'Calcule el porcentaje de políticas, aparatos electrónicos y muebles que ahorran agua utilizados en su entidad. El cálculo es automático con base a los indicadores 6.3 y 6.4.',
            'name' => 'percentage_efficient_water_program',
            'number' => 5,
            'category_id' => 6,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique la cantidad de agua en litros anual que consume dentro de su entidad acorde las distintas fuentes presentadas en la tabla. Adjunte su evidencia en formato Word y etiquételo con la clave 6.6.',
            'name' => 'water_consumption',
            'number' => 6,
            'category_id' => 6,
            'type' => 'tableinteger',
            'required' => true,
            'needsEvidence' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //Side headers
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Fuente de abastecimiento',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Agua potabilizada dentro de la UASLP',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Agua potabilizada fuera de la UASLP',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Agua tratada dentro de la UASLP',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Agua tratada fuera de la UASLP',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Agua de colector pluvial',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Agua subterránea',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Agua superficial',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
            } {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Cantidad en L',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Indique si la entidad cuenta con alguna política, programa y/o tecnología que procure el control de la contaminación del agua en la entidad. Marque la celda que corresponda a la etapa de algún programa destinado a evitar descargas de agua contaminada en el sistema de drenaje municipal. Adjunte su evidencia en formato Word y etiquételo con la clave 6.7.',
            'name' => 'water_pollution_program',
            'number' => 7,
            'category_id' => 6,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headers
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
                    'text' => 'Mecanismo para comprobar periódicamente la calidad del agua (sensores, medidores)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Monitoreo de parámetros físicos, químicos o biológicos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Implementación de protocolos de tratamiento de residuos líquidos para disminuir y/o eliminar descargas contaminadas.',
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
        $question = Question::factory()->create([
            'question' => 'Indique la institución que le abastece de agua a su entidad y reporte los consumos bimestrales en volumen y pesos mexicanos. ',
            'name' => 'water_supplier',
            'number' => 8,
            'category_id' => 6,
            'type' => 'tableinteger',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            //Side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Periodo de facturación',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Enero-Febrero',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Marzo-Abril',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Mayo-Junio',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Julio-Agosto',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Septiembre-Octubre',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Noviembre-Diciembre',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
            }
            //Top headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'consumption',
                    'text' => 'Consumo en metros cúbicos (m3)',
                    'question_id' => $question->id,
                    'x' => 2,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'cost',
                    'text' => 'Costo en pesos mexicanos ($)',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Agua, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato Word y etiquételo con la clave 6.9.',
            'name' => 'comment',
            'number' => 9,
            'category_id' => 6,
            'type' => 'textarea',
            'required' => true,
            'needsEvidence' => true,
        ]);


    }
}
