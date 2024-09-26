<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationCategory\StoreEducationCategoryRequest;
use App\Http\Requests\EducationCategory\UpdateEducationCategoryRequest;
use App\Models\EducationCategory;
use App\Models\MainCategory;
use RealRashid\SweetAlert\Facades\Alert;

class EducationCategoryController extends Controller
{
    public function index()
    {
        $mainCategories = MainCategory::all();
        $educationCategories = EducationCategory::paginate(10);
        return view('admin.educationCategory.index',compact('mainCategories','educationCategories'));
    }
    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.educationCategory.create',compact('mainCategories'));
    }

    public function store(StoreEducationCategoryRequest $request)
    {
        EducationCategory::create($request->validated());
        Alert::success('Education Category added successfully');
        return back();
    }

    public function edit(EducationCategory $educationCategory)
    {
        $mainCategories = MainCategory::all();
        return view('admin.educationCategory.edit',compact('mainCategories','educationCategory'));
    }

    public function update(UpdateEducationCategoryRequest $request, EducationCategory $educationCategory)
    {

        $educationCategory->update($request->validated());
        Alert::success('Education Category updated successfully');
        return redirect(route('admin.educationCategory.index'));
    }

    public function destroy(EducationCategory $educationCategory)
    {
        $educationCategory->delete();
        Alert::success('Education Category deleted successfully');
        return back();
    }
}
