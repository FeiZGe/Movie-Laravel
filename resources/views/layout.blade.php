<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titile')</title>



    <!-- Tailwind -->
    @vite('resources/css/app.css')
</head>
<body class="font-poppins">
    <nav>
        proo
    </nav>
    <main class="container mx-auto px-6 py-3">
        @yield('content')
    </main>
    <footer>
        Copy kkk
    </footer>
</body>
</html>