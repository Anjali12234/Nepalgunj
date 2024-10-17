{{-- <x-guest-layout> --}}
@extends('registeredUser.Ad.ad')

@section('main-container')
    <div class="bg-neutral-800 ">
        <div class="sm:pl-20 sm:pr-30 pb-5 ">
            <button class="text-white mt-8 text-xl font-bold">
                <a href="{{ route('registeredUser.propertyList.index') }}"><i class="ti ti-arrow-left"></i>Back</a>
            </button>
            <p class="text-white mt-3 text-lg">Fill out the details below. The more information you fill out the greater visibility your
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
                        {{ $propertyList->propertyCategory->mainCategory->title_en }}

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
                    {{ $propertyList->propertyCategory->title_en }}

                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of your property</h1>
            @include('error')
            @if ($propertyList->propertyCategory->slug == 'land')
                <form class="mt-8" action="{{ route('registeredUser.propertyList.update', $propertyList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">
                            <x-frontend.forms.select-type-field :value="$propertyList?->is_rent" label="Is Rent" id="is_rent"
                                name="is_rent" class="text-sm font-semibold" :options="['1' => 'For Rent', '0' => 'For Sale']" />

                            <x-frontend.forms.input-type-field :value="old('title', $propertyList->title)" label="Title" id="title"
                                name="title" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('rate', $propertyList->rate)" label="Rate" id="rate"
                                name="rate" type="text" class="text-sm font-semibold" placeholder="Per Month" />



                        </div>
                        <div class="col-span-2">


                            <x-frontend.forms.input-type-field :value="old('area', $propertyList->area)" label="Square Feet" id="area"
                                name="area" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('address', $propertyList->address)" label="Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('deposit', $propertyList->deposit)" label="Deposit" id="deposit"
                                name="deposit" type="number" class="text-sm font-semibold" />



                            <x-frontend.forms.file-component label="Land Image Of All Side" id="files" name="files[]"
                                type="file" class="text-sm font-semibold" multiple="multiple" />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component :value="old('description', $propertyList->description)" label="Description" id="editor"
                                name="description" class="text-sm font-semibold" />


                            <x-frontend.forms.text-area-component :value="old('map_url', $propertyList->map_url)" label="Map Url" id="map_url"
                                name="map_url" class="text-sm font-semibold" />
                        </div>


                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Update</button>
                        </div>
                    </div>

                </form>
            @elseif (
                $propertyList->propertyCategory->slug == 'house' ||
                   $propertyList->propertyCategory->slug == 'flat' ||
                   $propertyList->propertyCategory->slug == 'room')
                <form class="mt-8" action="{{ route('registeredUser.propertyList.update', $propertyList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">
                            <x-frontend.forms.select-type-field :value="$propertyList?->is_rent" label="Is Rent" id="is_rent"
                                name="is_rent" class="text-sm font-semibold" :options="['1' => 'For Rent', '0' => 'For Sale']" />

                            <x-frontend.forms.input-type-field :value="old('title', $propertyList->title)" label="Title" id="title"
                                name="title" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('rate', $propertyList->rate)" label="Rate" id="rate"
                                name="rate" type="text" class="text-sm font-semibold" placeholder="Per Month" />

                            <x-frontend.forms.input-type-field :value="old('bed_room', $propertyList->bed_room)" label="Bed Room" id="bed_room"
                                name="bed_room" type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('bathroom', $propertyList->bathroom)" label="Bath Room" id="bathroom"
                                name="bathroom" type="number" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('address', $propertyList->address)" label="Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" />



                        </div>
                        <div class="col-span-2">

                            <x-frontend.forms.select-type-field :value="$propertyList?->internet" label="Internet" id="internet"
                                name="internet" class="text-sm font-semibold" :options="['include' => 'Include', 'exclude' => 'Exclude']" />

                            <x-frontend.forms.select-type-field :value="$propertyList?->parking" label="Parking" id="parking"
                                name="parking" class="text-sm font-semibold" :options="['include' => 'Include', 'exclude' => 'Exclude']" />


                            <x-frontend.forms.input-type-field :value="old('area', $propertyList->area)" label="Square Feet" id="area"
                                name="area" type="text" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('kitchen_type', $propertyList->kitchen_type)" label="Kitchen Type" id="kitchen_type"
                                name="kitchen_type" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('deposit', $propertyList->deposit)" label="Deposit" id="deposit"
                                name="deposit" type="number" class="text-sm font-semibold" />



                            <x-frontend.forms.file-component label="House Image Of All Side" id="files"
                                name="files[]" type="file" class="text-sm font-semibold" multiple="multiple" />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component :value="old('description', $propertyList->description)" label="Description" id="editor"
                                name="description" class="text-sm font-semibold" />

                            <x-frontend.forms.text-area-component :value="old('map_url', $propertyList->map_url)" label="Map Url" id="map_url"
                                name="map_url" class="text-sm font-semibold" />

                        </div>


                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Update</button>
                        </div>
                    </div>

                </form>
            @elseif ($propertyList->propertyCategory->slug == 'go-down')
                <form class="mt-8" action="{{ route('registeredUser.propertyList.update', $propertyList) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="block md:grid grid-cols-4 pr-16">
                        <div class="col-span-2 mr-6">
                            <x-frontend.forms.select-type-field :value="$propertyList?->is_rent" label="Is Rent" id="is_rent"
                                name="is_rent" class="text-sm font-semibold" :options="['1' => 'For Rent', '0' => 'For Sale']" />

                            <x-frontend.forms.input-type-field :value="old('title', $propertyList->title)" label="Title" id="title"
                                name="title" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('rate', $propertyList->rate)" label="Rate" id="rate"
                                name="rate" type="text" class="text-sm font-semibold" placeholder="Per Month" />



                        </div>
                        <div class="col-span-2">


                            <x-frontend.forms.input-type-field :value="old('area', $propertyList->area)" label="Square Feet" id="area"
                                name="area" type="text" class="text-sm font-semibold" />
                            <x-frontend.forms.input-type-field :value="old('address', $propertyList->address)" label="Address" id="address"
                                name="address" type="text" class="text-sm font-semibold" />

                            <x-frontend.forms.input-type-field :value="old('deposit', $propertyList->deposit)" label="Deposit" id="deposit"
                                name="deposit" type="number" class="text-sm font-semibold" />



                            <x-frontend.forms.file-component label="Land Image Of All Side" id="files" name="files[]"
                                type="file" class="text-sm font-semibold" multiple="multiple" />
                        </div>
                        <div class="col-span-4">
                            <x-frontend.forms.text-area-component :value="old('description', $propertyList->description)" label="Description" id="editor"
                                name="description" class="text-sm font-semibold" />


                            <x-frontend.forms.text-area-component :value="old('map_url', $propertyList->map_url)" label="Map Url" id="map_url"
                                name="map_url" class="text-sm font-semibold" />
                        </div>


                        <div class="col-span-4 flex justify-center mt-8">
                            <button type="submit"
                                class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Update</button>
                        </div>
                    </div>

                </form>
            @endif
        </div>
        <div class="grid grid-cols-4 gap-2 ...">
            @foreach ($propertyList->files as $file)
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
