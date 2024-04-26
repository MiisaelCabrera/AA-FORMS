@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('enviroment.update', 2) }}" method="POST" class="cuestionario" id='cuestionario'
        enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <!-- Preguntas del cuestionario-->
        @foreach ($questions as $question)
            @php
                $questionInputs = null;

                $answer = $answers->where('question_id', $question->id);

                if (array_key_exists($question->id, $multiinputs)) {
                    $questionInputs = $multiinputs[$question->id];
                }

                $file = $files->where('question_id', $question->id);

            @endphp
            @include('forms.questionBlocks', [
                'questionInputs' => $questionInputs,
                'question' => $question,
                'answer' => $answer,
                'file' => $file,
            ])
        @endforeach

        <input type="number" style="display: none" value="{{ $totalArea }}" id="total_area">
        <input type="number" style="display: none" value="{{ $totalGround }}" id="total_ground">

        <button type="submit" class="submit">Guardar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    $(document).ready(function() {

        var filaActual_1 = 2;
        var filaActual_2 = 2;
        var filaActual_3 = 2;
        var filaActual_4 = 2;
        $("#biodiversity_program_1").click(function() {
            console.log("click");
            if (filaActual_1 < 10) {
                var nuevaFila = $("<tr>");
                for (var i = 'a'.charCodeAt(0); i <= 'd'.charCodeAt(0); i++) {
                    console.log(String.fromCharCode(i));
                    if (String.fromCharCode(i) == 'b') {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="number" name="biodiversity_program__' +
                            String.fromCharCode(i) +
                            '__' + filaActual_1 + '__1"></td>');
                    } else {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="text" name="biodiversity_program__' +
                            String
                            .fromCharCode(i) +
                            '__' + filaActual_1 + '__1"></td>');
                    }
                }
                $("#biodiversity_program_1_table tbody").append(nuevaFila);
                filaActual_1++;
            } else {
                alert("Se ha alcanzado el límite máximo de filas.");
            }
        });

        $("#biodiversity_program_2").click(function() {
            console.log("click");
            if (filaActual_2 < 10) {
                var nuevaFila = $("<tr>");
                for (var i = 'a'.charCodeAt(0); i <= 'd'.charCodeAt(0); i++) {
                    console.log(String.fromCharCode(i));
                    if (String.fromCharCode(i) == 'b') {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="number" name="biodiversity_program__' +
                            String.fromCharCode(i) +
                            '__' + filaActual_2 + '__2"></td>');
                    } else {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="text" name="biodiversity_program__' +
                            String
                            .fromCharCode(i) +
                            '__' + filaActual_2 + '__2"></td>');
                    }
                }
                $("#biodiversity_program_2_table tbody").append(nuevaFila);
                filaActual_2++;
            } else {
                alert("Se ha alcanzado el límite máximo de filas.");
            }
        });
        $("#biodiversity_program_3").click(function() {
            console.log("click");
            if (filaActual_3 < 10) {
                var nuevaFila = $("<tr>");
                for (var i = 'a'.charCodeAt(0); i <= 'd'.charCodeAt(0); i++) {
                    console.log(String.fromCharCode(i));
                    if (String.fromCharCode(i) == 'b') {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="number" name="biodiversity_program__' +
                            String.fromCharCode(i) +
                            '__' + filaActual_3 + '__3"></td>');
                    } else {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="text" name="biodiversity_program__' +
                            String
                            .fromCharCode(i) +
                            '__' + filaActual_3 + '__3"></td>');
                    }
                }
                $("#biodiversity_program_3_table tbody").append(nuevaFila);
                filaActual_3++;
            } else {
                alert("Se ha alcanzado el límite máximo de filas.");
            }
        });
        $("#biodiversity_program_4").click(function() {
            console.log("click");
            if (filaActual_4 < 10) {
                var nuevaFila = $("<tr>");
                for (var i = 'a'.charCodeAt(0); i <= 'd'.charCodeAt(0); i++) {
                    console.log(String.fromCharCode(i));
                    if (String.fromCharCode(i) == 'b') {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="number" name="biodiversity_program__' +
                            String.fromCharCode(i) +
                            '__' + filaActual_4 + '__4"></td>');
                    } else {
                        nuevaFila.append(
                            '<td style="padding: 0%"><input style="width: 100%; text-align: center; height: 100%; margin: 0;  border: 0;" type="text" name="biodiversity_program__' +
                            String
                            .fromCharCode(i) +
                            '__' + filaActual_4 + '__4"></td>');
                    }
                }
                $("#biodiversity_program_4_table tbody").append(nuevaFila);
                filaActual_4++;
            } else {
                alert("Se ha alcanzado el límite máximo de filas.");
            }
        });



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
