<x-guest-layout>
    @section('title',  $educationList->name )

    <div class=" mt-4 font-manrope">

        <!-- Navigation -->
        <nav class="py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-800">{{ $educationList->educationCategory->title_en }}</h1>
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
                <h1 class="text-3xl font-bold text-gray-900 md:text-5xl">{{ $educationList->name }}</h1>
                <p class="mt-3 text-gray-600">Discover the vibrant atmosphere, cutting-edge research, and passionate
                    community at {{ $educationList->name }}.</p>
            </div>

            <!-- Campus Details Section -->
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
                        @foreach ($educationList->files as $index => $file)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"
                                data-index="{{ $index }}">
                                <img src="{{ $file->file_url }}" loading="lazy" alt="Room {{ $index + 1 }}"
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
                        @foreach ($educationList->files as $index => $file)
                            <img src="{{ $file->file_url }}" loading="lazy" alt="Thumbnail {{ $index + 1 }}"
                                class="thumbnail w-24 h-16 object-cover cursor-pointer rounded {{ $index === 0 ? 'active' : '' }}"
                                onclick="setSlide({{ $index }})">
                        @endforeach
                    </div>
                </div>

                <!-- Campus Description -->

            </div>

            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Description</h2>
            <div class="mb-10 lg:mb-14 text-justify">
                <div>
                    @if (!empty($educationList->affiliated))
                        <div class="row">
                            <h1 class="font-bold text-lg">Affiliated by : <span
                                    class="font-semibold text-red-700">{{ $educationList->affiliated }}</span> </h1>
                        </div>
                    @endif
                    <div class="row mt-4">
                        <h1 class="font-bold text-lg">Program &nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span
                                class="font-semibold text-red-700">{{ $educationList->program }}</span> </h1>
                    </div>
                    <div class="row mt-2 mb-2">
                        <h1 class="font-bold text-lg">Whats App No : <span
                                class="font-semibold text-red-700">{{ $educationList->whats_app_no }}</span> </h1>
                    </div>
                    {!! $educationList->description !!}

                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="px-4 py-6 sm:px-6 lg:px-8 lg:py-14 mx-auto max-w-7xl">
                <!-- Testimonials Section -->
                <div class="relative px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">What Our Students Say</h2>

                    <div class="relative overflow-hidden">
                        <div id="testimonial-slider" class="flex transition-transform duration-300 gap-2">
                            @foreach ($educationList->testimonials as $testimonial)
                                <div
                                    class="w-full lg:w-[48%] flex-shrink-0 bg-white border border-neutral-700 rounded-xl p-6 shadow-md">
                                    <div class="flex items-center mb-4">
                                        <img class="w-16 h-16 rounded-full object-cover"
                                            src="{{ $testimonial->image }}" loading="lazy" alt="Student Image">
                                        <div class="ml-4">
                                            <h3 class="text-lg font-semibold text-gray-800">{{ $testimonial->name }}
                                            </h3>
                                            <p class="text-sm text-gray-600">{{ $testimonial->post }}</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-700">"{!! $testimonial->description !!}"</p>
                                </div>
                            @endforeach
                        </div>

                        <!-- Navigation Buttons -->
                        <button id="prevButton"
                            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-transparent shadow-md text-black px-4 py-2 rounded-full">
                            <i class="ti ti-arrow-left"></i>
                        </button>
                        <button id="nextButton"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-transparent shadow-md text-black px-4 py-2 rounded-full">
                            <i class="ti ti-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Latest Job From {{ $educationList->name }} </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Related Job Listings -->
                    @forelse ($jobLists as $jobList)
                    @if ($jobList->created_at < $jobList->deadline_date)

                        <a href="{{ route('jobDetail', $jobList) }}">
                            <div
                                class="bg-white  overflow-hidden rounded-lg shadow-md transition-transform transform hover:scale-105 mb-4">
                                <div class="items-center justify-center flex">

                                    <img src="{{ $jobList->image }}" alt="Job Image" loading="lazy"
                                        class="w-full lg:w-[15rem] h-52 lg:h-[12rem] object-cover rounded-t-md">
                                </div>
                                <div class="px-5 py-5 text-center mt-3">
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

            <!-- Contact Information Section -->
            <div class="mt-10 lg:mt-16">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Contact Us</h2>
                <div class="grid lg:grid-cols-3 gap-10 items-start text-center">
                    <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800">Address</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $educationList->address }}</p>
                    </div>
                    <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800">Phone</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $educationList->contact_number }}</p>
                    </div>
                    <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $educationList->email }}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row lg:justify-between gap-3 mt-10 lg:mt-16">
                <!-- Map Section -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Find Us on the Map</h2>
                    <p class="font-semibold">{{ $educationList->address }}</p>
                    <div>
                        {!! $educationList->map_url !!}
                    </div>
                </div>

                <!-- Social Media Links Section -->
                <div class="w-full lg:w-1/2 mt-10 lg:mt-0 flex flex-col items-center">
                    <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Also Connect in</h2>
                    <div class="flex justify-center space-x-4">
                        <a href="https://www.instagram.com" class="p-2 rounded bg-neutral-700" target="_blank">
                            <i class="ti ti-brand-instagram text-2xl text-white"></i>
                        </a>
                        <a href="{{ $educationList->facebook_url }}" class="p-2 rounded bg-neutral-700"
                            target="_blank">
                            <i class="ti ti-brand-facebook text-2xl text-white"></i>
                        </a>
                        <a href="{{ $educationList->twitter_url }}" class="p-2 rounded bg-neutral-700" target="_blank">
                            <i class="ti ti-brand-x text-2xl text-white"></i>
                        </a>
                        <a href="{{ $educationList->youtube_link }}" class="p-2 rounded bg-neutral-700"
                            target="_blank">
                            <i class="ti ti-brand-youtube text-2xl text-white"></i>
                        </a>
                        <a href="https://www.tiktok.com" class="p-2 rounded bg-neutral-700" target="_blank">
                            <i class="ti ti-brand-tiktok text-2xl text-white"></i>
                        </a>
                        <a href="https://wa.me/{{ $educationList->whats_app_no }}" class="p-2 rounded bg-neutral-700"
                            target="_blank">
                            <i class="ti ti-brand-whatsapp text-2xl text-white"></i>
                        </a>
                    </div>
                </div>
            </div>



        </div>
        <div class='min-h-20'></div>

    </div>

    <!-- Responsive Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('testimonial-slider');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');

            let currentIndex = 0;
            const testimonials = slider.children.length;
            const testimonialsPerView = 2;
            const testimonialWidth = slider.children[0].offsetWidth;

            // Clone testimonials for infinite sliding effect
            for (let i = 0; i < testimonials; i++) {
                const clone = slider.children[i].cloneNode(true);
                slider.appendChild(clone);
            }

            let maxIndex = testimonials;

            function slideNext() {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                }
                slider.style.transform = `translateX(-${testimonialWidth * currentIndex}px)`;

                if (currentIndex >= maxIndex) {
                    setTimeout(() => {
                        slider.style.transition = 'none';
                        currentIndex = 0;
                        slider.style.transform = `translateX(0px)`;
                    }, 300); // Pause for smooth sliding
                }
            }

            function slidePrev() {
                if (currentIndex > 0) {
                    currentIndex--;
                }
                slider.style.transform = `translateX(-${testimonialWidth * currentIndex}px)`;
            }

            // Automatically slide every 3 seconds
            const autoSlideInterval = setInterval(slideNext, 3000); // Adjust time as needed (3000ms = 3 seconds)

            // Manual Slide Control with buttons
            nextButton.addEventListener('click', function() {
                clearInterval(autoSlideInterval); // Stop auto slide on manual click
                slideNext();
            });

            prevButton.addEventListener('click', function() {
                clearInterval(autoSlideInterval); // Stop auto slide on manual click
                slidePrev();
            });
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
