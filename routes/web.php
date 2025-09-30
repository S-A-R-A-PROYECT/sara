<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;



// Página principal
Route::get('/', function () {
    return view('landig-page');
})->name('home');

// Historial
Route::get('/history/cordinadores', function () {
    return view('record-history');
})->name('history');// coordinadores

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
})->name('quienesomos');

// Contacto general
Route::get('/contact', function () {   
    return view('page-contact');
})->name('contact');

// Nosotros
Route::get('/us', function () {
    return view('us-page');
})->name('us');

// Noticias / actualizaciones
Route::get('aun no estan arriba', function () {
    return view('aun no ');
})->name('noticias');

// Status

Route::get('/status', function () {
    return view('status_page');
})->name('status');



// Status

Route::get('/status/coordinadores', function () {
    return view('pag-status');
})->name('status');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');




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
