@extends('templates.general')

@section('content')

<div class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center min-h-screen relative pb-20 sm:pb-28 md:pb-36 lg:pb-44 space-y-6">
    
    <!-- Logo superior -->
    <div class="mb-8 z-10">
        <img src="{{ asset('img/logo_sara-amarillo.png') }}" 
             alt="Logo oficial de S.A.R.A." 
             class="w-80 mx-auto">
    </div>

    <!-- Mensaje principal -->
    <h1 class="text-4xl sm:text-5xl font-bold text-[#F2AC2A] mb-6 z-10 text-center">
        ❌ ¡Oops! Página no encontrada
    </h1>

    <p class="text-base sm:text-lg text-gray-600 max-w-xl text-center mb-8 z-10 px-4">
        Buscamos por todos lados pero no pudimos encontrar lo que buscas.  
        Parece que hasta <span class="font-semibold text-[#F2AC2A]">S.A.R.A.</span> se quedó confundida.  
        <br><span class="italic">Tal vez la página fue movida o nunca existió...</span>
    </p>

    <!-- Botón volver -->
    <a href="{{ route('home') }}"
       class="px-6 py-3 bg-[#F2AC2A] text-white font-semibold rounded-lg shadow-md hover:bg-[#d89115] transition z-10">
        Volver al inicio
    </a>

    <!-- Imagen ilustrativa -->
    <div class="z-10">
        <img src="{{ asset('img/error404.png') }}" 
             alt="Imagen cómica de S.A.R.A. confundida"
             class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl xl:max-w-2xl mx-auto">
    </div>
</div>

@endsection
