<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HospitalityCategory\StoreHospitalityCategoryRequest;
use App\Http\Requests\HospitalityCategory\UpdateHospitalityCategoryRequest;
use App\Models\HospitalityCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HospitalityCategoryController extends Controller
{

    public function index()
    {
        $hospitalityCategories = HospitalityCategory::paginate(10);
        return view('admin.hospitality.index',compact('hospitalityCategories'));
    }

    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('admin.hospitality.create',compact('mainCategories'));
    }


    public function store(StoreHospitalityCategoryRequest $request)
    {
        HospitalityCategory::create($request->validated());
        Alert::success('Hospitality Category added successfully');
        return back();
    }


    public function edit(HospitalityCategory $hospitalityCategory)
    {
        $mainCategories = MainCategory::all();
        return view('admin.hospitality.edit',compact('mainCategories','hospitalityCategory'));
    }

    public function update(UpdateHospitalityCategoryRequest $request, HospitalityCategory $hospitalityCategory)
    {

        $hospitalityCategory->update($request->validated());
        Alert::success('Hospitality Category  updated successfully');
        return redirect(route('admin.hospitalityCategory.index'));
    }


    public function destroy(HospitalityCategory $hospitalityCategory)
    {
        $hospitalityCategory->delete();
        Alert::success('Hospitality Category  deleted successfully');
        return back();
    }
}
