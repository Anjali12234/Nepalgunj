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
    Route::get('doctorlist/{doctorlist:slug}','doctorDetailPage')->name('healthcare.doctorDetailPage');
    Route::get('doctorlist','listPage')->name('healthcare.listPage');
    Route::get('hospitalListPage','hospitalListPage')->name('healthcare.hospitalListPage');
    Route::get('mediaclstoreList','medicallistPage')->name('healthcare.medicallistPage');
    Route::get('medicalListPage','medicalListPage')->name('healthcare.medicalListPage');
    Route::get('medicalDetailpage','medicalDetailPage')->name('healthcare.medicalDetailPage');
    Route::get('hospitalDetailPage','hospitalDetailPage')->name('healthcare.hospitalDetailPage');
    Route::get('pharmacyListPage','pharmacyListPage')->name('healthcare.pharmacyListPage');
    Route::get('pharmacyDetailPage','pharmacyDetailPage')->name('healthcare.pharmacyDetailPage');
    Route::get('education','educationIndexPage')->name('education.IndexPage');
    Route::get('campusList','campusListPage')->name('education.campusListpage');
    Route::get('campusDetail','campusDetailPage')->name('education.campusDetailPage');
    Route::get('collegeList','collegeListPage')->name('education.collegeListPage');
    Route::get('collegeDetail','collegeDetailPage')->name('education.collegeDetailPage');
    Route::get('schoolList','schoolListPage')->name('education.schoolListPage');
    Route::get('schoolDetail','schoolDetailPage')->name('education.schoolDetailPage');
    Route::get('consultancyList','consultancyListPage')->name('education.consultancyListPage');
    Route::get('consultancyDetail','consultancyDetailPage')->name('education.consultancyDetailPage');
    Route::get('instituteList','instituteListPage')->name('education.instituteListPage');
    Route::get('instituteDetail','instituteDetailPage')->name('education.instituteDetailPage');

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

