<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Menu;
use App\Models\News;
use App\Models\PropertyCategory;
use App\Models\PropertyList;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    public function index()
    {
        $newsLists = News::with('newsCategory')->latest()->get();
        return view('frontend.index', compact('newsLists'));
    }

    public function postAd()
    {
        if (auth('registered-user')->check()) {
            if (auth('registered-user')->user()->is_active == 1) {
                return view('registeredUser.Ad.postAd');
            } else {
                return view('authentication');
            }
        } else {
            return view('authentication');
        }
    }

    public function properties(Request $request, $propertyCategorySlug = null)
    {
        $newsLists = News::with('newsCategory')->latest()->get();
        $search = request('search');
        $isRent = $request->input('is_rent'); // Added for rent or sale filtering
        $propertyCategories = PropertyCategory::with('propertyLists')
            ->paginate(15);

        $properties = PropertyList::with('propertyCategory', 'registeredUser')
            ->when($search, function ($query, $search) {
                $query->where('reference_no', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%")
                    ->orWhere('rate', 'like', "%{$search}%");
            })
            ->where('status', 1);

        if (!empty($propertyCategorySlug)) {
            $propertyCategory = PropertyCategory::where('slug', $propertyCategorySlug)->first();

            if ($propertyCategory) {
                $properties = $properties->where('property_category_id', $propertyCategory->id);
            }
        }

        if ($isRent !== null) {
            $properties = $properties->where('is_rent', $isRent);
        }

        $properties = $properties->orderBy('position')->get();

        return view('frontend.property.properties', compact('properties', 'propertyCategories', 'search', 'newsLists'));
    }


    public function propertyDetails(PropertyList $propertyList)
    {
        $propertyCategoryId = $propertyList->propertyCategory->id;

    $relatedProperties = PropertyList::where('property_category_id', $propertyCategoryId)
        ->where('id', '!=', $propertyList->id)
        ->get();

        // Return the view with both the specific property and related properties
        return view('frontend.property.propertyDetail',compact('propertyList', 'relatedProperties'));
    }


    // public function staticMenus($slug)
    // {
    //     switch ($slug) {
    //         case 'properties':

    //             $search = request('search');

    //             $propertyCategories = PropertyCategory::with('propertyLists')->get();

    //             $properties = PropertyList::with('propertyCategory', 'registeredUser')
    //             ->when($search, function ($query, $search) {
    //                 $query->where('reference_no', 'like', "%{$search}%")
    //                     ->orWhere('title', 'like', "%{$search}%")
    //                     ->orWhere('rate', 'like', "%{$search}%");
    //             })
    //             ->where('status', 1)->paginate(15);

    //             return view('frontend.property.properties', compact('properties','propertyCategories','search'));
    //             break;
    //         case 'healthCare':
    //         return "hello";
    //             return view('frontend.healthcare.index');
    //             break;

    //         default:
    //             return response(view('errors.404'), 404);
    //     }
    // }


}
