<?php

namespace App\Http\Controllers;

use App\Models\EducationList;
use App\Models\HealthCareList;
use App\Models\HospitalityList;
use App\Models\News;
use App\Models\PropertyList;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search'); // Get search input

// Search across multiple categories (Property, HealthCare, Education, etc.)
        $propertyLists = PropertyList::where('title', 'like', "%{$query}%")->get();
        $healthCareLists = HealthCareList::where('name', 'like', "%{$query}%")->get();
        $educationLists = EducationList::where('name', 'like', "%{$query}%")->get();
        $hospitalityLists = HospitalityList::where('name', 'like', "%{$query}%")->get();
        $news = News::where('title', 'like', "%{$query}%")->get();

// Combine all results
        $results = $propertyLists->merge($healthCareLists)
            ->merge($educationLists)
            ->merge($hospitalityLists)
            ->merge($news);

// Get the total count of the results
        $resultsCount = $results->count();

// Check if there are any results
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
