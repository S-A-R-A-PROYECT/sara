@extends('templates.teachers')

@section('content')

<div class="min-h-screen flex flex-col">
    {{-- HTML --}}
    <div class="flex flex-1 flex-col md:flex-row">

        <!-- formulario -->

        <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-6 py-10 bg-white">
            <img src="{{ asset('img/sara.png') }}" alt="Logo S.A.R.A" class="w-40 mb-6">

            <h2 class="text-2xl font-bold text-[#F2AC2A]">Bienvenido</h2>
            <h3 class="text-xl text-[#F2AC2A] mb-6">profesor</h3>

            <p class="text-sm text-gray-500 mb-6">
                Inicia sesión para acceder al sistema
            </p>

            <form class="w-full max-w-sm space-y-4">
                <input type="text" placeholder="Usuario"
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-[#F2AC2A]">

                <input type="password" placeholder="Contraseña"
                    class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-[#F2AC2A]">

                <button type="submit"
                    class="w-full py-2 bg-[#F2AC2A] text-white font-semibold rounded-full hover:bg-[#e19920] transition">
                    Ingresar
                </button>
            </form>
        </div>


        <div class="hidden md:flex w-1/2">
            <img src="{{ asset('img/teachers-login.jpg') }}" alt="Estudiantes en el comedor"
                class="w-full h-full object-cover object-left">

        </div>
    </div>
</div>

@endsection
