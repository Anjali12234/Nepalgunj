<?php

namespace App\Http\Controllers;

use App\Models\HealthCareCategory;
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
        return view('frontend.index', compact('newsLists','newsCategories'));
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
    public function newsDetail(News $newsList )
    {
        $newsCategoryId = $newsList->newsCategory->id;

        $relatedNews = News::where('news_category_id', $newsCategoryId,)
            ->where('id', '!=', $newsList->id)
            ->get();
        return view('frontend.news.detail',compact('newsList','relatedNews'));
    }
    public function healthcareIndex()
    {
        $healthCares = HealthCareCategory::with('healthCareLists')->get();
        return view('frontend.healthcare.index',compact('healthCares'));
    }
    public function listPage()
    {
        return view('frontend.healthcare.listPage');
    }
    public function doctorDetailPage()
    {
        return view('frontend.healthcare.detailpage');
    }
    public function medicalListPage()
    {
        return view('frontend.healthcare.medicalList');
    }

    public function medicalDetailPage()
    {
        return view('frontend.healthcare.mdeicalDetail');
    }
    public function hospitalListPage()
    {
        return view('frontend.healthcare.hospitalListPage');
    }
    public function hospitalDetailPage()
    {
        return view('frontend.healthcare.hospitalDetailpage');
    }
    public function pharmacyListPage()
    {
        return view('frontend.healthcare.pharmacyList');
    }
    public function pharmacyDetailPage()
    {
        return view('frontend.healthcare.pharmacyDetail');
    }

    public function educationIndexPage()
    {
        return view('frontend.education.index');
    }
    public function campusListPage()
    {
        return view('frontend.education.campusList');
    }
    public function campusDetailPage()
    {
        return view('frontend.education.campusDetail');
    }
    public function collegeListPage()
    {
        return view('frontend.education.collegeList');
    }
    public function collegeDetailPage()
    {
        return view('frontend.education.collegeDetail');
    }
    public function schoolListPage()
    {
        return view('frontend.education.schoolList');
    }
    public function schoolDetailPage()
    {
        return view('frontend.education.schoolDetail');
    }
    public function consultancyListPage()
    {
        return view('frontend.education.consultancyList');
    }
    public function consultancyDetailPage()
    {
        return view('frontend.education.consultancyDetail');
    }
    public function instituteListPage()
    {
        return view('frontend.education.instituteList');
    }
    public function instituteDetailPage()
    {
        return view('frontend.education.instituteDetail');
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
