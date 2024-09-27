<x-guest-layout>
    <div class="bg-slate-100">


        <div class="bg-sky-700 mx-16 font-mono">
            <!-- Toggle for For Rent and For Sale -->
            <div class="flex justify-center mb-4">
                <div class="flex items-center bg-white rounded-full p-1 mt-6">
                    <button id="forRentButton" data-filter="1" class="bg-neutral-800 text-white px-4 py-1 rounded-full">For
                        Rent</button>
                    <button id="forSaleButton" data-filter="0" class="text-neutral-800 px-4 py-1 rounded-full">For
                        Sale</button>
                </div>
            </div>
            <!-- Tabs for Residential and Commercial -->
            <div class="flex space-x-1">
                @foreach ($propertyCategories as $propertyCategory)
                    <a
                        href="">
                        <button
                            class="bg-neutral-800 text-white px-4 py-2 focus:outline-none">{{ $propertyCategory->title_en }}</button>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="bg-neutral-600 mx-16 p-4 font-mono">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-3 md:col-span-8 flex gap-6">
                    <div class="grid grid-cols-2 gap-4 mb-4 text-xs">
                        <div class="mt-4">
                            <label class="text-white block mb-1">PRICE</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="- Min-"
                                    class=" bg-neutral-800 border border-indigo-100 text-white p-2  w-16">
                                <input type="number" placeholder="- Max -"
                                    class="bg-neutral-800 border border-indigo-100 text-white p-2  w-16">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4">
                    <form action="" method="get">
                        <div
                            class="flex rounded-md border-2 border-neutral-800 overflow-hidden max-w-md mt-4 mx-auto font-[sans-serif]">

                            <input name="search" type="search" placeholder="Search Something..."
                                value="{{ old('search', \request('search')) }}"
                                class="w-full h-[34px] outline-none bg-white text-gray-600 text-sm px-4 py-3" />
                            <button type='button' class="flex items-center justify-center bg-neutral-800 px-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                                    class="fill-white">
                                    <path
                                        d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                                    </path>
                                </svg>
                            </button>
                    </form>
                </div>

            </div>

        </div>
        <!-- Price Section -->
    </div>
    <div class="mx-16 mt-1">
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
                    Properties
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
                PropertyList
            </li>
        </ol>
    </div>



    <div class="overflow-hidden mx-16 mt-4 mb-4 grid grid-cols-1 lg:grid-cols-3 gap-4 font-mono">
        <!-- News & Articles Section -->
        <div class="col-span-1 mt-64">
            <h2 class="text-xl font-semibold mb-4">News & Articles</h2>
            <div class="space-y-2">
                <!-- Article Item -->
                <div class="bg-white  shadow-md p-4 overflow-hidden">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Flisting_ratio_3_2%2Fs3%2Fpost%2F2024%2F08%2F25%2FArticle%2520Artwork.jpg&w=384&q=75"
                        alt="News Image" class="w-full h-40 object-cover ">
                    <div class="p-4 ">
                        <h3 class="text-sm font-medium">The Commercial Avenue and Al Saif Gallery Sign Long-Term Lease
                            Agreement</h3>
                    </div>
                </div>
                <!-- Add more articles here -->
                <div class="bg-white  shadow-md overflow-hidden">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Flisting_ratio_3_2%2Fs3%2Fpost%2F2024%2F08%2F25%2FArticle%2520Artwork.jpg&w=384&q=75"
                        alt="News Image" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-sm font-medium">The Commercial Avenue and Al Saif Gallery Sign Long-Term Lease
                            Agreement</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Listings Section -->
        {{-- <h2 class="text-xl font-semibold mb-4">News & Articles</h2> --}}
        <div id="" class=" col-span-2 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <!-- Property Card -->

            @if ($search)
                <h3 class="text-lg font-bold text-black ">{{ $properties->count() }} Ads found for
                    {{ $search }}</h3>
            @else
                {{-- <div>
                    <h1 class="text-black">
                        hlelo
                    </h1>
                </div> --}}

                @foreach ($properties as $propertyList)
                    @if ($propertyList->is_featured == 1)
                        <div class="bg-white shadow-md overflow-hidden">

                            <a href="{{ route('propertyDetails', $propertyList) }}">
                                <div class="relative">
                                    <img src="{{ count($propertyList->files) > 0 ? $propertyList->files?->first()->file_url : '' }}"
                                        alt="Property Image" class="w-full h-40 object-cover">

                                    <span
                                        class="absolute top-0 right-0 bg-neutral-800 text-white text-xs font-bold py-1 px-2 rounded-bl-md">
                                        Featured
                                    </span>
                                </div>


                                <div class="p-2 border-2  border-t-slate-500">
                                    <h4 class="text-xs font-bold text-gray-500 uppercase">
                                        {{ $propertyList->propertyCategory->title_en }}</h4>
                                    <p class="text-lg font-semibold"> {{ Str::words($propertyList->title, 5) }}</p>
                                    <p class="text-lg text-blue-600 font-bold">{{ $propertyList->rate }} Rs/Month</p>
                                    <div class="flex items-center gap-6">
                                        <p class="text-xs text-gray-400">{{ $propertyList->registeredUser->username }}
                                        </p>
                                        <p class="text-xs text-gray-400">
                                            {{ $propertyList->registeredUser->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach

            @endif
            @forelse ($properties as $propertyList)
                <div
                    class=" mb-2 property-item bg-white  shadow-md col-span-full flex flex-col md:flex-row gap-4 overflow-hidden">
                    <a href="{{ route('propertyDetails', $propertyList) }}"
                        class="w-full md:w-1/3 h-40 object-cover mb-2 md:mb-0"> <img
                            src="{{ count($propertyList->files) > 0 ? $propertyList->files?->first()->file_url : '' }}"
                            alt="Ad Image"></a>
                    <div class="flex-1 mt-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <h4 class="text-xs font-bold text-blue-500 uppercase mb-1">For
                                    {{ $propertyList->is_rent == 1 ? 'Rent' : 'Sale' }} •
                                    {{ $propertyList->propertyCategory->title_en }} •
                                </h4>
                            </div>
                            <div class="col-span-1 flex justify-end items-center">
                                <h4 class="text-xs font-bold text-blue-500 uppercase mb-1 flex items-center mr-4">
                                    <i class="ti ti-map-pin"></i> Nepalgunj
                                </h4>
                            </div>
                        </div>
                        <p class="text-lg font-semibold">{{ $propertyList->title }}</p>
                        <div class="flex items-center space-x-4 mt-2 justify-end mr-8">
                          <a href="{{ route('propertyDetails', $propertyList) }}">  <button class="bg-neutral-800 text-white py-1 px-3 rounded text-sm">Contact</button></a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 mt-4 gap-4 mb-2">
                            <div class="col-span-1">
                                <div>
                                    <p class="text-lg text-blue-600 font-bold">{{ $propertyList->rate }} Rs/Month
                                    </p>
                                    <div class="flex gap-4">
                                        <p class="text-md font-normal flex items-center">
                                            <i class="ti ti-bed text-2xl mr-2"></i> {{ $propertyList->bed_room }}
                                        </p>
                                        <p class="text-md font-normal flex items-center">
                                            <i class="ti ti-bath text-2xl mr-2"></i> {{ $propertyList->bathroom }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 justify-end items-center">
                                <img src="{{ $propertyList?->registeredUser?->registeredUserDetail?->image }} h-50 w-50"
                                    alt="" class="ml-56 mt-2">
                                <p class="text-xs  text-gray-400 mt-1">Updated
                                    {{ $propertyList->registeredUser->updated_at->diffForHumans() }} by
                                    {{ $propertyList->registeredUser->username }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>
                    No data found !!
                </p>
            @endforelse


        </div>
    </div>


    {{-- footer --}}
    <div class="mx-24">
        <x-frontend.propertiesFooter.properties-footer />
    </div>
    </div>


    <script>
        const forRentButton = document.getElementById('forRentButton');
        const forSaleButton = document.getElementById('forSaleButton');

        function updateButtonState(buttonToActivate, buttonToDeactivate, filterValue) {
            buttonToActivate.classList.add('bg-blue-700', 'text-white');
            buttonToActivate.classList.remove('text-blue-700');
            buttonToDeactivate.classList.add('text-blue-700');
            buttonToDeactivate.classList.remove('bg-blue-700', 'text-white');
            window.location.href =
                `{{ route('properties', ['subCategorySlug' => request('subCategorySlug')]) }}?is_rent=${filterValue}`;
        }

        forRentButton.addEventListener('click', function() {
            updateButtonState(forRentButton, forSaleButton, 1);
        });

        forSaleButton.addEventListener('click', function() {
            updateButtonState(forSaleButton, forRentButton, 0);
        });
    </script>



</x-guest-layout>
