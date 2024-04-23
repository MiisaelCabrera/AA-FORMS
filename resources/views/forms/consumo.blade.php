@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('responsible_consumption.store') }}" method="POST" class="cuestionario" id='cuestionario'
        enctype="multipart/form-data">
        @csrf

        <!-- Preguntas del cuestionario-->
        @foreach ($questions as $question)
            @php
                $questionInputs = null;

                if (array_key_exists($question->id, $multiinputs)) {
                    $questionInputs = $multiinputs[$question->id];
                }

            @endphp
            @include('forms.questionBlocks', [
                'questionInputs' => $questionInputs,
                'question' => $question,
            ])
        @endforeach

        <button type="submit" class="submit">Enviar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    $(document).ready(function() {

        $('#office_supplies_budget').on('change', () => {
            percentage_green_budget();
        });

        $('#sustentable_supplies_budget').on('change', () => {
            percentage_green_budget();
        });

        function percentage_green_budget() {
            var budget = parseFloat($('#office_supplies_budget').val());
            var sustentable = parseFloat($('#sustentable_supplies_budget').val());

            var promedio = (sustentable / budget) * 100;


            $('#percentage_green_budget').val(promedio);
        }


        $("#cuestionario").submit(function(e) {
            e.preventDefault();
            $('input').prop('disabled', false);

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
                            "{{ route('responsible_consumption.index') }}";
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
