<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then:function() {
            Route::middleware(['web', 'auth:web'])
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/admin.php'));
            Route::middleware(['web', 'auth:registered-user'])
            ->prefix('registeredUser')
            ->name('registeredUser.')
            ->group(base_path('routes/registeredUser.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
   })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
