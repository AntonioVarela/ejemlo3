<x-base>
    <h1 class="text-2xl font-bold mb-6">Bienvenido al Panel de Administrador {{ session('usuario')->nombre }}</h1>

    <h1 class="text-2xl font-bold mb-6">Formulario de Registro</h1>
    <div class="mb-4 shadow-md p-4 ">
        <form method="POST" action="{{ route('creaUsuario') }}">
            @csrf
            <div class="mb-4 gap-4 grid grid-cols-3">
                <div class="mb-4 mr-3">
                    <label for="nombre" class="block mb-2 text-gray-400">Nombre:</label>
                    <input type="text"
                        class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500"
                        id="nombre" name="nombre" required>
                </div>
                <div class="mb-4 mr-3">
                    <label for="usuario" class="block mb-2 text-gray-400">Usuario:</label>
                    <input type="text"
                        class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500"
                        id="usuario" name="usuario" required>
                </div>
                <div class="mb-4 mr-3">
                    <label for="password" class="block mb-2 text-gray-400  ">Contraseña:</label>
                    <input type="password"
                        class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500"
                        id="password" name="password" required>
                </div>
            </div>

            <button type="submit" class="bg-purple-500 text-white py-2 px-4 rounded mt-2">Enviar</button>
        </form>
    </div>

    <section class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Lista de Usuarios</h2>
        <table class="min-w-full bg-white border border-gray-300 text-center">
            <thead class="bg-purple-200">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->usuario }}</td>
                        <td>
                            <button type="button" class="text-gray-500 hover:text-gray-700" onClick="openModal('{{ $usuario->id }}')"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg></button>
                            <form method="GET" action="{{ route('eliminaUsuario', ['id' => $usuario->id]) }}"
                                style="display:inline;">
                                <button type="submit" class="text-red-500 hover:text-red-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-base>
<x-modalModificar :usuario="$usuario" />



<script>
    function openModal(id) {
        document.getElementById('modalModificar').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('modalModificar').classList.add('hidden');
    }
</script>