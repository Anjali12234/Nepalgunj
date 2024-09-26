<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegisteredUser\AuthController;
use App\Http\Controllers\RegisteredUser\DashboardController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUser\AuthController as RegisteredUserAuthController;
use App\Http\Controllers\RegisteredUser\EducationAdController;
use App\Http\Controllers\RegisteredUser\HeatlthAdController;
use App\Http\Controllers\RegisteredUser\PropertyAdController;
use App\Http\Controllers\RegisteredUser\RegisteredUserDetailController;

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::put('registeredUser/{registeredUser}/deleteNotification', [RegisteredUserAuthController::class, 'deleteNotification'])->name('registeredUser.deleteNotification');
Route::get('readAllNotification', [RegisteredUserAuthController::class, 'readAllNotification'])->name('registeredUser.readAllNotification');

Route::resource('profile', RegisteredUserDetailController::class);


Route::prefix('properties')->group(function () {
    Route::resource('/propertyList', PropertyAdController::class)->except('store','create');
    Route::get('propertyCategory/{propertyCategory:slug}', [PropertyAdController::class, 'create'])->name('propertyCategory.create');
    Route::post('propertyList/{propertyCategory:slug}', [PropertyAdController::class, 'store'])->name('propertyList.store');
});
Route::prefix('healthCare')->group(function () {
    Route::get('healthCareCategory/{healthCareCategory:slug}', [HeatlthAdController::class, 'create'])->name('healthCareCategory.create');
    Route::post('healthCareList/{healthCareCategory:slug}', [HeatlthAdController::class, 'store'])->name('healthCareList.store');
    Route::resource('/healthCareList', HeatlthAdController::class)->except('store','create');

});
Route::prefix('education')->group(function () {
    Route::get('educationCategory/{educationCategory:slug}', [EducationAdController::class, 'create'])->name('educationCategory.create');
    Route::post('educationList/{educationCategory:slug}', [EducationAdController::class, 'store'])->name('educationList.store');
    Route::resource('/educationList', EducationAdController::class)->except('store','create');

});
