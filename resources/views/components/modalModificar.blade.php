<div class="fixed inset-0 bg-black bg-opacity-20 items-center justify-center z-50 hidden" id="modalModificar">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
        <h2 class="text-2xl font-bold mb-4">Modificar Usuario</h2>
        <form method="POST" action="{{ route('modificaUsuario', ['id' => $usuario->id]) }}">
            @csrf
            <div class="mb-4 gap-4 grid grid-cols-3">
                <div class="mb-4 mr-3">
                    <label for="nombre" class="block mb-2 text-gray-400">Nombre:</label>
                    <input type="text" class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500" id="nombre" name="nombre"
                        value="{{ $usuario->nombre }}" required>
                </div>
                <div class="mb-4 mr-3">
                    <label for="usuario" class="block mb-2 text-gray-400">Usuario:</label>
                    <input type="text" class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500" id="usuario" name="usuario"
                        value="{{ $usuario->usuario }}" required>
                </div>
                <div class="mb-4 mr-3">
                    <label for="password" class="block mb-2 text-gray-400  ">Contraseña:</label>
                    <input type="password" class="border-b-2 w-full border-gray-300 focus:outline-none focus:border-purple-500" id="password" name="password"
                        required>
                </div>
            </div>

            <button type="submit" class="bg-purple-500 text-white py-2 px-4 rounded mt-2">Enviar</button>
            <button type="button" class="bg-gray-300 text-black py-2 px-4 rounded mt-2 ml-2" onClick="closeModal()">Cancelar</button>
        </form>
    </div>
</div>