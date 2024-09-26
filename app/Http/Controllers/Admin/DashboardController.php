<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegisteredUser;
use App\Models\User;
use App\Notifications\UserRegisterNotification;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
           return view('backend.dashboard');
    }


    public function markAsRead($id)
    {
        if($id){
            auth()->user()->unreadNotifications->where('id',$id)->markAsRead();
        }
        return back();

    }

}
