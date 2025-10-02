@extends('templates.teachers')

@extends('templates.headers.teacher')

@section('content')

  <header class="p-6 bg-white shadow-md flex justify-between items-center">
    <h1 class="text-2xl font-bold text-[#F2AC2A]">Asignación de docentes - Coordinadores</h1>
    <div class="flex gap-3">
      <button class="px-4 py-2 rounded-xl bg-green-600 text-white transition-transform duration-200 hover:bg-green-700 hover:scale-105">
        Exportar Excel
      </button>
      <button class="px-4 py-2 rounded-xl bg-red-600 text-white transition-transform duration-200 hover:bg-red-700 hover:scale-105">
        Descargar PDF
      </button>
      <button class="px-4 py-2 rounded-xl bg-[#F2AC2A] text-white transition-transform duration-200 hover:bg-yellow-600 hover:scale-105">
        Actualizar
      </button>
    </div>
  </header>

  <!-- Filtros -->
  <section class="p-6 flex flex-wrap gap-3 items-center bg-white shadow-sm mt-4 rounded-xl mx-4">
    <input type="text" placeholder="Buscar profesor..." 
           class="px-4 py-2 border rounded-xl focus:ring-2 focus:ring-[#F2AC2A] w-64 transition duration-200 hover:shadow-md">
    <input type="date" 
           class="px-4 py-2 border rounded-xl focus:ring-2 focus:ring-[#F2AC2A] transition duration-200 hover:shadow-md">
    <input type="date" 
           class="px-4 py-2 border rounded-xl focus:ring-2 focus:ring-[#F2AC2A] transition duration-200 hover:shadow-md">
  </section>

  <!-- Tabla -->
  <section class="overflow-x-auto mt-6 mx-4">
    <table class="min-w-full bg-white rounded-xl shadow-md overflow-hidden">
      <thead class="bg-[#F2AC2A] text-white">
        <tr>
          <th class="px-4 py-3 text-left">Profesor</th>
          <th class="px-4 py-3 text-left">Asignación</th>
          <th class="px-4 py-3 text-left">Estado</th>
          <th class="px-4 py-3 text-center">Acciones</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">

        <tr class="hover:bg-gray-100 transition">
          <td class="px-4 py-3 font-medium">Ramiro</td>
          <td class="px-4 py-3">13/05/2022</td>
          <td class="px-4 py-3">
            <span class="px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">Activo</span>
          </td>
          <td class="px-4 py-3 text-center flex gap-3 justify-center">
            <button class="text-blue-500 hover:text-blue-700 transition-transform duration-200 hover:scale-125">✏️</button>
            <button class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-125">🗑️</button>
          </td>
        </tr>

        <tr class="hover:bg-gray-100 transition">
          <td class="px-4 py-3 font-medium">Barrera</td>
          <td class="px-4 py-3">22/05/2022</td>
          <td class="px-4 py-3">
            <span class="px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-700">En proceso</span>
          </td>
          <td class="px-4 py-3 text-center flex gap-3 justify-center">
            <button class="text-blue-500 hover:text-blue-700 transition-transform duration-200 hover:scale-125">✏️</button>
            <button class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-125">🗑️</button>
          </td>
        </tr>

        <tr class="hover:bg-gray-100 transition">
          <td class="px-4 py-3 font-medium">Julianatp</td>
          <td class="px-4 py-3">15/06/2022</td>
          <td class="px-4 py-3">
            <span class="px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">Activo</span>
          </td>
          <td class="px-4 py-3 text-center flex gap-3 justify-center">
            <button class="text-blue-500 hover:text-blue-700 transition-transform duration-200 hover:scale-125">✏️</button>
            <button class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-125">🗑️</button>
          </td>
        </tr>

      </tbody>
    </table>
  </section>

  <!-- Paginación -->
  <div class="flex justify-center items-center gap-3 mt-6">
    <button class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">Anterior</button>
    <button class="px-3 py-1 border rounded-lg bg-[#F2AC2A] text-white">1</button>
    <button class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">2</button>
    <button class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">3</button>
    <button class="px-3 py-1 border rounded-lg transition duration-200 hover:bg-gray-200 hover:scale-105">Siguiente</button>
  </div>

@endsection
