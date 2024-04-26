@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])

    <div class="cuestionario">
        <div class="question-block">
            <h2>Pregunta 1</h2>
            <p>Contenido de la pregunta 1</p>
        </div>
    </div>
@endsection
