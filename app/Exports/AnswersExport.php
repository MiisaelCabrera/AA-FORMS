<?php

namespace App\Exports;

use App\Models\Answer;
use App\Models\Entity;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnswersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */

    private $category;


    public function __construct($category)
    {
        $this->category = $category;
    }


    public function collection()
    {

        $data = [];
        $entities = Entity::whereNotIn('id', [1])->get();
        $questionNames = Answer::where('name', 'like', '%' . $this->category . '.%')->get()->pluck('name')->unique();
        $row = ['Entidad'];
        foreach ($questionNames as $name) {
            $row[] = $name;
        }
        $data[] = $row;
        foreach ($entities as $entity) {
            $answers = Answer::where('name', 'like', '%' . $this->category . '.%')->where('entity_id', $entity->id)->get();
            $row = [$entity->name];
            foreach ($answers as $answer) {
                $row[] = $answer->answer;
            }
            $data[] = $row;
        }



        return collect($data);
    }

    public function headings(): array
    {
        // Obtener todas las categorías únicas de las respuestas
        $categories = Answer::pluck('name')->unique()->toArray();
        dd($categories);

        // Formatear los encabezados para el exportador
        $headings = ['Entidad'];

        foreach ($categories as $category) {
            $headings[] = $category;
        }

        return $headings;
    }
}


