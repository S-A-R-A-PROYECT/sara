<div class="bg-white min-h-screen flex items-center justify-center" x-data="{modalIsOpen: false}">

    <div>
        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
            x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false"
            class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
            role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <!-- Modal Dialog -->
            <div x-show="modalIsOpen"
                x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-radius bg-surface text-on-surface">
                <div
                    class="bg-white rounded-2xl shadow-2xl w-96 p-8 text-center relative transform transition duration-500">

                    <h2 class="text-3xl font-extrabold text-gray-800 mb-8 tracking-wide">✨ SOY:</h2>

                    <div class="flex flex-col gap-5">
                        <a href="{{route('student.home')}}" class="bg-teal-900 text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-3
                     hover:bg-teal-700 hover:scale-105 hover:shadow-lg transition duration-300 ease-in-out">
                            🎓 Estudiante
                        </a>
                        <a href="{{route('teacher.home')}}" class="bg-teal-900 text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-3
                     hover:bg-teal-700 hover:scale-105 hover:shadow-lg transition duration-300 ease-in-out">
                            👤 Profesor / Coordinador
                        </a>
                        <button class="bg-teal-900 text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-3
                     hover:bg-teal-700 hover:scale-105 hover:shadow-lg transition duration-300 ease-in-out">
                            🤖 Developer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main class="flex items-center justify-between w-11/12 max-w-7xl">

        <div class="flex flex-col items-center gap-14">

            <div class="flex justify-center">
                <img src="{{ asset('img/logo_sara-verde-oscuro.png') }}" alt="Logo S.A.R.A"
                    class="w-96 h-auto object-contain hover:scale-105 transition-all duration-300">
            </div>

            <div class="grid grid-cols-2 gap-10 w-[44rem]">
                @guest
                <button x-on:click="modalIsOpen = true"
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Acceder al sistema
                </button>
                @endguest

                @auth
                <a href="{{route(session('guard').'.home')}}"
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Acceder al panel
                </a>
                @endauth

                <a href="{{ route('us') }}"
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Conoce más de S.A.R.A
                </a>
                <a href="{{ route('noticias') }}"
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Noticias / Actualizaciones
                </a>
                <a href="{{ route('help') }}"
                    class="bg-teal-900 text-white text-2xl font-semibold py-6 text-center rounded-xl shadow-lg hover:bg-teal-700 hover:scale-105 hover:shadow-xl transition-all duration-300">
                    Soporte / Ayuda
                </a>
            </div>
        </div>

        <div class="w-[32rem]">
            <img src="{{ asset('img/almuerzo.png') }}" alt="Estudiantes recibiendo almuerzo"
                class="w-full object-contain">
        </div>
    </main>

</div>
