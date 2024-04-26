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

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
</head>

<body class="font-sans  ">
    @include('layouts.header', [
        'heading' => 'Programa UASLP Sostenible*',
        'subheading' => 'Derivado del proceso UI Green Metric',
    ])

    @include('layouts.navigation_user')

    <div class="bg-gray-50 dark:text-white/50">

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
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

            </div>
        </div>
    </div>
</body>

</html>
