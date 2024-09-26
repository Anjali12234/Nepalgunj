<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterdUser\StoreRegisteredUserRequest;
use App\Models\MainCategory;
use App\Models\RegisteredUser;
use App\Models\Setting;
use App\Models\User;
use App\Notifications\UserRegisterNotification;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.registered-user-login');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth('registered-user')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('registeredUser.dashboard', absolute: false));

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function register()
    {
        return view('frontend.registered-user-register');
    }

    public function store(StoreRegisteredUserRequest $request)
    {
        $user = User::first();
        $registeredUser = RegisteredUser::create($request->validated());

        auth('registered-user')->login($registeredUser);

        if (auth('registered-user')->check()) {
            $request->session()->regenerate();
            Notification::send($user, new UserRegisterNotification($registeredUser) );
            toast('Thank you for registering...', 'success');
            return redirect()->intended(route('registeredUser.dashboard', absolute: false));
        }
        toast('Could not autologin...', 'error');
        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        auth('registered-user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('welcome'));
    }

    public function __construct()
    {
        $setting = MainCategory::orderBy('position')->get();
        view()->share('sharedCategory', $setting);
    }


}
