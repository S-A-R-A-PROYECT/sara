@extends('templates.students')

@section('content')

<div class="bg-white min-h-screen flex items-center justify-center">

    <main class="flex items-center justify-between w-11/12 max-w-7xl">

        <div class="flex flex-col items-center gap-14">


            <div class="flex justify-center">
                <img src="{{ asset('img\logo_sara-verde-oscuro.png') }}" alt="Logo S.A.R.A"
                    class="w-96 h-auto object-contain hover:scale-105 transition-all duration-300">
            </div>


            <div class="grid grid-cols-2 gap-10 w-[44rem]">
                <button
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Acceder al sistema
                </button>
                <a href="{{ route('us.view') }}"
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Conoce más de S.A.R.A
                    
                </a>
                <button
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Noticias / Actualizaciones
                </button>
                <button
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Soporte / Ayuda
                </button>
            </div>
        </div>


        <div class="w-[32rem]">
            <img src="{{ asset('img/almuerzo.png') }}" alt="Estudiantes recibiendo almuerzo"
                class="w-full object-contain">
        </div>
    </main>

</div>

@endsection