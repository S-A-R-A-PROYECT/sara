<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\Students\Chat;
use App\Livewire\Students\Main as StudentMain;
use App\Livewire\Teacher\Main as TeacherMain;
use App\Livewire\Website\Home;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// Rutas para todos los usuarios
/////////////////////////////////////////////////////////////////////////////////////////////////////
// Página principal
Route::get('/', Home::class)->name('home');

// Historial
Route::get('/history/cordinadores', function () {
    return view('record-history');
})->name('history'); // coordinadores

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


Route::middleware(['teacher', 'auth', 'web'])->prefix('/docente')->group(function () {

    Route::get('/', TeacherMain::class)->name('teacher.home');
})->middleware(['web']);



Route::get('/asig/docente', function () {
    return view('teachers.asig-coordinadores');
})->name('asignacion-teacher');


// // Historial de estduiantes
// Route::get('/history', function () {
//     return view('teachers.record-history');
// })->name('history');

// // pagina pricipal de profesores y cordinadores
// Route::get('/inicio/profesor', function () {
//     return view('teachers.main-teacher');
// })->name('inicio-teacher');

// // configuracion de dispositivos
// Route::get('/config/dispositivos/status', function () {
//     return view('teachers.pag-status');
// })->name('inicio-teacher');

// // configuracion de dispositivos
// Route::get('/config/dispositivo/', function () {
//     return view('teachers.modal-configdispositivo');
// })->name('modal-configdispositivo');



/////////////////////////////////////////////////////////////////////////////////////////////////////
// Rutas para estudiantes

Route::middleware(['student', 'auth', 'web'])->prefix('/estudiante')->group(function () {

    Route::get('/', StudentMain::class)->name('student.home'); // estudiante/

    Route::get('/chat', Chat::class)->name('student.chat');
});






///////////////////////////////////////////////////////////////////////////////////////////////////


// Rutas para desarrolladores
Route::get('/chatsar', function () {
    return view('developers.chat.interno_chat');
})->name('chat-sara');

Route::get('/chatsara', function () {
    return view('developers.chat.externo_chat');
})->name('chat.sara');


/////////////////////////////////////////////////////////////////////////////////////////////////////

Route::prefix('error')->group(function () {
    Route::view('/401', 'errors.401')->name('error.401');
    Route::view('/403', 'errors.403')->name('error.403');
    Route::view('/404', 'errors.404')->name('error.404');
    Route::view('/419', 'errors.419')->name('error.419');
    Route::view('/429', 'errors.429')->name('error.429');
    Route::view('/500', 'errors.500')->name('error.500');
    Route::view('/503', 'errors.503')->name('error.503');
});

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
