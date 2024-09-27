<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterdUser\StoreRegisteredUserDetailRequest;
use App\Models\MainCategory;
use App\Models\RegisteredUser;
use App\Models\RegisteredUserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserDetailController extends BaseController
{

    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        return view('registeredUser.profile',compact('registeredUser'));
    }


    public function store(StoreRegisteredUserDetailRequest $request)
    {
        $registeredUser = Auth::guard('registered-user')->user()->load('registeredUserDetail');
        if ($registeredUser) {
            if ($request->hasFile('citizenship_image_front') && $registeredUser?->registeredUserDetail?->citizenship_image_front) {
                $this->deleteFile($registeredUser?->registeredUserDetail?->citizenship_image_front);
            }
            if ($request->hasFile('citizenship_image_back') && $registeredUser?->registeredUserDetail?->citizenship_image_back) {
                $this->deleteFile($registeredUser?->registeredUserDetail?->citizenship_image_back);
            }

            if ($request->hasFile('avatar') && $registeredUser?->avatar) {
                $this->deleteFile($registeredUser?->avatar);
            }
            $registeredUserDetail = registeredUserDetail::updateOrCreate(
                ['registered_user_id' => $registeredUser->id],
                $request->validated()
            );
            $registeredUserUpdatedData = [
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'phone_no' => $request->input('phone_no'),
                'gender' => $request->input('gender'),
                'd_o_b' => $request->input('d_o_b'),

            ];

            $registeredUser->update($registeredUserUpdatedData);
            return redirect()->back()->with('status', 'You have successfully addedd your detail. To add post wait until the your account is not vrified. For other information contact on the given contact on the site.');

            // return back();
        }
    }

    public function destroyCitizenshipImageFront(RegisteredUserDetail $registeredUserDetail)
    {
        if ($registeredUserDetail->hasFile('citizenship_image_front') ) {
            $this->deleteFile($registeredUserDetail?->citizenship_image_front);
        }
        return back();

    }
    public function destroyCitizenshipImageBack(RegisteredUserDetail $registeredUserDetail)
    {

        if ($registeredUserDetail->hasFile('citizenship_image_back') ) {
            $this->deleteFile($registeredUserDetail?->citizenship_image_back);
        }
        return back();

    }
    public function destroyCoverImage(RegisteredUserDetail $registeredUserDetail)
    {

        if ($registeredUserDetail->hasFile('cover_image')) {
            $this->deleteFile($registeredUserDetail?->cover_image);
        }
        return back();

    }
    public function destroyImage(RegisteredUser $registeredUser, RegisteredUserDetail $registeredUserDetail)
    {
        if ( $registeredUser?->registeredUserDetail?->image) {
            $this->deleteFile($registeredUser?->registeredUserDetail?->image);
        }
        return back();
    }


}

