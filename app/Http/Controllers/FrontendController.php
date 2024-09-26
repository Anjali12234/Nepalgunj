<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\News;


class FrontendController extends Controller
{
    public function index()
    {
        $newsLists = News::with('newsCategory')->latest()->get();
        return view('frontend.index',compact('newsLists'));
    }

    public function postAd()
    {
        if (auth('registered-user')->check())
        {
        if (auth('registered-user')->user()->is_active == 1)
        {
            return view('registeredUser.Ad.postAd');

        }
        else{
            return view('authentication');
        }}
        else{
            return view('authentication');

        }
    }


    public function properties()
    {
        return "hello";
        return view('frontend.property.properties');
    }

    public function __construct()
    {
        $setting = MainCategory::orderBy('position')->with('propertyCategories','healthCareCategories','educationCategories')->get();

        view()->share('sharedCategory', $setting);
    }
}
