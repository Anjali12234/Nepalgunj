@extends('registeredUser.layout.master')
@section('content')
    <div class="content px-5  md:px-7 col-span-3 min-h-screen">
        <h1 class="font-semibold text-2xl">Profile Setting</h1>
{{--        <h1 class="font-semibold text-2xl mt-5">General </h1>--}}
{{--        <a href="{{ route('registeredUser.payment.index') }}">payment</a>--}}
{{--        @if (session('status'))--}}
{{--            <div class="mt-2 flex items-center justify-between p-1 leading-normal text-red-600 bg-red-100 rounded-lg"--}}
{{--                role="alert">--}}
{{--                <p>{{ session('status') }}</p>--}}
{{--                <svg onclick="return this.parentNode.remove();"--}}
{{--                    class="inline w-4 h-4 fill-current ml-2 hover:opacity-80 cursor-pointer"--}}
{{--                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                    <path--}}
{{--                        d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z" />--}}
{{--                </svg>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @include('error')--}}
{{--        <form class="ml-0 md:ml-4 md:mx-0 font-[sans-serif] my-3 mt-3" action="{{ route('registeredUser.profile.store') }}"--}}
{{--            method="POST" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <x-frontend.forms.input-type-field :value="old('username', $registeredUser?->username)" label="Username" id="username" name="username"--}}
{{--                labelClass="w-60" type="text" />--}}
{{--            <x-frontend.forms.input-type-field :value="old('full_name', $registeredUser?->registeredUserDetail?->full_name)" label="Full Name" id="full_name" name="full_name"--}}
{{--                labelClass="w-60" type="text" />--}}

{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->email" label="Email Address" id="email" name="email"--}}
{{--                labelClass="w-60" type="email" />--}}
{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->phone_no" label="Phone No" id="phone_no" name="phone_no"--}}
{{--                labelClass="w-60" type="text" />--}}
{{--            <x-frontend.forms.select-type-field :value="$registeredUser?->gender" label="Gender" id="gender" name="gender"--}}
{{--                :options="['male' => 'Male', 'female' => 'Female', 'other' => 'Other']" labelClass="w-60" />--}}
{{--            <x-frontend.forms.multiple-select-component :value="old('category', $registeredUser ?? [])" label="Choose Your Ad Category" id="category"--}}
{{--                labelClass="w-60" name="category[]" :options="$categories" />--}}

{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->d_o_b" label="Date of Birth" id="d_o_b" name="d_o_b"--}}
{{--                labelClass="w-60" type="date" />--}}
{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->address" label="Address" id="address" name="address"--}}
{{--                labelClass="w-60" type="text" />--}}
{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->ward_no" label="Ward No" id="ward_no" name="ward_no"--}}
{{--                labelClass="w-60" type="number" />--}}
{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->whats_app_number" label="Whats App Number" id="whats_app_number"--}}
{{--                labelClass="w-60" name="whats_app_number" type="number" />--}}
{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->map_url" label="Map Url" id="map_url" name="map_url"--}}
{{--                labelClass="w-60" type="text" />--}}

{{--            <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->avatar" />--}}

{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->avatar" label="Image" id="avatar" name="avatar"--}}
{{--                labelClass="w-60" type="file" />--}}

{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_no" label="Citizenship No" id="citizenship_no"--}}
{{--                labelClass="w-60" name="citizenship_no" type="text" />--}}
{{--            <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->citizenship_image_front" />--}}

{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_image_front" label="Citizenship Image Front" labelClass="w-60"--}}
{{--                id="citizenship_image_front" name="citizenship_image_front" type="file" />--}}
{{--            <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->citizenship_image_back" />--}}

{{--            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_image_back" label="Citizenship Image Back" id="citizenship_image_back"--}}
{{--                name="citizenship_image_back" type="file" labelClass="w-60" />--}}

{{--            <button type="button submit"--}}
{{--                class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-xs text-white mx-auto block">Submit</button>--}}
{{--        </form>--}}

        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="tabs-with-icons-item-1" aria-selected="true" data-hs-tab="#tabs-with-icons-1" aria-controls="tabs-with-icons-1" role="tab">

                Personal
                </button>
                <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="tabs-with-icons-item-2" aria-selected="false" data-hs-tab="#tabs-with-icons-2" aria-controls="tabs-with-icons-2" role="tab">

                  Organization
                </button>

            </nav>
        </div>

        <div class="mt-3">
            <div id="tabs-with-icons-1" role="tabpanel" aria-labelledby="tabs-with-icons-item-1">
                @include('error')
                        <form class="ml-0 md:ml-4 md:mx-0 font-[sans-serif] my-3 mt-3" action="{{ route('registeredUser.profile.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-frontend.forms.input-type-field :value="old('username', $registeredUser?->username)" label="Username" id="username" name="username"
                                labelClass="w-60" type="text" />
                            <x-frontend.forms.input-type-field :value="old('full_name', $registeredUser?->registeredUserDetail?->full_name)" label="Full Name" id="full_name" name="full_name"
                                labelClass="w-60" type="text" />

                            <x-frontend.forms.input-type-field :value="$registeredUser?->email" label="Email Address" id="email" name="email"
                                labelClass="w-60" type="email" />
                            <x-frontend.forms.input-type-field :value="$registeredUser?->phone_no" label="Phone No" id="phone_no" name="phone_no"
                                labelClass="w-60" type="text" />
                            <x-frontend.forms.select-type-field :value="$registeredUser?->gender" label="Gender" id="gender" name="gender"
                                :options="['male' => 'Male', 'female' => 'Female', 'other' => 'Other']" labelClass="w-60" />
                            <x-frontend.forms.multiple-select-component :value="old('category', $registeredUser ?? [])" label="Choose Your Ad Category" id="category"
                                labelClass="w-60" name="category[]" :options="$categories" />

                            <x-frontend.forms.input-type-field :value="$registeredUser?->d_o_b" label="Date of Birth" id="d_o_b" name="d_o_b"
                                labelClass="w-60" type="date" />
                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->address" label="Address" id="address" name="address"
                                labelClass="w-60" type="text" />
                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->ward_no" label="Ward No" id="ward_no" name="ward_no"
                                labelClass="w-60" type="number" />
                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->whats_app_number" label="Whats App Number" id="whats_app_number"
                                labelClass="w-60" name="whats_app_number" type="number" />
                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->map_url" label="Map Url" id="map_url" name="map_url"
                                labelClass="w-60" type="text" />

                            <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->avatar" />

                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->avatar" label="Image" id="avatar" name="avatar"
                                labelClass="w-60" type="file" />

                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_no" label="Citizenship No" id="citizenship_no"
                                labelClass="w-60" name="citizenship_no" type="text" />
                            <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->citizenship_image_front" />

                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_image_front" label="Citizenship Image Front" labelClass="w-60"
                                id="citizenship_image_front" name="citizenship_image_front" type="file" />
                            <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->citizenship_image_back" />

                            <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_image_back" label="Citizenship Image Back" id="citizenship_image_back"
                                name="citizenship_image_back" type="file" labelClass="w-60" />

                            <button type="button submit"
                                class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-xs text-white mx-auto block">Submit</button>
                        </form>
            </div>
            <div id="tabs-with-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-2">
                <p class="text-gray-500 dark:text-neutral-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">second</em> item's tab body.
                </p>
            </div>
            <div id="tabs-with-icons-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-3">
                <p class="text-gray-500 dark:text-neutral-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">third</em> item's tab body.
                </p>
            </div>
        </div>
    </div>
@endsection
