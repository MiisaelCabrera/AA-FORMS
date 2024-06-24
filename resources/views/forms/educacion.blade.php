@extends('layouts.app')
@section('content')
    <!-- Header del cuestionario-->
    @include('layouts.formHeader', ['currentCategory' => $currentCategory])



    <!-- Formulario -->
    <form action="{{ route('education_research.update', 8) }}" method="POST" class="cuestionario" id='cuestionario'
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
        <input type="number" style="display:none;" name="greenhouse_gas_emission_program" id="greenhouse_gas_emission_program">

        
        <input type="number" style="display: none" name="isCompleted" id="isCompleted" >

        <button type="submit" class="submit">Guardar</button>
    </form>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {

        environmental_programs();
        environmental_courses();
        research_funds();
        environmental_research_funds();
        environmental_publications();
        environmental_thesis();
        educational_programs(); 
        courses();
        environmental_programs_percentage();
        environmental_courses_percentage();
        
        function environmental_programs_percentage(){
            a81 = parseFloat($("#educational_programs__sumatory__1").val());
            a82 = parseFloat($("#environmental_programs__g").val());

            var promedio = a82 / a81 * 100;
            if(isNaN(promedio) || !isFinite(promedio)){
                promedio = 0;
            } 
            $("#environmental_programs_percentage").val(promedio);
        }

        function environmental_courses_percentage(){
            a83 = parseFloat($("#courses__sumatory__1").val());
            a84 = parseFloat($("#environmental_courses__g").val());

            var promedio = a84 / a83 * 100;
            if(isNaN(promedio) || !isFinite(promedio)){
                promedio = 0;
            } 
            $("#environmental_courses_percentage").val(promedio);
        }


        $("[id^=environmental_programs__][type=number]").change(function() {
            environmental_programs();
            environmental_programs_percentage();
        });

        function environmental_programs(){
            var items = $("[id^=environmental_programs__][type=number]:not([disabled])");
            var sum = 0;
            items.each(function(){
                var valor = parseInt($(this).val());
                if(isNaN(valor) ){
                    valor = 0;
                }
                sum += valor;
            });


            $("[id^=environmental_programs__][type=number][disabled]").val(sum);
        }

        $("[id^=courses__]").change(function() {
            courses();
            environmental_courses_percentage();
        });

        function courses(){
            var items = $("[id^=courses__]:not([disabled])");
            var sum = 0;
            items.each(function(){
                var valor = parseInt($(this).val());
                if(isNaN(valor) ){
                    valor = 0;
                }
                sum += valor;
            });


            $("[id^=courses__][disabled]").val(sum);
        }

        $("[id^=educational_programs__]").change(function() {
            educational_programs();
            environmental_programs_percentage();
        });

        function educational_programs(){
            var items = $("[id^=educational_programs__]:not([disabled])");
            var sum = 0;
            items.each(function(){
                var valor = parseInt($(this).val());
                if(isNaN(valor) ){
                    valor = 0;
                }
                sum += valor;
            });


            $("[id^=educational_programs__][disabled]").val(sum);
        }
        
        $("[id^=environmental_courses__][type=number]").change(function() {
           environmental_courses();
            environmental_courses_percentage();
        });

        function environmental_courses(){
            var items = $("[id^=environmental_courses__][type=number]:not([disabled])");
            var sum = 0;
            items.each(function(){
                var valor = parseInt($(this).val());
                if(isNaN(valor) ){
                    valor = 0;
                }
                sum += valor;
            });


            $("[id^=environmental_courses__][type=number][disabled]").val(sum);
        }
        $("[id^=environmental_collaboration_agreements__][type=number]").change(function() {
            environmental_collaboration_agreements();
        });

        function environmental_collaboration_agreements(){
            var items = $("[id^=environmental_collaboration_agreements__][type=number]:not([disabled])");
            var sum = 0;
            items.each(function(){
                var valor = parseInt($(this).val());
                if(isNaN(valor) ){
                    valor = 0;
                }
                sum += valor;
            });


            $("[id^=environmental_collaboration_agreements__][type=number][disabled]").val(sum);
        }
        $("[id^=research_funds__]").change(function() {
            research_funds();
        });

        function research_funds(){
            var y2021 = parseFloat($("#research_funds__a").val());
            var y2022 = parseFloat($("#research_funds__b").val());
            var y2023 = parseFloat($("#research_funds__c").val());
            promMxn = (y2021 + y2022 + y2023) / 3;

            if(isNaN(promMxn) || !isFinite(promMxn)){
                promMxn = 0;
            }

            $("#research_funds__d").val(promMxn);
            $("#research_funds__e").val(promMxn/17.14);
            
            var y2021 = parseFloat($("#research_funds__f").val());
            var y2022 = parseFloat($("#research_funds__g").val());
            var y2023 = parseFloat($("#research_funds__h").val());
            promMxn = (y2021 + y2022 + y2023) / 3;

            if(isNaN(promMxn) || !isFinite(promMxn)){
                promMxn = 0;
            }

            $("#research_funds__i").val(promMxn);
            $("#research_funds__j").val(promMxn/17.14);
          
        }

        $("[id^=environmental_research_funds__]").change(function() {
            environmental_research_funds();
        });

        function environmental_research_funds(){
            var y2021 = parseFloat($("#environmental_research_funds__a").val());
            var y2022 = parseFloat($("#environmental_research_funds__b").val());
            var y2023 = parseFloat($("#environmental_research_funds__c").val());
            promMxn = (y2021 + y2022 + y2023) / 3;

            if(isNaN(promMxn) || !isFinite(promMxn)){
                promMxn = 0;
            }

            $("#environmental_research_funds__d").val(promMxn);
            $("#environmental_research_funds__e").val(promMxn/17.14);
            
            var y2021 = parseFloat($("#environmental_research_funds__f").val());
            var y2022 = parseFloat($("#environmental_research_funds__g").val());
            var y2023 = parseFloat($("#environmental_research_funds__h").val());
            promMxn = (y2021 + y2022 + y2023) / 3;

            if(isNaN(promMxn) || !isFinite(promMxn)){
                promMxn = 0;
            }

            $("#environmental_research_funds__i").val(promMxn);
            $("#environmental_research_funds__j").val(promMxn/17.14);
          
        }
        $("[id^=environmental_thesis__]").change(function() {
            environmental_thesis();
        });

        function environmental_thesis(){
            var y2021 = parseFloat($("#environmental_thesis__a").val());
            var y2022 = parseFloat($("#environmental_thesis__b").val());
            var y2023 = parseFloat($("#environmental_thesis__c").val());
            promMxn = (y2021 + y2022 + y2023) / 3;

            if(isNaN(promMxn) || !isFinite(promMxn)){
                promMxn = 0;
            }

            $("#environmental_thesis__d").val(promMxn);
            $("#environmental_thesis__e").val(promMxn/17.14);
           
        }
        $("[id^=environmental_publications__]").change(function() {
            environmental_publications();
        });

        function environmental_publications(){
            var y2021 = parseFloat($("#environmental_publications__a").val());
            var y2022 = parseFloat($("#environmental_publications__b").val());
            var y2023 = parseFloat($("#environmental_publications__c").val());
            promMxn = (y2021 + y2022 + y2023) / 3;

            if(isNaN(promMxn) || !isFinite(promMxn)){
                promMxn = 0;
            }

            $("#environmental_publications__d").val(promMxn);
            $("#environmental_publications__e").val(promMxn/17.14);
           
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
            

        var sums = $('[id$="__sumatory__1"]');
        
        sums.each(function(){
           const name = $(this).attr('id');
           const newName = name.replace('__sumatory__1', '__1');
           $(this).attr('name', newName);
           $(this).attr('id', newName);
           
           console.log($(this).attr('name', newName));
        });

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
