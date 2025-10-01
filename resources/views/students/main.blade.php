<div>
    <div class="bg-gray-100 p-6 min-h-screen">
        <h1 class="text-3xl font-bold mb-6 text-cyan-800">Panel Docente - S.A.R.A</h1>

        <!-- Sección superior -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

            <!-- Progreso de asistencias -->
            <div class="bg-cyan-900 text-white rounded-xl p-6 shadow-lg">
                <h2 class="font-semibold text-lg">Progreso de asistencias</h2>
                <ul class="mt-4 space-y-3">
                    <li class="flex justify-between">
                        <span>Kristin Watson</span>
                        <span class="font-bold">70%</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Darlene Robertson</span>
                        <span class="font-bold">30%</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Jenny Wilson</span>
                        <span class="font-bold">20%</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Cameron Williamson</span>
                        <span class="font-bold">50%</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Wade Warren</span>
                        <span class="font-bold">100%</span>
                    </li>
                </ul>
            </div>

            <!-- Top estudiantes cumplidos -->
            <div class="bg-teal-500 text-white rounded-xl p-6 shadow-lg">
                <h2 class="font-semibold text-lg">Top estudiantes cumplidos</h2>
                <ul class="mt-4 space-y-3">
                    <li class="flex justify-between">
                        <span>Kristin Watson</span>
                        <span class="font-bold">7/10</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Darlene Robertson</span>
                        <span class="font-bold">3/10</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Jenny Wilson</span>
                        <span class="font-bold">2/10</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Cameron Williamson</span>
                        <span class="font-bold">5/10</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Wade Warren</span>
                        <span class="font-bold">10/10</span>
                    </li>
                </ul>
            </div>

            <!-- Estado y métricas -->
            <div class="space-y-4">
                <div class="bg-cyan-600 text-white rounded-xl p-6 shadow-lg text-center">
                    <h2 class="text-3xl font-bold">50</h2>
                    <p>Refrigerios restantes</p>
                </div>
                <div class="bg-yellow-500 text-white rounded-xl p-6 shadow-lg text-center">
                    <h2 class="text-3xl font-bold">126</h2>
                    <p>Estudiantes restantes</p>
                </div>
                <div class="bg-green-700 text-white rounded-xl p-4 shadow-lg">
                    <p class="font-bold">Iniciado</p>
                    <p class="text-sm">Estado de la jornada</p>
                </div>
                <div class="flex flex-col gap-3">
                    <button class="bg-teal-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-teal-600">
                        ✅ Iniciar día
                    </button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-red-600">
                        ⛔ Finalizar día
                    </button>
                </div>
            </div>

            <!-- Calendario -->
            <div class="bg-cyan-400 text-white rounded-xl p-4 shadow-lg">
                <h2 class="font-semibold">Calendario asistencias</h2>
                <div class="grid grid-cols-7 gap-1 mt-4">
                    <div class="w-6 h-6 bg-green-500 rounded"></div>
                    <div class="w-6 h-6 bg-red-500 rounded"></div>
                    <div class="w-6 h-6 bg-green-600 rounded"></div>
                    <div class="w-6 h-6 bg-yellow-400 rounded"></div>
                    <div class="w-6 h-6 bg-green-400 rounded"></div>
                    <div class="w-6 h-6 bg-green-500 rounded"></div>
                    <div class="w-6 h-6 bg-red-400 rounded"></div>
                </div>
                <p class="text-xs mt-2">Aprende cómo contamos las asistencias</p>
            </div>
        </div>

        <!-- Botones extra -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
            <button class="bg-cyan-500 text-white py-3 rounded-lg shadow hover:bg-cyan-600">📊 Generar reporte</button>
            <button class="bg-teal-600 text-white py-3 rounded-lg shadow hover:bg-teal-700">🧾 Historial</button>
            <button class="bg-yellow-500 text-white py-3 rounded-lg shadow hover:bg-yellow-600">🔍 Buscar
                estudiante</button>
            <button class="bg-pink-500 text-white py-3 rounded-lg shadow hover:bg-pink-600">👨‍👩‍👧 Notificar
                acudientes</button>
        </div>
    </div>