<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Multiinput;
use App\Models\Entity;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Entity::factory()->create([
            'name' => 'Universidad Autónoma de San Luis Potosí',
        ]);

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '123',
            'role' => 'superadmin',
            'entity_id' => 1,
        ]);
        //Categorias 
        {
            Category::factory()->create([
                'name' => 'Infraestructura',
                'controller' => 'infraestructure',
                'number' => 1,
                'description' => 'Este criterio proporcionará información básica con respecto a la consideración de la universidad sobre espacios habitables y sostenibles. El objetivo es animar a las entidades a procurar la mejora e implementación de edificios inteligentes y sostenibles, aptos para todos los asistentes. '
            ]);
            Category::factory()->create([
                'name' => 'Entorno',
                'controller' => 'enviroment',
                'number' => 2,
                'description' => 'La información sobre el entorno de la entidad proporcionará información básica sobre la consideración de la universidad sobre un entorno verde. Este indicador también muestra si alguna entidad merece ser llamada Entidad Verde. El objetivo es animar la universidad a conservar y proporcionar más espacios verdes y salvaguardar el medio ambiente, así como el desarrollo de energías sostenibles.'
            ]);
            Category::factory()->create([
                'name' => 'Energía y cambio climático',
                'controller' => 'energy_climate_change',
                'number' => 3,
                'description' => 'La atención de la entidad sobre los problemas en el uso de los recursos energéticos y el cambio climático representa el criterio de mayor puntuación dentro del ranking. Los indicadores que componen este criterio permiten obtener información sobre la implementación de políticas y programas de eficiencia energética, energías renovables, uso total de electricidad, conservación de la energía, mitigación del cambio climático, reducción de emisiones de gases de efecto invernadero y huella de carbono.'
            ]);
            Category::factory()->create([
                'name' => 'Consumo responsable',
                'controller' => 'responsible_consumption',
                'number' => 4,
                'description' => 'La información obtenida a través de los indicadores de este criterio permite conocer el enfoque de la entidad acerca de la problemática existente en el ámbito de adquisición, manejo y disposición de los bienes. Estrategias como repiensa, rechaza, reduce, reutiliza, repara, regresa y permite que los materiales tengan la oportunidad de llegar al reciclaje. Con estos indicadores se busca reconocer los esfuerzos de las entidades y motivarlas en una nueva cultura del consumo, uso y disposición de materiales, fomentando cambios en la sociedad y políticas para reducir el uso de papel y plástico en la entidad.'
            ]);
            Category::factory()->create([
                'name' => 'Residuos',
                'controller' => 'waste',
                'number' => 5,
                'description' => 'Las actividades de tratamiento y reciclaje de residuos fortalecen la creación de un medio ambiente sostenible. Las actividades de la comunidad UASLP producen todos los días una cantidad importante de residuos; por lo tanto, la implementación de acciones que promuevan y/o favorezcan los programas de reciclaje y tratamiento de residuos dentro de las entidades son consideradas actividades de importancia. Algunas actividades que destacan son la implementación de programas sobre reciclaje de materiales, tratamiento de residuos orgánicos, tratamiento de residuos inorgánicos, reducción de residuos tóxicos y la eliminación de aguas residuales.'
            ]);
            Category::factory()->create([
                'name' => 'Agua',
                'controller' => 'water',
                'number' => 6,
                'description' => 'Ante la crisis hídrica que atraviesa nuestro país, este criterio permite valorar y crear conciencia sobre los programas y políticas existentes en torno al uso responsable del recurso agua. Los indicadores de este criterio tienen como objetivo alentar a las entidades a disminuir el uso de las aguas subterráneas, implementar y fortalecer los programas de conservación de agua, reciclaje de agua, uso de aparatos y accesorios ahorradores de agua y el aprovechamiento total de agua en las instalaciones.'
            ]);
            Category::factory()->create([
                'name' => 'Transporte',
                'controller' => 'transport',
                'number' => 7,
                'description' => 'La emisión de gases de efecto invernadero (GEI) no solo depende del uso de la energía eléctrica, sino también de los sistemas de transporte. La implementación de programas y políticas de transporte muestran la voluntad de implementar un ambiente más saludable. Estas se enfocan en la limitación de los vehículos motorizados en el campus, fomentar el uso de vehículos compartido y/o vehículos cero emisiones (bicicletas, patinetas, scooters, patines, coches eléctricos, motocicletas eléctricas). Además, reconocer los esfuerzos realizados en fomentar el uso del transporte público (apoyos para la movilidad estudiantil, paraderos seguros, flexibilidad en el préstamo de instalaciones para la recarga de tarjetas para cuotas preferenciales en el transporte público), el cual es respetuoso con el medio ambiente permitiendo una disminución en la huella de carbono.
                Para responder algunas de las preguntas de esta sección, tome en cuenta que:
                a)	Si su entidad se encuentra en un campus con estacionamiento común en el cual no se distingue la procedencia de los vehículos, debe considerar todo el estacionamiento como referencia,
                b)	Si su entidad se encuentra en un campus con estacionamiento común, pero están relativamente bien definidas las zonas de estacionamiento, considere el área más concurrida por el personal y alumnos de su entidad. 
                c)	Si su entidad se encuentra en Zona PeriUniversitaria Poniente, considere la división del campus tal como lo plantea el Programa de Separación y Reciclaje de Materiales (PROSEREM).
                 
                Para más preguntas y dudas, consulte el material de apoyo o llame a la extensión 7210.
                '
            ]);
            Category::factory()->create([
                'name' => 'Educación e investigación',
                'controller' => 'education_research',
                'number' => 8,
                'description' => 'En el principio de perspectiva ambiental descrito en el PIDE 2024-2030, se expresa el interés de la institución por contribuir a la construcción de una cultura de convivencia con la naturaleza, de protección del ambiente y de compromiso con el aprovechamiento sostenible de los recursos naturales. Indiscutiblemente este principio debe estar presente, de manera transversal, en todo el quehacer universitario y manifestarse en formas diversas en sus funciones sustantivas, docencia, investigación, gestión y vinculación con la sociedad.
                              La educación y la investigación se hacen cotidianamente en nuestras aulas, pero las entidades preocupadas por incorporar o fortalecer la perspectiva ambiental y de sostenibilidad en sus planes y programas de estudios merecen reconocer este esfuerzo. Por ello, a través de los indicadores de este criterio se busca tener la recopilación de información sobre los programas educativos sobre temas de ambiente y sostenibilidad y la producción de materiales en torno a la sostenibilidad.'
            ]);
            Category::factory()->create([
                'name' => 'Reporte global',
                'controller' => 'report',
                'number' => 9,
            ]);

            Category::factory()->create([
                'name' => 'Bitácora',
                'controller' => 'binnacle',
                'number' => 10,
            ]);
            Category::factory()->create([
                'name' => 'Historial',
                'controller' => 'history',
                'number' => 11,
            ]);
        }
        //Fomrulario de Infraestructura
        {
            Question::factory()->create([
                'question' => '¿Cuál de las siguientes opciones describe mejor la configuración de su entidad?',
                'name' => 'settings_description',
                'number' => 1,
                'category_id' => 1,
                'type' => 'select',
                'required' => true,
            ]);

            //Inputs de la pregunta 1
            {

                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'suburban',
                    'text' => 'Suburbano',
                    'question_id' => 1,
                    'x' => 1,
                    'y' => 1,
                ]);

                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'urban',
                    'text' => 'Urbano',
                    'question_id' => 1,
                    'x' => 1,
                    'y' => 1,
                ]);

                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'city',
                    'text' => 'Centro de la ciudad',
                    'question_id' => 1,
                    'x' => 1,
                    'y' => 1,
                ]);
            }

            Question::factory()->create([
                'question' => '¿Cuál es el área total de su entidad?',
                'name' => 'area_total',
                'number' => 2,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el área total de su entidad destinada a actividades académicas y administrativas? (Se reporta en metros cuadrados. Incluya edificios administrativos, edificios para actividades estudiantiles y de personal, clases, invernaderos y comedores. Los jardines, campos y otras áreas solo deben contarse si son utilizadas con fines académicos y/o recreativos, como conferencias, prácticas, capacitaciones, eventos, ferias, etc.)',
                'name' => 'area_activities',
                'number' => 3,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es la superficie total de la planta baja de los edificios de su entidad? (Se reporta en metros cuadrados. Considere para el cálculo el área total de las partes de la planta baja de los edificios universitarios en su entidad).',
                'name' => 'area_ground_floor',
                'number' => 4,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
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
                'question' => '¿Cuál es el porcentaje de espacios abiertos en su entidad?',
                'name' => 'percentage_open_spaces',
                'number' => 6,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el área de cubierta vegetal forestal de su entidad? (Se reporta en metros cuadrados). Proporcione el porcentaje del área de su entidad cubierta de vegetación en forma de bosque, no incluir jardineras. Adjunte su evidencia fotográfica en formato word (.doc) y etiquetelo con la clave 1.7.',
                'name' => 'area_forest_vegetation',
                'number' => 7,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el porcentaje de cubierta vegetal forestal de su entidad?',
                'name' => 'percentage_forest_vegetation',
                'number' => 8,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el área de vegetación plantada de su entidad? (Se reporta en metros cuadrados. No contabilice los bosques. Se pueden contar áreas de jardín, techos verdes, invernaderos, jardineras, plantaciones internas, jardines verticales y canchas de futbol). Adjunte su evidencia fotográfica en formato word (.doc) y etiquetelo con la clave 1.9.',
                'name' => 'area_planted_vegetation',
                'number' => 9,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el porcentaje de vegetación plantada de su entidad?',
                'name' => 'percentage_planted_vegetation',
                'number' => 10,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con superficies que permitan la absorción de agua, especifique el área en metros cuadrados. Estas áreas excluyen los bosques y la vegetación plantada. Tome en cuenta, por ejemplo: tierra, bloques de concreto, campo sintético, estacionamientos sin asfalto, camellones, pozos de absorción, concreto permeable, adoquín. Adjunte su evidencia fotográfica en formato word (.doc) y etiquetelo con la clave 1.11.',
                'name' => 'area_water_absorption',
                'number' => 11,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el porcentaje de superficies que permitan la absorción de agua de su entidad?',
                'name' => 'percentage_water_absorption',
                'number' => 12,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Si su entidad tuvo actividades de operación y mantenimiento en los edificios que la conforman, especifiqué el área ocuapada por los mismos en metros cudrados. (Se consideran la construcción de nuevos edificios y las actividades de mantenimiento de rutina del edificio). Adjunte su evidencia fotográfica en formato word (.doc) y etiquetelo con la clave 1.13.',
                'name' => 'area_building_maintenance',
                'number' => 13,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el porcentaje de actividades de operación y mantenimiento de los edificios de su entidad?',
                'name' => 'percentage_building_maintenance',
                'number' => 14,
                'category_id' => 1,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Infraestructura, por favor, escriba al respecto.',
                'name' => 'comment',
                'number' => 15,
                'category_id' => 1,
                'type' => 'textarea',
                'needsEvidence' => false,
            ]);
        }
        //Formulario de entorno
        {
            Question::factory()->create([
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
                        'question_id' => 16,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Mujeres',
                        'question_id' => 16,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Hombres',
                        'question_id' => 16,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Otros',
                        'question_id' => 16,
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
                        'question_id' => 16,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'b',
                        'text' => '',
                        'question_id' => 16,
                        'x' => 2,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'c',
                        'text' => '',
                        'question_id' => 16,
                        'x' => 2,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'd',
                        'text' => '',
                        'question_id' => 16,
                        'x' => 2,
                        'y' => 4,
                    ]);
                }

            }
            Question::factory()->create([
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
                        'question_id' => 17,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Mujeres',
                        'question_id' => 17,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Hombres',
                        'question_id' => 17,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Otros',
                        'question_id' => 17,
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
                        'question_id' => 17,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'b',
                        'text' => '',
                        'question_id' => 17,
                        'x' => 2,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'c',
                        'text' => '',
                        'question_id' => 17,
                        'x' => 2,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'd',
                        'text' => '',
                        'question_id' => 17,
                        'x' => 2,
                        'y' => 4,
                    ]);
                }

            }
            Question::factory()->create([
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
                        'question_id' => 18,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Mujeres',
                        'question_id' => 18,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Hombres',
                        'question_id' => 18,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Otros',
                        'question_id' => 18,
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
                        'question_id' => 18,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'b',
                        'text' => '',
                        'question_id' => 18,
                        'x' => 2,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'c',
                        'text' => '',
                        'question_id' => 18,
                        'x' => 2,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'd',
                        'text' => '',
                        'question_id' => 18,
                        'x' => 2,
                        'y' => 4,
                    ]);
                }

            }
            Question::factory()->create([
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
                        'question_id' => 19,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Mujeres',
                        'question_id' => 19,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Hombres',
                        'question_id' => 19,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => 'Otros',
                        'question_id' => 19,
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
                        'question_id' => 19,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'b',
                        'text' => '',
                        'question_id' => 19,
                        'x' => 2,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'c',
                        'text' => '',
                        'question_id' => 19,
                        'x' => 2,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'integer',
                        'name' => 'd',
                        'text' => '',
                        'question_id' => 19,
                        'x' => 2,
                        'y' => 4,
                    ]);
                }

            }
            Question::factory()->create([
                'question' => 'Calcule el índice de población en espacios abiertos de su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 1.2, 1.4, 2.1, 2.3 y 2.4',
                'name' => 'population_index_open_spaces',
                'number' => 5,
                'category_id' => 2,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true
            ]);
            Question::factory()->create([
                'question' => '¿Cuál es el presupuesto total de los últimos 3 años de su entidad? Repórtelos en pesos mexicanos (MXN). (Tome en cuenta las inversiones en infraestructura, instalaciones, costos de personal, investigación, programas y otros). Adjunte su evidencia en una hoja de cálculo en formato excel (.xls) y etiquételo con la clave 2.6.',
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
                        'question_id' => 21,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => '2022',
                        'question_id' => 21,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => '2023',
                        'question_id' => 21,
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
                        'question_id' => 21,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'number',
                        'name' => 'b',
                        'text' => '',
                        'question_id' => 21,
                        'x' => 2,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'number',
                        'name' => 'c',
                        'text' => '',
                        'question_id' => 21,
                        'x' => 2,
                        'y' => 3,
                    ]);
                }

            }
            Question::factory()->create([
                'question' => '¿Cuáles han sido los presupuestos destinados a esfuerzos de sostenibilidad en su entidad en los últimos 3 años? Repórtelos por año en pesos mexicanos (MXN). Se toman en cuenta las inversiones en infraestructura, instalaciones, costos de personal, investigación, programas y otros relacionados con los esfuerzos de sostenibilidad. Adjunte su exidencia en una hoja de cálculo en formato excel (.xls) y etiquetelo con la clave 2.7.',
                'name' => 'budget_sustainability',
                'number' => 7,
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
                        'question_id' => 22,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => '2022',
                        'question_id' => 22,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'label',
                        'name' => '',
                        'text' => '2023',
                        'question_id' => 22,
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
                        'question_id' => 22,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'number',
                        'name' => 'b',
                        'text' => '',
                        'question_id' => 22,
                        'x' => 2,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'number',
                        'name' => 'c',
                        'text' => '',
                        'question_id' => 22,
                        'x' => 2,
                        'y' => 3,
                    ]);
                }

            }
            Question::factory()->create([
                'question' => '¿Cuál es el porcentaje del presupuesto destinado a esfuerzos de sostenibilidad en su entidad? Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 2.6 y 2.7',
                'name' => 'percentage_budget_sustainability',
                'number' => 8,
                'category_id' => 2,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true
            ]);
            Question::factory()->create([
                'question' => 'Marque la celda que indique el estado en el que se encuentran las instalaciones de la entidad con respecto a su adecuación para personas en situación o condición de discapacidad, necesidades especiales y/o atención de maternidad.  Adjunte su evidencia en formato word (.doc) y etiquétalo con la clave 2.9.',
                'name' => 'facilities_state',
                'number' => 9,
                'category_id' => 2,
                'type' => 'multiradio',
                'required' => true,
                'needsEvidence' => true,
            ]); {
                //Side Headings
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => '',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 1,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Biblioteca',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Aulas',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 3,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Baños',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 4,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Salas de lactancia',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 5,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Estacionamientos',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 6,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Transporte universitario',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 7,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Guardería',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 8,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Pasos peatonales',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 9,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Rampas funcionales',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 10,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Oficinas',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 11,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Ascensores',
                        'question_id' => 24,
                        'x' => 1,
                        'y' => 12,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Señaletica en braile',
                        'question_id' => 24,
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
                        'question_id' => 24,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '2',
                        'text' => 'Política vigente',
                        'question_id' => 24,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '5',
                        'text' => 'Instalaciones en planificación',
                        'question_id' => 24,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Instalaciones parcialmente disponibles y operadas',
                        'question_id' => 24,
                        'x' => 5,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Existencia de instalaciones en pleno funcionamiento',
                        'question_id' => 24,
                        'x' => 6,
                        'y' => 1,
                    ]);
                }

            }
            Question::factory()->create([
                'question' => 'Marque la celda que indique el estado de los ítems destinados a la seguridad y protección del personal que puedan estar presentes dentro de su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 2.10.',
                'name' => 'items_state',
                'number' => 10,
                'category_id' => 2,
                'type' => 'multiradio',
                'required' => true,
                'needsEvidence' => true,
            ]); {
                //Side Headings
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => '',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 1,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Seguridad pasiva (infraestructura destinada a la mitigación y no expansión de siniestros)',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Extintores',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 3,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Hidrantes',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 4,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Regaderas',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 5,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Lavaojos',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 6,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Botiquín de emergencias',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 7,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Señalización',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 8,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Números de emergencia a la mano',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 9,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Circuito cerrado de televisión (Cámaras de seguridad)',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 10,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Línea directa de emergencia',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 11,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Botón de emergencia',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 12,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Personal capacitado para responder a emergencias',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 13,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Tiempo de respuesta ante accidentes (<10 minutos)',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 14,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'n',
                        'text' => 'Tiempo de respuesta ante delitos (<10 minutos)',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 15,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'o',
                        'text' => 'Tiempo de respuesta ante incendios (<10 minutos)',
                        'question_id' => 25,
                        'x' => 1,
                        'y' => 16,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'p',
                        'text' => 'Tiempo de respuesta ante desastres naturales (<10 minutos)',
                        'question_id' => 25,
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
                        'question_id' => 25,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '2',
                        'text' => 'En planeación',
                        'question_id' => 25,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '5',
                        'text' => 'En proceso de instalación',
                        'question_id' => 25,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '8',
                        'text' => 'Disponible y accesible',
                        'question_id' => 25,
                        'x' => 5,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'En correcto funcionamiento',
                        'question_id' => 25,
                        'x' => 6,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Marque la celda que indique el estado de la infraestructura destinada a la atención de la salud de los estudiantes, académicos y personal administrativo que puedan estar presentes dentro de su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 2.11.',
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
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 1,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Centros de atención médica',
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 2,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Enfermerías',
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 3,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'PIPS',
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 4,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Departamento de atención psicológica',
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 5,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Primeros auxilios',
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 6,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Clínicas destinadas a la comunidad UASLP',
                        'question_id' => 26,
                        'x' => 1,
                        'y' => 7,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Clínicas (Centros comunitarios destinados al público)',
                        'question_id' => 26,
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
                        'question_id' => 26,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '2',
                        'text' => 'En planeación',
                        'question_id' => 26,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '5',
                        'text' => 'En proceso de instalación',
                        'question_id' => 26,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '8',
                        'text' => 'Disponible y accesible',
                        'question_id' => 26,
                        'x' => 5,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'En correcto funcionamiento',
                        'question_id' => 26,
                        'x' => 6,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Si en tu entidad existe algún programa de conservación de la biodiversidad, marca las celdas que indiquen el tipo de especies que se albergan y el estatus del programa. Si la conservación se lleva a cabo en otro lugar, su entidad puede incluirlos y colocar esa área de conservación en el área total del campus (pregunta 1.2). Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 2.12.',
                'name' => 'biodiversity_program',
                'number' => 12,
                'category_id' => 2,
                'type' => 'multi',
                'required' => true,
            ]);
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Entorno, por favor, escriba al respecto. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 2.13.',
                'name' => 'comment',
                'number' => 13,
                'category_id' => 2,
                'type' => 'textarea',
                'needsEvidence' => true,
            ]);
        }
        //Formulario de Energía y cambio climático
        {
            Question::factory()->create([
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
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Refrigerador',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Horno de microondas',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Horno eléctrico',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Licuadora',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Calentador de agua',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Estufa de gas',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Estufa eléctrica',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Parrillas',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 9,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Lavadoras',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 10,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Secadora de gas',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 11,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Secadora eléctrica',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 12,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Plancha',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 13,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Lavavajillas',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 14,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'n',
                        'text' => 'Television',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 15,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'o',
                        'text' => 'Monitores y/o pantallas',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 16,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'p',
                        'text' => 'Computadoras de escritorio',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 17,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'q',
                        'text' => 'Laptops',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 18,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'r',
                        'text' => 'Ventiladores',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 19,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 's',
                        'text' => 'Aire acondicionado',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 20,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 't',
                        'text' => 'Calefacción',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 21,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'u',
                        'text' => 'Proyectores de acetato',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 22,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'v',
                        'text' => 'Proyectores',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 23,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'w',
                        'text' => 'Copiadoras',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 24,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'x',
                        'text' => 'Teléfono',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 25,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'y',
                        'text' => 'Radios',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 26,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'z',
                        'text' => 'Cafeteras',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 27,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'A',
                        'text' => 'Campana de flujo laminar',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 28,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'B',
                        'text' => 'Sites de comunicaciones',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 29,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'C',
                        'text' => 'Equipos de laboratorio de 110v',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 30,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'D',
                        'text' => 'Equipos de laboratorio de 200v',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 31,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'E',
                        'text' => 'Equipos de sonifo',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 32,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'F',
                        'text' => 'Tablets',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 33,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'G',
                        'text' => 'Celulares',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 34,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'H',
                        'text' => 'Iluminación (bombillas, lámparas, etc.)',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 35,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'I',
                        'text' => 'Generadores eléctricos',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 36,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'J',
                        'text' => 'Otros',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 37,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 29,
                        'x' => 1,
                        'y' => 38,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'cantidad',
                        'question_id' => 29,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Índique la cantidad de aparatos electrónicos energéticamente eficientes y/o de bajo consumo en uso dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo. Algunos ejemplos de éstos son: aire acondicionado con tecnología inverter, bombillas LED, computadoras con certificación Energy Star, refrigeradores de alta eficiencia, generadores eléctricos, etc. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.2.',
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
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Refrigerador',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Horno de microondas',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Horno eléctrico',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Licuadora',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Calentador de agua',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Estufa de gas',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Estufa eléctrica',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Parrillas',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 9,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Lavadoras',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 10,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Secadora de gas',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 11,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Secadora eléctrica',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 12,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Plancha',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 13,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Lavavajillas',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 14,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'n',
                        'text' => 'Television',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 15,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'o',
                        'text' => 'Monitores y/o pantallas',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 16,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'p',
                        'text' => 'Computadoras de escritorio',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 17,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'q',
                        'text' => 'Laptops',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 18,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'r',
                        'text' => 'Ventiladores',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 19,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 's',
                        'text' => 'Aire acondicionado',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 20,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 't',
                        'text' => 'Calefacción',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 21,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'u',
                        'text' => 'Proyectores de acetato',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 22,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'v',
                        'text' => 'Proyectores',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 23,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'w',
                        'text' => 'Copiadoras',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 24,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'x',
                        'text' => 'Teléfono',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 25,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'y',
                        'text' => 'Radios',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 26,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'z',
                        'text' => 'Cafeteras',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 27,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'A',
                        'text' => 'Campana de flujo laminar',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 28,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'B',
                        'text' => 'Sites de comunicaciones',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 29,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'C',
                        'text' => 'Equipos de laboratorio de 110v',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 30,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'D',
                        'text' => 'Equipos de laboratorio de 200v',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 31,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'E',
                        'text' => 'Equipos de sonido',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 32,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'F',
                        'text' => 'Tablets',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 33,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'G',
                        'text' => 'Celulares',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 34,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'H',
                        'text' => 'Iluminación (bombillas, lámparas, etc.)',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 35,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'I',
                        'text' => 'Generadores eléctricos',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 36,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'J',
                        'text' => 'Otros',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 37,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 30,
                        'x' => 1,
                        'y' => 38,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'cantidad',
                        'question_id' => 30,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de aparatos electrónicos energéticamente eficientes y/o de bajo consumo utilizados en su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 3.1 y 3.2.',
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
            ]);
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de implementación de edificios inteligentes en su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 1.5 y 3.4. ',
                'name' => 'percentage_smart_buildings',
                'number' => 5,
                'category_id' => 3,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true
            ]);
            Question::factory()->create([
                'question' => 'Indique la cantidad de fuentes de energía renovable presentes en su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.6',
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
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Solar',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Eólica',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Biomasa',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Biogas',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Hidroeléctrica',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Geotérmica',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Biocomustibles',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 34,
                        'x' => 1,
                        'y' => 9,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cantidad',
                        'question_id' => 34,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
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
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Solar',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Eólica',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Biomasa',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Biogas',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Hidroeléctrica',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Geotérmica',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Biocomustibles',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 35,
                        'x' => 1,
                        'y' => 9,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Energía producida (KW/h)',
                        'question_id' => 35,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique el número de edificios totales de su entidad y aquellos que están construidos o renovados con base en alguna política o normativa para edificios sustentables. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.8.',
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
                        'question_id' => 36,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Ventilación natural',
                        'question_id' => 36,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Iluinación natural total',
                        'question_id' => 36,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Administrador de energía del edificio',
                        'question_id' => 36,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 36,
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
                        'question_id' => 36,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Número de edificios construidos o renovados con políticas y/o normativas sustentables ',
                        'question_id' => 36,
                        'x' => 3,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'La tabla propuesta por Woo y Choi (2013) enlista las fuentes de emisión de gases de efecto invernadero. Con base en ella, indique cual es el estatus del programa destinado a reducir las emisiones de los gases de efecto invernadero (GEI) propuesto por su entidad. Puede seleccionar más de una respuesta.',
                'name' => 'greenhouse_gas_emission_program',
                'number' => 9,
                'category_id' => 3,
                'type' => 'tablecheckbox',
                'required' => true,
            ]); {
                //side headings
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Estatus del programa',
                        'question_id' => 37,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '0',
                        'text' => 'No se necesita ese programa en nuestra entidad',
                        'question_id' => 37,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '2',
                        'text' => 'El programa es necesario, pero no se cuenta con él',
                        'question_id' => 37,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '4',
                        'text' => 'Programa en preparación (viable)',
                        'question_id' => 37,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '6',
                        'text' => 'Los programas tienen como objetivo reducir el alcance 1 de emisiones (véase tabla de la parte inferior)',
                        'question_id' => 37,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '6',
                        'text' => 'Los programas tienen como objetivo reducir el alcance 2 de emisiones (véase tabla de la parte inferior)',
                        'question_id' => 37,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '6',
                        'text' => 'Los programas tienen como objetivo reducir el alcance 3 de emisiones (véase tabla de la parte inferior)',
                        'question_id' => 37,
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
                        'question_id' => 37,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique dentro de la celda el estatus de los programas implementados por su entidad sobre riesgo, impactos, mitigación, adaptación, reducción de impactos y alerta temprana del cambio climático. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.10.',
                'name' => 'climate_change_program',
                'number' => 10,
                'category_id' => 3,
                'type' => 'multiradio',
                'required' => true,
                'needsEvidence' => true,
            ]); {
                //side headings
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Programa',
                        'question_id' => 38,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Riesgo',
                        'question_id' => 38,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Impactos',
                        'question_id' => 38,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Mitigación',
                        'question_id' => 38,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Adaptación',
                        'question_id' => 38,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Reducción de impactos',
                        'question_id' => 38,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Alerta temprana del cambio climático',
                        'question_id' => 38,
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
                        'question_id' => 38,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '2',
                        'text' => 'Programa en preparación',
                        'question_id' => 38,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '5',
                        'text' => 'Comunidades circundantes',
                        'question_id' => 38,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '8',
                        'text' => 'Comunidades aledañas y a nivel nacional',
                        'question_id' => 38,
                        'x' => 5,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Comunidades circundantes, a nivel nacional, regional e internacional',
                        'question_id' => 38,
                        'x' => 6,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => '¿Su entidad actualmente cuenta con la implementación de algún programa innovador sobre Energía y Cambio Climático? Indique en la celda la cantidad de programas existentes relacionados a su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.11.',
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
                        'question_id' => 39,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => ' a',
                        'text' => 'Sistema inteligente de salud y confort interior',
                        'question_id' => 39,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Nuevo enfoque energético',
                        'question_id' => 39,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Nuevas soluciones a los problemas de mitigación del cambio climático',
                        'question_id' => 39,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Otros',
                        'question_id' => 39,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 39,
                        'x' => 1,
                        'y' => 6,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cantidad ',
                        'question_id' => 39,
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
            Question::factory()->create([
                'question' => 'Indique la cantidad de instalaciones de gas que se encuentren en su entidad. Recuerde tomar en cuenta aquellas empleadas para actividades de aprendizaje, laboratorios y bienestar del personal docente y administrativo. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.13.',
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
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => ' a',
                        'text' => 'Calefacción central',
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Cocina',
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Laboratorios (quemadores, hornos, calentadores)',
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Calentadores de agua',
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Otros',
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 6,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'sumatory',
                        'text' => 'Sumatoria',
                        'question_id' => 41,
                        'x' => 1,
                        'y' => 7,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cantidad ',
                        'question_id' => 41,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Energía y Cambio Climáticos, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 3.14.',
                'name' => 'comment',
                'number' => 14,
                'category_id' => 3,
                'type' => 'textarea',
                'needsEvidence' => true,
            ]);

        }
        //Formulario de Consumo responsable
        {
            Question::factory()->create([
                'question' => '¿Su entidad realiza compras sustentables (compras verdes)?',
                'name' => 'sustainable_purchases',
                'number' => 1,
                'category_id' => 4,
                'type' => 'select',
                'required' => true,
            ]); {
                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'yes',
                    'text' => 'Sí',
                    'question_id' => 43,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'no',
                    'text' => 'No',
                    'question_id' => 43,
                    'x' => 1,
                    'y' => 2,
                ]);
            }

            Question::factory()->create([
                'question' => '¿Indique dentro de la celda el estátus de las políticas y/o programas realizados en su entidad que favorezcan las compras sustentables. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 4.2.',
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
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Adquisición de materiales para oficina de bajo impacto ambiental con base en el cuadro básico de necesidades ',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Adquisición de bienes muebles y suministros fabricados con madera que contengan certificados expedidos por la Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT)',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'electronic_devices_maintenance',
                        'text' => 'Mantenimiento y reemplazo de aparatos electrónicos por aquellos que mejoren la eficiencia y promuevan el ahorro de electricidad y agua',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 4,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Adquisición de productos elaborados o empacados con materiales reciclados',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 5,
                    ]);

                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Adquisición de papel duplicador tamaño oficio y/o carta cuya composición sea 100% reciclado',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Adquisición de insumos químicos destinados a limpieza que cumplan con los criterios de menor impacto ambiental para disminuir riesgos a la salud de la comunidad UASLP por manejo y exposición',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Adquisición de productos que sustituyan aquellos que comunmente se apliquen en aerosol',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Adquisición de sustancias de uso regulado (para fines académicos y de investigación) con provedores que cuenten con sus permisos',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 9,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Adquisición de sustancias de uso regulado (para fines académicos y de investigación) con provedores ambientalmente responsables',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 10,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Incentivar al consumo eficiente de los insumos de laboratorio, docencia y administración  ',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 11,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Incentivar a la disminución de plásticos de un solo uso',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 12,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Incentivar el rechazo de productos desechables',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 13,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Incentivar el uso de productos reutilizables y/o retornables',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 14,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Incentivar al uso de termos, tuppers, tazas, etc',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 15,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'n',
                        'text' => 'Incentivar al reuso y máximo aprovechamiento de insumos de oficina (uso eficiente de materiales)',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 16,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'o',
                        'text' => 'Incentivar el uso responsable, durable, eficiente, eficaz y exhaustivo del material de oficina',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 17,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'p',
                        'text' => 'Difusión y fomento de buenas prácticas de consumo',
                        'question_id' => 44,
                        'x' => 1,
                        'y' => 18,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'q',
                        'text' => 'Evitar el almacenamiento individual de materiales de oficina',
                        'question_id' => 44,
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
                        'question_id' => 44,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 44,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementadas',
                        'question_id' => 44,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Funcionando',
                        'question_id' => 44,
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
            ]);
            Question::factory()->create([
                'question' => 'Calcule el porcentaje del presupuesto invertido en compras verdes para oficinas de forma anual. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 4.3 y 4.4.',
                'name' => 'percentage_green_budget',
                'number' => 5,
                'category_id' => 4,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Su entidad cuenta con áreas y contenedores específicos para la segregación de los residuos generados en los edificios y áreas verdes? ¿Cuántas clasificaciones emplea? Indique el estatus de éstos. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 4.6.',
                'name' => 'segregation_containers',
                'number' => 6,
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
                        'text' => 'Políticas y/o acción',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Fracción orgánica composteable de los Residuos Sólidos Urbanos Universitarios (cáscaras de frutas, semillas, restos de café, etc.)',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Fracción inorgánica reciclable de los Residuos Sólidos Urbanos Universitarios (PET, PP, HPDE, cartón, aluminio, hojalata, papel, etc.)',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Fracción inorgánica no reciclable de los Residuos Sólidos Urbanos Universitarios (basura: Cárnicos, papeles contaminados por orgánicos, chicles, pañales, restos de barrido, desechables, etc.)',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Papel para reúso',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Tapitas de polipropileno',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Residuos de manejo especial (RME): aceite de cocina',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Residuos de manejo especial (RME): baterías alcalinas',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Residuos de manejo especial (RME): textiles',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 9,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Residuos de manejo especial (RME): electrónicos',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 10,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Residuos de manejo especial (RME): chatarra',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 11,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Residuos de manejo especial (RME): residuos peligrosos',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 12,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Residuos de manejo especial (RME): solidos contaminados',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 13,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Residuos de manejo especial (RME): tóner',
                        'question_id' => 48,
                        'x' => 1,
                        'y' => 14,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'n',
                        'text' => 'Residuos de manejo especial (RME): lámparas de halógeno',
                        'question_id' => 48,
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
                        'question_id' => 48,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En proceso',
                        'question_id' => 48,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'En funcionamiento: se segregan',
                        'question_id' => 48,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'En funcionamiento: se segregan y se disponen',
                        'question_id' => 48,
                        'x' => 5,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique dentro de la celda el estátus de acciones realizadas por la entidad para el fomento del consumo responsable. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 4.7.',
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
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 1,

                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Uso responsable de la energía',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 2,

                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Uso responsable del agua',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 3,

                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Uso responsable de los plásticos',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Uso responsable del papel (impresión doble cara)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Uso responsable del papel (imprimir cuando sea necesario)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Uso responsable del papel (preferencia por correspondencia electrónica)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Uso de loza (brindis, coffe breaks, etc.)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Economía circular (Trueques e intercambios)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 9,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Economía circular (Reúso y reciclaje)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 10,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Eventos sostenibles cero residuos',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 11,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Compra de insumos verdes (productos libres de fosfato)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 12,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Compra de insumos verdes (productos biodegradables)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 13,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Compra de insumos verdes (productos libre de cloro)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 14,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'n',
                        'text' => 'Compra de insumos verdes (productos sin tensoactivos)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 15,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'o',
                        'text' => 'Compra de insumos verdes (sin ácidos)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 16,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'p',
                        'text' => 'Compra de insumos verdes (sin clorofluorocarbonos)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 17,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'q',
                        'text' => 'Compra de insumos verdes (sin fragancias)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 18,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'r',
                        'text' => 'Compra de insumos con hojas de seguridad y fichas técnicas actualizadas (NOM-18-STPS)',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 19,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 's',
                        'text' => 'Compras de insumos en contenedores retornables',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 20,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 't',
                        'text' => 'Compras a proveedores cero emisiones',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 21,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'u',
                        'text' => 'Reaprovechamiento de carpetas de archivo, folders y sobres',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 22,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'v',
                        'text' => 'Elaboración de libretas con hojas de reúso o recicladas',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 23,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'w',
                        'text' => 'Existencia de directorio de proveedores de insumos sostenibles',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 24,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'x',
                        'text' => 'Existencia de manuales de uso eficiente de materiales',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 25,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'y',
                        'text' => 'Existencia de un inventario de insumos ',
                        'question_id' => 49,
                        'x' => 1,
                        'y' => 26,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'z',
                        'text' => 'Existencia de un plan anual para compras inteligentes (no excesivas, de pánico o innecesarias)',
                        'question_id' => 49,
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
                        'question_id' => 49,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'Campaña de concientización',
                        'question_id' => 49,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'En implementación',
                        'question_id' => 49,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'En funcionamiento',
                        'question_id' => 49,
                        'x' => 5,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Consumo Responsable, por favor, escriba al respecto. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 4.8.',
                'name' => 'comment',
                'number' => 8,
                'category_id' => 4,
                'type' => 'textarea',
                'required' => true,
                'needsEvidence' => true,

            ]);
        }
        //Formulario de Residuos
        {
            Question::factory()->create([
                'question' => 'Indique si en su entidad está vigente algún programa o política que fomente la reducción, reutilización y el reciclaje de los residuos sólidos urbanos universitarios marcando la celda adecuada. Estos programas y políticas pueden ir dirigidos a alentar al personal académico, administrativo y estudiantil en el empleo de las 3R (Reducir, Reutilizar, Reciclar). Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 5.1.',
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
                        'question_id' => 51,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'q',
                        'text' => 'Las 3 R para estudiantes',
                        'question_id' => 51,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Las 3 R para personal académico',
                        'question_id' => 51,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Las 3 R para personal administrativo',
                        'question_id' => 51,
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
                        'question_id' => 51,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 51,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementado',
                        'question_id' => 51,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Consolidado',
                        'question_id' => 51,
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
                'question' => 'Calcule el porcentaje de tratamiento de residuos orgánicos compostables. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 5.2 y 5.4.',
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
                'question' => 'Cantidad de residuos inorgánicos (no peligrosos) tratados anualmente en kilogramos. Esto significa que se debe de cuantificar la cantidad de residuos inorgánicos que han sido tratados (reciclados, reutilizados, aprovechados) dentro de la entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 5.7.',
                'name' => 'treated_inorganic_waste',
                'number' => 7,
                'category_id' => 5,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de tratamiento de residuos inorgánicos (no peligrosos). Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 5.2 y 5.7',
                'name' => 'percentage_treated_inorganic_waste',
                'number' => 8,
                'category_id' => 5,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Cantidad de residuos peligrosos y/o de manejo controlado producidos anualmente en su entidad en kilogramos. Aquí se cuantifican las pilas, tóneres genéricos, lámparas de fluorescentes, sólidos contaminados, sobrantes de reactivos usados en laboratorios de docencia e investigación, reactivos químicos vencidos o caducados, RPBI, etc. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 5.9. ',
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
                'question' => 'Calcule el porcentaje de tratamiento de residuos peligrosos y/o de manejo controlado. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 5.9, 5.10 y 5.11.',
                'name' => 'percentage_treated_dangerous_waste',
                'number' => 12,
                'category_id' => 5,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => '¿Su entidad cuenta con alguna política de reducción de producción de residuos peligrosos y/o de manejo controlado? Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 5.13.',
                'name' => 'dangerous_waste_reduction_policy',
                'number' => 13,
                'category_id' => 5,
                'type' => 'select',
                'required' => true,
                'needsEvidence' => true,
            ]); {
                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'si',
                    'text' => 'Si',
                    'question_id' => 63,
                    'x' => 1,
                    'y' => 1,
                ]);
                Multiinput::factory()->create([
                    'type' => 'select',
                    'name' => 'no',
                    'text' => 'No',
                    'question_id' => 63,
                    'x' => 1,
                    'y' => 2,
                ]);
            }
            Question::factory()->create([
                'question' => 'Indique si en su entidad está vigente algún programa o política que fomente el tratamiento de aguas residuales en su entidad. Marque la celda que mejor describa el estado de los programas o tecnologías implementadas para los sistemas de tratamiento de aguas residuales existentes en su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 5.14.',
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
                        'question_id' => 64,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Tratamiento preliminar',
                        'question_id' => 64,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Tratamiento Primario',
                        'question_id' => 64,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Tratamiento Secundario',
                        'question_id' => 64,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Tratamiento Terciario',
                        'question_id' => 64,
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
                        'question_id' => 64,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cribado para eliminar sólidos grandes, desgranado para eliminar arena y otros materiales pesados, y eliminación de aceites y grasas (Rejas, rejillas, tamices, mallas, etc)
                        ',
                        'question_id' => 64,
                        'x' => 2,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Incluye sedimentación y coagulación-floculación
                        (Adición de sustancias químicas para fomentar la precipitación de los contaminantes)',
                        'question_id' => 64,
                        'x' => 2,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Sistemas de crecimiento adjuntos o sistemas de crecimiento suspendidos (Tratamiento biológicos aerobios y anaerobios)',
                        'question_id' => 64,
                        'x' => 2,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Técnicas de reutilización como desinfección, filtración y oxidación avanzada para purificar aún más el agua para su reutilización en procesos industriales o riego (o3, osmosis inversa, cloración, uv etc)',
                        'question_id' => 64,
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
                        'question_id' => 64,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 64,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementado',
                        'question_id' => 64,
                        'x' => 5,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Consolidado',
                        'question_id' => 64,
                        'x' => 6,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Residuos, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 5.15.',
                'name' => 'comment',
                'number' => 15,
                'category_id' => 5,
                'type' => 'textarea',
                'required' => true,
                'needsEvidence' => true,
            ]);


        }
        //Formulario de Agua
        {
            Question::factory()->create([
                'question' => 'Indique si la entidad cuenta con alguna política, programa y/o tecnología que fomente la conservación del agua. Marque la celda que corresponda a la etapa del programa. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.1.',
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
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Cuidado de cuerpos de agua superficiales (ríos, lagos, estanques)',
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Recolección de lluvia',
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Implementación de tanques de agua',
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Pozos de recarga',
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Bordos de agua/ embalses',
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Humedales artificiales',
                        'question_id' => 66,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Otro',
                        'question_id' => 66,
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
                        'question_id' => 66,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 66,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementado',
                        'question_id' => 66,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Consolidado',
                        'question_id' => 66,
                        'x' => 5,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique si la entidad cuenta con alguna política, programa y/o tecnología que fomente el uso de agua reciclada. Marque la celda que corresponda a la etapa del programa. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.2.',
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
                        'question_id' => 67,
                        'x' => 1,
                        'y' => 1,

                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Uso de agua reciclada para descarga de inodoros',
                        'question_id' => 67,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Uso de agua reciclada para lavar automóviles',
                        'question_id' => 67,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Uso de agua reciclada para regar áreas verdes',
                        'question_id' => 67,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Uso de agua reciclada para regar macetas',
                        'question_id' => 67,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Otro',
                        'question_id' => 67,
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
                        'question_id' => 67,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 67,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementado',
                        'question_id' => 67,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Consolidado',
                        'question_id' => 67,
                        'x' => 5,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Índique la cantidad total de aparatos electrónicos y muebles que usan agua para operar dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.3.',
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
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Grifos para lavado manos convencionales (válvula con torniquete)',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Llaves para llenado de cubetas',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Sanitarios convencionales',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Sistemas de riego para áreas verdes',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Bombas de extracción de pozo',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Regaderas',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Lavaojos',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Otro',
                        'question_id' => 68,
                        'x' => 1,
                        'y' => 9,
                    ]);
                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cantidad',
                        'question_id' => 68,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }

            Question::factory()->create([
                'question' => '4 Índique la cantidad total de aparatos electrónicos y muebles que ahorran agua dentro de su entidad. Recuerde tomar en cuenta aquellos empleados para actividades de aprendizaje, laboratorios, aseo y bienestar del personal docente y administrativo. Algunos ejemplos de éstos se refieren a acciones y accesorios para el uso eficiente de agua. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.4.',
                'name' => 'efficient_water_program_2',
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
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Grifos para lavado manos automatizados',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Grifos para lavado manos dosificadores',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Llaves para llenado de cubetas sin goteras',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Sanitarios con desfogue eficiente',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Sanitarios con tanques de descarga menores de 6 L',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Implementación de botellas dentro de los tanques sanitarios para ahorro de agua por descarga',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Implementación de dispositivos destinados al ahorro de agua por descarga de inodoros',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 8,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'h',
                        'text' => 'Número telefónico para reporte de fugas a la vista',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 9,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'i',
                        'text' => 'Horarios para riego de jardines por la mañana o por la noche',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 10,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'j',
                        'text' => 'Sistema automatizado de riego',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 11,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'k',
                        'text' => 'Campañas de concientización sobre el cuidado del agua',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 12,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'l',
                        'text' => 'Foros, pláticas y talleres sobre el cuidado del agua',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 13,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'm',
                        'text' => 'Otro',
                        'question_id' => 69,
                        'x' => 1,
                        'y' => 14,
                    ]);

                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cantidad',
                        'question_id' => 69,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de políticas, aparatos electrónicos y muebles que ahorran agua utilizados en su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 6.3 y 6.4.',
                'name' => 'percentage_efficient_water_program',
                'number' => 5,
                'category_id' => 6,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Indique la cantidad de agua en litros anual que consume dentro de su entidad acorde las distintas fuentes presentadas en la tabla. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.6.',
                'name' => 'water_consumption',
                'number' => 6,
                'category_id' => 6,
                'type' => 'tableinteger',
                'required' => true,
                'needsEvidence' => true,
            ]); {
                //Side headers
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Fuente de abastecimiento',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Agua potabilizada dentro de la UASLP',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Agua potabilizada fuera de la UASLP',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Agua tratada dentro de la UASLP',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Agua tratada fuera de la UASLP',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Agua de colector pluvial',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Agua subterránea',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Agua superficial',
                        'question_id' => 71,
                        'x' => 1,
                        'y' => 8,
                    ]);
                } {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Cantidad en L',
                        'question_id' => 71,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique si la entidad cuenta con alguna política, programa y/o tecnología que procure el control de la contaminación del agua en la entidad. Marque la celda que corresponda a la etapa de algún programa destinado a evitar descargas de agua contaminada en el sistema de drenaje municipal. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.7.',
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
                        'question_id' => 72,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Mecanismo para comprobar periódicamente la calidad del agua
                        (sensores, medidores)',
                        'question_id' => 72,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Monitoreo de parámetros físicos, químicos o biológicos',
                        'question_id' => 72,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Implementación de protocolos de tratamiento de residuos líquidos para disminuir y/o eliminar descargas contaminadas.',
                        'question_id' => 72,
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
                        'question_id' => 72,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 72,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementado',
                        'question_id' => 72,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Consolidado',
                        'question_id' => 72,
                        'x' => 5,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique la institución que le abastece de agua a su entidad y repote los consumos bimestrales en volumen y pesos mexicanos. ',
                'name' => 'water_supplier',
                'number' => 8,
                'category_id' => 6,
                'type' => 'tableinteger',
                'required' => true,
            ]); {
                //Side headings
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Periodo de facturación',
                        'question_id' => 73,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Enero-Febrero',
                        'question_id' => 73,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Marzo-Abril',
                        'question_id' => 73,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Mayo-Junio',
                        'question_id' => 73,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Julio-Agosto',
                        'question_id' => 73,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Septiembre-Octubre',
                        'question_id' => 73,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Noviembre-Diciembre',
                        'question_id' => 73,
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
                        'question_id' => 73,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'cost',
                        'text' => 'Costo en pesos mexicanos ($)',
                        'question_id' => 73,
                        'x' => 3,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Agua, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 6.9.',
                'name' => 'comment',
                'number' => 9,
                'category_id' => 6,
                'type' => 'textarea',
                'required' => true,
                'needsEvidence' => true,
            ]);


        }
        //Formulario de Transporte
        {
            Question::factory()->create([
                'question' => 'Indique el número de automóviles (con motor de combustión) que son propiedad y directamente gestionados por la entidad. Incluya vehículos subcontratados a terceros. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.1.',
                'name' => 'cars',
                'number' => 1,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Indique el número promedio de automóviles (con motor de combustión) que entran diariamente a su entidad tomando en consideración fechas festivas y periodos vacacionales. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.2.',
                'name' => 'cars_entry',
                'number' => 2,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Indique el número promedio de motocicletas (con motor de combustión) que entran diariamente a su entidad tomando en consideración fechas festivas y periodos vacacionales. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.3.',
                'name' => 'bikes',
                'number' => 3,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Calcule el índice de vehículos motorizados por persona en su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 2.1, 2.3, 2.4, 7.2 y 7.3.',
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
                'question' => 'Indique el promedio total de viajes realizado por los vehículos de transporte de la entidad en un año..',
                'name' => 'trips',
                'number' => 6,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
            ]);
            Question::factory()->create([
                'question' => 'Seleccione la medida que promueve y/o incentiva el uso de vehículos de cero emisiones (bicicletas, scooters, patinetas, patines, automóviles eléctricos, motocicletas eléctricas, etc.) para el transporte dentro del campus. Indique su respuesta seleccionando la celda que mejor le convenga. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.8.',
                'name' => 'zero_emission_program',
                'number' => 7,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
            ]);
            Question::factory()->create([
                'question' => 'Seleccione la medida que promueve y/o incentiva el uso de vehículos de cero emisiones (bicicletas, scooters, patinetas, patines, automóviles eléctricos, motocicletas eléctricas, etc.) para el transporte dentro del campus. Indique su respuesta seleccionando la celda que mejor le convenga. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.8.',
                'name' => 'zero_emission_program',
                'number' => 8,
                'category_id' => 7,
                'type' => 'verticalradio',
                'required' => true,
                'needsEvidence' => true,
            ]); {
                //Side headings
                {
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '',
                        'text' => 'Programa, política o tecnología',
                        'question_id' => 82,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '0',
                        'text' => 'No hay vehículos cero emisiones disponibles',
                        'question_id' => 82,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'Estos no son posibles o prácticos',
                        'question_id' => 82,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '6',
                        'text' => 'Estos vehículos están disponibles, pero no los proporciona la entidad',
                        'question_id' => 82,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '8',
                        'text' => 'Si hay vehículos de cero emisiones disponibles, proporcionados por la universidad',
                        'question_id' => 82,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '8',
                        'text' => 'Los vehículos cero emisiones están disponibles y son proporcionados por la universidad de forma gratuita. Estos son regularmente usados por la comunidad.',
                        'question_id' => 82,
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
                        'question_id' => 82,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique el número promedio diario de vehículos cero emisiones (bicicletas, scooters, patinetas, patines, automóviles eléctricos, motocicletas eléctricas, etc.) que ingresan a su entidad. Contabilice vehículos de la universidad y propiedad privada. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.9.',
                'name' => 'zero_emission_vehicles',
                'number' => 9,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Calcule el índice de vehículos de cero emisiones por persona en su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 2.1, 2.3, 2.4 y 7.8.',
                'name' => 'zero_emission_vehicles_per_person',
                'number' => 10,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Indique el área total de estacionamientos de tierra de su entidad en metros cuadrados. Puede estimar o validar esta área utilizando la función de mapas de Google. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.11.',
                'name' => 'parking_area',
                'number' => 11,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Indique el área total de estacionamientos encarpetados de su entidad en metros cuadrados (asfalto, cemento, chapopote, etc.). Puede estimar o validar esta área utilizando la función de mapas de Google. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.12.',
                'name' => 'paved_parking_area',
                'number' => 12,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'needsEvidence' => true,
            ]);
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de estacionamientos de tierra de su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 1.2 y 7.11.',
                'name' => 'dirt_parking_percentage',
                'number' => 13,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de estacionamiento de pavimentos de su entidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 1.2 y 7.12.',
                'name' => 'paved_parking_percentage',
                'number' => 14,
                'category_id' => 7,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Programas e iniciativas que propongan la disminución de área de estacionamiento y el uso de vehículos privados en la entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.15.',
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
                        'question_id' => 89,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Programa para limitar o disminuir el área de estacionamiento en la entidad',
                        'question_id' => 89,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Iniciativas para disminuir el uso de vehículos motorizados privados en el campus (días sin automóviles, uso compartido de automóviles, cobro elevado de tarifas de estacionamiento, becas para la movilidad, uso compartido de bicicletas, abonos a tarifas bajas, limitación del coche de los estudiantes, etc.)',
                        'question_id' => 89,
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
                        'question_id' => 89,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '3',
                        'text' => 'En planeación',
                        'question_id' => 89,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'Recién implementado',
                        'question_id' => 89,
                        'x' => 4,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'Consolidado',
                        'question_id' => 89,
                        'x' => 5,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Programas e iniciativas que propongan la seguridad vial y la movilidad urbana sostenible. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.16.',
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
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Caminos peatonales disponibles en la entidad',
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'Caminos peatonales disponibles y diseñados para la seguridad',
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Hay caminos peatonales disponibles, diseñados para la seguridad y conveniencia',
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Senderos peatonales disponibles, diseñados para la seguridad y la comodidad, y en algunas partes cuentan con características adaptadas para personas con discapacidad.',
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Caminos peatonales equipados con iluminación',
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Instalaciones viales adaptadas y adecuadas para personas con discapacidad ',
                        'question_id' => 90,
                        'x' => 1,
                        'y' => 7,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'g',
                        'text' => 'Estaciones y/o servicio de reparación de bicicletas dentro de la entidad',
                        'question_id' => 90,
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
                        'question_id' => 90,
                        'x' => 2,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '7',
                        'text' => 'En planeación',
                        'question_id' => 90,
                        'x' => 3,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => '10',
                        'text' => 'En función',
                        'question_id' => 90,
                        'x' => 4,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Si su entidad cuenta con alguna otra información sobresaliente en el tema de Transporte, por favor, escriba al respecto. Pueden ser programas,  políticas internas, iniciativas, campañas, entre otros. No hay extensión máxima. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 7.17.',
                'name' => 'comment',
                'number' => 17,
                'category_id' => 7,
                'type' => 'textarea',
                'required' => true,
                'needsEvidence' => true,
            ]);

        }

        //Formulario de Educación e investigación
        {
            Question::factory()->create([
                'question' => 'Indique el número de programas educativos que se ofrecen en su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.1.',
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
                        'question_id' => 92,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Educación media superior (preparatoria)',
                        'question_id' => 92,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'TSU',
                        'question_id' => 92,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Licenciatura',
                        'question_id' => 92,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Maestría',
                        'question_id' => 92,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Especialidad',
                        'question_id' => 92,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Doctorado',
                        'question_id' => 92,
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
                        'question_id' => 92,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }
            Question::factory()->create([
                'question' => 'Indique número y nombre de programas educativos que tienen una orientación explícita hacia el cuidado del medio ambiente o la sostenibilidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.2.',
                'name' => 'environmental_programs',
                'number' => 2,
                'category_id' => 8,
                'type' => 'tableintegername',
                'required' => true,
                'needsEvidence' => true,
            ]); {

            }

            Question::factory()->create([
                'question' => 'Número total de cursos o materias que se ofrecen en su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.3..',
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
                        'question_id' => 94,
                        'x' => 1,
                        'y' => 1,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'a',
                        'text' => 'Educación media superior (preparatoria)',
                        'question_id' => 94,
                        'x' => 1,
                        'y' => 2,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'b',
                        'text' => 'TSU',
                        'question_id' => 94,
                        'x' => 1,
                        'y' => 3,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'c',
                        'text' => 'Licenciatura',
                        'question_id' => 94,
                        'x' => 1,
                        'y' => 4,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'd',
                        'text' => 'Maestría',
                        'question_id' => 94,
                        'x' => 1,
                        'y' => 5,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'e',
                        'text' => 'Especialidad',
                        'question_id' => 94,
                        'x' => 1,
                        'y' => 6,
                    ]);
                    Multiinput::factory()->create([
                        'type' => 'heading',
                        'name' => 'f',
                        'text' => 'Doctorado',
                        'question_id' => 94,
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
                        'question_id' => 94,
                        'x' => 2,
                        'y' => 1,
                    ]);
                }
            }

            Question::factory()->create([
                'question' => '. Número de cursos o materias relacionados con temas ambientales y/o de sostenibilidad que se ofrecen en su entidad. Adjunte su evidencia en formato word (.doc) y etiquetalo con la clave 8.4.',
                'name' => 'environmental_courses',
                'number' => 4,
                'category_id' => 8,
                'type' => 'tableintegername',
                'required' => true,
                'needsEvidence' => true,
            ]); {

            }
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de programas educativos que tienen una orientación explícita hacia el cuidado del medio ambiente o la sostenibilidad. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 8.1 y 8.2.',
                'name' => 'environmental_programs_percentage',
                'number' => 5,
                'category_id' => 8,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);
            Question::factory()->create([
                'question' => 'Calcule el porcentaje de cursos o materias relacionados con temas ambientales y/o de sostenibilidad que se ofrecen en su entidad con respecto al total de asignaturas. Esta respuesta se calcula automáticamente con base en las respuestas de los indicadores 8.3 y 8.4.',
                'name' => 'environmental_courses_percentage',
                'number' => 6,
                'category_id' => 8,
                'type' => 'number',
                'required' => true,
                'autoAnswer' => true,
            ]);






        }

    }
}
