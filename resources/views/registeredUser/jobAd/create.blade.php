{{-- <x-guest-layout> --}}
@extends('registeredUser.Ad.ad')

@section('main-container')
    <div class="sm:pl-20 sm:pr-30 ">
        <div class="mx-5  mt-14">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                       href="#">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                         xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                       href="#">
                        Job
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
                    {{ $jobCategory->title }}
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of {{ $jobCategory->title_en }}
            </h1>
            @include('error')
            <form class="mt-8" action="{{ route('registeredUser.jobList.store', $jobCategory) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="block md:grid grid-cols-4 pr-16">
                    <div class="col-span-2 mr-6">

                        <x-frontend.forms.select-type-field1
                            :value="old('job_type', $registeredUser->category ?? '')"
                            label="Choose Your Ad Category"
                            id="job_type"
                            labelClass="w-36"
                            name="job_type"
                            :options="is_array($registeredUser->category) ? array_combine($registeredUser->category, $registeredUser->category) : []"
                        />
                        <x-frontend.forms.input-type-field :value="old('job_name')" label="Job Title" id="job_name"
                                                           name="job_name" labelClass="w-36"
                                                           type="text"
                                                           class="text-sm font-semibold"/>

                     <x-frontend.forms.input-type-field :value="old('contact_number')" label="Contact No"
                                                           id="contact_number"
                                                           name="contact_number"
                                                           labelClass="w-36" type="text"                                                           class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.input-type-field :value="old('years_of_experience')"
                                                           label="Years of Experience"
                                                           id="years_of_experience" type="text"

                                                           name="years_of_experience" class="text-sm font-semibold"/>

                        <x-frontend.forms.input-type-field :value="old('gender')" label="Gender" id="gender" type="text"
                                                           labelClass="w-36" name="gender"
                                                           class="text-sm font-semibold"/>

                        <x-frontend.forms.input-type-field :value="old('salary_range')" label="Salary Range"
                                                           id="salary_range"
                                                           type="text" labelClass="w-36"
                                                           name="salary_range"
                                                           class="text-sm font-semibold"/>
                        <x-frontend.forms.input-type-field :value="old('desired_skills_experience')"
                                                           label="Desired Skills And Experience"
                                                           id="desired_skills_experience"
                                                           type="text" labelClass="w-36"
                                                           name="desired_skills_experience"
                                                           class="text-sm font-semibold"/>


                        <x-frontend.forms.input-type-field :value="old('address')" label=" Address"
                                                           labelClass="w-36" id="address"
                                                           name="address" type="text"
                                                           class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                    </div>
                    <div class="col-span-2">
                        <x-frontend.forms.text-area-component :value="old('map_url')" label="Map Url" id="map_url"
                                                              name="map_url" labelClass="w-36"
                                                              class="text-sm font-semibold"/>
                        <x-frontend.forms.input-type-field :value="old('website_url')" label="Website Url"
                                                           spanClass="text-white"
                                                           id="website_url"
                                                           name="website_url" type="text"
                                                           labelClass="w-36"
                                                           class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                        <x-frontend.forms.input-type-field :value="old('facebook_url')" label="Facebook Url"
                                                           id="facebook_url"
                                                           name="facebook_url" type="text"
                                                           labelClass="w-36"
                                                           class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />


                        <x-frontend.forms.input-type-field :value="old('whats_app_no')" label="Whats App"
                                                           id="whats_app_no"
                                                           name="whats_app_no"
                                                           labelClass="w-36" type="number"
                                                           class="text-sm font-semibold"/>
                        <x-frontend.forms.file-component label="Vacancy Image "
                                                         id="image" name="image" type="file" class="text-sm font-semibold"
                        />

                    </div>
                    <div class="col-span-4 flex mt-8">
                        <x-frontend.forms.text-area-component :value="old('details')" label="Description" id="editor"
                                                              name="details" labelClass="w-36"
                                                              class="text-sm font-semibold"
                                                              placeholder="Write Brief description about your "/>
                    </div>
                    <div class="col-span-4 flex justify-center mt-8">
                        <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @include('frontend.layout.footer')
@endsection
{{-- </x-guest-layout> --}}
