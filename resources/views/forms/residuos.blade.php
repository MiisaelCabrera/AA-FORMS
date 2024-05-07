@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('waste.update', 5) }}" method="POST" class="cuestionario" id='cuestionario'
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
                'isCompleted' => $isCompleted,
            ])
        @endforeach

        <input type="number" style="display: none" name="isCompleted" id="isCompleted">

        <button type="submit" class="submit">Guardar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {

        $('#total_waste').on('change', function() {
            percentage_treated_organic_waste();
            percentage_treated_inorganic_waste();
        })
        $('#treated_organic_waste').on('change', function() {
            percentage_treated_organic_waste();
        })
        $('#treated_inorganic_waste').on('change', function() {
            percentage_treated_inorganic_waste();
        })

        function percentage_treated_organic_waste() {

            var total_waste = parseFloat($('#total_waste').val());
            var treated_organic_waste = parseFloat($('#treated_organic_waste').val());
            var percentage = (treated_organic_waste * 100) / total_waste;
            $('#percentage_treated_organic_waste').val(percentage);
        }

        function percentage_treated_inorganic_waste() {
            var total_waste = parseFloat($('#total_waste').val());
            var treated_inorganic_waste = parseFloat($('#treated_inorganic_waste').val());
            var percentage = (treated_inorganic_waste * 100) / total_waste;
            $('#percentage_treated_inorganic_waste').val(percentage);
        }

        $('#dangerous_waste').on('change', function() {
            percentage_treated_dangerous_waste();
        })
        $('#treated_dangerous_waste').on('change', function() {
            percentage_treated_dangerous_waste();
        })
        $('#sent_dangerous_waste').on('change', function() {
            percentage_treated_dangerous_waste();
        })

        function percentage_treated_dangerous_waste() {
            var dangerous_waste = parseFloat($('#dangerous_waste').val());
            var treated_dangerous_waste = parseFloat($('#treated_dangerous_waste').val());
            var sent_dangerous_waste = parseFloat($('#sent_dangerous_waste').val());
            var percentage = ((treated_dangerous_waste + sent_dangerous_waste) * 100) / dangerous_waste;
            $('#percentage_treated_dangerous_waste').val(percentage);
        }


        $("#cuestionario").submit(function(e) {

            e.preventDefault();

            var formularioCompleto = 1;
            $(this).find('.required').each(function() {
                if ($(this).val() == '') {
                    formularioCompleto = 0;
                }
            });

            $('#isCompleted').val(formularioCompleto);

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
                            "{{ route('waste.index') }}";
                    });
                },
                error: function(response) {
                    var message = response.responseJSON.message;
                    swal.fire({
                        title: '¡Error!',
                        text: message,
                        icon: 'error',
                        confirmButtonText: 'Aceptar'
                    });
                },
            });

        });

    })
</script>
