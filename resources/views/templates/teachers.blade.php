<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('templates.head')

<body>

    <div class="">
        @yield('content')
    </div>

    <footer class="w-full bg-sara-main text-white text-xs py-3 text-center">
        © {{\Carbon\Carbon::now()->year}} - Proyecto SASHA | By: S.A.R.A & System Shadow | Colegio OEA I.E.D
    </footer>
</body>

</html>
