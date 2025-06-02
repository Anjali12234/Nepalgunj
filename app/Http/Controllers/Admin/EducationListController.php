<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AccountVerifyEmail;
use App\Models\EducationList;
use App\Models\HospitalityList;
use App\Models\RegisteredUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EducationListController extends Controller
{
    public function index()
    {
        $educationLists = EducationList::latest()->paginate(10);
        return view('admin.educationList.index',compact('educationLists')); // Corrected 'veiw' to 'view'
    }

    public function updateStatus(EducationList $educationList)
    {
        $educationList->update([
            'status' => !$educationList->status
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
    public function isFeatured(EducationList $educationList)
    {
        $educationList->update([
            'is_featured' => !$educationList->is_featured
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
