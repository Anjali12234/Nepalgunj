<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationList;
use App\Models\HealthCareList;
use Illuminate\Http\Request;

class HealthCareListController extends Controller
{
    public function index()
    {
        $healthCareLists = HealthCareList::paginate(10);
        return view('admin.healthCareList.index',compact('healthCareLists')); // Corrected 'veiw' to 'view'
    }

    public function updateStatus(HealthCareList $healthCareList)
    {
        $healthCareList->update([
            'status' => !$healthCareList->status
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
