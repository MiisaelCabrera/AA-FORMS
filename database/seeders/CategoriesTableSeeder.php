<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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
        Category::factory()->create([
            'name' => 'Preguntas frecuentes',
            'controller' => 'FAQ',
            'number' => 12,
        ]);
        Category::factory()->create([
            'name' => 'Dar de alta usuarios',
            'controller' => 'usersUpload',
            'number' => 13,
        ]);
        Category::factory()->create([
            'name' => 'Dar de alta archivos',
            'controller' => 'filesUpload',
            'number' => 14,
        ]);
        Category::factory()->create([
            'name' => 'Respuestas en excel',
            'controller' => 'excel',
            'number' => 15,
        ]);
    }
}
