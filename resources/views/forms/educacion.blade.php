@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('education_research.store') }}" method="POST" class="cuestionario" id='cuestionario'
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

        $('[id^="total_electronic_devices__"]').on('change', () => {
            total_electronic_devices();
            percentage_energy_efficient_devices()
        });

        function total_electronic_devices() {
            var elementos = $('[id^="total_electronic_devices__"]:not(#total_electronic_devices__sumatory_1)');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_electronic_devices__sumatory_1').val(suma);
        }


        $('[id^="total_energy_efficient_devices__"]').on('change', () => {
            total_energy_efficient_devices();
            percentage_energy_efficient_devices()
        });

        function total_energy_efficient_devices() {
            var elementos = $(
                '[id^="total_energy_efficient_devices__"]:not(#total_energy_efficient_devices__sumatory_1)');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_energy_efficient_devices__sumatory_1').val(suma);
        }

        function percentage_energy_efficient_devices() {
            var total = parseFloat($('#total_electronic_devices__sumatory_1').val());
            var energyEfficient = parseFloat($('#total_energy_efficient_devices__sumatory_1').val());

            if (!isNaN(total) && !isNaN(energyEfficient)) {
                var percentage = (energyEfficient / total) * 100;
                $('#percentage_energy_efficient_devices').val(percentage);
            }
        }

        $('#total_smart_buildings').on('change', () => {
            percentage_smart_buildings();
        });

        function percentage_smart_buildings() {
            var total = parseFloat($('#total_smart_buildings').val());
            var sustainable = 0
        };

        if (!isNaN(total) && !isNaN(sustainable)) {
            var percentage = (sustainable / total) * 100;
            $('#percentage_smart_buildings').val(percentage);
        }
    }

    $('[id^="total_renewable_energy_sources__"]').on('change', () => {
        total_renewable_energy_sources();
    });

    function total_renewable_energy_sources() {
        var elementos = $(
            '[id^="total_renewable_energy_sources__"]:not(#total_renewable_energy_sources__sumatory_1)');

        var suma = 0;

        elementos.each(function() {
            var valor = parseFloat($(this).val());

            if (!isNaN(valor)) {
                suma += valor;
            }
        });

        $('#total_renewable_energy_sources__sumatory_1').val(suma);
    }

    $('[id^="total_energy_produced__"]').on('change', () => {
        total_energy_produced();
    });

    function total_energy_produced() {
        var elementos = $(
            '[id^="total_energy_produced__"]:not(#total_energy_produced__sumatory_1)');

        var suma = 0;

        elementos.each(function() {
            var valor = parseFloat($(this).val());

            if (!isNaN(valor)) {
                suma += valor;
            }
        });

        $('#total_energy_produced__sumatory_1').val(suma);
    }

    $('[id^="total_sustainable_buildings__"][id$="_1"]').on('change', () => {
        total_sustainable_buildings_1();
    });

    function total_sustainable_buildings_1() {
        var elementos = $(
            '[id^="total_sustainable_buildings__"][id$="_1"]:not(#total_sustainable_buildings__sumatory_1)'
        );

        var suma = 0;

        elementos.each(function() {
            var valor = parseFloat($(this).val());

            if (!isNaN(valor)) {
                suma += valor;
            }
        });

        $('#total_sustainable_buildings__sumatory_1').val(suma);
    }

    $('[id^="total_sustainable_buildings__"][id$="_2"]').on('change', () => {
        total_sustainable_buildings_2();
    });

    function total_sustainable_buildings_2() {
        var elementos = $(
            '[id^="total_sustainable_buildings__"][id$="_2"]:not(#total_sustainable_buildings__sumatory_2)'
        );

        var suma = 0;

        elementos.each(function() {
            var valor = parseFloat($(this).val());

            if (!isNaN(valor)) {
                suma += valor;
            }
        });

        $('#total_sustainable_buildings__sumatory_2').val(suma);
    }


    $('[id^="greenhouse_gas_emission_program_"]').on('change', () => {
        greenhouse_gas_emission_program();
    });

    function greenhouse_gas_emission_program() {
        var elementos = $(
            '[id^="greenhouse_gas_emission_program_"]');

        var suma = 0;

        elementos.each(function() {
            if ($(this).is(':checked')) {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            }
        });

        $('#greenhouse_gas_emission_program').val(suma);
    }

    $('[id^="innovative_programs__"]').on('change', () => {
        innovative_programs();
    });

    function innovative_programs() {
        var elementos = $(
            '[id^="innovative_programs__"]:not(#innovative_programs__sumatory_1)');

        var suma = 0;

        elementos.each(function() {
            var valor = parseFloat($(this).val());

            if (!isNaN(valor)) {
                suma += valor;
            }
        });

        $('#innovative_programs__sumatory_1').val(suma);
    }

    $('[id^="total_gas_installations__"]').on('change', () => {
        total_gas_installations();
    });

    function total_gas_installations() {
        var elementos = $(
            '[id^="total_gas_installations__"]:not(#total_gas_installations__sumatory_1)');

        var suma = 0;

        elementos.each(function() {
            var valor = parseFloat($(this).val());

            if (!isNaN(valor)) {
                suma += valor;
            }
        });

        $('#total_gas_installations__sumatory_1').val(suma);
    }


    $("#cuestionario").submit(function(e) {
        e.preventDefault();
        $('input').prop('disabled', false);

        const sumatories = $('[id$="__sumatory_1"]');
        sumatories.each(function() {
            const id = $(this).attr('id');
            const newId = id.replace('__sumatory_1', '');
            $(this).attr('id', newId);
            $(this).attr('name', newId + '__a');
        });
        const sumatories2 = $('[id$="__sumatory_2"]');
        sumatories2.each(function() {
            const id = $(this).attr('id');
            const newId = id.replace('__sumatory_2', '');
            $(this).attr('id', newId);
            $(this).attr('name', newId + '__b');
        });

        $('[id^="total_electronic_devices__"]').prop('disabled', true);
        $('[id^="total_electronic_devices__"]').prop('disabled', true);
        $('[id^="total_energy_efficient_devices__"]').prop('disabled', true);
        $('[id^="total_renewable_energy_sources__"]').prop('disabled', true);
        $('[id^="total_energy_produced__"]').prop('disabled', true);
        $('[id^="total_sustainable_buildings__"][id$="_1"]').prop('disabled', true);
        $('[id^="total_sustainable_buildings__"][id$="_2"]').prop('disabled', true);
        $('[id^="greenhouse_gas_emission_program_"]').prop('disabled', true);
        $('[id^="innovative_programs__"]').prop('disabled', true);
        $('[id^="total_gas_installations__"]').prop('disabled', true);


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
                        "{{ route('education_research.index') }}";
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
