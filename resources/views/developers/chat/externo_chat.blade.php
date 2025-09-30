@extends('templates.dv')

@section('content')
<div class="flex h-screen">  

  <!-- Panel izquierdo -->
  <div class="w-1/3 border-r p-6 space-y-6">

    <h1 class="text-red-600 font-bold text-3xl mb-2">S.A.R.A</h1>

    <!-- Buscador -->
    <input 
      type="text" 
      placeholder="Buscar..." 
      class="w-full px-4 py-2 rounded-full bg-gray-300 text-gray-700 placeholder-gray-500 focus:outline-none"
    />

    <!-- Botones -->
    <div class="flex w-full space-x-2">
      <!-- Soporte -->
      <button class="relative flex-1 px-6 py-2 rounded-full bg-red-600 text-white text-sm flex items-center justify-center font-semibold hover:bg-red-700 transition">
        Soporte
        <span class="absolute -top-2 -right-2 bg-white text-red-600 text-xs font-bold w-6 h-6 flex items-center justify-center rounded-full shadow-md">
          10
        </span>
      </button>

      <!-- Profesor -->
      <button class="flex-1 px-6 py-2 rounded-full bg-gray-200 text-sm flex items-center justify-center hover:bg-gray-300 transition">
        Profesores
      </button>

      <!-- Estudiantes -->
      <button class="flex-1 px-6 py-2 rounded-full bg-gray-200 text-sm flex items-center justify-center hover:bg-gray-300 transition">
        Estudiantes
      </button>
    </div>

    <!-- Lista de usuarios -->
    <div class="space-y-4">
      
      <!-- Profesor -->
      <div class="relative flex items-start bg-white shadow rounded-lg p-4 hover:shadow-lg transition">
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
        <span class="absolute top-2 right-2 px-3 py-1 bg-red-500 text-white text-xs font-semibold rounded-full">
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
        <span class="absolute top-2 right-2 px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full">
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

  <!-- Panel derecho (logo central) -->
  <div class="flex-1 flex items-center justify-center">
    <div class="text-center">
      <img src="{{ asset('img/logo_sara-gris.png') }}" 
           alt="Logo S.A.R.A" 
           class="w-[450px] h-auto drop-shadow-xl">
    </div>
  </div>

</div>

@endsection

