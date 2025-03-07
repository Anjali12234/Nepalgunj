<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsList\StoreNewsListRequest;
use App\Http\Requests\NewsList\UpdateNewsListRequest;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $newsLists = News::paginate(10);

        return view('admin.newsList.index', compact('newsLists'));
    }

    public function create()
    {
        $newsCategories = NewsCategory::all();
        return view('admin.newsList.create', compact('newsCategories'));
    }

    public function store(StoreNewsListRequest $request,)
    {

        News::create($request->validated());
        alert("form submitted");
        return back();
    }

    public function show(News $newsList)
    {
        return view('admin.newsList.show', compact('newsList'));
    }

    public function edit(News $newsList)
    {
        $newsCategories = NewsCategory::all();
        return view('admin.newsList.edit', compact('newsList', 'newsCategories'));
    }

    public function update(UpdateNewsListRequest $request, News $newsList)
    {
        if ($request->hasFile('image') && $image= $newsList->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $newsList->update($request->validated());

        alert("form updated");

        return redirect(route('admin.news.index'));
    }


    public function destroy(News $newsList)
    {
        foreach ($newsList->files as $file) {

            $this->deleteFile($file->file);
        }
        $newsList->delete();
        alert('News List deleted successfully');
        return back();
    }

    public function updateStatus( News $newsList)
    {
        $newsList->update([
            'status' => !$newsList->status
        ]);
        alert('News List updated successfully');
        return back();
    }
}
