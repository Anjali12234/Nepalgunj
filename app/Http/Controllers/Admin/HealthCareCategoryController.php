<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HealthCareCategory\StoreHealthCareCategoryRequest;
use App\Http\Requests\HealthCareCategory\UpdateHealthCareCategoryRequest;
use App\Models\HealthCareCategory;
use App\Models\MainCategory;
use RealRashid\SweetAlert\Facades\Alert;

class HealthCareCategoryController extends Controller
{
    public function index()
    {
        $healthCares = HealthCareCategory::paginate(10);
        return view('admin.healthCare.index',compact('healthCares'));
    }
    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.healthCare.create',compact('mainCategories'));
    }

    public function store(StoreHealthCareCategoryRequest $request)
    {
        HealthCareCategory::create($request->validated());
        Alert::success('Health Care Category added successfully');
        return back();
    }

    public function edit(HealthCareCategory $healthCare)
    {
        $mainCategories = MainCategory::all();
        return view('admin.healthCare.edit',compact('mainCategories','healthCare'));
    }

    public function update(UpdateHealthCareCategoryRequest $request, HealthCareCategory $healthCare)
    {

        $healthCare->update($request->validated());
        Alert::success('Health Care Category updated successfully');
        return redirect(route('admin.healthCare.index'));
    }

    public function destroy(HealthCareCategory $healthCare)
    {
        $healthCare->delete();
        Alert::success('HealthCareCategory deleted successfully');
        return back();
    }
}
