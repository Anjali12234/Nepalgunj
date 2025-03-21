<x-guest-layout>
    <div class="mx-4 md:mx-12 lg:mx-24 mt-4 font-manrope">
        <!-- Navigation Bar -->
        <nav class="py-4">
            <div class="container mx-auto px-4 lg:px-6">
                <div class="flex justify-between sticky top-0 items-center">
                    <h1 class="text-lg md:text-xl font-bold text-gray-800">{{ $hospitalityList->hospitalityCategory->title_en }}</h1>
                    <div class="flex gap-2 md:gap-4">
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-3 py-2 flex justify-center">
                            <i class="ti ti-arrow-left text-lg md:text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-3 py-2 flex justify-center">
                            <i class="ti ti-arrow-right text-lg md:text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content Container -->
        <div class="container p-4 md:p-6">
            <header class="py-3">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-black">{{$hospitalityList->name}}</h1>
                    <p class="mt-2 text-zinc-600">Your luxury escape by the lake</p>
                </div>
            </header>

            <!-- Main Content -->
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
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
                <div class="mb-8">
                    <div class="relative bg-white shadow-lg overflow-hidden">
                        @foreach ($hospitalityList->files as $index => $file)
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
                    </div>

                    <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                        @foreach($hospitalityList->files as $index => $file)
                            <img src="{{ $file->file_url }}" alt="Thumbnail {{ $index + 1 }}"
                                 class="thumbnail w-24 h-16 object-cover cursor-pointer rounded {{ $index === 0 ? 'active' : '' }}"
                                 onclick="setSlide({{ $index }})">
                        @endforeach
                    </div>
                </div>

                <!-- Overview and Amenities Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">About Our Hotel</h2>
                        <p class="text-gray-700 leading-relaxed">
                            {!! $hospitalityList->details!!}
                        </p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Facilities</h2>
                        <p>
                            {{$hospitalityList->facilities}}
                        </p>
                    </div>
                    @if(!empty($hospitalityList->total_rooms))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Total Room</h2>
                            <p>
                                {{$hospitalityList->total_rooms}}
                            </p>
                        </div>
                    @endif
                    @if(!empty($hospitalityList->room_types))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Room Types</h2>
                            <p>
                                {{$hospitalityList->room_types}}
                            </p>
                        </div>
                    @endif
                    @if(!empty($hospitalityList->price_per_night))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Price Per Night</h2>
                            <p>
                                {{$hospitalityList->price_per_night}}
                            </p>
                        </div>
                    @endif
                    @if(!empty($hospitalityList->average_meal_price))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Average Meal Price</h2>
                            <p>
                                {{$hospitalityList->average_meal_price}}
                            </p>
                        </div>
                    @endif
                    @if(!empty($hospitalityList->menu))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Menu</h2>
                            <p>
                                {{$hospitalityList->menu}}
                            </p>
                        </div>
                    @endif
                    @if(!empty($hospitalityList->parking_available))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Parking Available</h2>
                            <p>
                                {{$hospitalityList->parking_available}}
                            </p>
                        </div>
                    @endif
                    @if(!empty($hospitalityList->delivery_available))
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Delivery Available</h2>
                            <p>
                                {{$hospitalityList->delivery_available}}
                            </p>
                        </div>
                    @endif
                </div>

                <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Us</h2>
                        <div class="space-y-2">
                            <p class="text-gray-700"><strong>Opening Time:</strong> {{$hospitalityList->opening_time}}
                            </p>
                            <p class="text-gray-700"><strong>Address:</strong> {{$hospitalityList->address}}</p>
                            <p class="text-gray-700"><strong>Phone:</strong> {{$hospitalityList->contact_number}}</p>
                            <p class="text-gray-700"><strong>Email:</strong> {{$hospitalityList->email}}</p>
                            <p class="text-gray-700"><strong>Website:</strong><a class="hover:text-blue-600" target="_blank" href="{{ $hospitalityList->website_url }}"> {{ $hospitalityList->website_url }}</a></p>
                        </div>
                    </div>

                  
                </div>


                <!-- Google Maps Section -->
                <div class="flex flex-col lg:flex-row lg:justify-between gap-3 mt-10 lg:mt-16">
                    <!-- Map Section -->
                    <div class="w-full lg:w-1/2">
                        <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Find Us on the Map</h2>
                        <p class="font-semibold">{{ $hospitalityList->address }}</p>
                        <div>
                            {!! $hospitalityList->map_url !!}
                        </div>
                    </div>
    
                    <!-- Social Media Links Section -->
                    <div class="w-full lg:w-1/2 mt-10 lg:mt-0 flex flex-col items-center">
                        <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Also Connect in</h2>
                        <div class="flex justify-center space-x-4">
                            <a href="https://www.instagram.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-instagram text-2xl text-white"></i>
                            </a>
                            <a href="{{ $hospitalityList->facebook_url }}" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-facebook text-2xl text-white"></i>
                            </a>
                            <a href="{{ $hospitalityList->twitter_url }}" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-x text-2xl text-white"></i>
                            </a>
                            <a href="{{ $hospitalityList->youtube_link }}" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-youtube text-2xl text-white"></i>
                            </a>
                            <a href="https://www.tiktok.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-tiktok text-2xl text-white"></i>
                            </a>
                            <a href="https://wa.me/{{ $hospitalityList->whats_app_no }}" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-whatsapp text-2xl text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>
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
    
        // 👇 Automatically change slide every 5 seconds (5000 milliseconds)
        setInterval(() => {
            changeSlide(1);
        }, 5000);
    
        // ✅ Initial load
        updateSlides();
    </script>
</x-guest-layout>
