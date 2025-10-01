@extends('templates.headers.student')

@section('content')

<div class="bg-gray-100 p-6 min-h-screen">
  <h1 class="text-3xl font-bold mb-6 text-cyan-800">S.A.R.A</h1>

  <!-- Sección superior -->
  <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

    <!-- Porcentaje de asistencia -->
    <div class="bg-cyan-900 text-white rounded-xl p-4 shadow-lg">
      <h2 class="font-semibold">Porcentaje de asistencia</h2>
      <div class="flex justify-between mt-4">
        <div>
          <p class="text-3xl font-bold">15%</p>
          <p class="text-sm">No asistencias</p>
          <p class="text-red-400">5</p>
          <p class="text-xs">Recuerda presentar excusa</p>
        </div>
        <div>
          <p class="text-3xl font-bold">85%</p>
          <p class="text-sm">Asistencias</p>
          <p class="text-green-400">27</p>
          <p class="text-xs">Mantén tu compromiso</p>
        </div>
      </div>
    </div>

    <!-- Total de registros -->
    <div class="bg-teal-500 text-white rounded-xl p-6 shadow-lg">
      <h2 class="font-semibold">Total de registros / días</h2>
      <div class="flex justify-center items-center mt-6">
        <div class="relative w-32 h-32 rounded-full border-8 border-teal-200 flex items-center justify-center">
          <p class="text-2xl font-bold">32</p>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-2 text-sm mt-4">
        <span class="flex items-center gap-1"><span class="w-3 h-3 bg-green-400"></span>Reclamados</span>
        <span class="flex items-center gap-1"><span class="w-3 h-3 bg-red-400"></span>No asistidos</span>
        <span class="flex items-center gap-1"><span class="w-3 h-3 bg-yellow-400"></span>Excusas</span>
        <span class="flex items-center gap-1"><span class="w-3 h-3 bg-blue-400"></span>Otros</span>
      </div>
    </div>

    <!-- Calendario -->
    <div class="bg-teal-400 text-white rounded-xl p-4 shadow-lg">
      <h2 class="font-semibold">Calendario asistencias</h2>
      <div class="grid grid-cols-7 gap-1 mt-4">
        <div class="w-6 h-6 bg-green-500 rounded"></div>
        <div class="w-6 h-6 bg-red-500 rounded"></div>
        <div class="w-6 h-6 bg-green-600 rounded"></div>
        <div class="w-6 h-6 bg-yellow-400 rounded"></div>
        <div class="w-6 h-6 bg-green-400 rounded"></div>
        <div class="w-6 h-6 bg-green-500 rounded"></div>
        <div class="w-6 h-6 bg-red-400 rounded"></div>
      </div>
    </div>

    <!-- Estado -->
    <div class="space-y-4">
      <div class="bg-red-700 text-white rounded-xl p-4">
        <p class="font-bold">Inhabilitado</p>
        <p class="text-sm">Disponibilidad de perfil</p>
      </div>
      <div class="bg-green-700 text-white rounded-xl p-4">
        <p class="font-bold">Iniciado</p>
        <p class="text-sm">Estado de la jornada</p>
      </div>
    </div>
  </div>

  <!-- Falta y Refrigerios -->
  <div class="grid grid-cols-2 gap-6 mt-6">
    <div class="bg-cyan-500 text-white p-6 rounded-xl shadow-lg">
      <p class="text-xl font-bold">Faltas</p>
      <p class="text-3xl">5</p>
      <p class="text-sm">Último mes</p>
    </div>
    <div class="bg-teal-600 text-white p-6 rounded-xl shadow-lg">
      <p class="text-xl font-bold">Refrigerios</p>
      <p class="text-3xl">32</p>
      <p class="text-sm">Reclamados</p>
    </div>
  </div>

  <!-- Botón excusa -->
  <div class="flex justify-center mt-6">
    <button class="bg-teal-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-teal-600">
      Presentar excusa
    </button>
  </div>

  <!-- Últimas asistencias -->
  <div class="bg-white mt-6 p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-bold mb-4">Últimas asistencias</h2>
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="bg-gray-200">
          <th class="p-2">Fecha</th>
          <th class="p-2">Jornada</th>
          <th class="p-2">Tipo</th>
          <th class="p-2">Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-2">28/09/2025</td>
          <td class="p-2">Mañana</td>
          <td class="p-2">Almuerzo</td>
          <td class="p-2 text-green-600">Asistencia</td>
        </tr>
        <tr class="border-b">
          <td class="p-2">27/09/2025</td>
          <td class="p-2">Tarde</td>
          <td class="p-2">Refrigerio</td>
          <td class="p-2 text-red-600">Falta</td>
        </tr>
        <tr>
          <td class="p-2">25/09/2025</td>
          <td class="p-2">Mañana</td>
          <td class="p-2">Almuerzo</td>
          <td class="p-2 text-yellow-500">Excusa presentada</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection
