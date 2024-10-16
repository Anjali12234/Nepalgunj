<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationCategoryController;
use App\Http\Controllers\Admin\EducationListController;
use App\Http\Controllers\Admin\HealthCareCategoryController;
use App\Http\Controllers\Admin\HealthCareListController;
use App\Http\Controllers\Admin\HospitalityCategoryController;
use App\Http\Controllers\Admin\HospitalityListController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PropertyCategoryController;
use App\Http\Controllers\Admin\PropertyListController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Admin\RolePermisson\PermissionController;
use App\Http\Controllers\Admin\RolePermisson\RoleController;
use App\Http\Controllers\Admin\RolePermisson\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\RegisteredUser\AuthController as RegisteredUserAuthController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('setting', SettingController::class);
Route::resource('mainCategory', MainCategoryController::class);
Route::resource('newsCategory', NewsCategoryController::class);
Route::put('newsCategory/{newsCategory}/updateStatus', [NewsCategoryController::class, 'updateStatus'])->name('newsCategory.updateStatus');
Route::resource('newsList', NewsController::class);
Route::put('newsList/{newsList}/updateStatus', [NewsController::class, 'updateStatus'])->name('newsList.updateStatus');
Route::resource('menu', MenuController::class);
Route::get('menu/{menu}/updateStatus', [MenuController::class, 'updateStatus'])->name('menu.updateStatus');
Route::prefix('subCategory')->group(
    function () {
        Route::resource('healthCare', HealthCareCategoryController::class);
        Route::resource('propertyCategory', PropertyCategoryController::class);
        Route::resource('educationCategory', EducationCategoryController::class);
        Route::resource('hospitalityCategory', HospitalityCategoryController::class);
        Route::resource('jobCategory', JobCategoryController::class);
    }
);
Route::prefix('hospitalityCategory')->group(function () {
    Route::get('hospitalityList', [HospitalityListController::class, 'index'])->name('hospitalityList');

    // Ensure you have the correct model binding and parameter name
    Route::put('hospitalityList/{hospitalityList}/updateStatus', [HospitalityListController::class, 'updateStatus'])
        ->name('hospitalityList.updateStatus');
});

Route::prefix('educationCategory')->group(
    function () {
        Route::get('educationList', [EducationListController::class, 'index'])->name('educationList');

        Route::put('educationList/{educationList}/updateStatus', [EducationListController::class, 'updateStatus'])->name('educationList.updateStatus');

    }
);
Route::prefix('propertyCategory')->group(
    function () {
        Route::get('propertyList', [PropertyListController::class, 'index'])->name('propertyList');

        Route::put('propertyList/{propertyList}/updateStatus', [PropertyListController::class, 'updateStatus'])->name('propertyList.updateStatus');
        Route::put('propertyList/{propertyList}/isFeatured', [PropertyListController::class, 'isFeatured'])->name('propertyList.isFeatured');

    }
);
Route::prefix('healthCareCategory')->group(
    function () {
        Route::get('healthCareList', [HealthCareListController::class, 'index'])->name('healthCareList');

        Route::put('healthCareList/{healthCareList}/updateStatus', [HealthCareListController::class, 'updateStatus'])->name('healthCareList.updateStatus');

    }
);

Route::get('/markAsRead/{id}', [DashboardController::class, 'markAsRead'])->name('markasread');
Route::prefix('registerdUser')->group(function () {
    Route::resource('registeredUser', RegisteredUserController::class);
    Route::put('registeredUser/{registeredUser}/updateStatus', [RegisteredUserController::class, 'updateStatus'])->name('registeredUser.updateStatus');
});


Route::resource('permission', PermissionController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
