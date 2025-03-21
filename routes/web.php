<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisteredUser\AuthController as RegisteredUserAuthController;
use App\Http\Controllers\RegisteredUser\HeatlthAdController;
use App\Http\Controllers\RegisteredUser\PropertyAdController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/postAd', 'postAd')->name('postAd');
    Route::get('/properties/{propertyCategorySlug?}', 'properties')->name('properties');
    Route::get('propertyList/{propertyList:slug}', 'propertyDetails')->name('propertyDetails');
    // Route::get('propertyList/{propertyList->registeredUser:name}', 'registeredUser')->name('registeredUser');
    // Route::get('propertyList/{registeredUser:name}', 'registeredUser')->name('registeredUsers');

    Route::get('newsList','newsList')->name('newsList');
    Route::get('newsList/{newsList:slug}', 'newsDetail')->name('newsDetail');

    Route::get('jobList','jobList')->name('jobList');
    Route::get('jobList/{jobList:slug}', 'jobDetail')->name('jobDetail');

    Route::get('healthCare','healthcareIndex')->name('healthCare.IndexPage');
    Route::get('healthCareList/{healthCareList:slug}','detailPage')->name('healthCare.detailPage');
    Route::get('healthCare/{healthCare:slug}','listPage')->name('healthCare');

    Route::get('education','educationIndexPage')->name('education.IndexPage');
    Route::get('educationList/{educationList:slug}','educationDetailPage')->name('education.detailPage');
    Route::get('education/{educationCategory:slug}','educationlistPage')->name('education');
   
    Route::get('entertainment','entertainmentIndexPage')->name('entertainment.IndexPage');
    Route::get('entertainmentList/{entertainmentList:slug}','entertainmentDetailPage')->name('entertainment.detailPage');
    Route::get('entertainmentCategory/{entertainmentCategory:slug}','entertainmentlistPage')->name('entertainmentCategory');


    Route::get('hospitality','hospitalityIndex')->name('hospitality.hospitalityIndex');
    Route::get('hospitalityCategory/{hospitalityCategory:slug}','hospitalityListPage')->name('hospitalityCategory');
    Route::get('hospitalityList/{hospitalityList:slug}','hospitalityDetail')->name('hospitality.hospitalityDetail');

});
// Route::get('detail/{slug}', [FrontendController::class, 'staticMenus'])->name('static');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('handle-login');


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

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/location', function () {
    return view('welcome');
});

Route::post('/location', [LocationController::class, 'store'])->name('location.store');
Route::post('upload', [UploadController::class, 'store'])->name('upload');
