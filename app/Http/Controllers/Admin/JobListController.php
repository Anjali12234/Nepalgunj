<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobList;

class JobListController extends Controller
{
    public function index()
    {
        $jobLists = JobList::paginate(10);
        return view('admin.jobList.index',compact('jobLists'));
    }
    public function updateStatus(JobList $jobList)
    {
        $jobList->update([
            'status' => !$jobList->status
        ]);
        toast( __('Status updated successfully'), 'success');
        return back();
    }
}
