<?php

namespace App\Http\Controllers\RegisteredUser;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonial\StoreTestimonialRequest;
use App\Http\Requests\Testimonial\UpdateTestimonialRequest;
use App\Models\EducationList;
use App\Models\MainCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends BaseController
{
    public function create(EducationList $educationList)
    {
        $testimonials = Testimonial::all();
        return view('registeredUser.educationAd.testimonial.create',compact('educationList','testimonials'));
    }

    public function store(StoreTestimonialRequest $request, EducationList $educationList)
    {
       Testimonial::create(
            $request->validated() + [
                'education_list_id' => $educationList->id,
            ]
        );

        alert("form submitted");
        return back();
    }

    public function edit(EducationList $educationList, Testimonial $testimonial)
    {
        return view('registeredUser.educationAd.testimonial.edit',compact('educationList','testimonial'));
    }

    public function update(UpdateTestimonialRequest $request,EducationList $educationList, Testimonial $testimonial)
    {
        if ($request->hasFile('image') && $testimonial->image) {
            $this->deleteFile($testimonial->image);
        }
        $testimonial->update($request->validated());
        alert("form updated");

        return back();
    }
    public function destroy(EducationList $educationList, Testimonial $testimonial)
    {
            $this->deleteFile($testimonial->image);
        $testimonial->delete();
        return back();
    }

}
