@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('energy_climate_change.update', 3) }}" method="POST" class="cuestionario" id='cuestionario'
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
            @if ($question->visibility == 'public' || ($question->visibility == 'admins' && Auth::user()->role != 'user'))
                @include('forms.questionBlocks', [
                    'questionInputs' => $questionInputs,
                    'question' => $question,
                    'answer' => $answer,
                    'file' => $file,
                    'isCompleted' => $isCompleted,
                ])
            @endif
        @endforeach
        <input type="number" style="display:none;" name="greenhouse_gas_emission_program" id="greenhouse_gas_emission_program">
        <input type="number" style="display:none;" name="carbon_footprint" id="carbon_footprint">

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

        total_electronic_devices();
        total_energy_efficient_devices();
        percentage_energy_efficient_devices();
        total_sustainable_buildings_1();
        total_sustainable_buildings_2();
        total_renewable_energy_sources();
        total_energy_produced();
        total_electricity_consumption();
        total_electricity_consumption_2();
        greenhouse_gas_emission_program();
        innovative_programs();
        total_gas_installations();
        percentage_smart_buildings();
        percentage_renewable_energy_usage();
        electricity_consumption_per_person();
        carbon_footprint__a();
        carbon_footprint__b();
        carbon_footprint__c();
        carbon_footprint__d();
        carbon_footprint();
        carbon_footprint_per_person();

        function carbon_footprint() {
            var a181 = parseFloat($('#carbon_footprint__a').val());
            var a182 = parseFloat($('#carbon_footprint__b').val());
            var a183 = parseFloat($('#carbon_footprint__c').val());
            var a184 = parseFloat($('#carbon_footprint__d').val());

            var calculation = a181 + a182 + a183 + a184;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#carbon_footprint').val(0);
                return;
            }
            $('#carbon_footprint').val(calculation);
        }

        function carbon_footprint_per_person() {
            var a21 = {{ $a21 }};
            var a23 = {{ $a23 }};
            var a24 = {{ $a24 }};
            var a328 = parseFloat($('#carbon_footprint').val());

            var calculation = a328 / (a21 + a23 + a24);
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#carbon_footprint_per_person').val(0);
                return;
            }
            $('#carbon_footprint_per_person').val(calculation);
        }



        $('[id^="total_electronic_devices__"]').on('change', () => {
            total_electronic_devices();
            percentage_energy_efficient_devices()
        });

        function total_electronic_devices() {
            var elementos = $('[id^="total_electronic_devices__"]:not(#total_electronic_devices__sumatory__1)');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_electronic_devices__sumatory__1').val(suma);
        }

        $('[id^="total_energy_efficient_devices__"]').on('change', () => {
            total_energy_efficient_devices();
            percentage_energy_efficient_devices()
        });

        function total_energy_efficient_devices() {
            var elementos = $(
                '[id^="total_energy_efficient_devices__"]:not(#total_energy_efficient_devices__sumatory__1)'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_energy_efficient_devices__sumatory__1').val(suma);
        }

        function percentage_energy_efficient_devices() {
            var total = parseFloat($('#total_electronic_devices__sumatory__1').val());
            var energyEfficient = parseFloat($('#total_energy_efficient_devices__sumatory__1').val());

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
            var sustainable = {{ $a15 }};

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
                '[id^="total_renewable_energy_sources__"]:not(#total_renewable_energy_sources__sumatory__1)'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_renewable_energy_sources__sumatory__1').val(suma);
        }

        $('[id^="total_energy_produced__"]').on('change', () => {
            total_energy_produced();
        });

        function total_energy_produced() {
            var elementos = $(
                '[id^="total_energy_produced__"]:not(#total_energy_produced__sumatory__1)');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_energy_produced__sumatory__1').val(suma);

            carbon_footprint__a();

        }

        $('[id^="total_sustainable_buildings__"][id$="__1"]').on('change', () => {
            total_sustainable_buildings_1();
        });

        function total_sustainable_buildings_1() {
            var elementos = $(
                '[id^="total_sustainable_buildings__"][id$="__1"]:not(#total_sustainable_buildings__sumatory__1)'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_sustainable_buildings__sumatory__1').val(suma);
        }

        $('[id^="total_sustainable_buildings__"][id$="__2"]').on('change', () => {
            total_sustainable_buildings_2();
        });

        function total_sustainable_buildings_2() {
            var elementos = $(
                '[id^="total_sustainable_buildings__"][id$="__2"]:not(#total_sustainable_buildings__sumatory__2)'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_sustainable_buildings__sumatory__2').val(suma);
        }

        $('[id^="total_electricity_consumption__"][id$="__1"]').on('change', () => {
            total_electricity_consumption();
            percentage_renewable_energy_usage();
            electricity_consumption_per_person();
        });

        function electricity_consumption_per_person() {
            const a21 = {{ $a21 }};
            const a23 = {{ $a23 }};
            const a24 = {{ $a24 }};
            const a315 = parseFloat($('#total_electricity_consumption__sumatory__1').val());
            const calculation = a315 / (a21 + a23 + a24) * 100;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#electricity_consumption_per_person').val(0);
                return;
            }
            $('#electricity_consumption_per_person').val(calculation);
        }

        function carbon_footprint__a() {
            var a37 = parseFloat($('#total_energy_produced__sumatory__1').val());
            var calculation = (a37 / 1000) * 0.84;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#carbon_footprint__a').val(0);
                return;
            }
            $('#carbon_footprint__a').val(calculation);
        }

        function carbon_footprint__b() {
            var a71 = {{ $a71 }};
            var a76 = {{ $a76 }};
            var a77 = {{ $a77 }};

            var calculation = (a71 * a76 * a77) * .01 / 100;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#carbon_footprint__b').val(0);
                return;
            }
            $('#carbon_footprint__b').val(calculation);
        }

        function carbon_footprint__c() {
            var a72 = {{ $a72 }};
            var a77 = {{ $a77 }};
            var calculation = (a72 * 2 * a77) * .02 * 240 / 100;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#carbon_footprint__c').val(0);
                return;
            }
            $('#carbon_footprint__c').val(calculation);
        }

        function carbon_footprint__d() {
            var a73 = {{ $a73 }};
            var a77 = {{ $a77 }};
            var calculation = (a73 * 2 * a77) * .01 * 240 / 100;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#carbon_footprint__d').val(0);
                return;
            }
            $('#carbon_footprint__d').val(calculation);
        }

        function total_electricity_consumption() {
            var elementos = $(
                '[id^="total_electricity_consumption__"][id$="__1"]:not(#total_electricity_consumption__sumatory__1):not(#total_electricity_consumption__promedy__1)'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });
            var promedy = suma / elementos.length;

            $('#total_electricity_consumption__sumatory__1').val(suma);
            $('#total_electricity_consumption__promedy__1').val(promedy);
        }

        $('[id^="total_electricity_consumption__"][id$="__2"]').on('change', () => {
            total_electricity_consumption_2();
        });

        $('#total_energy_produced__sumatory__1').on('change', () => {
            percentage_renewable_energy_usage();
        })

        function percentage_renewable_energy_usage() {
            const a37 = parseFloat($('#total_energy_produced__sumatory__1').val());
            const a315 = parseFloat($('#total_electricity_consumption__sumatory__1').val());
            const calculation = a37 / (a37 + a315) * 100;
            if (isNaN(calculation) || !isFinite(calculation)) {
                $('#percentage_renewable_energy_usage').val(0);
                return;
            }
            $('#percentage_renewable_energy_usage').val(calculation);
        }

        function total_electricity_consumption_2() {
            var elementos = $(
                '[id^="total_electricity_consumption__"][id$="__2"]:not(#total_electricity_consumption__sumatory__2):not(#total_electricity_consumption__promedy__2)'
            );

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });
            var promedy = suma / elementos.length;

            $('#total_electricity_consumption__sumatory__2').val(suma);
            $('#total_electricity_consumption__promedy__2').val(promedy);
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
                '[id^="innovative_programs__"]:not(#innovative_programs__sumatory__1)');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#innovative_programs__sumatory__1').val(suma);
        }

        $('[id^="total_gas_installations__"]').on('change', () => {
            total_gas_installations();
        });

        function total_gas_installations() {
            var elementos = $(
                '[id^="total_gas_installations__"]:not(#total_gas_installations__sumatory__1)');

            var suma = 0;

            elementos.each(function() {
                var valor = parseFloat($(this).val());

                if (!isNaN(valor)) {
                    suma += valor;
                }
            });

            $('#total_gas_installations__sumatory__1').val(suma);
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

            const sumatories = $('[id$="__sumatory__1"]');
            sumatories.each(function() {
                const id = $(this).attr('id');
                const newId = id.replace('__sumatory__1', '__1');
                $(this).attr('id', newId);
                $(this).attr('name', newId);
            });
            const promedy = $('[id$="promedy__1"]');
            sumatories.each(function() {
                const id = $(this).attr('id');
                const newId = id.replace('promedy__1', '__1__2');
                $(this).attr('id', newId);
                $(this).attr('name', newId);
            });
            const sumatories2 = $('[id$="__sumatory__2"]');
            sumatories2.each(function() {
                const id = $(this).attr('id');
                const newId = id.replace('__sumatory__2', '__2');
                $(this).attr('id', newId);
                $(this).attr('name', newId);
            });


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
                            "{{ route('energy_climate_change.index') }}";
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
