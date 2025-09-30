@extends('templates.general')

@section('content')

  <!-- Header -->
  <header class="flex items-center justify-between px-6 py-4">
    

    <div class="flex items-center gap-3 cursor-pointer">
      <a href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-9 h-9 text-gray-700 hover:text-gray-900 transition-transform hover:scale-110"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </a>
      <h2 class="text-2xl md:text-3xl font-bold text-[#114D58]
                 transition-transform duration-300 ease-out hover:-translate-y-3 hover:scale-105">
        Actualizaciones
      </h2>
    </div>

  
    <a href="{{ route('home') }}">
      <img src="{{ asset('img/logo_sara-verde-oscuro.png') }}" 
           alt="Logo S.A.R.A" 
           class="w-40 hover:scale-105 transition-transform duration-200">
    </a>
  </header>

  <!-- Línea separadora -->
  <hr class="border-t-2 border-orange-300">

  <section class="px-8 py-6">
    <h2 class="text-xl font-bold text-teal-700">
      Versión: <br><span class="text-2xl">PRE-X.X.X</span>
    </h2>
    

    <div class="flex items-center mt-2 space-x-2">
      <div class="w-6 h-6 rounded-full bg-gray-300"></div>
      <span class="text-sm text-gray-600">Ramiro Soler</span>
      <span class="ml-auto bg-red-600 text-white text-xs px-3 py-1 rounded-full">WEB</span>
    </div>

    <h3 class="mt-4 font-semibold">Descripción:</h3>
    <p class="mt-2 text-gray-700 leading-relaxed">
      Lorem ipsum dolor sit amet consectetur adipiscing elit, fames viverra pharetra odio in velit id dapibus, ridiculus nullam habitasse erat elementum tortor. Venenatis sed dis nascetur sapien donec auctor id ridiculus, porta placerat dignissim tempus per condimentum fusce faucibus pulvinar, neque himenaeos elementum velit aliquam sem scelerisque. Erat velit torquent platea mollis donec ligula augue vestibulum nascetur aliquet, suspendisse feugiat vel scelerisque sociosqu molestie purus bibendum congue, libero tellus sodales ac habitasse justo fringilla tempus penatibus.

Natoque scelerisque curabitur duis nascetur tempor varius lectus dis, lacus at sociosqu feugiat leo accumsan litora, ultricies dictumst euismod nullam inceptos commodo placerat congue, sociis iaculis luctus lobortis senectus eleifend. Auctor commodo nascetur erat suscipit cursus pretium integer nisl urna fermentum, conubia proin tristique litora iaculis imperdiet maecenas neque eros ut, euismod est interdum sem viverra scelerisque enim torquent penatibus. Viverra cum phasellus convallis erat dictum lobortis orci venenatis, montes hac massa blandit malesuada cras odio, tortor rhoncus morbi etiam eleifend lacinia cubilia.
  </section>

  <!-- Línea separadora -->
  <hr class="border-t-2 border-orange-300">


  <section class="px-8 py-6">
    <h2 class="text-xl font-bold text-teal-700">
      Versión: <br><span class="text-2xl">PRE-X.X.X</span>
    </h2>

    <div class="flex items-center mt-2 space-x-2">
      <div class="w-6 h-6 rounded-full bg-gray-300"></div>
      <span class="text-sm text-gray-600">Santiago Parraga</span>
      <span class="ml-auto bg-blue-700 text-white text-xs px-3 py-1 rounded-full">Device S.A.R.A</span>
    </div>

   
    <h3 class="mt-4 font-semibold">Descripción:</h3>
    <p class="mt-2 text-gray-700 leading-relaxed">
    Lorem ipsum dolor sit amet consectetur adipiscing elit, fames viverra pharetra odio in velit id dapibus, ridiculus nullam habitasse erat elementum tortor. Venenatis sed dis nascetur sapien donec auctor id ridiculus, porta placerat dignissim tempus per condimentum fusce faucibus pulvinar, neque himenaeos elementum velit aliquam sem scelerisque. Erat velit torquent platea mollis donec ligula augue vestibulum nascetur aliquet, suspendisse feugiat vel scelerisque sociosqu molestie purus bibendum congue, libero tellus sodales ac habitasse justo fringilla tempus penatibus.

Natoque scelerisque curabitur duis nascetur tempor varius lectus dis, lacus at sociosqu feugiat leo accumsan litora, ultricies dictumst euismod nullam inceptos commodo placerat congue, sociis iaculis luctus lobortis senectus eleifend. Auctor commodo nascetur erat suscipit cursus pretium integer nisl urna fermentum, conubia proin tristique litora iaculis imperdiet maecenas neque eros ut, euismod est interdum sem viverra scelerisque enim torquent penatibus. Viverra cum phasellus convallis erat dictum lobortis orci venenatis, montes hac massa blandit malesuada cras odio, tortor rhoncus morbi etiam eleifend lacinia cubilia.
    </p>
  </section>

  <!-- Línea separadora -->
  <hr class="border-t-2 border-orange-300">

  <!-- Card 3 -->
  <section class="px-8 py-6">
    <h2 class="text-xl font-bold text-teal-700">
      Versión: <br><span class="text-2xl">PRE-X.X.X</span>
    </h2>
    
    <!-- Autor -->
    <div class="flex items-center mt-2 space-x-2">
      <div class="w-6 h-6 rounded-full bg-gray-300"></div>
      <span class="text-sm text-gray-600">Nuevo Autor</span>
      <span class="ml-auto bg-green-700 text-white text-xs px-3 py-1 rounded-full">ESP32</span>
    </div>

    <!-- Descripción -->
    <h3 class="mt-4 font-semibold">Descripción:</h3>
    <p class="mt-2 text-gray-700 leading-relaxed">
      Lorem ipsum dolor sit amet consectetur adipiscing elit, fames viverra pharetra odio in velit id dapibus, ridiculus nullam habitasse erat elementum tortor. Venenatis sed dis nascetur sapien donec auctor id ridiculus, porta placerat dignissim tempus per condimentum fusce faucibus pulvinar, neque himenaeos elementum velit aliquam sem scelerisque. Erat velit torquent platea mollis donec ligula augue vestibulum nascetur aliquet, suspendisse feugiat vel scelerisque sociosqu molestie purus bibendum congue, libero tellus sodales ac habitasse justo fringilla tempus penatibus.

Natoque scelerisque curabitur duis nascetur tempor varius lectus dis, lacus at sociosqu feugiat leo accumsan litora, ultricies dictumst euismod nullam inceptos commodo placerat congue, sociis iaculis luctus lobortis senectus eleifend. Auctor commodo nascetur erat suscipit cursus pretium integer nisl urna fermentum, conubia proin tristique litora iaculis imperdiet maecenas neque eros ut, euismod est interdum sem viverra scelerisque enim torquent penatibus. Viverra cum phasellus convallis erat dictum lobortis orci venenatis, montes hac massa blandit malesuada cras odio, tortor rhoncus morbi etiam eleifend lacinia cubilia.
    </p>
  </section>

@endsection
