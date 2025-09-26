@extends('templates.students')

@section('content')

<body class="bg-white text-gray-800 flex flex-col min-h-screen relative">

  <!-- Header -->
  <header class="flex items-center px-8 mt-8 relative">
   
    <div class="text-green-900 text-2xl font-bold inline-flex items-center gap-2 cursor-pointer 
                transition-transform duration-300 hover:scale-105 hover:drop-shadow-lg hover:text-green-950">
    
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green-900 hover:text-green-950 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      <h1>Contacto Soporte</h1>
    </div>
  
    <img src="public\img\logo-sara-verde-serv.png" alt="Logo S.A.R.A" class="w-40 h-auto absolute top-0 right-8">
  </header>

  <!-- Main -->
  <main class="flex-grow flex flex-row px-8 mt-12">
    
    <div class="flex-1 flex flex-col items-center mt-20 transition-transform duration-300 hover:scale-105 hover:drop-shadow-lg"> 
      <p class="text-base md:text-lg mb-10 text-center ml-60 inline-block transition-transform duration-300 hover:scale-105 hover:drop-shadow-md">
        Si tu duda no aparece aquí, puedes escribir a: <br>
        <a href="mailto:soporte@sara.edu.co" class="text-green-800 font-semibold hover:text-green-600 transition">soporte@sara.edu.co</a><br>
        o déjanos tu inquietud y nosotros la responderemos
      </p>

      <!-- Formulario -->
      <form class="rounded-xl border border-teal-300 p-5 shadow-md bg-white w-full max-w-3xl mt-6 ml-60 
                   transition-transform duration-300 hover:scale-105 hover:drop-shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mb-7">
          <input type="text" placeholder="Nombre" class="p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
          <input type="email" placeholder="Correo" class="p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
          <input type="text" placeholder="Deseo ayuda con:" class="p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
        </div>
        <textarea rows="5" 
          placeholder="Tu pregunta. ¿Qué paso si rompo la mano y no puedo colocar mi huella en Sara?"
          class="w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 mb-5"></textarea>
        <div class="flex justify-center">
          <button type="submit" class="bg-teal-900 text-white px-12 py-3 rounded-full text-base font-semibold hover:bg-teal-700 transition">
            ENVIAR
          </button>
        </div>
      </form>
    </div>

    <!-- Columna derecha: Imagen -->
    <div class="flex-1 flex justify-center items-end relative">
      <img src="public\img\trabajador.png" alt="Trabajador" 
           class="w-[760px] h-auto absolute bottom-0 transition-transform duration-300 hover:scale-110 hover:drop-shadow-2xl">
    </div>
    
  </main>


</body>
</html>