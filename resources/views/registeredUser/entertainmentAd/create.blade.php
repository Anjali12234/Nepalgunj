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
                        {{ $entertainmentCategory?->mainCategory?->title_en }}
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
                    {{ $entertainmentCategory->title }}
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of {{ $entertainmentCategory->title }}
            </h1>
            @include('error')

            <form class="mt-8" action="{{ route('registeredUser.entertainmentList.store', $entertainmentCategory) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block md:grid grid-cols-4 pr-16">
                    <div class="col-span-2 mr-6">

                        <x-frontend.forms.input-type-field :value="old('name')"
                            label="{{ $entertainmentCategory->title }} Name" id="name" name="name" labelClass="w-36"
                            type="text" class="text-sm font-semibold" />


                        <x-frontend.forms.input-type-field :value="old('contact_number')" label="Contact No" id="contact_number"
                            name="contact_number" labelClass="w-36" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.input-type-field :value="old('email')" label="Email" id="email" type="text"
                            labelClass="w-36" name="email" class="text-sm font-semibold" />

                        <x-frontend.forms.input-type-field :value="old('address')"
                            label="{{ $entertainmentCategory->title }} Address" labelClass="w-36" id="address"
                            name="address" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />


                        <x-frontend.forms.text-area-component :value="old('map_url')" label="Map Url" id="map_url"
                            name="map_url" labelClass="w-36" class="text-sm font-semibold" />
                    </div>
                    <div class="col-span-2">
                        <x-frontend.forms.input-type-field :value="old('website_url')" label="Website Url" id="website_url"
                            name="website_url" type="text" labelClass="w-36" spanClass="text-white"
                            class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.input-type-field :value="old('facebook_url')" label="Facebook Url" id="facebook_url"
                            name="facebook_url" labelClass="w-36" type="text" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('tiktok_url')" label="TikTok Url" id="tiktok_url"
                            name="tiktok_url" labelClass="w-36" type="text" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('youtube_url')" label="Youtube Url" id="youtube_url"
                            name="youtube_url" labelClass="w-36" spanClass="text-white" type="text"
                            class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('whats_app_no')" label="Whats App" id="whats_app_no"
                            name="whats_app_no" labelClass="w-36" type="number" class="text-sm font-semibold" />

                        <x-frontend.forms.file-component label="{{ $entertainmentCategory->title }} Image " id="files"
                            name="files[]" type="file" class="text-sm font-semibold" multiple="multiple" />
                        <x-frontend.forms.file-component label="{{ $entertainmentCategory->title }} Thumbnail "
                            id="thumbnail" name="thumbnail" type="file" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />
                    </div>
                    <div class="col-span-4">
                        <x-frontend.forms.text-area-component :value="old('description')" label="Description" id="editor"
                            name="description" labelClass="w-36" class="text-sm font-semibold" />
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
