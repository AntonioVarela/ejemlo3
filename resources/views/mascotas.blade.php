<x-base>

    <div>
        <form method="POST" action="{{ route('creaMascota') }}" class="mb-4 shadow-md p-4 ">
            @csrf
            <div class="mb-4 gap-4 grid grid-cols-2">
            <div class="mb-4 mr-3">
                <label for="nombre" class="block mb-2 text-gray-400">Nombre:</label>
                <input type="text" class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500"
                    id="nombre" name="nombre" required>
            </div>
            <div class="mb-4 mr-3">
                <label for="tipo" class="block mb-2 text-gray-400">Tipo:</label>
                <select class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500"
                    id="tipo" name="tipo" required>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Ave">Ave</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="mb-4 mr-3">
                <label for="raza" class="block mb-2 text-gray-400">Raza:</label>
                <input type="text"
                    class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500" id="raza"
                    name="raza" required>
            </div>
            <div class="mb-4 mr-3">
                <label for="edad" class="block mb-2 text-gray-400">Edad:</label>
                <input type="number"
                    class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500" id="edad"
                    name="edad" required>
            </div>
            <div class="mb-4 mr-3">
                <label for="dueno" class="block mb-2 text-gray-400">Dueño:</label>
                <select class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500" id="dueno" name="dueno" required>
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div>
            </div>
            <button type="submit" class="bg-purple-500 text-white py-2 px-4 rounded mt-2">Enviar</button>
    </div>

    </form>
    </div>

    <table class="min-w-full bg-white border border-gray-300 text-center mt-8">
        <thead class="bg-purple-200">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Dueño</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->id }}</td>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->tipo }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->idDueno }}</td>
                </tr>
            @endforeach
        </tbody> 
    </table>

</x-base>
