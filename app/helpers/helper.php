<?php

use App\Models\EducationCategory;
use App\Models\EducationList;
use App\Models\EntertainmentCategory;
use App\Models\EntertainmentList;
use App\Models\HealthCareCategory;
use App\Models\HealthCareList;
use App\Models\HospitalityCategory;
use App\Models\HospitalityList;
use App\Models\JobCategory;
use App\Models\JobList;
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
if (!function_exists('entertainmentCategories')) {
    function entertainmentCategories()
    {
        return EntertainmentCategory::all();
    }
}
if (!function_exists('jobCategories')) {
    function jobCategories()
    {
        return JobCategory::all();
    }
}

if (!function_exists('getCounts')) {
    function getCounts()
    {
        $authUserId = auth('registered-user')->user()->id;
        // Count the records where deleted_at is null and the registered_user_id matches the authenticated user
        $propertyCount = PropertyList::where('deleted_at', NULL)
            ->where('registered_user_id', $authUserId)
            ->count();

        $educationCount = EducationList::where('deleted_at', NULL)
            ->where('registered_user_id', $authUserId)
            ->count();

        $entertainmentCount = EntertainmentList::where('deleted_at', NULL)
            ->where('registered_user_id', $authUserId)
            ->count();

        $hospitalityCount = HospitalityList::where('deleted_at', NULL)
            ->where('registered_user_id', $authUserId)
            ->count();

        $healthCount = HealthCareList::where('deleted_at', NULL)
            ->where('registered_user_id', $authUserId)
            ->count();
        $jobCount = JobList::where('deleted_at', NULL)
            ->where('registered_user_id', $authUserId)
            ->count();

        return [
            'propertyCount' => $propertyCount,
            'educationCount' => $educationCount,
            'entertainmentCount' => $entertainmentCount,
            'hospitalityCount' => $hospitalityCount,
            'healthCount' => $healthCount,
            'jobCount' => $jobCount,
        ];
    }
}
