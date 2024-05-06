<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
</head>

<body class="font-sans  ">
    @include('layouts.header', [
        'heading' => 'Programa UASLP Sostenible 2024*',
        'subheading' => '#UASLPSostenible',
    ])

    @include('layouts.navigation_user')

    <div class="bg-gray-50 dark:text-white/50">

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <div class="bg-white shadow">
                    @if (auth()->user() != null)
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8  ">
                            <p style="color:black;">Esta plataforma está diseñada para la
                                recopilación y reporte de información. El cuestionario consta de 8 criterios con 113
                                preguntas, de las cuales solo 55 serán consideradas para calcular la puntuación total de
                                tu entidad en el <b>#Ranking UASLPSostenible</b>.</p><br>
                            <p>Los indicadores proporcionan
                                detalles sobre los criterios y permiten a cada entidad mostrar sus esfuerzos en
                                sostenibilidad de manera verídica y con mayor precisión. Algunos indicadores requieren
                                evidencias documentales o fotográficas que deberán ser etiquetadas correctamente, por
                                ejemplo: 1.1.jpg, 4.2.pdf, 7.11.xls. Si las evidencias coinciden con las reportadas en
                                la pestaña de "Historial", suba un documento en blanco en formato Word (.doc) nombrado
                                "SIGLASENTIDAD_NOHAYCAMBIOS". No olvides que es muy importante dar clic en el botón
                                “GUARDAR” constantemente para asegurar que toda tu información se mantenga. Solo después
                                de asegurarte de que toda la información esté completa, deberás hacer clic en “ENVIAR”
                                para que tu reporte quede registrado. Esta acción implica que no podrás seguir editando
                                las respuestas en ninguno de los criterios".</p><br>
                            <p>Este proceso es perfectible y está en un proceso de mejora continua. Agradecemos sus
                                comentarios.</p>
                        </div>
                    @endif
                </div>

                <main class="dashboard">
                    @foreach ($categories as $category)
                        @if ($category->number <= 8)
                            <a href="{{ $category->controller }}" class="dashboard-item">
                                <img src="{{ asset('images/' . $category->name . '.png') }}" alt="">
                                {{ $category->name }}
                            </a>
                        @endif
                    @endforeach
                </main>
                <div style="display:flex; justify-content:end; width:95%">
                    <p style="color:black">* Derivado del Proceso UI Green Metric</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
