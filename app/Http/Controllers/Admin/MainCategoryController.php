<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategory\StoreMainCategoryRequest;
use App\Http\Requests\MainCategory\UpdateMainCategoryRequest;
use App\Models\MainCategory;
use RealRashid\SweetAlert\Facades\Alert;

class MainCategoryController extends Controller
{

    public function index()
    {
        $mainCategories = MainCategory::latest()->paginate(10);
        return view('admin.mainCategory.index',compact('mainCategories'));
    }
    public function create()
    {
        return view('admin.mainCategory.create');
    }

    public function store(StoreMainCategoryRequest $request)
    {
        MainCategory::create($request->validated());
        Alert::success(' Main Category added successfully');
        return back();
    }

    public function edit(MainCategory $mainCategory)
    {
        return view('admin.mainCategory.edit',compact('mainCategory'));
    }

    public function update(UpdateMainCategoryRequest $request, MainCategory $mainCategory)
    {
        if ($request->hasFile('image') && $image= $mainCategory->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $mainCategory->update($request->validated());
        Alert::success('Main Category updated successfully');
        return redirect(route('admin.mainCategory.index'));
    }

    public function destroy(MainCategory $mainCategory)
    {
        $mainCategory->delete();
        Alert::success('Main Category deleted successfully');
        return back();
    }

}
