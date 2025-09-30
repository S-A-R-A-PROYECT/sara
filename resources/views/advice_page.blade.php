@extends('templates.students')

@section('content')

  <!-- Header -->
  <header class="grid grid-cols-3 items-center px-6 md:px-12 py-6">
    <!-- Botón volver -->
    <div class="flex justify-start">
      <a href="{{ route('help') }}" 
         class="transition-transform hover:scale-125 text-gray-700 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-8 h-8" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </a>
    </div>

    <!-- Logo centrado -->
    <div class="flex justify-center">
      <img src="{{ asset('img/logo_sara-verde-oscuro.png') }}" alt="Logo S.A.R.A" 
           class="w-44 md:w-72 h-auto transition-transform duration-300 hover:scale-110 hover:drop-shadow-lg">
    </div>

    <!-- Columna vacía para equilibrar -->
    <div></div>
  </header>

  <!-- Título -->
  <h1 class="text-3xl md:text-4xl font-extrabold text-teal-900 text-center mt-6 
             transition-transform duration-300 hover:scale-110 hover:drop-shadow-md">
    Consejos para usar S.A.R.A
  </h1>

  <!-- Consejos -->
  <main class="flex-grow flex justify-center items-center px-6 py-14">
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-12 text-center max-w-7xl w-full">

      <!-- Consejo 1 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">💧</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Debes tener tu dedo limpio
        </p>
      </div>

      <!-- Consejo 2 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">☝️</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Colocar dedo recto
        </p>
      </div>

      <!-- Consejo 3 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">🩹</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Procura que el dedo no tenga heridas
        </p>
      </div>

      <!-- Consejo 4 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">👉</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Siempre usa el dedo registrado
        </p>
      </div>

      <!-- Consejo 5 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">🌀</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Revisa tu nombre en pantalla
        </p>
      </div>

      <!-- Consejo 6 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">✅</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Sé paciente en la fila
        </p>
      </div>

      <!-- Consejo 7 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">⏳</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Mantente en tu lugar en la fila
        </p>
      </div>

      <!-- Consejo 8 -->
      <div class="flex flex-col items-center">
        <div class="w-28 h-28 flex items-center justify-center rounded-full bg-blue-100 
                    transition-transform duration-300 hover:scale-125 hover:shadow-2xl">
          <span class="text-6xl">🔊</span>
        </div>
        <p class="mt-5 text-gray-800 font-semibold text-lg md:text-xl">
          Informa si falla el lector
        </p>
      </div>

    </div>
  </main>

@endsection
