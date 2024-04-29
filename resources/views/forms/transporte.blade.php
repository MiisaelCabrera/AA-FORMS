@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('transport.update', 1) }}" method="POST" class="cuestionario" id='cuestionario'
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
        <input type="number" style="display:none;" name="greenhouse_gas_emission_program" id="greenhouse_gas_emission_program">

        <button type="submit" class="submit">Guardar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

    $(document).ready(function() {
        motorized_vehicles_per_person();
        zero_emission_vehicles_per_person();
        dirt_parking_percentage();
        paved_parking_percentage();
        

        $('#cars_entry').change(function() {
            motorized_vehicles_per_person();
        });
        $('#bikes').change(function() {
            motorized_vehicles_per_person();
        });
        
        function motorized_vehicles_per_person(){
            console.log('Jola')
            const a21 = {{$a21}};
            const a23 = {{$a23}};
            const a24 = {{$a24}};
            const a72 = parseFloat($('#cars_entry').val());
            const a73 = parseFloat($('#bikes').val());

            const calculation = (a72 + a73) / (a21 + a23 + a24 ) * 100;
            if(isNaN(calculation) || !isFinite(calculation)){
                $('#motorized_vehicles_per_person').val(0);
                return;
            }
            $('#motorized_vehicles_per_person').val(calculation);
        }

        $('input[type="radio"][name="zero_emission_program"]').change(function() {
            zero_emission_vehicles_per_person();
        });

        function zero_emission_vehicles_per_person(){
            const a21 = {{$a21}};
            const a23 = {{$a23}};
            const a24 = {{$a24}};
            var a78 = parseFloat($('input[type="radio"][name="zero_emission_program"]:checked').val());
            const calculation = a78 / (a21 + a23 + a24 ) * 100;
            if(isNaN(calculation) || !isFinite(calculation)){
                $('#zero_emission_vehicles_per_person').val(0);
                return;
            }
            $('#zero_emission_vehicles_per_person').val(calculation);
        }

        $('#parking_area').change(function() {
            dirt_parking_percentage();
        });

        function dirt_parking_percentage(){
            const a12 = {{$a12}};
            const a711 = parseFloat($('#parking_area').val());
            const calculation = a711 / a12 * 100;
            if(isNaN(calculation) || !isFinite(calculation)){
                $('#dirt_parking_percentage').val(0);
                return;
            }
            $('#dirt_parking_percentage').val(calculation);
        }

        $('#paved_parking_area').change(function() {
            paved_parking_percentage();
        });

        function paved_parking_percentage(){
            const a12 = {{$a12}};
            const a712 = parseFloat($('#paved_parking_area').val());
            const calculation = a712 / a12 * 100;
            if(isNaN(calculation) || !isFinite(calculation)){
                $('#paved_parking_percentage').val(0);
                return;
            }
            $('#paved_parking_percentage').val(calculation);
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
                        "{{ route('transport.index') }}";
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
