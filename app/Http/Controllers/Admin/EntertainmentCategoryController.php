<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntertainmentCategory\StoreEntertainmentCategoryRequest;
use App\Http\Requests\EntertainmentCategory\UpdateEntertainmentCategoryRequest;
use App\Models\EntertainmentCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EntertainmentCategoryController extends Controller
{
    public function index()
    {
       
        $mainCategories = MainCategory::all();
        $entertainmentCategories = EntertainmentCategory::paginate(10);
        return view('admin.entertainmentCategory.index',compact('mainCategories','entertainmentCategories'));
    }
    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.entertainmentCategory.create',compact('mainCategories'));
    }

    public function store(StoreEntertainmentCategoryRequest $request)
    {
        EntertainmentCategory::create($request->validated());
        Alert::success('Entertainment Category added successfully');
        return back();
    }

    public function edit(EntertainmentCategory $entertainmentCategory)
    {
        $mainCategories = MainCategory::all();
        return view('admin.entertainmentCategory.edit',compact('mainCategories','entertainmentCategory'));
    }

    public function update(UpdateEntertainmentCategoryRequest $request, entertainmentCategory $entertainmentCategory)
    {

        $entertainmentCategory->update($request->validated());
        Alert::success('Entertainment Category updated successfully');
        return redirect(route('admin.entertainmentCategory.index'));
    }

    public function destroy(EntertainmentCategory $entertainmentCategory)
    {
        $entertainmentCategory->delete();
        Alert::success('Entertainment Category deleted successfully');
        return back();
    }
}