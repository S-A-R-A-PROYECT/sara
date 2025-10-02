@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@extends('errors::minimal')


@extends('errors::minimal')

@section('title', __('Demasiadas solicitudes'))
@section('code', '429')
@section('message', __('Demasiadas solicitudes'))

<div class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center min-h-screen relative pb-40 sm:pb-48 md:pb-56 lg:pb-64">
    
    <!-- Logo superior -->
    <div class="mb-8 z-10">
        <img src="{{ asset('img/logo_sara-amarillo.png') }}" 
             alt="Logo oficial de S.A.R.A." 
             class="w-80 mx-auto">
    </div>

    <!-- Mensaje principal -->
    <h1 class="text-4xl sm:text-5xl font-bold text-[#F2AC2A] mb-6 z-10 text-center">
        💤 ¡Oops! S.A.R.A. necesita un respiro
    </h1>

    <p class="text-base sm:text-lg text-gray-600 max-w-xl text-center mb-8 z-10 px-4">
        Has hecho demasiadas solicitudes en muy poco tiempo.  
        <span class="font-semibold text-[#F2AC2A]">S.A.R.A.</span> está tomando un descanso para recuperar energías.  
        <br><span class="italic">Inténtalo de nuevo en unos segundos.</span>
    </p>

    <!-- Botón volver -->
    <a href="{{ route('home') }}"
       class="px-6 py-3 bg-[#F2AC2A] text-white font-semibold rounded-lg shadow-md hover:bg-[#d89115] transition z-10 mb-12">
       Volver al inicio
    </a>

    <!-- Imagen ilustrativa -->
    <div class="left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('errors/img/error429.png') }}" 
             alt="Imagen cómica de S.A.R.A. descansando"
             class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl xl:max-w-2xl mx-auto">
    </div>
</div>
@endsection
