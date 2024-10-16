<x-guest-layout>
    <div class="mx-4 md:mx-24 font-manrope">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mt-4">
            <div class="col-span-12 md:col-span-4">
                <p class="mb-4 text-sm tracking-widest text-cyan-600">
                    Properties, {{ $propertyList->propertyCategory->title_en }}
                </p>
                <div class="px-4 py-8 border border-dashed">
                    <h1 class="text-2xl font-bold font-mono">{{ $propertyList->title }}</h1>
                    <p>Reference No: {{ $propertyList->reference_no }}</p>
                    <p class="text-xs text-gray-400">Updated {{ $propertyList->updated_at->diffForHumans() }}</p>
                </div>

                <div class="max-w-sm mx-auto bg-white overflow-hidden mt-4">
                    <div class="bg-cyan-700 text-white p-4 flex justify-between items-center">
                        <div>
                            <p class="text-2xl font-bold font-mono">{{ $propertyList->rate }}</p>
                            <p class="text-[10px]">Rs/Month</p>
                        </div>
                    </div>
                    <div class="p-4 border-b">
                        <div class="flex justify-between text-gray-600">
                            <p>DEPOSIT:</p>
                            <p>COMMISSION:</p>
                        </div>
                        <div class="flex justify-between font-semibold">
                            <p>{{ $propertyList->deposit }}</p>
                            <p>None</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-center justify-start">
                        <span>by</span> <img src="{{ $propertyList?->registeredUser?->registeredUserDetail?->avatar }}"
                                             class="rounded-full w-16 h-16 mr-4 ml-3" alt="User Avatar">
                        <p class="font-semibold">{{ $propertyList?->registeredUser?->username }}</p>
                    </div>


                    <div class="p-4 space-y-2">
                        <button id="callNowBtn" class="w-full bg-blue-500 text-white py-2 rounded">Call Now</button>
                        <p id="phoneNumber" class="text-center font-bold text-blue-600 hidden">
                            {{ $propertyList->registeredUser->phone_no }}</p>
                        <a href="https://wa.me/{{ $propertyList->registeredUser->phone_no }}"
                           class="w-full bg-green-500 text-white py-2 rounded block text-center">WhatsApp Now</a>
                        <a href="mailto:{{ $propertyList?->registeredUser?->email }}"
                           class="w-full bg-red-500 text-white py-2 rounded block text-center">Email Now</a>
                    </div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-8">
                <style>
                    .carousel-item {
                        display: none;
                    }

                    .carousel-item.active {
                        display: block;
                    }

                    .thumbnail.active {
                        border: 2px solid teal;
                    }
                </style>
                <div class="max-w-4xl mx-auto">
                    <div class="relative bg-white shadow-lg overflow-hidden">
                        @foreach ($propertyList->files as $index => $file)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"
                                 data-index="{{ $index }}">
                                <img src="{{ $file->file_url }}" alt="Room {{ $index + 1 }}"
                                     class="w-full h-[30rem] object-cover">
                            </div>
                        @endforeach
                        <button
                            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r"
                            onclick="changeSlide(-1)">❮
                        </button>
                        <button
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l"
                            onclick="changeSlide(1)">❯
                        </button>
                        <div class="absolute top-0 right-0 bg-teal-500 text-white px-2 py-1 m-2 text-xs">FEATURED</div>
                    </div>

                    <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                        @foreach ($propertyList->files as $index => $file)
                            <img src="{{ $file->file_url }}" alt="Thumbnail {{ $index + 1 }}"
                                 class="thumbnail w-24 h-16 object-cover cursor-pointer rounded {{ $index === 0 ? 'active' : '' }}"
                                 onclick="setSlide({{ $index }})">
                        @endforeach
                    </div>
                </div>

                <div class="mt-4">
                    <div class="max-w-4xl mx-auto bg-white overflow-hidden">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4 border-b pb-2">
                                <h2 class="text-xl font-bold font-mono">DESCRIPTION</h2>
                            </div>
                            <div class="space-y-3 text-[16px]">
                                {!! $propertyList->description !!}
                            </div>
                        </div>

                        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-6">
                                    <h2 class="text-xl font-bold pb-2">OVERVIEW</h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 text-sm">
                                    @if (!empty($propertyList->bed_room))
                                        <div>
                                            <p class="text-gray-500">BEDROOMS:</p>
                                            <p class="font-semibold">{{ $propertyList->bed_room }}</p>
                                        </div>
                                    @endif
                                    @if (!empty($propertyList->bathroom))
                                        <div>
                                            <p class="text-gray-500">BATHROOMS:</p>
                                            <p class="font-semibold">{{ $propertyList->bathroom }}</p>
                                        </div>
                                    @endif
                                    @if (!empty($propertyList->internet))
                                        <div>
                                            <p class="text-gray-500">INTERNET:</p>
                                            <p class="font-semibold">{{ $propertyList->internet }}</p>
                                        </div>
                                    @endif
                                    @if (!empty($propertyList->kitchen_type))
                                        <div>
                                            <p class="text-gray-500">KITCHEN TYPE:</p>
                                            <p class="font-semibold text-blue-800">{{ $propertyList->kitchen_type }}
                                            </p>
                                        </div>
                                    @endif
                                    @if (!empty($propertyList->parking))
                                        <div>
                                            <p class="text-gray-500">PARKING:</p>
                                            <p class="font-semibold text-blue-800">{{ $propertyList->parking }}</p>
                                        </div>
                                    @endif
                                    @if (!empty($propertyList->deposit))
                                        <div>
                                            <p class="text-gray-500">DEPOSIT:</p>
                                            <p class="font-semibold text-blue-800">{{ $propertyList->deposit }}</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="grid grid-cols-3 gap-4 mt-8">
                                    <button class="bg-blue-600 text-white py-2 px-4 rounded">
                                        <i class="ti ti-share-3 mr-2"></i> Share
                                    </button>
                                    <button class="bg-blue-400 text-white py-2 px-4 rounded">
                                        <i class="ti ti-brand-x mr-2"></i> Tweet
                                    </button>
                                    <button class="bg-green-500 text-white py-2 px-4 rounded">
                                        <i class="ti ti-brand-whatsapp mr-2"></i> WhatsApp
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 ">

                <div class="mt-10 lg:mt-8">
                    <p class="text-sm text-gray-500">LOCATION</p>
                    <p class="font-semibold">{{ $propertyList->address }}</p>
                    <div class="w-full h-64 lg:h-96">
                        <iframe class="w-full h-full rounded-lg" src="{{ $propertyList->map_url }}" allowfullscreen=""
                                loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>

        <div class="mb-4 mt-4">
            <h3 class="text-xl">Similar Properties</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
                @forelse ($relatedProperties as $propertyList)
                    <a href="{{ route('propertyDetails', $propertyList) }}">
                        <div class="border overflow-hidden bg-white relative">
                            <img
                                src="{{ count($propertyList->files) > 0 ? $propertyList->files?->first()->file_url : '' }}"
                                class="w-full h-48 object-cover" alt="Property 1">
                            @if ($propertyList->is_featured == 1)
                                <span
                                    class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                            @endif
                            <div class="p-4">
                                <p class="text-sm text-blue-600">{{ $propertyList->propertyCategory->title_en }}</p>
                                <h3 class="text-xl font-bold">{{ Str::words($propertyList->title, 5) }}</h3>
                                <p class="text-lg font-bold text-gray-900">{{ $propertyList->rate }} <span
                                        class="text-sm font-light">Rs/Month</span></p>
                            </div>
                            <div class="px-4 pb-4 flex justify-between text-gray-500">
                                <p class="text-xs"><i class="ti ti-location"></i>{{ $propertyList->address }}</p>
                                <p class="text-xs">Updated {{ $propertyList->updated_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>No data found</p>
                @endforelse
            </div>
        </div>

        <div class="mb-4 mt-4">
            <h3 class="text-xl">More ads from <span
                    class="font-bold text-2xl">{{ $propertyList?->registeredUser?->username }} PROPERTIES</span></h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
                @forelse ($relatedPropertiesList as $propertyList)
                    <a href="{{ route('propertyDetails', $propertyList) }}">
                        <div class="border overflow-hidden bg-white relative">
                            <img
                                src="{{ count($propertyList->files) > 0 ? $propertyList->files?->first()->file_url : '' }}"
                                class="w-full h-48 object-cover" alt="Property 1">
                            @if ($propertyList->is_featured == 1)
                                <span
                                    class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                            @endif
                            <div class="p-4">
                                <p class="text-sm text-blue-600">{{ $propertyList->propertyCategory->title_en }}</p>
                                <h3 class="text-xl font-bold">{{ Str::words($propertyList->title, 5) }}</h3>
                                <p class="text-lg font-bold text-gray-900">{{ $propertyList->rate }}<span
                                        class="text-xs font-light"> Rs/Month</span></p>
                            </div>
                            <div class="px-4 pb-4 flex justify-between text-gray-500">
                                <p class="text-xs"><i class="ti ti-location"></i> {{ $propertyList->address }}</p>
                                <p class="text-xs">Updated {{ $propertyList->updated_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>No data found!!</p>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        document.getElementById('callNowBtn').addEventListener('click', function () {
            var phoneNumber = document.getElementById('phoneNumber');
            if (phoneNumber.classList.contains('hidden')) {
                phoneNumber.classList.remove('hidden');
                this.textContent = 'Call Number';
            } else {
                phoneNumber.classList.add('hidden');
                this.textContent = 'Call Now';
            }
        });
    </script>

    <script>
        let currentSlide = 0;
        const items = document.querySelectorAll('.carousel-item');
        const thumbnails = document.querySelectorAll('.thumbnail');

        function updateSlides() {
            items.forEach((item, index) => {
                item.classList.toggle('active', index === currentSlide);
            });
            thumbnails.forEach((thumbnail, index) => {
                thumbnail.classList.toggle('active', index === currentSlide);
            });
        }

        function changeSlide(direction) {
            currentSlide = (currentSlide + direction + items.length) % items.length;
            updateSlides();
        }

        function setSlide(index) {
            currentSlide = index;
            updateSlides();
        }
    </script>
</x-guest-layout>
