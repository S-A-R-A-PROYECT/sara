@extends('templates.general')

@section('content')

<body class="bg-gray-50 text-gray-800 flex flex-col items-center justify-center min-h-screen relative pb-40 sm:pb-48 md:pb-56 lg:pb-64">

    <!-- Logo superior -->
    <div class="mb-8 z-10">
        <img src="{{ asset('img/logo_sara-amarillo.png') }}" 
             alt="Logo oficial de S.A.R.A." 
             class="w-80 mx-auto">
    </div>

    
    <h1 class="text-4xl sm:text-5xl font-bold text-[#F2AC2A] mb-6 z-10 text-center">
        🚪 ¡Alto ahí! No tienes permiso para entrar
    </h1>
  
    <p class="text-base sm:text-lg text-gray-600 max-w-xl text-center mb-8 z-10 px-4">
        Parece que intentaste abrir una puerta cerrada.  
        Para acceder aquí necesitas iniciar sesión o contar con la autorización adecuada.  
        <br>Tranquilo, <span class="font-semibold text-[#F2AC2A]">S.A.R.A.</span> cuida muy bien sus espacios. 😉
    </p>

    <!-- Botón volver -->
    <a href="{{ url('/') }}"
       class="px-6 py-3 bg-[#F2AC2A] text-white font-semibold rounded-lg shadow-md hover:bg-[#d89115] transition z-10 mb-12">
       Volver al inicio
    </a>


    <div class="fixed bottom-0 left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('img/error401.png') }}" 
             alt="Imagen de acceso denegado por S.A.R.A." 
             class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-xl xl:max-w-2xl mx-auto">
    </div>

</body>
@endsection


