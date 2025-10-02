<?php

use App\Http\Middleware\CoordinatorCheck;
use App\Http\Middleware\DeveloperCheck;
use App\Http\Middleware\StudentCheck;
use App\Http\Middleware\TeacherCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'student'       => StudentCheck::class,
            'teacher'       => TeacherCheck::class,
            'coordinator'   => CoordinatorCheck::class,
            'developer'     => DeveloperCheck::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
