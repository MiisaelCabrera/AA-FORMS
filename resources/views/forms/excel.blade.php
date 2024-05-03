@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])
    @foreach ($categories as $category)
        @if ($category->number <= 8)
            <form action="{{ route('excel.show', $category->id) }}" class="history-card">
                <h3>{{ $category->name }}</h3>
                <Button class="submit">Descargar respuestas</Button>
            </form>
        @endif
    @endforeach
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
