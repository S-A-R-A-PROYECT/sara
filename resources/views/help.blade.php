@extends('templates.students') 
{{-- LUEGO TENEMOS QUE CREAR UNA GENERAL!!! --}}
@section('content')

<header class="flex justify-between items-center px-6 md:px-12 py-6 border-b-2 border-[#114D58]">
  <div class="flex items-center gap-3 cursor-pointer">
    <svg onclick="history.back()" xmlns="http://www.w3.org/2000/svg"
         class="w-9 h-9 text-gray-700 hover:text-gray-900 transition-transform hover:scale-110"
         fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    <h2 class="text-2xl md:text-3xl font-bold text-[#114D58]
               transition-transform duration-300 ease-out hover:-translate-y-3 hover:scale-105">
      HELP / Ayuda
    </h2>
  </div>

  <img src="{{ asset('advice_page/img/logo-sara-22.png') }}" alt="Logo S.A.R.A"
       class="w-44 md:w-64 h-auto transition-transform duration-300 hover:scale-110 cursor-pointer">
</header>

<div class="w-full text-center mt-12 mb-8">
  <h1 class="text-4xl md:text-5xl font-extrabold text-[#114D58]">
    Cómo usar
  </h1>
</div>

<hr class="border-t-2 border-gray-300 w-3/4 mx-auto mb-12">

<main class="flex-grow flex justify-center items-start px-6 pb-16">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-y-10 gap-x-12 max-w-7xl w-full text-lg md:text-xl">

    <!-- Profesor -->
    <div class="group cursor-pointer">
      <div class="flex justify-center mb-4">
        <div class="bg-[#F2AC2A] text-white font-bold px-6 py-2 rounded-md text-lg md:text-xl shadow-md
                    transition-transform duration-300 ease-out group-hover:-translate-y-6 group-hover:shadow-lg">
          Soy Profesor
        </div>
      </div>
      <div class="border-2 border-[#F2AC2A] bg-yellow-50 p-8 rounded-xl
                  transition-transform duration-300 ease-out group-hover:-translate-y-6 group-hover:shadow-xl">
        <ol class="list-decimal list-inside space-y-4 text-gray-800 font-medium">
          <li>Supervisa que los estudiantes usen correctamente el lector de huella</li>
          <li>Registra manualmente a un estudiante si presenta problemas</li>
          <li>Revisa reportes de asistencia y alimentación desde la aplicación web</li>
        </ol>
      </div>
    </div>

    <!-- Estudiante -->
    <div class="group cursor-pointer">
      <div class="flex justify-center mb-4">
        <div class="bg-[#114D58] text-white font-bold px-6 py-2 rounded-md text-lg md:text-xl shadow-md
                    transition-transform duration-300 ease-out group-hover:-translate-y-6 group-hover:shadow-lg">
          Soy Estudiante
        </div>
      </div>
      <div class="border-2 border-[#114D58] bg-teal-50 p-8 rounded-xl
                  transition-transform duration-300 ease-out group-hover:-translate-y-6 group-hover:shadow-xl">
        <ol class="list-decimal list-inside space-y-4 text-gray-800 font-medium">
          <li>Coloca tu huella digital en el lector cuando llegue tu turno</li>
          <li>Si no reconoce tu huella: limpia tu dedo y vuelve a intentarlo</li>
          <li>Si tienes una herida, avisa al profesor para que te registre manualmente</li>
          <li>Verifica en pantalla que tu nombre haya sido registrado</li>
        </ol>
      </div>
    </div>

    <!-- Desarrollador -->
    <div class="group cursor-pointer">
      <div class="flex justify-center mb-4">
        <div class="bg-[#F25041] text-white font-bold px-6 py-2 rounded-md text-lg md:text-xl shadow-md
                    transition-transform duration-300 ease-out group-hover:-translate-y-6 group-hover:shadow-lg">
          Soy Desarrollador
        </div>
      </div>
      <div class="border-2 border-[#F25041] bg-red-50 p-8 rounded-xl
                  transition-transform duration-300 ease-out group-hover:-translate-y-6 group-hover:shadow-xl">
        <ol class="list-decimal list-inside space-y-4 text-gray-800 font-medium">
          <li>Gestiona usuarios (estudiantes, profesores)</li>
          <li>Supervisa el historial de registros</li>
          <li>Genera reportes de consumo de refrigerios y almuerzos</li>
          <li>Administra configuraciones del sistema</li>
        </ol>
      </div>
    </div>

  </div>
</main>

<div class="flex justify-center mb-12">
  <button class="bg-[#39BFC0] text-[#114D58] px-8 py-4 rounded-md font-semibold text-lg md:text-xl
                 hover:opacity-90 transition cursor-pointer">
    ¿Otras preguntas?
  </button>
</div>

<footer class="bg-[#114D58] text-white text-center text-base md:text-lg py-5">
  © 2025 - Proyecto S.A.R.A | Colegio OEA I.E.D
</footer>

@endsection
