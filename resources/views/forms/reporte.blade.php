@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])

    <form method="POST" action="{{ route('report.store') }}" id="cuestionario" class="cuestionario">
        @csrf

        <div class="question-block">

            <label for="report">Sube tu archivo</label>
            <input type="file" name="report" id="report">
        </div>
        <button class="submit">Subir</button>
    </form>
    @foreach ($reports as $report)
        @php
            $entity = $entities->where('id', $report->entity_id)->first();

            $filename = explode('/', $report->path);
        @endphp
        <div class="history-card">
            <div>
                <h3>{{ $entity->name . ': ' . end($filename) }}</h3>
                <a href="{{ asset($report->path) }}">{{ 'Descargar ' . end($filename) }}</a>
            </div>
            <div class="history-card__date">
                {{ $report->created_at }}
            </div>
        </div>
    @endforeach
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {


        $("#cuestionario").submit(function(e) {

            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,

                processData: false,
                contentType: false,
                success: function(response) {
                    swal.fire({
                        title: '¡Guardado!',
                        text: 'Se ha guardado la información',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        window.location.href =
                            "{{ route('report.index') }}";
                    });
                },
                error: function(response) {
                    swal.fire({
                        title: '¡Error!',
                        text: 'Ha ocurrido un error',
                        icon: 'error',
                        confirmButtonText: 'Aceptar'
                    });
                },
            });

        });

    })
</script>
