<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Menu;
use App\Models\News;
use App\Models\PropertyCategory;
use App\Models\PropertyList;

class FrontendController extends BaseController
{
    public function index()
    {
        $newsLists = News::with('newsCategory')->latest()->get();
        return view('frontend.index',compact('newsLists'));
    }

    public function postAd()
    {
        if (auth('registered-user')->check())
        {
        if (auth('registered-user')->user()->is_active == 1)
        {
            return view('registeredUser.Ad.postAd');

        }
        else{
            return view('authentication');
        }}
        else{
            return view('authentication');

        }
    }




    public function staticMenus($slug)
    {
        switch ($slug) {
            case 'properties':
                $search = request('search');

                $propertyCategories = PropertyCategory::with('propertyLists')->get();
dd($propertyCategories->first());
                $properties = PropertyList::with('propertyCategory', 'registeredUser')
                ->when($search, function ($query, $search) {
                    $query->where('reference_no', 'like', "%{$search}%")
                        ->orWhere('title', 'like', "%{$search}%")
                        ->orWhere('rate', 'like', "%{$search}%");
                })
                ->where('status', 1)->paginate(15);

                return view('frontend.property.properties', compact('properties','propertyCategories','search'));
                break;
            // case 'contactUs':
            //     return view('frontend.contact');
            //     break;
            // case 'photoGallery':
            //     $photoAlbums = PhotoGallery::with('photos')->latest()->get();
            //     return view('frontend.gallery.gallery', compact('photoAlbums'));
            //     break;

            // case 'videoGallery':
            //     $videoGalleries = VideoGallery::latest()->get();
            //     return view('frontend.gallery.video', compact('videoGalleries'));
            // case 'employees':
            //     $employees = Employee::with('designation', 'department')->orderBy('position')->get();
            //     return view('frontend.employee', compact('employees'));
            // case 'bill':
            //     $bills = Bill::orderByDesc('bill_date')->get();
            //     return view('frontend.bill', compact('bills'));
            // case 'subDivision':
            //     $subDivisions = SubDivision::get();
            //     return view('frontend.sub-division.index', compact('subDivisions'));
            // case 'faq':
            //     $faqs = Faq::latest()->get();
            //     return view('frontend.faq', compact('faqs'));
            // case 'links':
            //     $importantLinks = Link::latest()->get();
            //     return view('frontend.links', compact('importantLinks'));
            // case 'allExEmployee':
            //     $exEmployees = ExEmployee::orderBy('leaving_date', 'asc')->get();
            // case 'exEmployee':
            //     $exEmployees = ExEmployee::where('is_chief', 0)->orderBy('leaving_date', 'asc')->get();
            //     return view('frontend.allExEmployee', compact('exEmployees'));

            // case 'exChief':
            //     $exEmployees = ExEmployee::where('is_chief', 1)->orderBy('leaving_date', 'asc')->get();
            //     return view('frontend.allExEmployee', compact('exEmployees'));

            // case 'smuggling':
            //     $smugglings = Smuggling::whereNull('sub_division_id')->latest()->get();
            //     return view('frontend.smuggling.index', compact('smugglings'));
            default:
                return response(view('errors.404'), 404);
        }
    }


}
