<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __invoke()
    {
        $registeredUser = auth('registered-user')->user();
        return view('registeredUser.dashboard',compact('registeredUser'));

    }


}
