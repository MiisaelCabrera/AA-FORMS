@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('water.store') }}" method="POST" class="cuestionario" id='cuestionario'
        enctype="multipart/form-data">
        @csrf

        <!-- Preguntas del cuestionario-->
        @foreach ($questions as $question)
            @php
                $questionInputs = null;
                $answer = $answers->where('question_id', $question->id);

                if (array_key_exists($question->id, $multiinputs)) {
                    $questionInputs = $multiinputs[$question->id];
                }

            @endphp
            @include('forms.questionBlocks', [
                'questionInputs' => $questionInputs,
                'question' => $question,
                'answer' => $answer,
            ])
        @endforeach
        <input type="number" id="efficient_water_program" name="efficient_water_program" style="display: none">
        <input type="number" id="electric_water_program" name="electric_water_program" style="display:none">
        <input type="number" id="water_supplier_a" name="water_supplier__b" style="display:none">
        <input type="number" id="water_supplier_b" name="water_supplier__b" style="display:none">
        <input type="number" id="water_consumption" name="water_consumption" style="display: none">

        <button type="submit" class="submit">Enviar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {

        $('[id^="efficient_water_program__"]').on('change', () => {
            efficient_water_program();
            percentage_efficient_water_program();
        });

        function efficient_water_program() {
            var elementos = $(
                '[id^="efficient_water_program__"]');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#efficient_water_program').val(suma);
        }

        $('[id^="electric_water_program__"]').on('change', () => {
            electric_water_program();
            percentage_efficient_water_program();
        });

        function electric_water_program() {
            var elementos = $(
                '[id^="electric_water_program__"]');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#electric_water_program').val(suma);
        }

        function percentage_efficient_water_program() {
            var a63 = parseFloat($('#efficient_water_program').val());
            var a64 = parseFloat($('#efficient_water_program_2').val());
            var porcentaje = a64 * 100 / a63;
            $('#percentage_efficient_water_program').val(porcentaje);

        }

        $('[id^="water_consumption__"]').on('change', () => {
            water_consumption();
        });

        function water_consumption() {
            var elementos = $(
                '[id^="water_consumption__"]');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#water_consumption').val(suma);
        }



        $('[id^="water_supplier__"][id$="_1"]').on('change', () => {
            water_supplier_1();
        });

        function water_supplier_1() {
            var elementos = $(
                '[id^="water_supplier__"][id$="_1"]'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#water_supplier_a').val(suma);
        }

        $('[id^="water_supplier__"][id$="_2"]').on('change', () => {
            total_sustainable_buildings_2();
        });

        function total_sustainable_buildings_2() {
            var elementos = $(
                '[id^="water_supplier__"][id$="_2"]'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#water_supplier_b').val(suma);
        }




        $("#cuestionario").submit(function(e) {
            e.preventDefault();
            $('input').prop('disabled', false);

            $('[id^="efficient_water_program__"]').prop('disabled', true);
            $('[id^="electric_water_program__"]').prop('disabled', true);
            $('[id^="water_consumption__"]').prop('disabled', true);
            $('[id^="water_supplier__"]').prop('disabled', true);


            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,

                processData: false,
                contentType: false,
                success: function(response) {

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
