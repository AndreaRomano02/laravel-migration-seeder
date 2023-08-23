<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ env('APP_NAME') }} | @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @yield('cdns')
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">
    <header class="py-5 mb-3 bg-warning">
        <h1>Welcome to Train Station Romano</h1>
    </header>

    <main class="mx-5">
        @yield('main')
    </main>
</body>

</html>
