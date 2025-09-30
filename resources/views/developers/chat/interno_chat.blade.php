@extends('templates.dv')

@section('content')

<div class="flex h-screen">

  <div class="flex-1 flex flex-col">

    <!-- Header -->
    <div class="bg-red-500 p-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <h1 class="text-xl font-bold text-white">Julian Ramirez</h1>
        <span class="px-2 py-1 rounded bg-yellow-400 text-xs">Profesor</span>
      </div>
    </div>

    <!-- Chat -->
    <div class="flex-1 p-6 space-y-4 overflow-y-auto">
      <!-- Mensaje alumno -->
      <div class="flex justify-end">
        <div class="bg-red-400 text-white px-4 py-2 rounded-lg max-w-xs">
          Profesor, solicitamos que el dispositivo #4853 sea reiniciado, porque esa porquería no sirve.
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
      <textarea 
        placeholder="Chatea con el usuario..." 
        class="border rounded-lg px-4 py-2 flex-1 resize-none min-h-[40px] max-h-[120px] overflow-y-auto"
      ></textarea>
      <button class="ml-2 px-4 py-2 bg-red-500 text-white rounded-lg">➤</button>
    </div>

  </div>
</div>

@endsection
