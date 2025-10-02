@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('code', '402')
@section('message', __('Payment Required'))


<div class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center min-h-screen relative pb-40 sm:pb-48 md:pb-56 lg:pb-64">
    
    <!-- Logo superior -->
    <div class="mb-8 z-10">
        <img src="{{ asset('img/logo_sara-amarillo.png') }}" 
             alt="Logo oficial de S.A.R.A." 
             class="w-80 mx-auto">
    </div>

    <!-- Mensaje principal -->
    <h1 class="text-4xl sm:text-5xl font-bold text-[#E63946] mb-6 z-10 text-center">
        💳 ¡Oops! No tienes saldo en S.A.R.A.
    </h1>

    <p class="text-base sm:text-lg text-gray-600 max-w-xl text-center mb-8 z-10 px-4">
        Parece que tu <span class="font-semibold text-[#E63946]">cupo de alimentación</span> no está disponible o requiere activación.  
        <br><span class="italic">Verifica tu estado en el sistema o contacta al administrador.</span>
    </p>

    <!-- Botón volver -->
    <a href="{{ route('home') }}"
       class="px-6 py-3 bg-[#E63946] text-white font-semibold rounded-lg shadow-md hover:bg-[#c52f3b] transition z-10 mb-12">
       Volver al inicio
    </a>

    <!-- Imagen ilustrativa -->
    <div class="left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('img/error402.png') }}" 
             alt="Estudiante sin saldo en S.A.R.A."
             class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl xl:max-w-2xl mx-auto">
    </div>
</div>
@endsection
