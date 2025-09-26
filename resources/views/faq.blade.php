@extends('templates.students')

@section('content')

<body class="bg-white font-sans flex flex-col min-h-screen">

  <!-- Header -->
  <header class="flex flex-col md:flex-row justify-between items-center px-6 md:px-8 py-4 border-b-2 border-teal-600"> 
    <h1 class="text-2xl md:text-3xl font-extrabold text-teal-700 text-center md:text-left flex items-center gap-2 
               hover:text-teal-900 transition-colors duration-300 cursor-pointer 
               transition-transform hover:scale-105 hover:drop-shadow-lg">
      <!-- Flecha volver -->
      <svg xmlns="http://www.w3.org/2000/svg" onclick="history.back()" 
           class="w-7 h-7 text-green-900 hover:text-green-950 transition-colors duration-300 cursor-pointer" 
           fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      ¿Tienes preguntas? (FAQ)
    </h1> 
    <img src="{{ asset('img/logo-sara-verde-serv.png') }}" alt="Logo S.A.R.A." 
         class="w-32 md:w-56 h-auto mt-4 md:mt-0 transform hover:scale-105 hover:drop-shadow-lg transition-transform duration-300 cursor-pointer"> 
  </header>

  <!-- Imágenes intro -->
  <div class="flex flex-col md:flex-row justify-between items-center px-6 md:px-16 py-8 space-y-6 md:space-y-0"> 
    <img src="{{ asset('img/trabajador-volteado.png') }}" alt="Trabajador" 
         class="w-80 md:w-128 h-auto transform hover:scale-105 hover:drop-shadow-lg transition-transform duration-300 cursor-pointer"> 
    <img src="{{ asset('img/estudiante-pregunta.png') }}" alt="Estudiante" 
         class="w-80 md:w-128 h-auto transform hover:scale-105 hover:drop-shadow-lg transition-transform duration-300 cursor-pointer"> 
  </div>

  <!-- FAQ con acordeón -->
  <section class="max-w-4xl mx-auto p-6 text-lg">
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-teal-100 text-teal-700"> 

      <!-- Pregunta 1 -->
      <h2 id="accordion-heading-1">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 rounded-t-lg text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-1" aria-expanded="false" aria-controls="accordion-body-1">
          <span>¿Qué es S.A.R.A.?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </h2>
      <div id="accordion-body-1" class="hidden" aria-labelledby="accordion-heading-1">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>S.A.R.A. (Sistema Automatizado de Registro de Alimentación) es una herramienta tecnológica diseñada para optimizar y automatizar la entrega de refrigerios y almuerzos en las instituciones educativas.</p>
        </div>
      </div>

      <!-- Pregunta 2 -->
      <h2 id="accordion-heading-2">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-2" aria-expanded="false" aria-controls="accordion-body-2">
          <span>¿Cómo funciona S.A.R.A.?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-body-2" class="hidden" aria-labelledby="accordion-heading-2">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>El sistema utiliza dispositivos electrónicos (como el ESP32 y sensores biométricos) que registran a cada estudiante en tiempo real. Estos datos se almacenan y se pueden consultar desde una aplicación web para garantizar un control eficiente.</p>
        </div>
      </div>

      <!-- Pregunta 3 -->
      <h2 id="accordion-heading-3">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-3" aria-expanded="false" aria-controls="accordion-body-3">
          <span>¿Quiénes pueden usar S.A.R.A.?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-body-3" class="hidden" aria-labelledby="accordion-heading-3">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>Está diseñado principalmente para:</p>
          <ul class="list-disc ml-6 space-y-2">
            <li><strong>Estudiantes:</strong> reciben su alimentación de manera rápida y organizada</li>
            <li><strong>Profesores y coordinadores:</strong> pueden verificar asistencia y entregas</li>
            <li><strong>Administradores:</strong> gestionan datos, reportes e inventario del programa</li>
          </ul>
        </div>
      </div>
