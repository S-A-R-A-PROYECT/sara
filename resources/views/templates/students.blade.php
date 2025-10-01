<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    @include('templates.head')
</head>

<body>
    <nav>

        @include('templates.headers.student')

    </nav>

    <div class="min-h-screen">
        {{$slot}}
        <button class="fixed bottom-6 right-6 bg-teal-900 text-white p-5 rounded-full shadow-xl
    hover:bg-teal-700 hover:scale-110 hover:rotate-6 hover:shadow-2xl transition-all duration-300 text-3xl">
            ➤
        </button>
    </div>



    <footer class="w-full bg-[#114D58] text-white text-xs py-3 text-center">
        © {{\Carbon\Carbon::now()->year}} - Proyecto SASHA | By: S.A.R.A & System Shadow | Colegio OEA I.E.D
    </footer>
</body>

</html>