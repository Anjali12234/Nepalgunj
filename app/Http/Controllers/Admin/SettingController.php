<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{

    public function index()
    {
    $setting = setting();
        return view('admin.setting.index',compact('setting'));
    }


    public function store(StoreSettingRequest $request)
    {
        if ($setting = Setting::latest()->first()) {
            if ($request->hasFile('logo1') && $logo1 = $setting->getRawOriginal('logo1')) {
                $this->deleteFile($logo1);
            }
            if ($request->hasFile('logo2') && $logo2 = $setting->getRawOriginal('logo2')) {
                $this->deleteFile($logo2);
            }
            $setting->update($request->validated());
        } else {
            Setting::create($request->validated());
        }
        Alert::success('Setting added successfully');
        Cache::forget('setting');
        return back();
    }


}