<!-- Pregunta 4 -->
      <h2 id="accordion-heading-4">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-4" aria-expanded="false" aria-controls="accordion-body-4">
          <span>¿Qué pasa si no hay conexión a internet?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-body-4" class="hidden" aria-labelledby="accordion-heading-4">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>S.A.R.A. está preparado para trabajar sin conexión, los registros se guardan localmente y se sincronizan automáticamente cuando vuelve la conexión.</p>
        </div>
      </div>

      <!-- Pregunta 5 -->
      <h2 id="accordion-heading-5">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-5" aria-expanded="false" aria-controls="accordion-body-5">
          <span>¿Los datos de los estudiantes están seguros?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-body-5" class="hidden" aria-labelledby="accordion-heading-5">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>Sí. La información está protegida en servidores en la nube y solo usuarios autorizados (profesores, coordinadores y administradores) tienen acceso.</p>
        </div>
      </div>

      <!-- Pregunta 6 -->
      <h2 id="accordion-heading-6">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-6" aria-expanded="false" aria-controls="accordion-body-6">
          <span>¿Qué diferencia a S.A.R.A. de otros sistemas?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-body-6" class="hidden" aria-labelledby="accordion-heading-6">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>S.A.R.A. se diferencia porque no depende solo del detector. Permite varios métodos de registro, guarda la información en la nube, ofrece reportes en tiempo real y funciona con o sin internet.</p>
          <ul class="list-disc ml-6 mt-2 space-y-2">
            <li>Reducción de filas y tiempos de espera</li>
            <li>Registro confiable y en tiempo real</li>
            <li>Control de asistencia al comedor escolar</li>
            <li>Reportes automáticos para la institución</li>
            <li>Mayor seguridad y escalabilidad</li>
          </ul>
        </div>
      </div>

      <!-- Pregunta 7 -->
      <h2 id="accordion-heading-7">
        <button type="button" class="flex justify-between items-center w-full p-6 font-semibold text-left text-gray-900 border border-gray-200 rounded-b-lg text-xl 
                       hover:bg-teal-50 transition-colors duration-300 transition-transform hover:scale-105 hover:drop-shadow-md" 
                data-accordion-target="#accordion-body-7" aria-expanded="false" aria-controls="accordion-body-7">
          <span>¿Qué beneficios ofrece?</span>
          <svg data-accordion-icon class="w-7 h-7 shrink-0 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.061l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-body-7" class="hidden" aria-labelledby="accordion-heading-7">
        <div class="p-6 border border-t-0 border-gray-200 text-lg">
          <p>S.A.R.A. ofrece eficiencia, confiabilidad, seguridad de datos y facilidad de uso para estudiantes y docentes.</p>
        </div>
      </div>

    </div>
  </section>
    </div>
  </section>

  <!-- Encuesta -->
  <section class="max-w-4xl mx-auto p-8 mt-12 mb-20 border-2 border-teal-700 rounded-2xl bg-gray-50 text-lg 
                  hover:shadow-lg transition-shadow duration-300 transition-transform hover:scale-105 hover:drop-shadow-lg">
    <h2 class="text-2xl font-bold text-teal-700 mb-3">¿No encontraste tu pregunta en la lista?</h2>
    <p class="text-gray-700 mb-6">Escríbela aquí y nuestro equipo de S.A.R.A. te dará una respuesta personalizada en el menor tiempo posible.</p>

    <form class="space-y-6 transition-transform duration-300 hover:scale-105 hover:drop-shadow-lg">
      <div>
        <label for="nombre" class="block font-semibold text-gray-700">Nombre</label>
        <input type="text" id="nombre" placeholder="Tu nombre" 
               class="w-full p-3 border rounded-lg text-lg hover:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500 transition">
      </div>

      <div>
        <label for="correo" class="block font-semibold text-gray-700">Correo</label>
        <input type="email" id="correo" placeholder="Tu correo electrónico" 
               class="w-full p-3 border rounded-lg text-lg hover:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500 transition">
      </div>

      <div>
        <label for="categoria" class="block font-semibold text-gray-700">Deseo ayuda con:</label>
        <select id="categoria" 
                class="w-full p-3 border rounded-lg text-lg hover:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500 transition">
          <option value="">Selecciona una opción</option>
          <option value="tecnico">Soporte técnico</option>
          <option value="uso">Cómo usar S.A.R.A.</option>
          <option value="seguridad">Seguridad de datos</option>
          <option value="otro">Otro</option>
        </select>
      </div>

      <div>
        <label for="pregunta" class="block font-semibold text-gray-700">Tu pregunta</label>
        <textarea id="pregunta" rows="4" placeholder="Escribe tu pregunta aquí..." 
                  class="w-full p-3 border rounded-lg text-lg hover:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500 transition"></textarea>
      </div>

      <div class="flex justify-center mt-6">
        <button type="submit" 
                class="bg-teal-900 text-white px-12 py-3 rounded-xl font-semibold text-lg shadow-md transform hover:scale-110 hover:shadow-xl transition-all duration-300">
          Enviar pregunta
        </button> 
      </div>
    </form>
  </section>

  <!-- Flowbite JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
@endsection
