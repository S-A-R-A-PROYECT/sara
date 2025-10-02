<div class="">
    <div class="flex h-screen">

        <!-- Panel izquierdo -->
        <div class="w-1/3 border-r p-6 space-y-6">

            <h1 class="text-red-600 font-bold text-3xl mb-2">S.A.R.A</h1>

            <!-- Buscador -->
            <input type="text" placeholder="Buscar..."
                class="w-full px-4 py-2 rounded-full bg-gray-300 text-gray-700 placeholder-gray-500 focus:outline-none" />

            <!-- Botones -->
            <div class="flex w-full space-x-2">
                <!-- Soporte -->
                <button
                    class="relative flex-1 px-6 py-2 rounded-full bg-red-600 text-white text-sm flex items-center justify-center font-semibold hover:bg-red-700 transition">
                    Soporte
                    <span
                        class="absolute -top-2 -right-2 bg-white text-red-600 text-xs font-bold w-6 h-6 flex items-center justify-center rounded-full shadow-md">
                        10
                    </span>
                </button>

                <!-- Profesor -->
                <button
                    class="flex-1 px-6 py-2 rounded-full bg-gray-200 text-sm flex items-center justify-center hover:bg-gray-300 transition">
                    Profesores
                </button>

                <!-- Estudiantes -->
                <button
                    class="flex-1 px-6 py-2 rounded-full bg-gray-200 text-sm flex items-center justify-center hover:bg-gray-300 transition">
                    Estudiantes
                </button>
            </div>

            <!-- Lista de usuarios -->
            <div class="space-y-4">

                <!-- Profesor -->
                <div wire:click='toggleChat(1)'
                    class="relative  cursor-pointer flex items-start bg-white shadow rounded-lg p-4 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-full bg-gray-200 mr-4"></div>
                    <div class="flex-1">
                        <p class="font-bold mb-1">Julian Ramirez</p>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet...</p>
                    </div>
                    <span class="absolute top-2 right-2 px-3 py-1 bg-yellow-400 text-xs font-semibold rounded-full">
                        Profesor
                    </span>
                </div>

                <!-- Desconectado -->
                <div class="relative flex items-start bg-white shadow rounded-lg p-4 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-full bg-gray-200 mr-4"></div>
                    <div class="flex-1">
                        <p class="font-bold mb-1">Daniela Saiz</p>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet...</p>
                    </div>
                    <span
                        class="absolute top-2 right-2 px-3 py-1 bg-red-500 text-white text-xs font-semibold rounded-full">
                        Desconectado
                    </span>
                </div>

                <!-- Estudiante -->
                <div class="relative flex items-start bg-white shadow rounded-lg p-4 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-full bg-gray-200 mr-4"></div>
                    <div class="flex-1">
                        <p class="font-bold mb-1">Julian Ramirez</p>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet...</p>
                    </div>
                    <span
                        class="absolute top-2 right-2 px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full">
                        Estudiante
                    </span>
                </div>

                <!-- Otro Profesor -->
                <div class="relative flex items-start bg-white shadow rounded-lg p-4 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-full bg-gray-200 mr-4"></div>
                    <div class="flex-1">
                        <p class="font-bold mb-1">Carlos Pérez</p>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet...</p>
                    </div>
                    <span class="absolute top-2 right-2 px-3 py-1 bg-yellow-400 text-xs font-semibold rounded-full">
                        Profesor
                    </span>
                </div>
            </div>
        </div>


        <div class="flex items-center justify-center w-full">
            @if ($chatId)
            <div class="flex flex-col w-full min-h-full justify-between">

                <!-- Header -->
                <div class="bg-red-500 p-4 flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-xl font-bold text-white">Julian Ramirez</h1>
                        <span class="px-2 py-1 rounded bg-yellow-400 text-xs">Profesor</span>
                    </div>
                </div>

                <!-- Chat -->
                <div class="flex-grow p-6 overflow-y-auto col-span-2">
                    <!-- Mensaje alumno -->
                    <div class="flex justify-end">
                        <div class="bg-red-400 text-white px-4 py-2 rounded-lg max-w-xs">
                            Profesor, solicitamos que el dispositivo #4853 sea reiniciado, porque esa porquería no
                            sirve.
                        </div>
                    </div>

                    <!-- Respuesta profesor -->
                    <div class="flex justify-start">
                        <div class="bg-teal-700 text-white px-4 py-2 rounded-lg max-w-xs">
                            Ya que...
                        </div>
                    </div>
                </div>

                <!-- Input -->
                <div class="p-4 border-t flex items-end">
                    <textarea placeholder="Chatea con el usuario..."
                        class="border rounded-lg px-4 py-2 flex-1 resize-none min-h-[40px] max-h-[120px] overflow-y-auto"></textarea>
                    <button class="ml-2 px-4 py-2 bg-red-500 text-white rounded-lg">➤</button>
                </div>
            </div>
            @else
            <div class="text-center">
                <img src="{{ asset('img/logo_sara-gris.png') }}" alt="Logo S.A.R.A"
                    class="w-[450px] h-auto drop-shadow-xl">
            </div>
            @endif
        </div>

    </div>
</div>