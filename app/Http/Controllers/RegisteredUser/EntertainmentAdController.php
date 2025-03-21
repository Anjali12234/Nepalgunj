<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntertainmentList\StoreEntertainmentListRequest;
use App\Http\Requests\EntertainmentList\UpdateEntertainmentListRequest;
use App\Models\EntertainmentCategory;
use App\Models\EntertainmentList;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EntertainmentAdController extends Controller
{
    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['entertainmentCategories.entertainmentLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.entertainmentAd.index', compact('mainCategories','registeredUser'));
    }

    public function create(EntertainmentCategory $entertainmentCategory)
    {
        return view('registeredUser.entertainmentAd.create', compact('entertainmentCategory'));
    }

    public function store(StoreEntertainmentListRequest $request, EntertainmentCategory $entertainmentCategory)
    {    

        $entertainmentList = EntertainmentList::create(
            $request->validated() + [
                'entertainment_category_id' => $entertainmentCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
               
            ]
        );

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $entertainmentList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('entertainmentLists/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }

        alert("Form submitted successfully");

        return back();
    }


    public function edit(EntertainmentList $entertainmentList)
    {
        return view('registeredUser.entertainmentAd.edit', compact('entertainmentList'));
    }


    public function update(UpdateEntertainmentListRequest $request, EntertainmentList $entertainmentList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $entertainmentList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('entertainmentLists/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $entertainmentList->update($request->validated());
        alert("form updated");

        return redirect(route('registeredUser.entertainmentList.index'));
    }

    public function destroy(EntertainmentList $entertainmentList)
    {
        foreach ($entertainmentList->files as $file) {

            $this->deleteFile($file->file);
        }
        $entertainmentList->delete();
        return back();
    }
}
