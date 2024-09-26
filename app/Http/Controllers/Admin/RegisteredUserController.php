<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AccountVerifyEmail;
use App\Models\RegisteredUser;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    public function index()
    {
        $registeredUsers = RegisteredUser::paginate(10);
        return view('admin.registeredUser.index',compact('registeredUsers'));
    }

    public function show(RegisteredUser $registeredUser)
    {

        return view('admin.registeredUser.show',compact('registeredUser'));
    }

    public function updateStatus(Request $request, RegisteredUser $registeredUser)
    {
        $request->validate([
            'is_active' => 'required|in:0,1',
            'remarks' => 'nullable|string|max:255',
        ]);

        $registeredUser->update([
            'is_active' => $request->is_active,
            'remarks' => $request->remarks,
        ]);

        $statusText = $request->is_active == 1 ? 'Verified' : 'Rejected';

        Mail::to($registeredUser->email)->send(new AccountVerifyEmail($registeredUser, $statusText));

        // Success alert
        Alert::success('Account verification status has been updated successfully.');

        return back();
    }

}
