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
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        {{ $educationCategory?->mainCategory?->title_en }}
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
                    {{ $educationCategory->title_en }}
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of {{ $educationCategory->title_en }}
            </h1>
            @include('error')

                <form class="mt-8" action="{{ route('registeredUser.educationList.store', $educationCategory) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field label="{{ $educationCategory->title_en }} Name" id="name" name="name"
                                type="text" class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field label="Contact No" id="contact_number" name="contact_number"
                                type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                                @if ($educationCategory->type == 'campus')
                                <x-frontend.forms.input-type-field label="Affiliated" id="affiliated" type="text"
                                name="affiliated" class="text-sm font-semibold" />
                                @endif
                                <x-frontend.forms.input-type-field label="Email" id="email" type="text"
                                name="email" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field label="{{ $educationCategory->title_en }} Address" id="address" name="address"
                                type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component label="Description" id="editor" name="description"
                                class="text-sm font-semibold" />
                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.input-type-field label="Program" id="program" name="program"
                                type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.input-type-field label="Map Url" id="map_url" name="map_url" type="text"
                                class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                            <x-frontend.forms.input-type-field label="Website Url" id="website_url" name="website_url" type="text"
                                class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.input-type-field label="Facebook Url" id="facebook_url" name="facebook_url"
                                type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Whats App" id="whats_app_no" name="whats_app_no"
                                type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.file-component label="{{ $educationCategory->title_en }} Image " id="files"
                                name="files[]" type="file" class="text-sm font-semibold" multiple="multiple"
                                {{-- placeholder="Per Month" --}} />
                        </div>
                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
        </div>
    </div>
    @include('frontend.layout.footer')
@endsection
{{-- </x-guest-layout> --}}
