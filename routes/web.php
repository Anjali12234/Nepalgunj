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
    Route::get('/properties/{propertyCategorySlug?}', 'properties')->name('properties');
    Route::get('propertyList/{propertyList:slug}', 'propertyDetails')->name('propertyDetails');
    // Route::get('propertyList/{propertyList->registeredUser:name}', 'registeredUser')->name('registeredUser');
    // Route::get('propertyList/{registeredUser:name}', 'registeredUser')->name('registeredUsers');

    Route::get('newsList/{newsList:slug}', 'newsDetail')->name('newsDetail');
    Route::get('healthCare','healthcareIndex')->name('healthcareIndex');
    Route::get('healthCareList/{healthCareList:slug}','detailPage')->name('healthcare.detailPage');
    Route::get('healthCare/{healthCare:slug}','listPage')->name('healthCare');

    Route::get('education','educationIndexPage')->name('education.IndexPage');
    Route::get('educationList/{educationList:slug}','educationDetailPage')->name('education.detailPage');
    Route::get('educationCategory/{educationCategory:slug}','educationlistPage')->name('educationCategory');

    Route::get('schoolDetail','schoolDetailPage')->name('education.schoolDetailPage');
    Route::get('campusList','campusListPage')->name('education.campusListpage');
    Route::get('campusDetail','campusDetailPage')->name('education.campusDetailPage');
    Route::get('collegeList','collegeListPage')->name('education.collegeListPage');
    Route::get('collegeDetail','collegeDetailPage')->name('education.collegeDetailPage');
    Route::get('schoolList','schoolListPage')->name('education.schoolListPage');
    Route::get('consultancyList','consultancyListPage')->name('education.consultancyListPage');
    Route::get('consultancyDetail','consultancyDetailPage')->name('education.consultancyDetailPage');
    Route::get('instituteList','instituteListPage')->name('education.instituteListPage');
    Route::get('instituteDetail','instituteDetailPage')->name('education.instituteDetailPage');
    Route::get('hospitality','hospitalityIndex')->name('hospitality.hospitalityIndex');
    Route::get('hospitalityList','hospitalityList')->name('hospitality.hospitalityList');
    Route::get('hospitalityDetail','hospitalityDetail')->name('hospitality.hospitalityDetail');

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

