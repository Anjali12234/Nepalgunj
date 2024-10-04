<?php

namespace App\Http\Controllers;

use App\Models\EducationCategory;
use App\Models\EducationList;
use App\Models\HealthCareCategory;
use App\Models\HealthCareList;
use App\Models\MainCategory;
use App\Models\Menu;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\PropertyCategory;
use App\Models\PropertyList;
use App\Models\RegisteredUser;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    public function index()
    {
        $newsLists = News::with('newsCategory')->latest()->get();
        $newsCategories = NewsCategory::with('newsLists')->latest()->get();
        return view('frontend.index', compact('newsLists', 'newsCategories'));
    }

    public function postAd()
    {

        $registeredUser = auth('registered-user')->user();
        if (auth('registered-user')->check()) {
            if ($registeredUser->is_active == 1) {
                return view('registeredUser.Ad.postAd', compact('registeredUser'));
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
        $propertyRegisteredUserId = $propertyList->registeredUser->id;

        $relatedProperties = PropertyList::where('property_category_id', $propertyCategoryId,)
            ->where('id', '!=', $propertyList->id)
            ->get();
        $relatedPropertiesList = PropertyList::where('registered_user_id', $propertyRegisteredUserId)
            ->where('id', '!=', $propertyList->id)->get();

        return view('frontend.property.propertyDetail', compact('propertyList', 'relatedProperties', 'relatedPropertiesList'));
    }

    public function registeredUser(RegisteredUser $registeredUser)
    {
        return "Hello " . $registeredUser->name;
    }

    public function newsDetail(News $newsList)
    {
        $newsCategoryId = $newsList->newsCategory->id;

        $relatedNews = News::where('news_category_id', $newsCategoryId,)
            ->where('id', '!=', $newsList->id)
            ->get();
        return view('frontend.news.detail', compact('newsList', 'relatedNews'));
    }

    public function healthcareIndex()
    {
        $healthCares = HealthCareCategory::with('healthCareLists')->get();
        return view('frontend.healthcare.index', compact('healthCares'));
    }

    public function listPage(HealthCareCategory $healthCare)
    {
        $healthCare->load('healthCareLists');
        return view('frontend.healthcare.listPage', compact('healthCare'));
    }

    public function detailPage(HealthCareList $healthCareList)
    {
        return view('frontend.healthcare.detailpage', compact('healthCareList'));
    }


    public function educationIndexPage()
    {
        $educationCategories = EducationCategory::with('educationLists')->get();

        return view('frontend.education.index', compact('educationCategories'));
    }

    public function educationDetailPage(EducationList $educationList)
    {
        $educationList->load('testimonials');
        return view('frontend.education.detailPage', compact('educationList'));
    }

    public function educationlistPage(EducationCategory $educationCategory)
    {
        $educationCategory->load('educationLists');
        return view('frontend.education.listPage', compact('educationCategory'));
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
