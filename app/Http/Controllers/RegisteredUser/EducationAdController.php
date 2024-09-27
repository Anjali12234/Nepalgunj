<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\EducationList\StoreEducationListRequest;
use App\Http\Requests\EducationList\UpdateEducationListRequest;
use App\Models\EducationCategory;
use App\Models\EducationList;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EducationAdController extends BaseController
{
    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['educationCategories.educationLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.educationAd.index', compact('mainCategories'));
    }

    public function create(EducationCategory $educationCategory)
    {
        return view('registeredUser.educationAd.create', compact('educationCategory'));
    }

    public function store(StoreEducationListRequest $request, EducationCategory $educationCategory)
    {
        $educationList = EducationList::create(
            $request->validated() + [
                'education_category_id' => $educationCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $educationList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('educationLists/' . Str::slug($request->input('name'), '_'), 'public'),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension()
            ]);
        }
        alert("form submitted");
        return back();
    }

    public function edit(EducationList $educationList)
    {
        return view('registeredUser.educationAd.edit', compact('educationList'));
    }


    public function update(UpdateEducationListRequest $request, EducationList $educationList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $educationList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('educationLists/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $educationList->update($request->validated());
        alert("form updated");

        return back();
    }

    public function destroy(EducationList $educationList)
    {
        foreach ($educationList->files as $file) {

            $this->deleteFile($file->file);
        }
        $educationList->delete();
        return back();
    }


}
