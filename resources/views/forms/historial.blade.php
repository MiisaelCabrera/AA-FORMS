@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])

    @foreach ($files as $file)
        @php
            $entity = $entities->where('id', $file->entity_id)->first();
            $filename = explode('/', $file->path);
        @endphp
        <div class="history-card">
            <div>
                <h3>{{ $entity->name . ': ' . end($filename) }}</h3>
                <a href="{{ asset($file->path) }}">{{ 'Descargar ' . end($filename) }}</a>
            </div>
            <div class="history-card__date">
                {{ $file->created_at }}
            </div>
        </div>
    @endforeach
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
