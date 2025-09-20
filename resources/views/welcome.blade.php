<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg inline-block">
            @if (isset($error))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ $error }}
                </div>
            @endif
            <h1 class="text-3xl font-bold mb-4">Login</h1>
            <form method='post' action='{{ route('login') }}'>
                @csrf
                <div class="mb-4">
                    <label for="usuario" class="block text-gray-700 mb-2">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 mb-2">Contraseña:</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                <button type="submit"
                    class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 transition duration-300">Iniciar
                    Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>