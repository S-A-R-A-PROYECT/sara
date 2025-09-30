@extends('templates.students')

@section('content')

<div class="bg-white text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <header class="flex justify-between items-center px-8 py-6 border-b-2 border-gray-200 relative">
    <div class="text-green-900 text-2xl font-bold inline-flex items-center gap-2 cursor-pointer 
                transition-transform duration-300 hover:scale-105 hover:drop-shadow-lg hover:text-green-950">
      <svg onclick="history.back()" xmlns="http://www.w3.org/2000/svg" 
           class="w-7 h-7 text-green-900 hover:text-green-950 transition-colors duration-300" 
           fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      <h1>Contacto Soporte</h1>
    </div>

    <img src="{{ asset('img/logo_sara-verde-oscuro.png') }}" alt="Logo S.A.R.A" 
         class="w-40 md:w-52 h-auto transition-transform duration-300 hover:scale-110 cursor-pointer">
  </header>


  <main class="flex-grow flex flex-col lg:flex-row px-8 mt-12 gap-8">

    <div class="flex-1 flex flex-col items-center">
      <p class="text-base md:text-lg mb-10 text-center max-w-xl transition-transform duration-300 hover:scale-105 hover:drop-shadow-md">
        Si tu duda no aparece aquí, puedes escribir a: <br>
        <a href="mailto:soporte@sara.edu.co" 
           class="text-green-800 font-semibold hover:text-green-600 transition">
           soporte@sara.edu.co
        </a><br>
        o déjanos tu inquietud y nosotros la responderemos
      </p>

      <form class="rounded-xl border border-teal-300 p-6 shadow-md bg-white w-full max-w-4xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
          <input type="text" placeholder="Nombre" 
                 class="p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
          <input type="email" placeholder="Correo" 
                 class="p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
          <input type="text" placeholder="Deseo ayuda con..." 
                 class="p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
        </div>
        <textarea rows="5" 
          placeholder="Escribe tu pregunta aquí..."
          class="w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 mb-5"></textarea>
        <div class="flex justify-center">
          <button type="submit" 
                  class="bg-teal-900 text-white px-12 py-3 rounded-full text-base font-semibold hover:bg-teal-700 transition">
            ENVIAR
          </button>
        </div>
      </form>
    </div>

    <div class="flex-1 flex justify-center items-end relative">
      <img src="{{ asset('img/trabajador.png') }}" alt="Trabajador" 
           class="w-[500px] md:w-[760px] h-auto">
    </div>
    
  </main>

</div>

@endsection
