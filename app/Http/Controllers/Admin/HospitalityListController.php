<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationList;
use App\Models\HospitalityList;
use App\Models\PropertyList;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HospitalityListController extends Controller
{
    public function index()
    {
        $hospitalityLists = HospitalityList::paginate(10);
        return view('admin.hospitalityList.index',compact('hospitalityLists')); // Corrected 'veiw' to 'view'
    }
    public function updateStatus(HospitalityList $hospitalityList)
    {
        $hospitalityList->update([
            'status' => !$hospitalityList->status
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
