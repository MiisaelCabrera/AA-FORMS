@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('infraestructure.store') }}" method="POST" class="cuestionario" id='cuestionario'
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

        $('#area_total').on('change', () => {
            console.log('change');
            calculatePercentageOpenSpaces();
            calculatePercentageForestVegetation();
            calculatePercentagePlantedVegetation();
            calculatePercentageWaterAbsorption();
            calculatePercentageBuildingMaintenance();
        });

        $('#area_ground_floor').on('change', () => {
            calculatePercentageOpenSpaces();
        });

        $('#area_forest_vegetation').on('change', () => {
            calculatePercentageForestVegetation();
        });

        $('#area_planted_vegetation').on('change', () => {
            calculatePercentagePlantedVegetation();
        });

        $('#area_water_absorption').on('change', () => {
            calculatePercentageWaterAbsorption();
        });

        $('#area_building_maintenance').on('change', () => {
            calculatePercentageBuildingMaintenance();
        });


        function calculatePercentageOpenSpaces() {
            const area_total = parseFloat($("#area_total").val());
            const area_ground_floor = parseFloat($("#area_ground_floor").val());
            const percentage_open_spaces = ((area_total - area_ground_floor) / area_total) * 100;
            $("#percentage_open_spaces").val(percentage_open_spaces);
        }

        function calculatePercentageForestVegetation() {
            const area_total = parseFloat($("#area_total").val());
            const area_forest_vegetation = parseFloat($("#area_forest_vegetation").val());
            const percentage_forest_vegetation = (area_forest_vegetation / area_total) * 100;
            $("#percentage_forest_vegetation").val(percentage_forest_vegetation);
        }

        function calculatePercentagePlantedVegetation() {
            const area_total = parseFloat($("#area_total").val());
            const area_planted_vegetation = parseFloat($("#area_planted_vegetation").val());
            const percentage_planted_vegetation = (area_planted_vegetation / area_total) * 100;
            $("#percentage_planted_vegetation").val(percentage_planted_vegetation);
        }

        function calculatePercentageWaterAbsorption() {
            const area_total = parseFloat($("#area_total").val());
            const area_water_absorption = parseFloat($("#area_water_absorption").val());
            const percentage_water_absorption = (area_water_absorption / area_total) * 100;
            $("#percentage_water_absorption").val(percentage_water_absorption);
        }

        function calculatePercentageBuildingMaintenance() {
            const area_total = parseFloat($("#area_total").val());
            const area_building_maintenance = parseFloat($("#area_building_maintenance").val());
            const percentage_building_maintenance = (area_building_maintenance / area_total) * 100;
            $("#percentage_building_maintenance").val(percentage_building_maintenance);
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
                            "{{ route('infraestructure.index') }}";
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
