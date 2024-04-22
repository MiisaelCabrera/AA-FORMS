@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('enviroment.store') }}" method="POST" class="cuestionario" id='cuestionario'
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

        <input type="number" style="display: none" value="{{ $totalArea }}" id="total_area">
        <input type="number" style="display: none" value="{{ $totalGround }}" id="total_ground">

        <button type="submit" class="submit">Enviar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    $(document).ready(function() {



        $('#number_academic_staff__a').on('change', () => {
            calculatePoblationIndex();
        });
        $('#number_administrative_staff__a').on('change', () => {
            calculatePoblationIndex();
        });
        $('#number_students__a').on('change', () => {
            calculatePoblationIndex();
        });
        $('#budget_sustainability__a').on('change', () => {
            calculatePoblationIndex();
        });


        $('#total_budget__a').on('change', () => {
            sustainBudget();
        });
        $('#total_budget__b').on('change', () => {
            sustainBudget();
        });
        $('#total_budget__c').on('change', () => {
            sustainBudget();
        });
        $('#budget_sustainability__a').on('change', () => {
            sustainBudget();
        });
        $('#budget_sustainability__b').on('change', () => {
            sustainBudget();
        });
        $('#budget_sustainability__c').on('change', () => {
            sustainBudget();
        });


        function sustainBudget() {

            const promedio = (promedio2() / promedio1());;
            $("#percentage_budget_sustainability").val(promedio);
        }


        function promedio1() {
            const y2021 = parseFloat($("#total_budget__a").val());
            const y2022 = parseFloat($("#total_budget__b").val());
            const y2023 = parseFloat($("#total_budget__c").val());

            var promedio = (y2021 + y2022 + y2023) / 3;
            return promedio;
        }

        function promedio2() {
            const y2021 = parseFloat($("#budget_sustainability__a").val());
            const y2022 = parseFloat($("#budget_sustainability__b").val());
            const y2023 = parseFloat($("#budget_sustainability__c").val());

            var promedio = (y2021 + y2022 + y2023) / 3;
            return promedio;
        }



        function calculatePoblationIndex() {
            const total_alumnos = parseFloat($("#number_students__a").val());
            const total_academicos = parseFloat($("#number_academic_staff__a").val());
            const total_administrativos = parseFloat($("#number_administrative_staff__a").val());
            const total_ground = parseFloat($("#total_ground").val());
            const total_area = parseFloat($("#total_area").val());
            const value = ((total_area - total_ground) / (total_academicos + total_administrativos +
                total_alumnos)) * 100;
            $("#population_index_open_spaces").val(value);
        }


        $("#cuestionario").submit(function(e) {
            e.preventDefault();
            $('input').prop('disabled', false);
            var formData = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                success: function(response) {
                    swal.fire({
                        title: '¡Guardado!',
                        text: 'Se ha guardado la información',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        window.location.href =
                            "{{ route('enviroment.index') }}";
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
