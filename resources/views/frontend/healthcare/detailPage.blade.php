<x-guest-layout>
    @section('title', $healthCareList->name)
    <div class="mx-4 md:mx-12 lg:mx-24 mt-4 font-manrope">
        <!-- Navigation Bar -->
        <nav class="py-4">
            <div class="container mx-auto px-4 lg:px-6">
                <div class="flex justify-between sticky top-0 items-center">
                    <h1 class="text-lg md:text-xl font-bold text-gray-800">
                        {{ $healthCareList->healthCareCategory->title_en }}</h1>
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
        <div class="">

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
            <div >
                <div class="relative bg-white shadow-lg overflow-hidden">
                    @foreach ($healthCareList->files as $index => $file)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
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
                    @foreach ($healthCareList->files as $index => $file)
                        <img src="{{ $file->file_url }}" alt="Thumbnail {{ $index + 1 }}"
                            class="thumbnail w-24 h-16 object-cover cursor-pointer rounded {{ $index === 0 ? 'active' : '' }}"
                            onclick="setSlide({{ $index }})">
                    @endforeach
                </div>
            </div>



        </div>
        <!-- Content Container -->
        <div class="container">
            <div class="bg-white rounded-lg shadow-md p-4 md:p-8">
                <!-- Doctor Image -->


                <!-- Doctor Info -->
                <div class="">
                    <h1 class="text-2xl md:text-3xl font-semibold font-mono text-gray-800">{{ $healthCareList->name }}
                    </h1>
                    @if (!empty($healthCareList->department))
                        <p class="text-lg text-blue-600 mt-2">Department: {{ $healthCareList->department }}</p>
                    @endif
                    @if (!empty($healthCareList->qualification))
                        <p class="text-sm text-gray-500 mt-1">Qualification: {{ $healthCareList->qualification }}
                        </p>
                    @endif
                    @if (!empty($healthCareList->n_m_c_no))
                        <p class="text-sm text-gray-500 mt-1">N.M.C No: {{ $healthCareList->n_m_c_no }}</p>
                    @endif
                    <p class="text-[14px] text-gray-500 mt-1"><span class="text-blue-900 font-bold text-xl">OPD
                            Schedule</span>: {{ $healthCareList->o_p_d_schedule }}</p>

                </div>

                <!-- Doctor Details Section -->
                <div class="mt-8">
                    <h2 class="text-xl md:text-2xl mb-3 font-semibold text-gray-800 mt-8">Details</h2>
                    <div class="text-gray-600">
                        {!! $healthCareList->details !!}
                    </div>
                </div>
                <div class="mt-8">
                    <h2 class="text-2xl font-semibold mb-4">Latest Job From {{ $healthCareList->name }} </h2>

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
                </div>


                <!-- Contact and Map Section -->
                <div class="flex flex-col md:flex-row mt-8 gap-10 md:gap-20">
                    <div class="w-full md:w-1/2">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mt-8">Contact Information</h2>
                        <p class="mt-4 text-gray-600">Phone: {{ $healthCareList->contact_number }}</p>
                        <p class="text-gray-600">Email: {{ $healthCareList->email }}</p>
                        <p class="text-gray-600">Address: {{ $healthCareList->address }}</p>
                        <p class="text-gray-600">Website Url: <a class="hover:text-blue-600" target="_blank"
                                href="{{ $healthCareList->website_url }}"> {{ $healthCareList->website_url }}</p></a>
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mt-8">Social Media Links</h2>
                        <div class="flex gap-2 mt-4">

                            <a href="https://www.instagram.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-instagram text-2xl text-white"></i>
                            </a>
                            <a href="{{ $healthCareList->facebook_url }}" class="p-2 rounded bg-neutral-700"
                                target="_blank">
                                <i class="ti ti-brand-facebook text-2xl text-white"></i>
                            </a>
                            <a href="{{ $healthCareList->twitter_url }}" class="p-2 rounded bg-neutral-700"
                                target="_blank">
                                <i class="ti ti-brand-x text-2xl text-white"></i>
                            </a>
                            <a href="{{ $healthCareList->youtube_link }}" class="p-2 rounded bg-neutral-700"
                                target="_blank">
                                <i class="ti ti-brand-youtube text-2xl text-white"></i>
                            </a>

                            <a href="https://www.tiktok.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-tiktok text-2xl text-white"></i>
                            </a>

                            <a href="https://wa.me/{{ $healthCareList->whats_app_no }}"
                                class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-whatsapp text-2xl text-white"></i>
                            </a>
                        </div>
                    </div>


                    <div class="w-full md:w-1/2">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mt-8">Map</h2>
                        <p class="font-semibold">{{ $healthCareList->address }}</p>

                        <div>
                            {!! $healthCareList->map_url !!}
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
