<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Multiinput;

class ConsumptionFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $questions = Question::where('category_id', '4')->get();
        foreach ($questions as $question) {
            Multiinput::where('question_id', $question->id)->delete();
            $question->delete();
        }

        $question = Question::factory()->create([
            'question' => '¿Su entidad realiza compras sustentables (compras verdes)?',
            'name' => 'sustainable_purchases',
            'number' => 1,
            'category_id' => 4,
            'type' => 'select',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]); {
            Multiinput::factory()->create([
                'type' => 'select',
                'name' => 'yes',
                'text' => 'Sí',
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
            'question' => '¿Indique dentro de la celda el estatus de las políticas y/o programas realizados en su entidad que favorezcan las compras sustentables. Adjunte su evidencia en formato Word y etiquételo con la clave 4.2.',
            'name' => 'percentage_sustainable_purchases',
            'number' => 2,
            'category_id' => 4,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side Headers
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Políticas y/o programas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Adquisición de materiales para oficina de bajo impacto ambiental con base en el cuadro básico de necesidades ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Adquisición de bienes muebles y suministros fabricados con madera que contengan certificados expedidos por la Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Mantenimiento y reemplazo de aparatos electrónicos por aquellos que mejoren la eficiencia y promuevan el ahorro de electricidad y agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Adquisición de productos elaborados o empacados con materiales reciclados',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);

                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Adquisición de papel duplicador tamaño oficio y/o carta cuya composición sea 100% reciclado',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Adquisición de insumos químicos destinados a limpieza que cumplan con los criterios de menor impacto ambiental para disminuir riesgos a la salud de la comunidad UASLP por manejo y exposición',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Adquisición de productos que sustituyan aquellos que comunmente se apliquen en aerosol',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Adquisición de sustancias de uso regulado (para fines académicos y de investigación) con provedores que cuenten con sus permisos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Adquisición de sustancias de uso regulado (para fines académicos y de investigación) con provedores ambientalmente responsables',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Incentivar al consumo eficiente de los insumos de laboratorio, docencia y administración  ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Incentivar a la disminución de plásticos de un solo uso',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Incentivar el rechazo de productos desechables',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Incentivar el uso de productos reutilizables y/o retornables',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'n',
                    'text' => 'Incentivar al uso de termos, tuppers, tazas, etc',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 15,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'o',
                    'text' => 'Incentivar al reuso y máximo aprovechamiento de insumos de oficina (uso eficiente de materiales)',

                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 16,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'p',
                    'text' => 'Incentivar el uso responsable, durable, eficiente, eficaz y exhaustivo del material de oficina',

                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 17,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'q',
                    'text' => 'Difusión y fomento de buenas prácticas de consumo',

                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 18,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'r',
                    'text' => 'Evitar el almacenamiento individual de materiales de oficina',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 19,
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
                    'text' => 'Recién implementadas',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'Funcionando',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);

            }
        }

        Question::factory()->create([
            'question' => 'Indique el presupuesto invertido en insumos para oficina de forma anual. Repórtelo en pesos mexicanos (MXN).',
            'name' => 'office_supplies_budget',
            'number' => 3,
            'category_id' => 4,
            'type' => 'number',
            'required' => true,
        ]);
        Question::factory()->create([
            'question' => 'Indique el presupuesto invertido en insumos sustentables (compras verdes) para oficina de forma anual. Repórtelo en pesos mexicanos (MXN).',
            'name' => 'sustentable_supplies_budget',
            'number' => 4,
            'category_id' => 4,
            'type' => 'number',
            'required' => true,
            'hasLink' => true,
            'link' => 'https://www.youtube.com/watch?v=bVy8gq8ccLk',
        ]);
        Question::factory()->create([
            'question' => 'Calcule el porcentaje del presupuesto invertido en compras verdes para oficinas de forma anual. El cálcula es automático con base a los indicadores 4.3 y 4.4.',
            'name' => 'percentage_green_budget',
            'number' => 5,
            'category_id' => 4,
            'type' => 'number',
            'required' => true,
            'autoAnswer' => true,
        ]);
        $question = Question::factory()->create([
            'question' => '¿Su entidad cuenta con áreas y contenedores específicos para la segregación de los residuos generados en los edificios y áreas verdes? ¿Cuántas clasificaciones emplea? Indique el estatus de éstos. Adjunte su evidencia en formato Word y etiquetelo con la clave 4.6.',
            'name' => 'segregation_containers',
            'number' => 6,
            'category_id' => 4,
            'type' => 'multiradio',
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
                    'text' => 'Políticas y/o acción',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Fracción orgánica composteable de los Residuos Sólidos Urbanos Universitarios (cáscaras de frutas, semillas, restos de café, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Fracción inorgánica reciclable de los Residuos Sólidos Urbanos Universitarios (PET, PP, HPDE, cartón, aluminio, hojalata, papel, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Fracción inorgánica no reciclable de los Residuos Sólidos Urbanos Universitarios (basura: Cárnicos, papeles contaminados por orgánicos, chicles, pañales, restos de barrido, desechables, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Papel para reúso',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Tapitas de polipropileno',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Residuos de manejo especial (RME): aceite de cocina',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Residuos de manejo especial (RME): baterías alcalinas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Residuos de manejo especial (RME): textiles',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Residuos de manejo especial (RME): electrónicos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Residuos de manejo especial (RME): chatarra',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Residuos de manejo especial (RME): residuos peligrosos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Residuos de manejo especial (RME): solidos contaminados',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Residuos de manejo especial (RME): tóner',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'n',
                    'text' => 'Residuos de manejo especial (RME): lámparas de halógeno',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 15,
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
                    'text' => 'En proceso',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '7',
                    'text' => 'En funcionamiento: se segregan',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'En funcionamiento: se segregan y se disponen',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
            }
        }
        $question = Question::factory()->create([
            'question' => 'Indique dentro de la celda el estatus de acciones realizadas por la entidad para el fomento del consumo responsable. Adjunte su evidencia en formato Word y etiquételo con la clave 4.7.',
            'name' => 'responsible_consumption_actions',
            'number' => 7,
            'category_id' => 4,
            'type' => 'multiradio',
            'required' => true,
            'needsEvidence' => true,
        ]); {
            //Side headings
            {
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '',
                    'text' => 'Acciones',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 1,

                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'a',
                    'text' => 'Uso responsable de la energía',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 2,

                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'b',
                    'text' => 'Uso responsable del agua',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 3,

                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'c',
                    'text' => 'Uso responsable de los plásticos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 4,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'd',
                    'text' => 'Uso responsable del papel (impresión doble cara)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 5,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'e',
                    'text' => 'Uso responsable del papel (imprimir cuando sea necesario)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 6,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'f',
                    'text' => 'Uso responsable del papel (preferencia por correspondencia electrónica)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 7,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'g',
                    'text' => 'Uso de loza (brindis, coffe breaks, etc.)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 8,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'h',
                    'text' => 'Economía circular (Trueques e intercambios)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 9,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'i',
                    'text' => 'Economía circular (Reúso y reciclaje)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 10,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'j',
                    'text' => 'Eventos sostenibles cero residuos',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 11,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'k',
                    'text' => 'Compra de insumos verdes (productos libres de fosfato)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 12,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'l',
                    'text' => 'Compra de insumos verdes (productos biodegradables)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 13,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'm',
                    'text' => 'Compra de insumos verdes (productos libre de cloro)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 14,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'n',
                    'text' => 'Compra de insumos verdes (productos sin tensoactivos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 15,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'o',
                    'text' => 'Compra de insumos verdes (sin ácidos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 16,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'p',
                    'text' => 'Compra de insumos verdes (sin clorofluorocarbonos)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 17,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'q',
                    'text' => 'Compra de insumos verdes (sin fragancias)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 18,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'r',
                    'text' => 'Compra de insumos con hojas de seguridad y fichas técnicas actualizadas (NOM-18-STPS)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 19,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 's',
                    'text' => 'Compras de insumos en contenedores retornables',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 20,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 't',
                    'text' => 'Compras a proveedores cero emisiones',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 21,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'u',
                    'text' => 'Reaprovechamiento de carpetas de archivo, folders y sobres',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 22,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'v',
                    'text' => 'Elaboración de libretas con hojas de reúso o recicladas',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 23,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'w',
                    'text' => 'Existencia de directorio de proveedores de insumos sostenibles',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 24,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'x',
                    'text' => 'Existencia de manuales de uso eficiente de materiales',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 25,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'y',
                    'text' => 'Existencia de un inventario de insumos ',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 26,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => 'z',
                    'text' => 'Existencia de un plan anual para compras inteligentes (no excesivas, de pánico o innecesarias)',
                    'question_id' => $question->id,
                    'x' => 1,
                    'y' => 27,
                ]);

            }
            //top headings 
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
                    'text' => 'Campaña de concientización',
                    'question_id' => $question->id,
                    'x' => 3,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '7',
                    'text' => 'En implementación',
                    'question_id' => $question->id,
                    'x' => 4,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'heading',
                    'name' => '10',
                    'text' => 'En funcionamiento',
                    'question_id' => $question->id,
                    'x' => 5,
                    'y' => 1,
                ]);
            }
        }
        Question::factory()->create([
            'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Consumo Responsable, por favor, escriba al respecto. No hay extensión máxima. Adjunte su evidencia en formato Word y etiquételo con la clave 4.8.',
            'name' => 'comment',
            'number' => 8,
            'category_id' => 4,
            'type' => 'textarea',
            'required' => true,
            'needsEvidence' => true,

        ]);
    }
}
