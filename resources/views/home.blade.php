<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form method="POST" action="{{ route('creaUsuario') }}">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Enviar</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->usuario }}</td>
                    <td>
                        <form method="POST" action="{{ route('modificaUsuario', ['id' => $usuario->id]) }}" style="display:inline;">
                            @csrf
                            <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>
                            <input type="text" name="usuario" value="{{ $usuario->usuario }}" required>
                            <button type="submit">Modificar</button>
                        </form>
                        <form method="GET" action="{{ route('eliminaUsuario', ['id' => $usuario->id]) }}" style="display:inline;">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>