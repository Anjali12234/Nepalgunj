<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCategory\StoreNewsCategoryRequest;
use App\Http\Requests\NewsCategory\UpdateNewsCategoryRequest;
use App\Models\NewsCategory;
use RealRashid\SweetAlert\Facades\Alert;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $newsCategories = NewsCategory::latest()->paginate(10);
        return view('admin.newsCategory.index',compact('newsCategories'));
    }

    public function store(StoreNewsCategoryRequest $request)
    {
        NewsCategory::create($request->validated());
        Alert::success('News Category added successfully');
        return back();
    }

    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.newsCategory.edit',compact('newsCategory'));
    }

    public function update(UpdateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        $newsCategory->update($request->validated());
        Alert::success('News Category updated successfully');
        return redirect(route('admin.newsCategory.index'));
    }

    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->delete();
        Alert::success('News Category deleted successfully');
        return back();
    }

    public function updateStatus(NewsCategory $newsCategory)
    {
        $newsCategory->update([
            'status' => !$newsCategory->status
        ]);
        alert('News Category updated successfully');
        return back();
    }
}
