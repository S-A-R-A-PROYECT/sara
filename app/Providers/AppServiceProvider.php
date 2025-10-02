<?php

namespace App\Providers;

use App\Enums\UserRol;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Gate::define('student', function (User $user) {
            return $user->rol == UserRol::Student;
        });

        Gate::define('teacher', function (User $user) {
            return $user->rol == UserRol::Teacher;
        });

        Gate::define('coordinator', function (User $user) {
            return $user->rol == UserRol::Coordinator;
        });

        Gate::define('developer', function (User $user) {
            return $user->rol == UserRol::Developer;
        });
    }
}
