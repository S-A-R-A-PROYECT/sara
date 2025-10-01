<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    @include('templates.head')
</head>

<body>
    <nav>
        @include('templates.headers.teacher')
    </nav>

    <div class="">
        {{$slot}}
    </div>
    <button
        class="fixed bottom-8 right-8 bg-[#F2AC2A] text-white p-5 rounded-full shadow-lg hover:bg-[#114D58] transition">
        ➤
    </button>


    <footer class="w-full bg-[#F2AC2A] text-white text-xs py-3 text-center">
        © {{\Carbon\Carbon::now()->year}} - Proyecto SASHA | By: S.A.R.A & System Shadow | Colegio OEA I.E.D
    </footer>

</body>

</html>