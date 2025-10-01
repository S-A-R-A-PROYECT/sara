@extends('templates.teachers')
@extends('templates.headers.teacher')

@section('content')

<div class="bg-[#F2F2F2] p-6 min-h-screen font-sans">
  <h1 class="text-3xl font-bold mb-6 text-[#114D58]">BIENVENIDO SANTIAGO PARRAGA</h1>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

    <!-- Progreso de asistencias -->
    <div class="bg-[#114D58] text-white rounded-xl p-4 shadow-lg">
      <h2 class="font-semibold">CURSOS POR DIRECTORES DE CURSO</h2>
      <ul class="mt-4 space-y-3 text-sm">
        <li class="flex justify-between"><span>Kristin Watson</span><span class="font-bold">70%</span></li>
        <li class="flex justify-between"><span>Darlene Robertson</span><span class="font-bold">30%</span></li>
        <li class="flex justify-between"><span>Jenny Wilson</span><span class="font-bold">20%</span></li>
        <li class="flex justify-between"><span>Cameron Williamson</span><span class="font-bold">50%</span></li>
        <li class="flex justify-between"><span>Wade Warren</span><span class="font-bold">100%</span></li>
      </ul>
    </div>

    <!-- Top estudiantes cumplidos -->
    <div class="bg-[#39BFC0] text-white rounded-xl p-6 shadow-lg">
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
    <div class="bg-[#F2AC2A] text-white rounded-xl p-4 shadow-lg">
      <h2 class="font-semibold">Calendario asistencias</h2>
      <div class="grid grid-cols-7 gap-1 mt-4">
        <div class="w-6 h-6 bg-[#39BFC0] rounded"></div>
        <div class="w-6 h-6 bg-[#F25041] rounded"></div>
        <div class="w-6 h-6 bg-[#114D58] rounded"></div>
        <div class="w-6 h-6 bg-[#F2AC2A] rounded"></div>
        <div class="w-6 h-6 bg-[#39BFC0] rounded"></div>
        <div class="w-6 h-6 bg-[#39BFC0] rounded"></div>
        <div class="w-6 h-6 bg-[#F25041] rounded"></div>
      </div>
      <p class="text-xs mt-2">Aprende cómo contamos las asistencias</p>
    </div>

    <!-- Estado -->
    <div class="space-y-4">
      <div class="bg-[#114D58] text-white rounded-xl p-4">
        <p class="font-bold">Iniciado</p>
        <p class="text-sm">Estado de la jornada</p>
      </div>
      <div class="flex flex-col gap-3">
        <button class="bg-[#39BFC0] text-white px-4 py-2 rounded-lg font-bold hover:bg-[#114D58]">
          ✅ Iniciar día
        </button>
        <button class="bg-[#F25041] text-white px-4 py-2 rounded-lg font-bold hover:bg-[#114D58]">
          ⛔ Finalizar día
        </button>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-2 gap-6 mt-6">
    <div class="bg-[#39BFC0] text-white p-6 rounded-xl shadow-lg text-center">
      <p class="text-xl font-bold">50</p>
      <p class="text-sm">Refrigerios restantes</p>
    </div>
    <div class="bg-[#F2AC2A] text-white p-6 rounded-xl shadow-lg text-center">
      <p class="text-xl font-bold">126</p>
      <p class="text-sm">Estudiantes restantes</p>
    </div>
  </div>

  <!-- Botones de acción -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
    <a href="{{ route('home') }}" 
       class="bg-[#39BFC0] text-white py-3 rounded-lg shadow hover:bg-[#114D58] flex items-center justify-center font-semibold">
        📊 Generar reporte
    </a>
    
    <a href="{{ route('history') }}" 
       class="bg-[#114D58] text-white py-3 rounded-lg shadow hover:bg-[#39BFC0] flex items-center justify-center font-semibold">
        🧾 Historial
    </a>
    
    <a href="{{ route('home') }}" 
       class="bg-[#F2AC2A] text-white py-3 rounded-lg shadow hover:bg-[#114D58] flex items-center justify-center font-semibold">
        🔍 Buscar estudiante
    </a>
    
    <a href="{{ route('home') }}" 
       class="bg-[#F25041] text-white py-3 rounded-lg shadow hover:bg-[#114D58] flex items-center justify-center font-semibold">
        👨‍👩‍👧 Notificar acudientes
    </a>
  </div>

  <!-- Últimos registros -->
  <div class="bg-white mt-6 p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-bold mb-4 text-[#114D58]">Últimos registros</h2>
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="bg-gray-200 text-black">
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
          <td class="p-2 text-[#39BFC0] font-bold">Reclamado</td>
        </tr>
        <tr class="border-b">
          <td class="p-2">27/09/2025</td>
          <td class="p-2">Jenny Wilson</td>
          <td class="p-2">Refrigerio</td>
          <td class="p-2 text-[#F25041] font-bold">No asistió</td>
        </tr>
        <tr>
          <td class="p-2">25/09/2025</td>
          <td class="p-2">Cameron Williamson</td>
          <td class="p-2">Almuerzo</td>
          <td class="p-2 text-[#F2AC2A] font-bold">Excusa</td>
        </tr>
      </tbody>
    </table>
  </div>

  <button class="fixed bottom-8 right-8 bg-[#F2AC2A] text-white p-5 rounded-full shadow-lg hover:bg-[#114D58] transition">
    ➤
  </button>
</div>
@endsection
