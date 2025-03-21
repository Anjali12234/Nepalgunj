<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntertainmentList;
use Illuminate\Http\Request;

class EntertainmentListController extends Controller
{
    public function index()
    {
        
        $entertainmentLists = EntertainmentList::paginate(10);
        return view('admin.entertainmentList.index',compact('entertainmentLists')); // Corrected 'veiw' to 'view'
    }

    public function updateStatus(EntertainmentList $entertainmentList)
    {
        $entertainmentList->update([
            'status' => !$entertainmentList->status
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
    public function isFeatured(EntertainmentList $entertainmentList)
    {
        $entertainmentList->update([
            'is_featured' => !$entertainmentList->is_featured
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
