<x-guest-layout>
    <div class="mx-24 font-mono">
        <div class="grid grid-template-rows: repeat(1, minmax(0, 1fr)) grid-flow-col mt-4">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-12 md:col-span-3">
                    <p class="mb-4 text-sm tracking-widest text-cyan-600 ">
                        {{-- Properties, For Rent, Residential, Villa Apartment --}}

                        Properties,{{ $propertyList->propertyCategory->title_en }}
                    </p>
                    <div class="px-4 py-8 border border-dashed">
                        <h1 class="text-2xl font-bold">{{ $propertyList->title }}</h1>
                        <p>Reference No: {{ $propertyList->reference_no }}</p>
                        <p class="text-xs text-gray-400">Updated {{ $propertyList->updated_at->diffForHumans() }}</p>
                    </div>



                    <div class="max-w-sm mx-auto bg-white  overflow-hidden mt-4">
                        <div class="bg-cyan-700 text-white p-4 flex justify-between items-center">
                            <div>
                                <p class="text-2xl font-bold">{{ $propertyList->rate }}</p>
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
                        {{-- <a href="{{ route('registeredUsers', $propertyList->registeredUser->name) }}"> --}}
                            <div class="p-4 flex items-center">
                                <div class="w-10 h-10 bg-gray-300 rounded-full mr-3">
                                    <img src="{{ $propertyList?->registeredUser?->registeredUserDetail?->image }}" alt="">
                                </div>
                                <p class="font-semibold">{{ $propertyList?->registeredUser?->username }}</p>
                            </div>
                        {{-- </a> --}}


                        <div class="p-4 space-y-2">
                            <button id="callNowBtn" class="w-full bg-blue-500 text-white py-2 rounded">Call Now</button>
                            <p id="phoneNumber" class="text-center font-bold text-blue-600 hidden">
                                {{ $propertyList->registeredUser->phone_no }}</p>
                            <!-- WhatsApp button with wa.me URL -->
                            <a href="https://wa.me/{{ $propertyList->registeredUser->phone_no }}" class="w-full bg-green-500 text-white py-2 rounded block text-center">WhatsApp Now</a>
                            <!-- Email button using mailto -->
                            <a href="mailto:{{ $propertyList?->registeredUser?->email }}" class="w-full bg-red-500 text-white py-2 rounded block text-center">Email Now</a>
                        </div>


                    </div>
                </div>

                {{-- carsouel --}}

                <div class="col-span-12 md:col-span-9">

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
                        <!-- Main image display -->
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
                                onclick="changeSlide(-1)">❮</button>
                            <button
                                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l"
                                onclick="changeSlide(1)">❯</button>
                            <div class="absolute top-0 right-0 bg-teal-500 text-white px-2 py-1 m-2 text-xs">FEATURED
                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                            @foreach ($propertyList->files as $index => $file)
                                <img src="{{ $file->file_url }}" alt="Thumbnail {{ $index + 1 }}"
                                    class="thumbnail w-24 h-16 object-cover cursor-pointer rounded {{ $index === 0 ? 'active' : '' }}"
                                    onclick="setSlide({{ $index }})">
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-template-rows: repeat(1, minmax(0, 1fr)) grid-flow-col mt-4">
                        <div class="grid grid-cols-12 gap-2">
                            <div class="col-span-12 md:col-span-9">
                                <div class="max-w-4xl mx-auto bg-white overflow-hidden">
                                    <div class="p-6">
                                        <div class="flex justify-between items-start mb-4 border-b pb-2">
                                            <h2 class="text-xl font-bold">DESCRIPTION</h2>

                                        </div>

                                        <div class="space-y-3 text-sm">
                                            {!! $propertyList->description !!}
                                        </div>
                                    </div>
                                    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                                        <div class="p-6">
                                            <div class="flex justify-between items-start mb-6">
                                                <h2 class="text-xl font-bold pb-2">OVERVIEW</h2>


                                            </div>

                                            <div class="grid grid-cols-3 gap-6 text-sm">
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

                                                @if (!empty($propertyList->bathroom))
                                                    <div>
                                                        <p class="text-gray-500">KITCHEN TYPE:</p>
                                                        <p class="font-semibold text-blue-800">
                                                            {{ $propertyList->kitchen_type }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($propertyList->parking))
                                                    <div>
                                                        <p class="text-gray-500">PARKING:</p>
                                                        <p class="font-semibold text-blue-800">
                                                            {{ $propertyList->parking }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($propertyList->deposit))
                                                    <div>
                                                        <p class="text-gray-500">DEPOSIT:</p>
                                                        <p class="font-semibold text-blue-800">
                                                            {{ $propertyList->deposit }}</p>
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
                            <div class="col-span-12 md:col-span-3">

                                <div class="mt-8">
                                    <div class="">
                                        <p class="text-sm text-gray-500">LOCATION</p>
                                        <p class="font-semibold">{{ $propertyList->address }}</p>
                                    </div>
                                    <div class=" bg-gray-200 flex items-center mb-2 mt-4 justify-center">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.875836914233!2d84.41745987442619!3d27.69023217619228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb35beab27a5%3A0x92de245797a63af!2sBITS%20-Bitmap%20IT%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sne!2snp!4v1727422787446!5m2!1sne!2snp"></iframe>
                                    </div>
                                    <div class="mt-4">
                                        <div class="bg-red-100 p-4 ">
                                            <h3 class="text-red-700 font-bold mb-2">Fraud Warning</h3>
                                            <p class="text-sm">
                                                Read our <a href="#" class="text-blue-500">safety guidelines</a>
                                                to protect against scams or fraud. If this ad looks suspicious, please
                                                report it.
                                            </p>
                                            <button
                                                class="mt-2 border border-blue-600 text-green-500 px-4 py-1 rounded text-sm">
                                                Login to Report
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
        <div class="mb-4 mt-4">
            <h3 class="text-xl">Similar Properties</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
                <!-- Card 1 -->
                @forelse ($relatedProperties as $propertyList)
                    <a href="{{ route('propertyDetails', $propertyList) }}">
                        <div class="border overflow-hidden bg-white relative">
                            <img src="{{ count($propertyList->files) > 0 ? $propertyList->files?->first()->file_url : '' }}"
                                class="w-full h-48 object-cover" src="image-url-1" alt="Property 1">
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
            <h3 class="text-xl">More ads from <span class="font-bold text-2xl">
                    {{ $propertyList?->registeredUser?->username }} PROPERTIES</span> </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
                <!-- Card 1 -->
                @forelse ($relatedPropertiesList as $propertyList)
                <a href="{{ route('propertyDetails', $propertyList) }}">
                <div class="border overflow-hidden bg-white relative">
                        <img src="{{ count($propertyList->files) > 0 ? $propertyList->files?->first()->file_url : '' }}"
                        class="w-full h-48 object-cover" src="image-url-1" alt="Property 1">
                    @if ($propertyList->is_featured == 1)
                        <span
                            class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                    @endif
                        <div class="p-4">
                            <p class="text-sm text-blue-600">{{ $propertyList->propertyCategory->title_en }}</p>
                            <h3 class="text-xl font-bold">{{ Str::words($propertyList->title, 5) }}</h3>
                            <p class="text-lg font-bold text-gray-900">{{ $propertyList->rate }}<span
                                    class="text-sm font-light">Rs/Month</span></p>
                        </div>
                        <div class="px-4 pb-4 flex justify-between text-gray-500">
                            <p class="text-xs"><i class="ti ti-location"></i>{{ $propertyList->address }}</p>
                            <p class="text-xs">Updated {{ $propertyList->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </a>
                @empty
                    <p>No data found!!</p>
                @endforelse

            </div>

        </div>
        {{-- footer --}}
        <x-frontend.propertiesFooter.properties-footer />
    </div>


    <script>
        document.getElementById('callNowBtn').addEventListener('click', function() {
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

    {{-- carsouerl --}}


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
