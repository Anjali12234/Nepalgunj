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
                        {{ $propertyCategory?->mainCategory?->title_en }}
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
                    {{ $propertyCategory->title_en }}
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of your property</h1>
            @include('error')
            @if ($propertyCategory->slug == 'land')
                <form class="mt-8" action="{{ route('registeredUser.propertyList.store', $propertyCategory) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">
                            <x-frontend.forms.select-type-field label="Is Rent" id="is_rent" name="is_rent" labelClass="w-36"
                                                                class="text-sm font-semibold" :options="['1' => 'For Rent', '0' => 'For Sale']" />

                            <x-frontend.forms.input-type-field label="Title" id="title" name="title" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Rate" id="rate" name="rate" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" placeholder="Per Month" />



                        </div>
                        <div class="col-span-2">


                            <x-frontend.forms.input-type-field label="Square Feet" id="area" name="area" labelClass="w-36"
                                                               type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Address" id="address" name="address" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field label="Deposit" id="deposit" name="deposit" type="number" labelClass="w-36"
                                                               class="text-sm font-semibold" />



                            <x-frontend.forms.file-component label="Land Image Of All Side" id="files" name="files[]"
                                                             type="file" class="text-sm font-semibold" multiple="multiple" />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component label="Description" id="editor" name="description" labelClass="w-36"
                                                                  class="text-sm font-semibold" />


                            <x-frontend.forms.text-area-component label="Map Url" id="map_url" name="map_url" labelClass="w-36"
                                                                  class="text-sm font-semibold" />
                        </div>


                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                    class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @elseif ($propertyCategory->slug == 'house' || $propertyCategory->slug == 'flat' || $propertyCategory->slug == 'room')
                <form class="mt-8" action="{{ route('registeredUser.propertyList.store', $propertyCategory) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">
                            <x-frontend.forms.select-type-field label="Is Rent" id="is_rent" name="is_rent" labelClass="w-36"
                                                                class="text-sm font-semibold" :options="['1' => 'For Rent', '0' => 'For Sale']" />

                            <x-frontend.forms.input-type-field label="Title" id="title" name="title" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Rate" id="rate" name="rate" labelClass="w-36"
                                                               type="text" class="text-sm font-semibold" placeholder="Per Month" />

                            <x-frontend.forms.input-type-field label="Bed Room" id="bed_room" name="bed_room" labelClass="w-36"
                                                               type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field label="Bath Room" id="bathroom" name="bathroom" labelClass="w-36"
                                                               type="number" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Address" id="address" name="address" labelClass="w-36"
                                                               type="text" class="text-sm font-semibold" />



                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.select-type-field label="Internet" id="internet" name="internet" labelClass="w-36"
                                                                class="text-sm font-semibold" :options="['include' => 'Include', 'exclude' => 'Exclude']" />

                            <x-frontend.forms.select-type-field label="Parking" id="parking" name="parking" labelClass="w-36"
                                                                class="text-sm font-semibold" :options="['include' => 'Include', 'exclude' => 'Exclude']" />


                            <x-frontend.forms.input-type-field label="Square Feet" id="area" name="area" labelClass="w-36"
                                                               type="text" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field label="Kitchen Type" id="kitchen_type" name="kitchen_type" labelClass="w-36"
                                                               type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Deposit" id="deposit" name="deposit" labelClass="w-36"
                                                               type="number" class="text-sm font-semibold" />



                            <x-frontend.forms.file-component label="House Image Of All Side" id="files"
                                                             name="files[]" type="file" class="text-sm font-semibold" multiple="multiple" />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component label="Description" id="editor" name="description" labelClass="w-36"
                                                                  class="text-sm font-semibold" />

                            <x-frontend.forms.text-area-component label="Map Url" id="map_url" name="map_url" labelClass="w-36"
                                                                  class="text-sm font-semibold" />

                        </div>


                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                    class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @elseif ($propertyCategory->slug == 'go-down')
                <form class="mt-8" action="{{ route('registeredUser.propertyList.store', $propertyCategory) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">
                            <x-frontend.forms.select-type-field label="Is Rent" id="is_rent" name="is_rent" labelClass="w-36"
                                                                class="text-sm font-semibold" :options="['1' => 'For Rent', '0' => 'For Sale']" />

                            <x-frontend.forms.input-type-field label="Title" id="title" name="title" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Rate" id="rate" name="rate" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" placeholder="Per Month" />

                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.input-type-field label="Square Feet" id="area" name="area" labelClass="w-36"
                                                               type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field label="Address" id="address" name="address" type="text" labelClass="w-36"
                                                               class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field label="Deposit" id="deposit" name="deposit" type="number" labelClass="w-36"
                                                               class="text-sm font-semibold" />



                            <x-frontend.forms.file-component label="Godown Image Of All Side" id="files" name="files[]" labelClass="w-36"
                                                             type="file" class="text-sm font-semibold" multiple="multiple" />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component label="Description" id="editor" name="description" labelClass="w-36"
                                                                  class="text-sm font-semibold" />


                            <x-frontend.forms.text-area-component label="Map Url" id="map_url" name="map_url" labelClass="w-36"
                                                                  class="text-sm font-semibold" />
                        </div>


                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                    class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                        </div>
                    </div>

                </form>
            @endif
        </div>
    </div>
    @include('frontend.layout.footer')
@endsection
{{-- </x-guest-layout> --}}
