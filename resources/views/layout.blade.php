<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titile')</title>



    <!-- Tailwind -->
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        proo
    </nav>
    <main class="container py-4 px-2">
        @yield('content')
    </main>
    <footer>
        Copy kkk
    </footer>
</body>
</html>