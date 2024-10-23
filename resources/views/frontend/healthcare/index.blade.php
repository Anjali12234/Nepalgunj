<x-guest-layout>
    <div class="mx-4 md:mx-12 lg:mx-24 mt-4 font-mono">

        <!-- Carousel Section -->
        <div class="px-4 lg:px-6 py-10">
            <div data-hs-carousel='{"loadingClasses": "opacity-0" }' class="relative">
                <div
                    class="hs-carousel relative overflow-hidden w-full h-64 md:h-[calc(80vh-106px)] bg-gray-100 rounded-2xl dark:bg-neutral-800">
                    <div
                        class="hs-carousel-body absolute top-0 bottom-0 left-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <!-- Item 1 -->
                        @foreach ($healthCares as $healthCare)
                            @foreach ( $healthCare->healthCareLists as $healthCareList )
                                <div class="hs-carousel-slide">
                                    <div
                                        class="h-64 md:h-[calc(80vh-106px)] flex flex-col bg-cover bg-center bg-no-repeat"
                                        style="background-image: url('{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}">
                                        <div class="mt-auto w-full md:w-2/3 md:max-w-lg pl-5 pb-5 md:pl-10 md:pb-10">
                                            <span class="block text-white">{{ $healthCareList->name }}</span>
                                            <span class="block text-white text-lg md:text-3xl">Rewriting sport's playbook for
                                        billions of athletes</span>
                                            <div class="mt-5">
                                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white text-black hover:bg-gray-100 focus:outline-none"
                                                   href="#">
                                                    Read Case Studies
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                    </div>
                </div>

                <!-- Arrows -->
                <button type="button"
                        class="hs-carousel-prev absolute inset-y-0 left-0 flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-l-2xl focus:outline-none">
                    <span class="text-2xl" aria-hidden="true">
                        <!-- Left Arrow SVG -->
                        <svg class="w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>

                <button type="button"
                        class="hs-carousel-next absolute inset-y-0 right-0 flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-r-2xl focus:outline-none">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                        <!-- Right Arrow SVG -->
                        <svg class="w-5 h-5 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </span>
                </button>
                <!-- End Arrows -->
            </div>
        </div>
        <!-- End Carousel Section -->

        @forelse ($healthCares as $healthCare)
            <div class="px-4 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14" data-aos="fade-down" data-aos-duration="2000">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured {{ $healthCare->title_en }}
                    </h2>
                    @if ($healthCare->type == 'Doctor')
                        <p class="mt-1 text-gray-600">Meet our top doctors, leading the way in medical excellence and
                            patient care.</p>
                    @elseif ($healthCare->type == 'Hospital')
                        <p class="mt-1 text-gray-600">Discover our top hospitals, setting the standard in medical
                            excellence and patient care.</p>
                    @elseif ($healthCare->type == 'Pharmacy')
                        <p class="mt-1 text-gray-600">Explore our leading pharmacies, committed to medical excellence
                            and patient care.</p>
                    @elseif ($healthCare->type == 'Medical')
                        <p class="mt-1 text-gray-600">Learn more about our top medical services, pioneering excellence
                            in patient care.</p>
                    @endif
                </div>

                <!-- Grid Container -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-down"
                     data-aos-duration="2000">
                    @if ($healthCare->type == 'Doctor')
                        @forelse ($healthCare->healthCareLists->take(3) as $healthCareList)
                            <!-- Card -->
                            <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition"
                               href="{{ route('healthcare.detailPage', $healthCareList) }}">
                                <div class="aspect-w-16 aspect-h-10 overflow-hidden rounded-xl">
                                    <img
                                        class="w-full h-60 object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                                        alt="Blog Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 group-hover:text-gray-600">
                                    {{ $healthCareList->name }}</h3>
                                <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                                    Learn more
                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"/>
                                    </svg>
                                </p>
                            </a>
                            <!-- End Card -->
                        @empty
                            <p>No doctors found!</p>
                        @endforelse
                    @endif
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-down"
                     data-aos-duration="2000">
                    @if ($healthCare->type == 'Hospital')
                        @forelse ($healthCare->healthCareLists->take(3) as $healthCareList)
                            <!-- Card -->
                            <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition"
                               href="{{ route('healthcare.detailPage', $healthCareList) }}">
                                <div class="aspect-w-16 aspect-h-10 overflow-hidden rounded-xl">
                                    <img
                                        class="w-full h-60 object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                                        alt="Blog Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 group-hover:text-gray-600">
                                    {{ $healthCareList->name }}</h3>
                                <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                                    Learn more
                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"/>
                                    </svg>
                                </p>
                            </a>
                            <!-- End Card -->
                        @empty
                            <p>No Hospital found!</p>
                        @endforelse
                    @endif
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-down"
                     data-aos-duration="2000">
                    @if ($healthCare->type == 'Medical')
                        @forelse ($healthCare->healthCareLists as $healthCareList)
                            <!-- Card -->
                            <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition"
                               href="{{ route('healthcare.detailPage', $healthCareList) }}">
                                <div class="aspect-w-16 aspect-h-10 overflow-hidden rounded-xl">
                                    <img
                                        class="w-full h-60 object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                                        alt="Blog Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 group-hover:text-gray-600">
                                    {{ $healthCareList->name }}</h3>
                                <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                                    Learn more
                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"/>
                                    </svg>
                                </p>
                            </a>
                            <!-- End Card -->
                        @empty
                            <p>No Medical found!</p>
                        @endforelse
                    @endif
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-down"
                     data-aos-duration="2000">
                    @if ($healthCare->type == 'Pharmacy')
                        @forelse ($healthCare->healthCareLists as $healthCareList)
                            <!-- Card -->
                            <a class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition"
                               href="{{ route('healthcare.detailPage', $healthCareList) }}">
                                <div class="aspect-w-16 aspect-h-10 overflow-hidden rounded-xl">
                                    <img
                                        class="w-full h-60 object-cover transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                                        alt="Blog Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 group-hover:text-gray-600">
                                    {{ $healthCareList->name }}</h3>
                                <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                                    Learn more
                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"/>
                                    </svg>
                                </p>
                            </a>
                            <!-- End Card -->
                        @empty
                            <p>No Pharmacy found!</p>
                        @endforelse
                    @endif
                </div>

                <!-- View More Button -->
                <div class="flex justify-center items-center text-center mt-4">
                    <a href="{{ route('healthCare', $healthCare) }}"
                       class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-orange-300">View
                        More</a>
                </div>
            </div>
        @empty
            <p>No data found!!</p>
        @endforelse

    </div>

</x-guest-layout>
