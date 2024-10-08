<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Requests\JobList\StoreJobListRequest;
use App\Http\Requests\JobList\UpdateJobListRequest;
use App\Models\JobCategory;
use App\Models\JobList;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JobAdController extends BaseController
{
    public function index()
    {
        $registeredUser = Auth::guard('registered-user')->user();
        $mainCategories = MainCategory::with(['jobCategories.jobLists' => function ($query) use ($registeredUser) {
            $query->where('registered_user_id', $registeredUser->id);
        }])->get();
        return view('registeredUser.jobAd.index', compact('mainCategories'));
    }

    public function create(JobCategory $jobCategory)
    {
        return view('registeredUser.jobAd.create', compact('jobCategory'));
    }

    public function store(StoreJobListRequest $request, JobCategory $jobCategory)
    {
        
        $jobList = JobList::create(
            $request->validated() + [
                'job_category_id' => $jobCategory->id,
                'registered_user_id' => Auth::guard('registered-user')->user()->id,
               
            ]
        );

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $jobList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('$jobLists/' . Str::slug($request->input('job_name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }

        alert("Form submitted successfully");

        return back();
    }

    public function edit(JobList $jobList)
    {
        return view('registeredUser.jobAd.edit', compact('JobList'));
    }


    public function update(UpdateJobListRequest $request, JobList $jobList)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $jobList->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('JobLists/' . Str::slug($request->input('job_name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $jobList->update($request->validated());
        alert("form updated");

        return back();
    }

    public function destroy(JobList $jobList)
    {
        foreach ($jobList->files as $file) {

            $this->deleteFile($file->file);
        }
        $jobList->delete();
        return back();
    }

}
