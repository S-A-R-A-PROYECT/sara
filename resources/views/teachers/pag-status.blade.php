@extends('templates.teachers')
@extends('templates.headers.teacher')
@section('content')

<div class="bg-white text-gray-800 min-h-screen flex flex-col">
  
  <header class="p-6">
    <h1 class="text-3xl font-bold text-[#F2AC2A]">Estado de dispositivos</h1>
  </header>

  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6">
    <div class="bg-green-600 text-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition">
      <p class="text-4xl font-bold">8</p>
      <p class="mt-2 text-lg">Dispositivos Online</p>
    </div>
    <div class="bg-gray-600 text-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition">
      <p class="text-4xl font-bold">2</p>
      <p class="mt-2 text-lg">Dispositivos Offline</p>
    </div>
    <div class="bg-red-600 text-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition">
      <p class="text-4xl font-bold">1</p>
      <p class="mt-2 text-lg">Dispositivos en Falla</p>
    </div>
    <div class="bg-[#F2AC2A] text-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 transition">
      <p class="text-4xl font-bold">1</p>
      <p class="mt-2 text-lg">En proceso</p>
    </div>
  </section>


  <main class="px-6 py-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
      

      <div>
        <label for="entries" class="text-sm font-medium">Mostrar</label>
        <select id="entries" class="border rounded px-2 py-1 ml-2">
          <option>5</option>
          <option>10</option>
          <option>Todos</option>
        </select>
        <span class="ml-2 text-sm">entradas</span>
      </div>
<!-- Barra de búsqueda -->  
      <form class="flex items-center w-full md:w-1/3">
        <input type="text" placeholder="Buscar dispositivo..." 
          class="w-full border border-gray-300 rounded-l-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#F2AC2A]">
        <button type="submit" class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-4 py-2 rounded-r-lg">
          Buscar
        </button>
      </form>

 
      <div class="flex gap-3">
        <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-4 py-2 rounded-lg shadow">Enviar a Soporte</button>
        <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-4 py-2 rounded-lg shadow">Exportar PDF</button>
      </div>
    </div>

    <!-- Tabla de dispositivos -->

    <div class="overflow-x-auto shadow-lg rounded-2xl">
      <table class="w-full border-collapse">
        <thead class="bg-[#F2AC2A] text-white">
          <tr>
            <th class="px-6 py-3 text-left">Nombre Dispositivo</th>
            <th class="px-6 py-3 text-left">Ubicación</th>
            <th class="px-6 py-3 text-left">Última conexión</th>
            <th class="px-6 py-3 text-left">Estado</th>
            <th class="px-6 py-3 text-left">Acción</th>
            <th class="px-6 py-3 text-left">Detalles</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">

          <!-- Amelia -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium">Amelia-SARA</td>
            <td class="px-6 py-4">Refrigerios - Entrada</td>
            <td class="px-6 py-4">24/09/2025 08:45</td>
            <td class="px-6 py-4">
              <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">Online</span>
            </td>
            <td class="px-6 py-4 flex gap-2">
              <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg">Reiniciar</button>
              <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-3 py-1 rounded-lg">Editar</button>
            </td>
            <td class="px-6 py-4 text-sm text-gray-700">Funcionamiento correcto</td>
          </tr>

          <!-- Tars -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium">Tars-SARA</td>
            <td class="px-6 py-4">Refrigerios - Lado opuesto</td>
            <td class="px-6 py-4">24/09/2025 08:42</td>
            <td class="px-6 py-4">
              <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-full">Offline</span>
            </td>
            <td class="px-6 py-4 flex gap-2">
              <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg">Reiniciar</button>
              <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-3 py-1 rounded-lg">Editar</button>
            </td>
            <td class="px-6 py-4 text-sm text-gray-700">
              Última respuesta: 24/09/2025 08:42 <br>Problema: Sin comunicación
            </td>
          </tr>

          <!-- Mann -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium">Mann-SARA</td>
            <td class="px-6 py-4">Almuerzos - Punto 1</td>
            <td class="px-6 py-4">24/09/2025 08:30</td>
            <td class="px-6 py-4">
              <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full">Falla</span>
            </td>
            <td class="px-6 py-4 flex gap-2">
              <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg">Reiniciar</button>
              <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-3 py-1 rounded-lg">Editar</button>
            </td>
            <td class="px-6 py-4 text-sm text-gray-700">
              Error crítico: Sensor biométrico no responde <br>Soporte: Revisar cableado
            </td>
          </tr>

          <!-- Murph -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium">Muro-SARA</td>
            <td class="px-6 py-4">Almuerzos - Punto 2</td>
            <td class="px-6 py-4">24/09/2025 08:45</td>
            <td class="px-6 py-4">
              <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">Online</span>
            </td>
            <td class="px-6 py-4 flex gap-2">
              <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg">Reiniciar</button>
              <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-3 py-1 rounded-lg">Editar</button>
            </td>
            <td class="px-6 py-4 text-sm text-gray-700">Funcionamiento correcto</td>
          </tr>

          <!-- Brand -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium">Brand-SARA</td>
            <td class="px-6 py-4">Almuerzos - Punto 3</td>
            <td class="px-6 py-4">24/09/2025 08:45</td>
            <td class="px-6 py-4">
              <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">Online</span>
            </td>
            <td class="px-6 py-4 flex gap-2">
              <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg">Reiniciar</button>
              <button class="bg-[#F2AC2A] hover:bg-[#d9961f] text-white px-3 py-1 rounded-lg">Editar</button>
            </td>
            <td class="px-6 py-4 text-sm text-gray-700">Funcionamiento correcto</td>
          </tr>

        </tbody>
      </table>
    </div>
  </main>

</div>

@endsection
