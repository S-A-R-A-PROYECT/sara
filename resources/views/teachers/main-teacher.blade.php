@extends('templates.teachers')

@extends('templates.headers.teacher')

@section('content')


<div class="bg-gray-100 p-6 min-h-screen">
  <h1 class="text-3xl font-bold mb-6 text-cyan-800">BIENVENIDO SANTIAGO PARRAGA</h1>

 
  <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

    <!-- Progreso de asistencias -->
    <div class="bg-cyan-900 text-white rounded-xl p-4 shadow-lg">
      <h2 class="font-semibold">CURSOS POR DIRECTORES DE CURSO </h2>
      <ul class="mt-4 space-y-3 text-sm">
        <li class="flex justify-between"><span>Kristin Watson</span><span class="font-bold">70%</span></li>
        <li class="flex justify-between"><span>Darlene Robertson</span><span class="font-bold">30%</span></li>
        <li class="flex justify-between"><span>Jenny Wilson</span><span class="font-bold">20%</span></li>
        <li class="flex justify-between"><span>Cameron Williamson</span><span class="font-bold">50%</span></li>
        <li class="flex justify-between"><span>Wade Warren</span><span class="font-bold">100%</span></li>
      </ul>
    </div>

    <!-- Top estudiantes cumplidos -->
    <div class="bg-teal-500 text-white rounded-xl p-6 shadow-lg">
      <h2 class="font-semibold">Top estudiantes cumplidos</h2>
      <ul class="mt-4 space-y-3 text-sm">
        <li class="flex justify-between"><span>Kristin Watson</span><span class="font-bold">7/10</span></li>
        <li class="flex justify-between"><span>Darlene Robertson</span><span class="font-bold">3/10</span></li>
        <li class="flex justify-between"><span>Jenny Wilson</span><span class="font-bold">2/10</span></li>
        <li class="flex justify-between"><span>Cameron Williamson</span><span class="font-bold">5/10</span></li>
        <li class="flex justify-between"><span>Wade Warren</span><span class="font-bold">10/10</span></li>
      </ul>
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
      <p class="text-xs mt-2">Aprende cómo contamos las asistencias</p>
    </div>

    <!-- Estado -->
    <div class="space-y-4">
      <div class="bg-green-700 text-white rounded-xl p-4">
        <p class="font-bold">Iniciado</p>
        <p class="text-sm">Estado de la jornada</p>
      </div>
      <div class="flex flex-col gap-3">
        <button class="bg-teal-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-teal-600">
          ✅ Iniciar día
        </button>
        <button class="bg-red-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-red-600">
          ⛔ Finalizar día
        </button>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-2 gap-6 mt-6">
    <div class="bg-cyan-500 text-white p-6 rounded-xl shadow-lg text-center">
      <p class="text-xl font-bold">50</p>
      <p class="text-sm">Refrigerios restantes</p>
    </div>
    <div class="bg-yellow-500 text-white p-6 rounded-xl shadow-lg text-center">
      <p class="text-xl font-bold">126</p>
      <p class="text-sm">Estudiantes restantes</p>
    </div>
  </div>
<!-- Botones de acción -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
    <a href="{{ route('home') }}" 
       class="bg-cyan-500 text-white py-3 rounded-lg shadow hover:bg-cyan-600 flex items-center justify-center font-semibold">
        📊 Generar reporte
    </a>
    
    <a href="{{ route('history') }}" 
       class="bg-teal-600 text-white py-3 rounded-lg shadow hover:bg-teal-700 flex items-center justify-center font-semibold">
        🧾 Historial
    </a>
    
    <a href="{{ route('home') }}" 
       class="bg-yellow-500 text-white py-3 rounded-lg shadow hover:bg-yellow-600 flex items-center justify-center font-semibold">
        🔍 Buscar estudiante
    </a>
    
    <a href="{{ route('home') }}" 
       class="bg-pink-500 text-white py-3 rounded-lg shadow hover:bg-pink-600 flex items-center justify-center font-semibold">
        👨‍👩‍👧 Notificar acudientes
    </a>
</div>

  <!-- Últimos registros -->
  <div class="bg-white mt-6 p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-bold mb-4">Últimos registros</h2>
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="bg-gray-200">
          <th class="p-2">Fecha</th>
          <th class="p-2">Estudiante</th>
          <th class="p-2">Acción</th>
          <th class="p-2">Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-2">28/09/2025</td>
          <td class="p-2">Kristin Watson</td>
          <td class="p-2">Almuerzo</td>
          <td class="p-2 text-green-600">Reclamado</td>
        </tr>
        <tr class="border-b">
          <td class="p-2">27/09/2025</td>
          <td class="p-2">Jenny Wilson</td>
          <td class="p-2">Refrigerio</td>
          <td class="p-2 text-red-600">No asistió</td>
        </tr>
        <tr>
          <td class="p-2">25/09/2025</td>
          <td class="p-2">Cameron Williamson</td>
          <td class="p-2">Almuerzo</td>
          <td class="p-2 text-yellow-500">Excusa</td>
        </tr>
      </tbody>
    </table>
  </div>


  <button class="fixed bottom-8 right-8 bg-yellow-500 text-white p-5 rounded-full shadow-lg hover:bg-yellow-600 transition">
    ➤
  </button>
</div>
@endsection
