<header class="bg-[#114D58] flex items-center justify-between px-6 py-0 shadow-md">

    <!-- Logo + Menú -->
    <div class="flex items-center gap-4">
        <!-- Botón Menú Hamburguesa -->
        <button class="flex flex-col gap-1.5 group cursor-pointer">
            <span class="block w-8 h-1.5 bg-white rounded group-hover:bg-gray-200 transition-colors"></span>
            <span class="block w-8 h-1.5 bg-white rounded group-hover:bg-gray-200 transition-colors"></span>
            <span class="block w-8 h-1.5 bg-white rounded group-hover:bg-gray-200 transition-colors"></span>
        </button>

        <!-- Logo -->
        <div class="flex items-center gap-2 font-bold">
            <img src="{{ asset('img/logo-sara-blanco.png') }}" alt="Logo S.A.R.A" class="h-20 w-auto">
        </div>
    </div>

    <!-- Info Usuario -->
    <div
        class="flex items-center gap-3 text-right hover:bg-[#0d3c45] rounded-xl px-3 py-2 transition-colors cursor-pointer">
        <div class="leading-tight">
            <p class="font-bold text-white text-lg">{{Auth::user()->name}} {{Auth::user()->last_name}}</p>
            <p class="text-sm text-white">Grado: {{Auth::user()->grade}}</p>
            <p class="text-xs text-white">
                Último inicio de sesión: <span
                    class="font-light">{{\Carbon\Carbon::parse(Auth::user()->last_login_at)->format('d/m/Y') ??
                    ''}}</span>
            </p>
        </div>
        <!-- Avatar -->
        <img src="https://i.pravatar.cc/100" alt="Usuario"
            class="w-12 h-12 rounded-full border-2 border-white shadow-md hover:scale-105 transition-transform">
    </div>

</header>