    <x-guest-layout >
        @section('title',  $entertainmentList->name )

        <div class=" mt-4 font-manrope">

            <!-- Navigation -->
            <nav class="py-4">
                <div class="container mx-auto px-6">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-bold text-gray-800">
                            {{ $entertainmentList->entertainmentCategory->title }}</h1>
                        <div class="flex gap-4">
                            <a href="#"
                                class="text-white bg-neutral-700 hover:bg-neutral-800 rounded-full px-4 py-2 flex justify-center">
                                <i class="ti ti-arrow-left text-xl"></i>
                            </a>
                            <a href="#"
                                class="text-white bg-neutral-700 hover:bg-neutral-800 rounded-full px-4 py-2 flex justify-center">
                                <i class="ti ti-arrow-right text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="px-4 py-6 sm:px-6 lg:px-8 lg:py-14 mx-auto max-w-7xl">

                <!-- Campus Header -->
                <div class="max-w-4xl mx-auto text-center mb-10 lg:mb-14">
                    <h1 class="text-3xl font-bold text-gray-900 md:text-5xl">{{ $entertainmentList->name }}</h1>
                    <p class="mt-3 text-gray-600">Discover the vibrant atmosphere, cutting-edge research, and passionate
                        community at {{ $entertainmentList->name }}.</p>
                </div>

                <!-- Campus Details Section -->
                <div class="grid  gap-10 items-start mb-10 lg:mb-14">

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
                            @foreach ($entertainmentList->files as $index => $file)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"
                                    data-index="{{ $index }}">
                                    <img src="{{ $file->file_url }}" alt="Room {{ $index + 1 }}"
                                        class="w-full h-[32rem] object-cover">
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
                            @foreach ($entertainmentList->files as $index => $file)
                                <img src="{{ $file->file_url }}" alt="Thumbnail {{ $index + 1 }}"
                                    class="thumbnail w-24 h-16 object-cover cursor-pointer rounded {{ $index === 0 ? 'active' : '' }}"
                                    onclick="setSlide({{ $index }})">
                            @endforeach
                        </div>
                    </div>



                </div>
                <div class="max-w-4xl   mb-10 lg:mb-14 ">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Description</h2>
                    {!! $entertainmentList->description !!}
                </div>

                <div class="mt-8">
                    <h2 class="text-2xl font-semibold mb-4">Latest Job From {{ $entertainmentList->name }} </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Related Job Listings -->
                        @forelse ($jobLists as $jobList)
                        @if ($jobList->created_at < $jobList->deadline_date)
    
                            <a href="{{ route('jobDetail', $jobList) }}">
                                <div
                                    class="bg-white  overflow-hidden rounded-lg shadow-md transition-transform transform hover:scale-105 mb-4">
                                    <div class="items-center justify-center flex">
    
                                        <img src="{{ $jobList->image }}" alt="Job Image"
                                            class="w-full lg:w-[15rem] h-52 lg:h-[12rem] object-cover rounded-t-md">
                                    </div>
                                    <div class="px-5 py-5 text-center">
                                        <p class="text-gray-700 font-bold text-sm">
                                            {{ Str::words($jobList->job_name, 20) }}</p>
                                   
                                            <p class="text-gray-700 font-bold text-sm">
                                              Post : <span>{{ $jobList?->post }}</span> </p>
                                        <p class="text-gray-700 font-bold text-sm">
                                            {{ $jobList?->jobCategory?->title }}</p>
                                    </div>
                                </div>
                            </a>
                            @endif
                        @empty
                            <p class="text-gray-500">No Data found!!</p>
                        @endforelse
                    </div>
                    <!-- Contact Information Section -->
                    <div class="mt-10 lg:mt-16">
                        <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Contact Us</h2>
                        <div class="grid lg:grid-cols-3 gap-10 items-start text-center">
                            <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold text-gray-800">Address</h3>
                                <p class="text-sm text-gray-600 mt-2">{{ $entertainmentList->address }}</p>
                            </div>
                            <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold text-gray-800">Phone</h3>
                                <p class="text-sm text-gray-600 mt-2">{{ $entertainmentList->contact_number }}</p>
                            </div>
                            <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                                <p class="text-sm text-gray-600 mt-2">{{ $entertainmentList->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row lg:justify-between gap-3 mt-10 lg:mt-16">
                        <!-- Map Section -->
                        <div class="w-full lg:w-1/2">
                            <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Find Us on the Map</h2>
                            <p class="font-semibold">{{ $entertainmentList->address }}</p>
                            <div>
                                {!! $entertainmentList->map_url !!}
                            </div>
                        </div>

                        <!-- Social Media Links Section -->
                        <div class="w-full lg:w-1/2 mt-10 lg:mt-0 flex flex-col items-center">
                            <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Also Connect in</h2>
                            <div class="flex justify-center space-x-4">
                                <a href="https://www.instagram.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                    <i class="ti ti-brand-instagram text-2xl text-white"></i>
                                </a>
                                <a href="{{ $entertainmentList->facebook_url }}" class="p-2 rounded bg-neutral-700"
                                    target="_blank">
                                    <i class="ti ti-brand-facebook text-2xl text-white"></i>
                                </a>
                                <a href="{{ $entertainmentList->twitter_url }}" class="p-2 rounded bg-neutral-700"
                                    target="_blank">
                                    <i class="ti ti-brand-x text-2xl text-white"></i>
                                </a>
                                <a href="{{ $entertainmentList->youtube_link }}" class="p-2 rounded bg-neutral-700"
                                    target="_blank">
                                    <i class="ti ti-brand-youtube text-2xl text-white"></i>
                                </a>
                                <a href="https://www.tiktok.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                    <i class="ti ti-brand-tiktok text-2xl text-white"></i>
                                </a>
                                <a href="https://wa.me/{{ $entertainmentList->whats_app_no }}"
                                    class="p-2 rounded bg-neutral-700" target="_blank">
                                    <i class="ti ti-brand-whatsapp text-2xl text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class='min-h-20'></div>

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
