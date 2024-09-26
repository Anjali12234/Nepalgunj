<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationCategoryController;
use App\Http\Controllers\Admin\HealthCareCategoryController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PropertyCategoryController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\RegisteredUser\AuthController as RegisteredUserAuthController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('setting', SettingController::class);
Route::resource('mainCategory', MainCategoryController::class);
Route::resource('newsCategory', NewsCategoryController::class);
Route::resource('newsList', NewsController::class);
Route::put('newsList/{newsList}/updateStatus', [NewsController::class, 'updateStatus'])->name('newsList.updateStatus');
Route::resource('menu', MenuController::class);
Route::get('menu/{menu}/updateStatus', [MenuController::class, 'updateStatus'])->name('menu.updateStatus');
Route::prefix('subCategory')->group(
    function () {
        Route::resource('healthCare', HealthCareCategoryController::class);
        Route::resource('propertyCategory', PropertyCategoryController::class);
        Route::resource('educationCategory', EducationCategoryController::class);
    }
);

Route::get('/markAsRead/{id}', [DashboardController::class, 'markAsRead'])->name('markasread');
Route::prefix('registerdUser')->group(function () {
    Route::resource('registeredUser', RegisteredUserController::class);
    Route::put('registeredUser/{registeredUser}/updateStatus', [RegisteredUserController::class, 'updateStatus'])->name('registeredUser.updateStatus');
});
