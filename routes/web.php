<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;


Route::get('/', function () {
    return view('landig-page');
})->name('home');


Route::get('/', function () {
    return view('landig-page');
})->name('home');

Route::get('/history', function () {
    return view('record_history');
});


Route::get('/profesores', function () {
    return view('profesores');
});


Route::get('/history', function () {
    return view('record-history');
})->name('home');

Route::get('/history', function () {
    return view('record-history');
})->name('home');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/help', function () {
    return view('help');
});


Route::get('/contact', function () {
    return view('page-contact');
});

Route::get('/us', function () {
    return view('us-page');
});


Route::get('/status', function () {
    return view('pag-status');
});






Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');





Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
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
