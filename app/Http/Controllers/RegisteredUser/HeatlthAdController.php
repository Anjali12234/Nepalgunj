<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\HealthCareList\StoreHealthCareListRequest;
use App\Http\Requests\HealthCareList\UpdateHealthCareListRequest;
use App\Models\HealthCareCategory;
use App\Models\HealthCareList;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HeatlthAdController extends Controller
{
    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['healthCareCategories.healthCareLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.healthCareAd.index', compact('mainCategories'));
    }

    public function create(HealthCareCategory $healthCareCategory)
    {
        return view('registeredUser.healthCareAd.create', compact('healthCareCategory'));
    }

    public function store(StoreHealthCareListRequest $request, HealthCareCategory $healthCareCategory)
    {
        $healthCareList = HealthCareList::create(
            $request->validated() + [
                'health_care_category_id' => $healthCareCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $healthCareList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('healthCareLists/' . Str::slug($request->input('name'), '_'), 'public'),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension()
            ]);
        }
        alert("form submitted");
        return back();
    }

    public function edit(HealthCareList $healthCareList)
    {
        return view('registeredUser.healthCareAd.edit', compact('healthCareList'));
    }


    public function update(UpdateHealthCareListRequest $request, HealthCareList $healthCareList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $healthCareList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('healthCareLists/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $healthCareList->update($request->validated());
        alert("form updated");

        return back();
    }

    public function destroy(HealthCareList $healthCareList)
    {
        foreach ($healthCareList->files as $file) {

            $this->deleteFile($file->file);
        }
        $healthCareList->delete();
        return back();
    }

    public function __construct()
    {
        $setting = MainCategory::orderBy('position')->get();
        view()->share('sharedCategory', $setting);
    }
}
