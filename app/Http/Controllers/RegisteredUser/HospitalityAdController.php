<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Models\HospitalityCategory;
use App\Models\HospitalityList;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalityAdController extends BaseController
{

    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['hospitalityCategories.hospitalityLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.hospitalityAd.index', compact('mainCategories'));
    }

    public function create(HospitalityCategory $hospitalityCategory)
    {
        return view('registeredUser.hospitalityAd.create', compact('hospitalityCategory'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HospitalityList $hospitalityList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HospitalityList $hospitalityList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HospitalityList $hospitalityList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HospitalityList $hospitalityList)
    {
        //
    }
}
