@extends('templates.general') 

@section('content')

<body class="bg-white font-sans">

 
  <header class="flex justify-between items-center px-6 md:px-10 py-6 border-b-2 border-teal-600">
    

    <div class="flex items-center gap-3 text-green-900 text-2xl font-bold cursor-pointer 
                transition-transform duration-300 hover:scale-105 hover:drop-shadow-lg hover:text-green-950">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      <span>Monitoreo de Servidores</span>
    </div>


    <img src="/Heartbeat/img/image.png" alt="Logo S.A.R.A" 
         class="w-32 md:w-56 h-auto transform hover:scale-105 hover:drop-shadow-lg transition-transform duration-300 cursor-pointer"> 
  </header>


  <main class="max-w-5xl mx-auto mt-12 px-6">


    <h2 class="text-3xl md:text-4xl font-bold text-teal-700 mb-8">Nuestros sistemas</h2>

  <!-- Servidores Web -->
    <details open class="mb-6 border border-teal-700 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="flex justify-between items-center p-6 cursor-pointer bg-teal-50 hover:bg-teal-100 font-semibold rounded-t-2xl">
        🌐 Servidores Web
        <span class="px-4 py-1 text-base rounded-full bg-green-100 text-green-700">En línea</span>
      </summary>
      <div class="p-6 text-gray-700 text-lg">Servidor principal activo</div>
    </details>

   <!-- APIs -->
    <details class="mb-6 border border-teal-700 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="flex justify-between items-center p-6 cursor-pointer bg-teal-50 hover:bg-teal-100 font-semibold rounded-t-2xl">
        🔗 API's
        <span class="px-4 py-1 text-base rounded-full bg-green-100 text-green-700">En línea</span>
      </summary>
      <div class="p-6 text-gray-700 text-lg">Sin incidencias</div>
    </details>

<!-- Dispositivos -->
    <details class="mb-6 border border-teal-700 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="flex justify-between items-center p-6 cursor-pointer bg-teal-50 hover:bg-teal-100 font-semibold rounded-t-2xl">
        💻 Dispositivos
        <span class="px-4 py-1 text-base rounded-full bg-green-100 text-green-700">En línea</span>
      </summary>
      <div class="p-6 text-gray-700 text-lg">Sin incidencias</div>
    </details>

   <!-- Proveedores -->
    <details class="mb-12 border border-teal-700 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="flex justify-between items-center p-6 cursor-pointer bg-teal-50 hover:bg-teal-100 font-semibold rounded-t-2xl">
        🛠️ Proveedores
        <span class="px-4 py-1 text-base rounded-full bg-green-100 text-green-700">En línea</span>
      </summary>
      <div class="p-6 text-gray-700 text-lg">Sin incidencias</div>
    </details>

  <!-- Incidentes pasados -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6">📜 Incidentes pasados</h2>

  <!-- Incidente 1 -->
    <details class="mb-6 border rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="flex justify-between items-center p-6 cursor-pointer bg-red-50 hover:bg-red-100 font-semibold rounded-t-2xl">
        2 de septiembre de 2025
        <span class="px-4 py-1 text-base rounded-full bg-red-100 text-red-700">Fuera de servicio</span>
      </summary>
      <div class="p-6">
        <h3 class="font-bold text-red-700 mb-3 text-lg">⚠️ Problema en la base de datos</h3>
        <p class="text-base text-gray-600">
          Actualmente estamos experimentando problemas con la base de datos, lo que afecta a casi todos los sitios web.  
          Estamos trabajando para solucionarlo lo más rápido posible. Pedimos disculpas por los inconvenientes.
        </p>
      </div>
    </details>

    <!-- Incidentes sin reportes -->
    <details class="mb-6 border rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="p-6 cursor-pointer bg-gray-50 hover:bg-gray-100 font-semibold rounded-t-2xl">
        3 de septiembre de 2025
      </summary>
      <div class="p-6 text-base text-gray-500">Sin incidentes reportados ✅</div>
    </details>

    <details class="mb-6 border rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 text-xl">
      <summary class="p-6 cursor-pointer bg-gray-50 hover:bg-gray-100 font-semibold rounded-t-2xl">
        4 de septiembre de 2025
      </summary>
      <div class="p-6 text-base text-gray-500">Sin incidentes reportados ✅</div>
    </details>

  </main>
</body>
</html>