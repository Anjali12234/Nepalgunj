<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyCategory\StorePropertyCategoryRequest;
use App\Http\Requests\PropertyCategory\UpdatePropertyCategoryRequest;
use App\Models\MainCategory;
use App\Models\PropertyCategory;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyCategoryController extends Controller
{

    public function index()
    {
        $mainCategories = MainCategory::all();

        $propertyCategories = PropertyCategory::paginate(10);
        return view('admin.propertyCategory.index',compact('propertyCategories','mainCategories'));
    }
    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.propertyCategory.create',compact('mainCategories'));
    }

    public function store(StorePropertyCategoryRequest $request)
    {
        PropertyCategory::create($request->validated());
        Alert::success('Property Category added successfully');
        return back();
    }

    public function edit(PropertyCategory $propertyCategory)
    {
        $mainCategories = MainCategory::all();
        return view('admin.propertyCategory.edit',compact('mainCategories','propertyCategory'));
    }

    public function update(UpdatePropertyCategoryRequest $request, PropertyCategory $propertyCategory)
    {

        $propertyCategory->update($request->validated());
        Alert::success('Property Category updated successfully');
        return redirect(route('admin.propertyCategory.index'));
    }

    public function destroy(PropertyCategory $propertyCategory)
    {
        $propertyCategory->delete();
        Alert::success('Property Category deleted successfully');
        return back();
    }
}
