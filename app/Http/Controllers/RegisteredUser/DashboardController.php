<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('registeredUser.dashboard');

    }

    public function __construct()
    {
        $setting = MainCategory::orderBy('position')->get();
        view()->share('sharedCategory', $setting);
    }
}
