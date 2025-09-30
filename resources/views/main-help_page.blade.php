@extends('templates.students')

@section('content')

<div class="bg-white min-h-screen flex flex-col">

    <!-- Flecha volver arriba a la izquierda -->
    <div class="p-6">
        <a href="{{ route('home') }}" 
           class="text-teal-900 hover:text-teal-700 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                 class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <div class="flex-1 flex items-center justify-center">
        <main class="flex flex-col items-center gap-14 w-11/12 max-w-4xl text-center">

            <!-- Logo -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('img\logo_sara-verde-oscuro.png') }}"  
                     alt="Logo S.A.R.A"
                     class="w-80 h-auto object-contain hover:scale-105 transition-all duration-300 mb-6">
                <p class="text-gray-700 text-lg md:text-xl">
                    Servicio Automatizado de Registro Alimentario
                </p>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-teal-900">
                ¿En qué podemos ayudarte?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-full">
                
                <a href="{{ route('faq') }}" 
                   class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg 
                          hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Preguntas Frecuentes
                </a>

                <a href="{{ route('consejos') }}" 
                   class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg 
                          hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Consejos Prácticos
                </a>

                <a href="{{ route('contact') }}" 
                   class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg 
                          hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Contacto de Soporte
                </a>

                <a href="{{ route('quienesomos') }}" 
                   class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg 
                          hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Como se usa
                </a>
            </div>
        </main>
    </div>

</div>

@endsection
