{{-- <x-guest-layout> --}}
    @extends('registeredUser.Ad.ad')

    @section('main-container')
    <div class="bg-neutral-800 ">
        <div class="sm:pl-20 sm:pr-30 pb-5 ">
            <button class="text-white mt-8 text-xl font-bold">
                <a href="{{ route('registeredUser.educationList.index') }}"><i class="ti ti-arrow-left"></i>Back</a>
            </button>
            <p class="text-white mt-3 text-lg">Fill out the details below. The more information you fill out the greater
                visibility your
                ad will receive.</p>
        </div>
    </div>
        <div class="sm:pl-20 sm:pr-30 ">
            <div class="mx-5  mt-14">
                <ol class="flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="#">
                            Home
                        </a>
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="#">
                            {{ $educationList->educationCategory->mainCategory?->title_en }}
                            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                        aria-current="page">
                        {{ $educationList->educationCategory?->title_en }}
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                        aria-current="page">
                        Testimonial
                    </li>
                </ol>
            </div>
            <div class="mt-6 mx-5 mb-10">
                <h1 class="font-bold text-xl text-purple-950">Add the complete detail of
            your best student
                </h1>
                @include('error')

                <form class="mt-8" action="{{ route('registeredUser.educationList.testimonials.update', [$educationList,$testimonial]) }}"
                    method="POST" enctype="multipart/form-data">

                   @method('PUT')
                   @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field :value="old('name', $testimonial->name)" label="Student Name" id="name" name="name" type="text"
                                class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field :value="old('post', $testimonial->post)" label="Post" id="post" name="post" type="text"
                                class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                        </div>
                        <div class="col-span-2">
                            <x-frontend.forms.input-type-field :value="old('passed_year', $testimonial->passed_year)" label="Passed Year" id="passed_year" type="text"
                                name="passed_year" class="text-sm font-semibold" />
                                <x-frontend.remove-button :value="$testimonial->image" />

                            <x-frontend.forms.file-component label="Image " id="image" name="image" type="file"
                                class="text-sm font-semibold" />
                        </div>
                    </div>
                    <x-frontend.forms.text-area-component :value="old('description', $testimonial->description)" label="Description" id="editor" name="description"
                        class="text-sm font-semibold" />

                    <div class="col-span-4 flex justify-center mt-8">
                        <button type="submit"
                            class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                    </div>

                </form>
            </div>


        </div>
        @include('frontend.layout.footer')
    @endsection
    {{-- </x-guest-layout> --}}
