<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobCategory\StoreJobCategoryRequest;
use App\Http\Requests\JobCategory\UpdateJobCategoryRequest;
use App\Models\JobCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JobCategoryController extends Controller
{
    public function index()
    {
        $jobCategories = JobCategory::latest()->paginate(10);
        return view('admin.jobCategory.index',compact('jobCategories'));
    }

    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.jobCategory.create',compact('mainCategories'));
    }


    public function store(StoreJobCategoryRequest $request)
    {
        JobCategory::create($request->validated());
        Alert::success('Job Category added successfully');
        return back();
    }


    public function edit(JobCategory $jobCategory)
    {
        $mainCategories = MainCategory::all();
        return view('admin.jobCategory.edit',compact('mainCategories','jobCategory'));
    }

    public function update(UpdateJobCategoryRequest $request, JobCategory $jobCategory)
    {

        $jobCategory->update($request->validated());
        Alert::success('Job Category  updated successfully');
        return redirect(route('admin.jobCategory.index'));
    }


    public function destroy(JobCategory $jobCategory)
    {
        $jobCategory->delete();
        Alert::success('Job Category deleted successfully');
        return back();
    }
}
