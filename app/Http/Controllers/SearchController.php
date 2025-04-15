<?php

namespace App\Http\Controllers;

use App\Models\EducationList;
use App\Models\HealthCareList;
use App\Models\HospitalityList;
use App\Models\JobList;
use App\Models\News;
use App\Models\PropertyList;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search'); // Get search input

        $propertyLists = PropertyList::where('title', 'like', "%{$query}%")->get();
        $healthCareLists = HealthCareList::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', "%{$query}%")
                         ->orWhere('department', 'like', "%{$query}%");
        })->get();
        $educationLists = EducationList::where('name', 'like', "%{$query}%")->get();
        $hospitalityLists = HospitalityList::where('name', 'like', "%{$query}%")->get();
        $news = News::where('title', 'like', "%{$query}%")->get();
        $jobs = JobList::where('job_name', 'like', "%{$query}%")->with('registeredUser')->get();

        $results = $propertyLists->merge($healthCareLists)
            ->merge($educationLists)
            ->merge($hospitalityLists)
            ->merge($news)
            ->merge($jobs);

        $resultsCount = $results->count();

        if ($results->isEmpty()) {
            return view('frontend.search-results', [
                'message' => 'No data found',
                'resultsCount' => 0
            ]);
        }

        return view('frontend.search-results', [
            'results' => $results,
            'resultsCount' => $resultsCount
        ]);
    }
}
