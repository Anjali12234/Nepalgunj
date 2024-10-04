<?php

use App\Models\EducationCategory;
use App\Models\HealthCareCategory;
use App\Models\HospitalityCategory;
use App\Models\PropertyCategory;
use App\Models\PropertyList;
use App\Models\RegisteredUser;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

if (!function_exists('setting')) {
    function setting()
    {
        return Cache::rememberForever('setting', function () {
            return Setting::latest()->first();
        });
    }
}
if (!function_exists('registeredUser')) {
    function registeredUser()
    {
        return Cache::rememberForever('registeredUser', function () {
            return Auth::guard('registered-user')->user(); // Corrected the call here
        });
    }
}
if (!function_exists('propertyCategories')) {
    function propertyCategories()
    {
        return PropertyCategory::all();
    }
}
if (!function_exists('healthCareCategories')) {
    function healthCareCategories()
    {
        return HealthCareCategory::all();
    }
}
if (!function_exists('educationCategories')) {
    function educationCategories()
    {
        return EducationCategory::all();
    }
}
if (!function_exists('hospitalityCategories')) {
    function hospitalityCategories()
    {
        return HospitalityCategory::all();
    }
}

if (!function_exists('getCounts')) {
    function getCounts()
    {
        $propertyCount = PropertyList::count(); // Count the number of records in the propertyList table

        return [
            'propertyCount' => $propertyCount,
        ];
    }
}
