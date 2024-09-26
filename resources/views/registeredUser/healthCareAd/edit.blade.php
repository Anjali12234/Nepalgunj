{{-- <x-guest-layout> --}}
@extends('registeredUser.Ad.ad')

@section('main-container')
    <div class="bg-neutral-800 ">
        <div class="sm:pl-20 sm:pr-30 pb-5 ">
            <button class="text-white mt-8 text-xl font-bold">
                <a href="{{ route('registeredUser.healthCareList.index') }}"><i class="ti ti-arrow-left"></i>Back</a>
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
                        {{ $healthCareList->healthCareCategory->mainCategory->title_en }}

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
                    {{ $healthCareList->healthCareCategory->title_en }}

                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of {{ $healthCareList->healthCareCategory->title_en }}</h1>
            @include('error')
            @if ($healthCareList->healthCareCategory->type == 'hospital')
                <form class="mt-8" action="{{ route('registeredUser.healthCareList.update', $healthCareList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field :value="old('name', $healthCareList->name)" label="Hospital Name" id="name"
                                name="name" type="text" class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field :value="old('contact_number', $healthCareList->contact_number)" label="Contact No" id="contact_number"
                                name="contact_number" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('o_p_d_schedule', $healthCareList->o_p_d_schedule)" label="OPD Schedules"
                                id="o_p_d_schedule" name="o_p_d_schedule" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('address', $healthCareList->address)" label="Hospital Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('details', $healthCareList->details)" label="Details" id="editor"
                                name="details" class="text-sm font-semibold" />
                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.input-type-field :value="old('youtube_link', $healthCareList->youtube_link)" label="YouTub Link" id="youtube_link"
                                name="youtube_link" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.input-type-field :value="old('map_url', $healthCareList->map_url)" label="Map Url" id="map_url"
                                name="map_url" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                            <x-frontend.forms.input-type-field :value="old('twitter_url', $healthCareList->twitter_url)" label="Twitter Url" id="twitter_url"
                                name="twitter_url" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />


                            <x-frontend.forms.input-type-field :value="old('facebook_url', $healthCareList->facebook_url)" label="Facebook Url" id="facebook_url"
                                name="facebook_url" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('whats_app_no', $healthCareList->whats_app_no)" label="Whats App" id="whats_app_no"
                                name="whats_app_no" type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.file-component label="Hospital Image Of All Side" id="files"
                                name="files[]" type="file" class="text-sm font-semibold" multiple="multiple"
                                {{-- placeholder="Per Month" --}} />
                        </div>
                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @elseif ($healthCareList->healthCareCategory->type == 'doctor')
                <form class="mt-8" action="{{ route('registeredUser.healthCareList.update', $healthCareList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field :value="old('name', $healthCareList->name)" label="Doctor Name" id="name"
                                name="name" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('department', $healthCareList->department)" label="Department" id="department" name="department"
                                type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('contact_number', $healthCareList->contact_number)" label="Contact No" id="contact_number"
                                name="contact_number" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('n_m_c_no', $healthCareList->n_m_c_no)" label="NMC No" id="n_m_c_no" name="n_m_c_no"
                                type="number" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('qualification', $healthCareList->qualification)" label="Qualification" id="qualification"
                                name="qualification" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('o_p_d_schedule', $healthCareList->o_p_d_schedule)" label="OPD Schedule" id="o_p_d_schedule"
                                name="o_p_d_schedule" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('address', $healthCareList->address)" label="Clinic Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" />

                            <x-frontend.forms.text-area-component :value="old('details', $healthCareList->details)" label="Details" id="editor"
                                name="details" class="text-sm font-semibold" />
                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.input-type-field :value="old('youtube_link', $healthCareList->youtube_link)" label="YouTub Link" id="youtube_link"
                                name="youtube_link" type="text" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('map_url', $healthCareList->map_url)" label="Map Url" id="map_url"
                                name="map_url" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('twitter_url', $healthCareList->twitter_url)" label="Twitter Url" id="twitter_url"
                                name="twitter_url" type="text" class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field :value="old('facebook_url', $healthCareList->facebook_url)" label="Facebook Url" id="facebook_url"
                                name="facebook_url" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('whats_app_no', $healthCareList->whats_app_no)" label="Whats App" id="whats_app_no"
                                name="whats_app_no" type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.file-component label="Image Of Doctor" id="files" name="files[]"
                                type="file" class="text-sm font-semibold" multiple="multiple" {{-- placeholder="Per Month" --}} />
                        </div>
                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @elseif ($healthCareList->healthCareCategory->type == 'medical')
                <form class="mt-8" action="{{ route('registeredUser.healthCareList.update', $healthCareList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field :value="old('name', $healthCareList->name)" label="Medical Name" id="name"
                                name="name" type="text" class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field :value="old('contact_number', $healthCareList->contact_number)" label="Contact No" id="contact_number"
                                name="contact_number" type="text" class="text-sm font-semibold"
                                {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('o_p_d_schedule', $healthCareList->o_p_d_schedule)" label="Opening Time"
                                id="o_p_d_schedule" name="o_p_d_schedule" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('address', $healthCareList->address)" label="Medical Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('details', $healthCareList->details)" label="Details" id="editor"
                                name="details" class="text-sm font-semibold" />
                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.input-type-field :value="old('youtube_link', $healthCareList->youtube_link)" label="YouTub Link" id="youtube_link"
                                name="youtube_link" type="text" class="text-sm font-semibold"
                                {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.input-type-field :value="old('map_url', $healthCareList->map_url)" label="Map Url" id="map_url"
                                name="map_url" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                            <x-frontend.forms.input-type-field :value="old('twitter_url', $healthCareList->twitter_url)" label="Twitter Url" id="twitter_url"
                                name="twitter_url" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />


                            <x-frontend.forms.input-type-field :value="old('facebook_url', $healthCareList->facebook_url)" label="Facebook Url" id="facebook_url"
                                name="facebook_url" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('whats_app_no', $healthCareList->whats_app_no)" label="Whats App" id="whats_app_no"
                                name="whats_app_no" type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.file-component label="Medical Image Of All Side" id="files"
                                name="files[]" type="file" class="text-sm font-semibold" multiple="multiple"
                                {{-- placeholder="Per Month" --}} />
                        </div>
                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @elseif ($healthCareList->healthCareCategory->type == 'pharmacy')
                <form class="mt-8" action="{{ route('registeredUser.healthCareList.update', $healthCareList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field :value="old('name', $healthCareList->name)" label="Pharmacy Name" id="name"
                                name="name" type="text" class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field :value="old('contact_number', $healthCareList->contact_number)" label="Contact No" id="contact_number"
                                name="contact_number" type="text" class="text-sm font-semibold"
                                {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('o_p_d_schedule', $healthCareList->o_p_d_schedule)" label="Opening Time"
                                id="o_p_d_schedule" name="o_p_d_schedule" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('address', $healthCareList->address)" label="Pharmacy Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('details', $healthCareList->details)" label="Details" id="editor"
                                name="details" class="text-sm font-semibold" />
                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.input-type-field :value="old('youtube_link', $healthCareList->youtube_link)" label="YouTub Link" id="youtube_link"
                                name="youtube_link" type="text" class="text-sm font-semibold"
                                {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.input-type-field :value="old('map_url', $healthCareList->map_url)" label="Map Url" id="map_url"
                                name="map_url" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                            <x-frontend.forms.input-type-field :value="old('twitter_url', $healthCareList->twitter_url)" label="Twitter Url" id="twitter_url"
                                name="twitter_url" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />


                            <x-frontend.forms.input-type-field :value="old('facebook_url', $healthCareList->facebook_url)" label="Facebook Url" id="facebook_url"
                                name="facebook_url" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('whats_app_no', $healthCareList->whats_app_no)" label="Whats App" id="whats_app_no"
                                name="whats_app_no" type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.file-component label="Pharmacy Image Of All Side" id="files"
                                name="files[]" type="file" class="text-sm font-semibold" multiple="multiple"
                                {{-- placeholder="Per Month" --}} />
                        </div>
                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @endif
        </div>
        <div class="grid grid-cols-4 gap-2 ...">
            @foreach ($healthCareList->files as $file)
                <div class="flex p-9">
                    <img src="{{ $file->file_url }}" height="200" width="200" alt="">
                    <form action="{{ route('file.destroy', $file) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete?')">
                            <i class="ti ti-xbox-x text-4xl font-bold"></i>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>

    </div>
    @include('frontend.layout.footer')
@endsection
{{-- </x-guest-layout> --}}
