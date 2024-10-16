<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationList;
use App\Models\PropertyList;
use Illuminate\Http\Request;

class PropertyListController extends Controller
{
    public function index()
    {
        $propertyLists = PropertyList::paginate(10);
        return view('admin.propertyList.index',compact('propertyLists')); // Corrected 'veiw' to 'view'
    }

    public function updateStatus(PropertyList $propertyList)
    {
        $propertyList->update([
            'status' => !$propertyList->status
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }

    public function isFeatured(PropertyList $propertyList)
    {
        $propertyList->update([
            'is_featured' => !$propertyList->is_featured
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
