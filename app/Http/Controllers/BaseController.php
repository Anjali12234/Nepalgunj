<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Menu;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        $setting = MainCategory::orderBy('position')->with('propertyCategories','healthCareCategories','educationCategories')->get();
        $sharedMenus = Menu::with([
            'menus' => function ($query) {
                $query->with('model')->whereStatus(1)->orderBy('position');
            },
            'model'
        ])
            ->whereNull('menu_id')
            ->whereStatus(1)
            ->orderBy('position', 'asc')
            ->get();

        view()->share('sharedMenus', $sharedMenus);
        view()->share('sharedCategory', $setting);
    }
}
