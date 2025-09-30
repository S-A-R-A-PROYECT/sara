@extends('templates.students') 

@section('content')

<div class="bg-white font-sans flex flex-col min-h-screen"> 

  <!-- Header -->
  <header class="flex justify-between items-center px-6 md:px-12 py-6 border-b-2 border-[#114D58]">
    <div class="flex items-center gap-3">

      <a href="{{ route('home') }}" 
         class="w-9 h-9 text-gray-700 hover:text-gray-900 transition-transform hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
             viewBox="0 0 24 24" stroke="currentColor" class="w-9 h-9">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M15 19l-7-7 7-7" />
        </svg>
      </a>

      <h2 class="text-2xl md:text-3xl font-bold text-[#114D58] 
                 transition-transform duration-300 ease-out hover:-translate-y-2 hover:scale-105">
        ¿Qué es S.A.R.A?
      </h2>
    </div>

    <!-- Logo -->
    <img src="{{ asset('img/logo_sara-verde-oscuro.png') }}" alt="Logo S.A.R.A" 
         class="w-44 md:w-64 h-auto transition-transform duration-300 hover:scale-110 cursor-pointer">
  </header>

  <!-- Descripción -->
  <section class="max-w-5xl mx-auto text-center mt-12 mb-10 px-6">
    <h1 class="text-4xl md:text-5xl font-extrabold text-[#114D58] mb-6">
      Sistema Automatizado de Registro de Alimentación
    </h1>
    <p class="text-lg md:text-xl leading-relaxed text-gray-700">
      <span class="font-bold">S.A.R.A.</span> es un proyecto que busca automatizar el 
      <span class="font-semibold text-[#114D58]">control de asistencia</span> 
      y la <span class="font-semibold text-[#114D58]">entrega de alimentos escolares</span> 
      reemplazando los métodos manuales por un sistema digital más rápido, confiable y transparente.
    </p>
  </section>

  <hr class="border-t-2 border-gray-300 w-3/4 mx-auto mb-12">

  <!-- Tarjetas -->
  <main class="flex-grow flex justify-center px-6 pb-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-8 max-w-7xl w-full text-lg md:text-xl items-stretch">

      <!-- Objetivos -->
      <div class="group cursor-pointer h-full flex flex-col">
        <div class="flex justify-center mb-4">
          <div class="bg-[#F2AC2A] text-white font-bold px-6 py-2 rounded-md text-xl shadow-md 
                      transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-lg">
            Objetivos
          </div>
        </div>
        <div class="border-2 border-[#F2AC2A] bg-yellow-50 p-8 rounded-xl 
                    transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-xl flex-1">
          <ul class="list-disc list-inside space-y-4 text-gray-800 font-medium">
            <li>Registrar de manera precisa la asistencia de los estudiantes</li>
            <li>Controlar la entrega de refrigerios y comidas calientes</li>
            <li>Optimizar la logística y el tiempo de entrega</li>
            <li>Generar estadísticas y reportes para el colegio y el PAE</li>
          </ul>
        </div>
      </div>

      <!-- Quiénes somos -->
      <div class="group cursor-pointer h-full flex flex-col">
        <div class="flex justify-center mb-4">
          <div class="bg-[#114D58] text-white font-bold px-6 py-2 rounded-md text-xl shadow-md 
                      transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-lg">
            Quiénes somos
          </div>
        </div>
        <div class="border-2 border-[#114D58] bg-teal-50 p-8 rounded-xl 
                    transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-xl flex-1">
          <p class="font-semibold mb-2">Equipo de desarrollo:</p>
          <ul class="list-disc list-inside mb-4 space-y-2">
            <li>Julian Ramírez</li>
            <li>Santiago Barrera</li>
            <li>Ramiro Soler</li>
          </ul>
          <p class="font-semibold mb-2">Profesores que acompañan:</p>
          <ul class="list-disc list-inside space-y-2">
            <li>Gustavo León</li>
            <li>Wilson Bernal</li>
            <li>Yudi Rico</li>
            <li>Carlos Gonzales</li>
          </ul>
        </div>
      </div>

      <!-- Visión -->
      <div class="group cursor-pointer h-full flex flex-col">
        <div class="flex justify-center mb-4">
          <div class="bg-[#F25041] text-white font-bold px-6 py-2 rounded-md text-xl shadow-md 
                      transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-lg">
            Visión
          </div>
        </div>
        <div class="border-2 border-[#F25041] bg-red-50 p-8 rounded-xl 
                    transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-xl flex-1">
          <p class="text-gray-800 font-medium">
            Ser una herramienta esencial en las instituciones educativas, 
            garantizando un acceso justo y eficiente a la alimentación escolar 
            y sirviendo de modelo para otros colegios del país.
          </p>
        </div>
      </div>

      <!-- Misión -->
      <div class="group cursor-pointer h-full flex flex-col">
        <div class="flex justify-center mb-4">
          <div class="bg-[#39BFC0] text-white font-bold px-6 py-2 rounded-md text-xl shadow-md 
                      transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-lg">
            Misión
          </div>
        </div>
        <div class="border-2 border-[#39BFC0] bg-cyan-50 p-8 rounded-xl 
                    transition-transform duration-300 ease-out group-hover:-translate-y-4 group-hover:shadow-xl flex-1">
          <p class="text-gray-800 font-medium">
            Optimizar la entrega de alimentos escolares mediante la digitalización 
            del registro de asistencia, promoviendo la transparencia y reduciendo el desperdicio.
          </p>
        </div>
      </div>

    </div>
  </main>

</div>
@endsection
