<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// Rutas para todos los usuarios
/////////////////////////////////////////////////////////////////////////////////////////////////////
// Página principal
Route::get('/', function () {
    return view('landig-page');
})->name('home');

// Profesores login
Route::get('/profesores', function () {
    return view('profesores');
})->name('profesores');

// FAQ 
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Página de ayuda principal
Route::get('/help', function () {
    return view('main-help_page');
})->name('help');

// Consejos prácticos
Route::get('/help/consejos', function () {
    return view('advice_page'); 
})->name('consejos');

// Contacto de soporte
Route::get('/help/soporte', function () {
    return view('help');
})->name('soporte');

// Contacto general
Route::get('/contact', function () {   
    return view('page-contact');
})->name('contact');

// Nosotros
Route::get('/us', function () {
    return view('us-page');
})->name('us');

// Noticias / actualizaciones
Route::get('/actualizaciones', function () {
    return view('actualizaciones');
})->name('noticias');

// Status
Route::get('/status', function () {
    return view('status_page');
})->name('status');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/////////////////////////////////////////////////////////////////////////////////////////////////////
// Rutas para los teachers y coordinadores

Route::get('/asig/docente', function () {
    return view('teachers.asig-coordinadores');
})->name('asignacion-teacher');


// Historial de estduiantes 
Route::get('/history', function () {
    return view('teachers.record-history');
})->name('history');

// pagina pricipal de profesores y cordinadores
Route::get('/inicio/profesor', function () {
    return view('teachers.main-teacher');
})->name('inicio-teacher');

// configuracion de dispositivos
Route::get('/config/dispositivos/status', function () {
    return view('teachers.pag-status');
})->name('inicio-teacher');

// configuracion de dispositivos
Route::get('/config/dispositivo/', function () {
    return view('teachers.modal-configdispositivo');
})->name('modal-configdispositivo');





/////////////////////////////////////////////////////////////////////////////////////////////////////
// Rutas para estudiantes


Route::get('/estudiantes', function () {
    return view('students.mainstudent');
})->name('main-estudiantes'); 


Route::get('/est/charsara', function () {
    return view('students.chat.externo_chatestudiantes');
})->name('chat-externo-estudiantes'); 

Route::get('/est/charsara', function () {
    return view('students.chat.interno_chatestudiantes');
})->name('chtat-interno-estudiantes'); 



///////////////////////////////////////////////////////////////////////////////////////////////////
// Rutas para desarrolladores
Route::get('/chatsar', function () {
    return view('developers.chat.interno_chat');
})->name('chat-interno');

Route::get('/chatsara', function () {
    return view('developers.chat.externo_chat');
})->name('chat-externo');




/////////////////////////////////////////////////////////////////////////////////////////////////////

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__ . '/auth.php';
