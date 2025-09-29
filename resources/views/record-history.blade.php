@extends('templates.students')

@section('content')

<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">

    <!-- Encabezado -->
    <header class="p-6 bg-white shadow-md flex justify-between items-center">
        <div class="flex items-center gap-3">
            <!-- Flecha de devolver -->
            <a href="{{ route('home') }}"
                class="text-[#F2AC2A] hover:text-yellow-600 transition-transform duration-200 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <h1 class="text-2xl font-bold text-[#F2AC2A]">Historial de registros</h1>
        </div>

        <div class="flex gap-3">
            <button
                class="px-4 py-2 rounded-xl bg-green-600 text-white transition-transform duration-200 hover:bg-green-700 hover:scale-105">Exportar
                Excel</button>
            <button
                class="px-4 py-2 rounded-xl bg-red-600 text-white transition-transform duration-200 hover:bg-red-700 hover:scale-105">Descargar
                PDF</button>
            <button
                class="px-4 py-2 rounded-xl bg-[#F2AC2A] text-white transition-transform duration-200 hover:bg-yellow-600 hover:scale-105">Actualizar</button>
        </div>
    </header>

    <!-- Filtros -->
    <section class="p-6 flex flex-wrap gap-3 items-center bg-white shadow-sm mt-4 rounded-xl mx-4">
        <input type="text" placeholder="Buscar estudiante..."
            class="px-4 py-2 border rounded-xl focus:ring-2 focus:ring-[#F2AC2A] w-64 transition duration-200 hover:shadow-md">
        <input type="date"
            class="px-4 py-2 border rounded-xl focus:ring-2 focus:ring-[#F2AC2A] transition duration-200 hover:shadow-md">
        <input type="date"
            class="px-4 py-2 border rounded-xl focus:ring-2 focus:ring-[#F2AC2A] transition duration-200 hover:shadow-md">
    </section>

    <!-- Tabla -->
    <section class="overflow-x-auto mt-6 mx-4 flex-grow">
        <table class="min-w-full bg-white rounded-xl shadow-md overflow-hidden">
            <thead class="bg-[#F2AC2A] text-white">
                <tr>
                    <th class="px-4 py-3 text-left">Estudiante</th>
                    <th class="px-4 py-3 text-left">Tarjeta de identidad</th>
                    <th class="px-4 py-3 text-left">Fecha</th>
                    <th class="px-4 py-3 text-left">Hora</th>
                    <th class="px-4 py-3 text-left">Curso</th>
                    <th class="px-4 py-3 text-left">Repite</th>
                    <th class="px-4 py-3 text-left">Tipo de alimento</th>
                    <th class="px-4 py-3 text-left">Observaciones</th>
                    <th class="px-4 py-3 text-left">Responsable</th>
                    <th class="px-4 py-3 text-left">Estado</th>
                    <th class="px-4 py-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">

                <!-- ejemplo 1 -->
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-4 py-3 font-medium">Juan Pérez</td>
                    <td class="px-4 py-3">1123456789</td>
                    <td class="px-4 py-3">24/09/2025</td>
                    <td class="px-4 py-3">07:15 AM</td>
                    <td class="px-4 py-3">1104</td>
                    <td class="px-4 py-3">No</td>
                    <td class="px-4 py-3">Refrigerio</td>
                    <td class="px-4 py-3">-</td>
                    <td class="px-4 py-3">Aux. Laura</td>
                    <td class="px-4 py-3">
                        <span class="px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">Entregado</span>
                    </td>
                    <td class="px-4 py-3 text-center flex gap-3 justify-center">
                        <button
                            class="text-blue-500 hover:text-blue-700 transition-transform duration-200 hover:scale-125">✏️</button>
                        <button
                            class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-125">🗑️</button>
                    </td>
                </tr>

                <!-- ejemplo 2 -->
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-4 py-3 font-medium">María Gómez</td>
                    <td class="px-4 py-3">1234567.890</td>
                    <td class="px-4 py-3">24/09/2025</td>
                    <td class="px-4 py-3">12:10 PM</td>
                    <td class="px-4 py-3">1002</td>
                    <td class="px-4 py-3">Sí</td>
                    <td class="px-4 py-3">Almuerzo</td>
                    <td class="px-4 py-3">boto la papa del almuerzo a la basura </td>
                    <td class="px-4 py-3">Prof. Sánchez</td>
                    <td class="px-4 py-3">
                        <span class="px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-700">Pendiente</span>
                    </td>
                    <td class="px-4 py-3 text-center flex gap-3 justify-center">
                        <button
                            class="text-blue-500 hover:text-blue-700 transition-transform duration-200 hover:scale-125">✏️</button>
                        <button
                            class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-125">🗑️</button>
                    </td>
                </tr>

                <!-- ejemplo 3 -->
                <tr class="hover:bg-gray-100 transition">
                    <td class="px-4 py-3 font-medium">Carlos López</td>
                    <td class="px-4 py-3">1098765432</td>
                    <td class="px-4 py-3">24/09/2025</td>
                    <td class="px-4 py-3">12:00 PM</td>
                    <td class="px-4 py-3">12:20</td>
                    <td class="px-4 py-3">No</td>
                    <td class="px-4 py-3">Ambos</td>
                    <td class="px-4 py-3">-</td>
                    <td class="px-4 py-3">Aux. Pedro</td>
                    <td class="px-4 py-3">
                        <span class="px-3 py-1 rounded-full text-sm bg-red-100 text-red-700">Cancelado</span>
                    </td>
                    <td class="px-4 py-3 text-center flex gap-3 justify-center">
                        <button
                            class="text-blue-500 hover:text-blue-700 transition-transform duration-200 hover:scale-125">✏️</button>
                        <button
                            class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-125">🗑️</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>

    <!-- Paginación -->
    <div class="flex justify-center items-center gap-3 mt-6">
        <button
            class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">Anterior</button>
        <button class="px-3 py-1 border rounded-lg bg-[#F2AC2A] text-white">1</button>
        <button class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">2</button>
        <button class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">3</button>
        <button
            class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">Siguiente</button>
    </div>


</body>

</html>