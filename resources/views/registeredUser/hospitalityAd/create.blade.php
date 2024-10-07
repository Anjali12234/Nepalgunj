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
                        {{ $hospitalityCategory?->mainCategory?->title_en }}
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
                    {{ $hospitalityCategory->title_en }}
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of {{ $hospitalityCategory->title_en }}
            </h1>
            @include('error')
            <form class="mt-8" action="{{ route('registeredUser.hospitalityList.store', $hospitalityCategory) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block md:grid grid-cols-4 pr-16">
                    <div class="col-span-2 mr-6">
                        <x-frontend.forms.input-type-field :value="old('name')"
                            label="{{ $hospitalityCategory->title_en }} Name" id="name" name="name" spanClass="text-gray-400"
                            labelClass="w-36" type="text" class="text-sm font-semibold" />


                        <x-frontend.forms.input-type-field :value="old('contact_number')" label="Contact No" id="contact_number" spanClass="text-gray-400"
                            name="contact_number" labelClass="w-36" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                        @if ($hospitalityCategory->type == 'Star Hotels')
                            <x-frontend.forms.input-type-field :value="old('total_rooms')" label="Total Rooms" id="total_rooms"
                                type="number" labelClass="w-36" name="total_rooms" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('room_types')" label="Room Type" id="room_types"
                                type="text" labelClass="w-36" name="room_types" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('price_per_night')" label="Price per night"
                                id="price_per_night" type="text" labelClass="w-36" name="price_per_night"
                                class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('average_meal_price')" label="Average Meal Price"
                                id="average_meal_price" type="number" labelClass="w-36" name="average_meal_price"
                                class="text-sm font-semibold" />
                        @endif
                        @if ($hospitalityCategory->type == 'Hotels')
                            <x-frontend.forms.input-type-field :value="old('average_meal_price')" label="Average Meal Price"
                                id="average_meal_price" type="number" labelClass="w-36" name="average_meal_price"
                                class="text-sm font-semibold" />
                        @endif

                        @if ($hospitalityCategory->type != 'Star Hotels')
                            <x-frontend.forms.input-type-field :value="old('delivery_available')" label="Delivery Price"
                                id="delivery_available" type="text" labelClass="w-36" name="delivery_available"
                                class="text-sm font-semibold" placeholder="Write the delivery cost if free write free" />
                        @endif

                        <x-frontend.forms.input-type-field :value="old('menu')" label="Best Menu" id="menu" type="text" spanClass="text-gray-400"
                            labelClass="w-36" name="menu" class="text-sm font-semibold" />
                        <x-frontend.forms.select-type-field label="Parking" id="parking_available" name="parking_available" labelClass="w-36"
                            class="text-sm font-semibold" :options="['include' => 'Include', 'exclude' => 'Exclude']" />

                        <x-frontend.forms.input-type-field :value="old('email')" label="Email" id="email" type="text" spanClass="text-gray-400"
                            labelClass="w-36" name="email" class="text-sm font-semibold" />

                        <x-frontend.forms.input-type-field :value="old('address')"
                            label="{{ $hospitalityCategory->title_en }} Address" labelClass="w-36" id="address" spanClass="text-gray-400"
                            name="address" type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                        <x-frontend.forms.input-type-field :value="old('opening_time')" label=" Opening Time" labelClass="w-36" spanClass="text-gray-400"
                            id="opening_time" name="opening_time" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />


                    </div>
                    <div class="col-span-2">

                        <x-frontend.forms.input-type-field :value="old('facilities')" label="Facilities" id="facilities" spanClass="text-gray-400" 
                            name="facilities" labelClass="w-36" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.text-area-component :value="old('map_url')" label="Map Url" id="map_url" spanClass="text-gray-400"
                            name="map_url" labelClass="w-36" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('website_url')" label="Website Url" id="website_url" spanClass="text-gray-400"
                            name="website_url" type="text" labelClass="w-36" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.input-type-field :value="old('facebook_url')" label="Facebook Url" id="facebook_url" spanClass="text-gray-400"
                            name="facebook_url" labelClass="w-36" type="text" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('tiktok_url')" label="TikTok Url" id="tiktok_url" spanClass="text-gray-400"
                            name="tiktok_url" labelClass="w-36" type="text" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('youtube_link')" label="Youtube Url" id="youtube_link" spanClass="text-gray-400"
                            name="youtube_link" labelClass="w-36" type="text" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field :value="old('whats_app_no')" label="Whats App" id="whats_app_no" spanClass="text-gray-400"
                            name="whats_app_no" labelClass="w-36" type="number" class="text-sm font-semibold" />

                        <x-frontend.forms.file-component label="{{ $hospitalityCategory->title_en }} Image "
                            id="files" name="files[]" type="file" class="text-sm font-semibold"
                            multiple="multiple" {{-- placeholder="Per Month" --}} />
                    </div>
                    <div class="col-span-4 flex mt-8">
                        <x-frontend.forms.text-area-component :value="old('details')" label="Description" id="editor"
                            name="details" labelClass="w-36" class="text-sm font-semibold"
                            placeholder="Write Brief description about your {{ $hospitalityCategory->title_en }}" />
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
