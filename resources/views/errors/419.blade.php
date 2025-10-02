@extends('errors::minimal')

@section('title', __('Página expirada'))
@section('code', '419')
@section('message', __('La sesión ha expirado'))

<div class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center min-h-screen relative pb-40 sm:pb-48 md:pb-56 lg:pb-64">
    
    <!-- Logo superior -->
    <div class="mb-8 z-10">
        <img src="{{ asset('img/logo_sara-amarillo.png') }}" 
             alt="Logo oficial de S.A.R.A." 
             class="w-80 mx-auto">
    </div>

    <!-- Mensaje principal -->
    <h1 class="text-4xl sm:text-5xl font-bold text-[#F2AC2A] mb-6 z-10 text-center">
        ⏳ ¡Ups! La página ha expirado
    </h1>

    <p class="text-base sm:text-lg text-gray-600 max-w-xl text-center mb-8 z-10 px-4">
        Parece que tu sesión se tomó un descanso más largo de lo debido.  
        Para seguir usando <span class="font-semibold text-[#F2AC2A]">S.A.R.A.</span>, necesitas actualizar la página o volver a iniciar sesión.  
        <br><span class="italic">No te preocupes, todo sigue bajo control.</span>
    </p>

    <!-- Botón volver -->
    <a href="{{ route('home') }}"
       class="px-6 py-3 bg-[#F2AC2A] text-white font-semibold rounded-lg shadow-md hover:bg-[#d89115] transition z-10 mb-12">
       Volver al inicio
    </a>

    <!-- Imagen ilustrativa -->
    <div class="left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('img/error419.png') }}" 
             alt="Imagen de S.A.R.A. esperando pacientemente"
             class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl xl:max-w-2xl mx-auto">
    </div>
</div>
@endsection
