<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegisteredUser\AuthController as RegisteredUserAuthController;
use App\Http\Controllers\RegisteredUser\HeatlthAdController;
use App\Http\Controllers\RegisteredUser\PropertyAdController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/postAd', 'postAd')->name('postAd');
    Route::get('/properties/{propertyCategorySlug?}', 'propertyCategory')->name('properties');
});
Route::get('detail/{slug}', [FrontendController::class, 'staticMenus'])->name('static');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('handle-login');

// Route::get('')

Route::prefix('registeredUser')
    ->as('registeredUser.')
    ->group(function () {
        Route::get('login', [RegisteredUserAuthController::class, 'login'])->name('login');
        Route::post('login', [RegisteredUserAuthController::class, 'handleLogin'])->name('handle-login');
        Route::get('register', [RegisteredUserAuthController::class, 'register'])->name('register');
        Route::post('register', [RegisteredUserAuthController::class, 'store'])->name('store');
    });

Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});

Route::prefix('properties')->group(function () {

});

