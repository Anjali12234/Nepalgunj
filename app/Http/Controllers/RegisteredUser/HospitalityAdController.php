<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Requests\HospitalityCategory\UpdateHospitalityCategoryRequest;
use App\Http\Requests\HospitalityList\StoreHospitalityListRequest;
use App\Http\Requests\HospitalityList\UpdateHospitalityListRequest;
use App\Models\HospitalityCategory;
use App\Models\HospitalityList;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HospitalityAdController extends BaseController
{

    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['hospitalityCategories.hospitalityLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.hospitalityAd.index', compact('mainCategories','registeredUser'));
    }

    public function create(HospitalityCategory $hospitalityCategory)
    {
        return view('registeredUser.hospitalityAd.create', compact('hospitalityCategory'));
    }

    public function store(StoreHospitalityListRequest $request, HospitalityCategory $hospitalityCategory)
    {

        $hospitalityList = HospitalityList::create(
            $request->validated() + [
                'hospitality_category_id' => $hospitalityCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,

            ]
        );

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $hospitalityList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('$hospitalityLists/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }

        alert("Form submitted successfully");

        return back();
    }

    public function edit(HospitalityList $hospitalityList)
    {
        return view('registeredUser.hospitalityAd.edit', compact('hospitalityList'));
    }


    public function update(UpdateHospitalityListRequest $request, HospitalityList $hospitalityList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $hospitalityList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('HospitalityLists/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $hospitalityList->update($request->validated());
        alert("form updated");

        return redirect(route('registeredUser.hospitalityList.index'));
    }

    public function destroy(HospitalityList $hospitalityList)
    {
        foreach ($hospitalityList->files as $file) {

            $this->deleteFile($file->file);
        }
        $hospitalityList->delete();
        return back();
    }


}
