<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <header>
        <x-navbar />
    </header>
    <main class="container mx-auto p-4">
         {{ $slot }}
    </main>
    <footer class="bg-gray-200 text-center p-4 mt-8 border-t border-gray-300 w-full fixed bottom-0 left-0">
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>
</body>
</html>