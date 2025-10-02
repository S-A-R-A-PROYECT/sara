@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))

@extends('errors::minimal')

@section('title', __('Error del servidor'))
@section('code', '500')
@section('message', __('Error interno del servidor'))

<div class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center min-h-screen relative pb-40 sm:pb-48 md:pb-56 lg:pb-64">
    
    <!-- Logo superior -->
    <div class="mb-8 z-10">
        <img src="{{ asset('img/logo_sara-amarillo.png') }}" 
             alt="Logo oficial de S.A.R.A." 
             class="w-80 mx-auto">
    </div>

    <!-- Mensaje principal -->
    <h1 class="text-4xl sm:text-5xl font-bold text-[#F2AC2A] mb-6 z-10 text-center">
        ⚠️ ¡Ups! Algo salió mal en la cocina de S.A.R.A.
    </h1>

    <p class="text-base sm:text-lg text-gray-600 max-w-xl text-center mb-8 z-10 px-4">
        Parece que se nos quemó una receta interna del sistema 🍳🔥.  
        No te preocupes, nuestro equipo ya está revisando el problema.  
        <br><span class="italic">Intenta de nuevo más tarde, S.A.R.A. estará lista para servirte.</span>
    </p>

    <!-- Botón volver -->
    <a href="{{ route('home') }}"
       class="px-6 py-3 bg-[#F2AC2A] text-white font-semibold rounded-lg shadow-md hover:bg-[#d89115] transition z-10 mb-12">
       Volver al inicio
    </a>

    <!-- Imagen ilustrativa -->
    <div class="left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('img/error500.png') }}" 
             alt="Imagen cómica de S.A.R.A. arreglando un problema"
             class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl xl:max-w-2xl mx-auto">
    </div>
</div>
@endsection
