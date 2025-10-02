@extends('templates.teachers')

@section('content')
<div class="p-6 max-w-7xl mx-auto">
    
  <!-- Header -->
  <header class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#F2AC2A]">Registro de auditoría</h1>
    <input type="text" placeholder="Buscar..." 
      class="border rounded-lg px-3 py-1 text-sm focus:ring-2 focus:ring-[#F2AC2A] outline-none">
  </header>

  <!-- Tabla -->
  <div class="bg-white rounded-2xl shadow overflow-hidden">
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="bg-gray-100 text-gray-700 text-sm">
          <th class="px-4 py-2 cursor-pointer">Timestamp</th>
          <th class="px-4 py-2">Tipo</th>
          <th class="px-4 py-2">Mensaje</th>
          <th class="px-4 py-2">Fecha</th>
          <th class="px-4 py-2">Código</th>
        </tr>
      </thead>
      <tbody class="text-sm">
        <tr class="border-b hover:bg-gray-50 transition">
          <td class="px-4 py-2">2025-09-30 21:45:01</td>
          <td class="px-4 py-2">WEB</td>
          <td class="px-4 py-2">Usuario inició sesión</td>
          <td class="px-4 py-2">30/09/2025</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">200</span>
          </td>
        </tr>
        <tr class="border-b hover:bg-gray-50 transition">
          <td class="px-4 py-2">2025-09-30 21:47:22</td>
          <td class="px-4 py-2">API</td>
          <td class="px-4 py-2">Petición no encontrada</td>
          <td class="px-4 py-2">30/09/2025</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">404</span>
          </td>
        </tr>
        <tr class="border-b hover:bg-gray-50 transition">
          <td class="px-4 py-2">2025-09-30 21:50:10</td>
          <td class="px-4 py-2">DISPOSITIVO</td>
          <td class="px-4 py-2">Error al enviar datos del ESP32</td>
          <td class="px-4 py-2">30/09/2025</td>
          <td class="px-4 py-2">
            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700">500</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Paginación -->
  <div class="flex justify-center items-center gap-2 mt-4">
    <button class="px-3 py-1 rounded-lg bg-gray-200 hover:bg-gray-300 text-sm">Anterior</button>
    <button class="px-3 py-1 rounded-lg bg-[#F2AC2A] text-white text-sm">1</button>
    <button class="px-3 py-1 rounded-lg bg-gray-200 hover:bg-gray-300 text-sm">2</button>
    <button class="px-3 py-1 rounded-lg bg-gray-200 hover:bg-gray-300 text-sm">3</button>
    <button class="px-3 py-1 rounded-lg bg-gray-200 hover:bg-gray-300 text-sm">Siguiente</button>
  </div>
</div>
@endsection
