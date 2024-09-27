<?php
namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyList\StoreProperyListRequest;
use App\Http\Requests\PropertyList\UpdateProperyListRequest;
use App\Models\MainCategory;
use App\Models\PropertyCategory;
use App\Models\PropertyList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PropertyAdController extends BaseController
{
    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['propertyCategories.propertyLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.propertyAd.index', compact('mainCategories'));
    }

    public function create(PropertyCategory $propertyCategory)
    {
        return view('registeredUser.propertyAd.create', compact('propertyCategory'));
    }

    public function store(StoreProperyListRequest $request, PropertyCategory $propertyCategory)
    {
        $propertyList = PropertyList::create(
            $request->validated() + [
                'property_category_id' => $propertyCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
            ]
        );
        foreach ($request->validated(['files']) as $file) {
            $propertyList->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file' => $file->store('propertyLists/' . Str::slug($request->input('title'), '_'), 'public'),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension()
            ]);
        }
        alert("form submitted");
        return back();
    }

    public function edit(PropertyList $propertyList)
    {
        return view('registeredUser.propertyAd.edit', compact('propertyList'));
    }


    public function update(UpdateProperyListRequest$request, PropertyList $propertyList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $propertyList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('propertyLists/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $propertyList->update($request->validated());
        alert("form updated");

        return back();
    }

    public function destroy(PropertyList $propertyList)
    {
        foreach ($propertyList->files as $file) {

            $this->deleteFile($file->file);
        }
        $propertyList->delete();
        return back();
    }


}
