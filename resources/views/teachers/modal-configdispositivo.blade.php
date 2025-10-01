@section('content')

<body class="bg-gray-100 flex items-center justify-center min-h-screen">


  <div class="bg-white rounded-xl shadow-xl w-full max-w-2xl p-6 space-y-6">

    <div>
      <h2 class="text-lg font-semibold text-gray-800">Configuración de Dispositivo – Coordinadores</h2>
      <p class="text-sm text-gray-500">ID: Amelia-SARA<span class="font-mono"></span></p> <!-- la id va ser los nombres de cada dispositivo -->
      <div class="flex items-center gap-2 mt-1">
        <span class="w-3 h-3 rounded-full bg-green-500"></span>
        <span class="text-sm text-gray-600">Conectado</span>
        <span class="ml-auto text-xs text-gray-400">Última sincronización: 2025-09-24 14:30</span>
      </div>
    </div>

    
    <div class="space-y-4">
      <h3 class="text-sm font-semibold text-gray-700 uppercase">Opciones de configuración</h3>

      <div>
        <label class="block text-sm mb-1 text-gray-600">Asignación de aula / zona</label>
        <select class="w-full border rounded-lg px-3 py-2 text-sm">
          <option>Seleccionar aula</option>
          <option>Refigerios</option>
          <option>Aula Múltiple</option>
        </select>
      </div>

     
      <div>
        <label class="block text-sm mb-1 text-gray-600">Coordinador responsable</label>
        <select class="w-full border rounded-lg px-3 py-2 text-sm">
          <option>SONIA</option>
          <option>SANDRA ARCOS</option>
          <option>CARLOS</option>
          <option>JHON FREDDY</option>
        </select>
      </div>

<!-- Conexión -->
      <div>
        <label class="block text-sm mb-1 text-gray-600">Modo de conexión</label>
        <div class="flex gap-6 text-sm">
          <label class="flex items-center gap-1"><input type="radio" name="conexion"> WiFi</label>
          <label class="flex items-center gap-1"><input type="radio" name="conexion"> Local sin internet</label>
        </div>
      </div>
      
<!-- Sincronizacion  -->

        <div>
        <label class="block text-sm mb-1 text-gray-600">Frecuencia de sincronización</label>
        <div class="flex gap-6 text-sm">
          <label class="flex items-center gap-1"><input type="radio" name="sync"> 5 min</label>
          <label class="flex items-center gap-1"><input type="radio" name="sync"> 10 min</label>
          <label class="flex items-center gap-1"><input type="radio" name="sync"> 30 min</label>
        </div>
      </div>


      <div>
        <label class="block text-sm mb-1 text-gray-600">Tipo de autenticación</label>
        <div class="flex gap-6 text-sm">
          <label class="flex items-center gap-1"><input type="radio" name="auth"> Huella digital</label>
          <label class="flex items-center gap-1"><input type="radio" name="auth"> Código De Barras</label>
          <label class="flex items-center gap-1"><input type="radio" name="auth"> Mixto</label>
        </div>
      </div>
    </div>

    <!-- Botones -->
    <div class="flex flex-wrap gap-3">
      <button class="flex-1 px-4 py-2 rounded-lg border hover:bg-gray-50 text-sm">Probar conexión</button>
      <button class="flex-1 px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 text-sm">Guardar cambios</button>
    </div>

    <div class="flex flex-wrap gap-3">
      <button class="flex-1 px-4 py-2 rounded-lg border hover:bg-gray-50 text-sm">Exportar configuración</button>
      <button class="flex-1 px-4 py-2 rounded-lg border hover:bg-gray-50 text-sm">Restablecer dispositivo</button>
    </div>

  
    <div>
      <h3 class="text-sm font-semibold text-gray-700 uppercase mb-2">Historial de configuraciones</h3>
      <div class="overflow-x-auto">
        <table class="w-full text-sm border rounded-lg overflow-hidden">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="px-3 py-2 text-left">Fecha / Hora</th>
              <th class="px-3 py-2 text-left">Acción</th>
              <th class="px-3 py-2 text-left">Responsable</th>
              <th class="px-3 py-2 text-left">Estado</th>
            </tr>
          </thead>
          <tbody class="divide-y">
            <tr>
              <td class="px-3 py-2">2025-09-03 14:30</td>
              <td class="px-3 py-2">Cambio de frecuencia</td>
              <td class="px-3 py-2">SANDRA ARCOS</td>
              <td class="px-3 py-2 text-green-600 font-medium">Éxito</td>
            </tr>
            <tr>
              <td class="px-3 py-2">2025-09-02 10:15</td>
              <td class="px-3 py-2">Actualización firma</td>
              <td class="px-3 py-2">SANDRA ARCOS</td>
              <td class="px-3 py-2 text-green-600 font-medium">Éxito</td>
            </tr>
            <tr>
              <td class="px-3 py-2">2025-09-01 09:05</td>
              <td class="px-3 py-2">Asignación de aula</td>
              <td class="px-3 py-2">SONIA</td>
              <td class="px-3 py-2 text-green-600 font-medium">Éxito</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>