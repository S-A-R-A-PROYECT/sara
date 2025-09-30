@extends('templates.students')

@section('content')
      

<!-- Contenido -->
<main class="flex-1 p-6">
    <!-- Fila superior -->
    <div class="grid grid-cols-4 gap-6">
        <!-- Porcentaje asistencia -->
        <div class="bg-teal-900 rounded-xl h-52 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>

        <!-- Registros/días -->
        <div class="bg-teal-400 rounded-xl h-52 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>

        <!-- Calendario -->
        <div class="bg-teal-400 rounded-xl h-52 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>

        <!-- Laterales -->
        <div class="flex flex-col gap-6">
            <div class="bg-teal-900 rounded-lg h-20 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>
            <div class="bg-teal-900 rounded-lg h-20 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>
        </div>
    </div>

    <!-- Fila inferior -->
    <div class="mt-6 grid grid-cols-3 gap-6">
        <!-- Faltas -->
        <div class="bg-teal-400 rounded-lg h-20 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>

        <!-- Refrigerios -->
        <div class="bg-teal-400 rounded-lg h-20 shadow-md hover:scale-105 hover:shadow-xl transition-all"></div>

        <!-- Tabla asistencias -->
        <div class="bg-gray-300 rounded-lg h-40 shadow-inner hover:scale-105 hover:shadow-lg transition-all"></div>
    </div>
</main>



<!-- Botón flotante -->
<button class="fixed bottom-6 right-6 bg-teal-900 text-white p-5 rounded-full shadow-xl 
    hover:bg-teal-700 hover:scale-110 hover:rotate-6 hover:shadow-2xl transition-all duration-300 text-3xl">
    ➤
</button>

@endsection
