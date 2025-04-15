{{-- <x-guest-layout> --}}
@extends('registeredUser.Ad.ad')
@section('title', Auth::guard('registered-user')->user()->username . ' | Edit a Education Ad')

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
                        {{ $educationList->educationCategory->mainCategory->title_en }}

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
                    {{ $educationList->educationCategory->title_en }}

                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of {{ $educationList->educationCategory->title_en }}</h1>
            @include('error')
                <form class="mt-8" action="{{ route('registeredUser.educationList.update', $educationList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">

                            <x-frontend.forms.input-type-field :value="old('name', $educationList->name)" labelClass="w-36" label="{{ $educationList->educationCategory->title_en }} Name" id="name" name="name"
                                type="text" class="text-sm font-semibold" />


                            <x-frontend.forms.input-type-field :value="old('contact_number', $educationList->contact_number)" labelClass="w-36" label="Contact No" id="contact_number" name="contact_number"
                                type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                                @if ($educationList->educationCategory->type == 'campus')
                                <x-frontend.forms.input-type-field :value="old('affiliated', $educationList->affiliated)" labelClass="w-36" label="Affiliated" id="affiliated" type="text"
                                name="affiliated" class="text-sm font-semibold" />
                                @endif
                                <x-frontend.forms.input-type-field :value="old('email', $educationList->email)" labelClass="w-36" label="Email" id="email" type="text"
                                name="email" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('address', $educationList->address)" labelClass="w-36" label="{{ $educationList->educationCategory->title_en }} Address" id="address" name="address"
                                type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                            <x-frontend.forms.input-type-field :value="old('program', $educationList->program)" labelClass="w-36" label="Program" id="program" name="program"
                                                               type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component :value="old('map_url', $educationList->map_url)" label="Map Url" id="map_url"
                                                                  name="map_url" labelClass="w-36"
                                                                  class="text-sm font-semibold"/>

                        </div>
                        <div class="col-span-2">


                                <x-frontend.forms.input-type-field :value="old('tiktok_url', $educationList->tiktok_url)" labelClass="w-36" label="TikTok Url" id="tiktok_url" name="tiktok_url"
                                type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('youtube_url', $educationList->youtube_url)" labelClass="w-36" label="Youtube Url" spanClass="text-white" id="youtube_url" name="youtube_url"
                                type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('facebook_url', $educationList->facebook_url)" labelClass="w-36" label="Facebook Url" id="facebook_url" name="facebook_url"
                                type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('website_url', $educationList->website_url)" labelClass="w-36" label="Website Url" spanClass="text-white" id="website_url" name="website_url"
                                type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('whats_app_no', $educationList->whats_app_no)" labelClass="w-36" label="Whats App" id="whats_app_no" name="whats_app_no"
                                type="number" class="text-sm font-semibold" />
                                <x-frontend.remove-button :value="$educationList?->thumbnail" />
                            <x-frontend.forms.file-component : label="{{ $educationList->educationCategory->title_en }} Thumbnail " id="thumbnail"
                                name="thumbnail" type="file" class="text-sm font-semibold" 
                                 />
                            <x-frontend.forms.file-component : label="{{ $educationList->educationCategory->title_en }} Image " id="files"
                                name="files[]" type="file" class="text-sm font-semibold" multiple="multiple"
                                 />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component :value="old('description', $educationList->description)" labelClass="w-36" label="Description" id="editor" name="description"
                                                                  class="text-sm font-semibold" />
                        </div>
                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>

        </div>
        <div class="grid grid-cols-4 gap-2 ...">
            @foreach ($educationList->files as $file)
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
