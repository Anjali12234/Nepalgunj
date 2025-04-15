<x-guest-layout :title="'Welcome to NepalgunjLiving'">

    <x-frontend.navbar />
    <div class="font-manrope ">
        {{-- hero section --}}
        <div class="mx-4 md:mx-24 overflow-hidden ">
            <div class="container mx-auto ">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        <!-- Slider -->
                        <div data-hs-carousel='{
                            "loadingClasses": "opacity-0",
                            "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
                           "isAutoPlay": true
                             }'
                            class="relative">
                            <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                                <div
                                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                                    @foreach ($carouselItems as $carouselItem)
                                        @if ($carouselItem->thumbnail)
                                            <div class="hs-carousel-slide relative"
                                                data-description="{{ $carouselItem->title ?? $carouselItem->name }}">
                                                <img src="{{ $carouselItem->thumbnail }}"
                                                    alt="{{ $carouselItem->title ?? $carouselItem->name }}"
                                                    class="w-full h-full object-cover">

                                                <!-- Featured tag -->
                                                <span
                                                    class="absolute top-0 right-0 bg-neutral-800 text-white text-xs font-bold py-1 px-2 rounded-bl-md">
                                                    Featured
                                                </span>
                                            </div>
                                        @else
                                            @foreach ($carouselItem->files as $index => $file)
                                                <div class="hs-carousel-slide relative"
                                                    data-description="{{ $carouselItem->title ?? $carouselItem->name }}">
                                                    <img src="{{ $file->file_url }}"
                                                        alt="{{ $carouselItem->title ?? $carouselItem->name }}"
                                                        class="w-full h-full object-cover">

                                                    <!-- Featured tag -->
                                                    <span
                                                        class="absolute top-0 right-0 bg-neutral-800 text-white text-xs font-bold py-1 px-2 rounded-bl-md">
                                                        Featured
                                                    </span>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach

                                </div>
                            </div>


                            <button type="button"
                                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                <span class="text-2xl" aria-hidden="true">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                </span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button"
                                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                                <span class="sr-only">Next</span>
                                <span class="text-2xl" aria-hidden="true">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>
                                </span>
                            </button>

                            <div
                                class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                            </div>
                        </div>

                        <!-- Paragraph that will change according to slide -->
                        <div class="mt-4 ">
                            <p id="carousel-description" class="text-2xl font-bold mb-2"></p>
                        </div>

                        @foreach ($newsLists->take(2) as $newsList)
                            <a href="{{ route('newsDetail', $newsList) }}">
                                <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4 mb-4 mt-8"
                                    data-aos="fade-down" data-aos-duration="2000">
                                    <img src="{{ $newsList->image ?? '' }}" alt="Scam websites"
                                        class="w-full h-32 object-cover md:w-44 md:h-32">
                                    <div class="mt-4 md:mt-0">
                                        <p class="text-fuchsia-600 text-xs font-bold">NEWS</p>
                                        <h3 class="text-[18px] font-semibold">
                                            {{ Str::words($newsList->title, 15) }}
                                        </h3>
                                        <p class="text-[16px]">
                                            {!! Str::words(strip_tags($newsList->details ?? ''), 50, '...') !!}
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        @endforeach

                    </div>

                    <hr class="col-span-full border-t border-gray-300 my-6 md:hidden">

                    <div class="space-y-6" data-aos="fade-down" data-aos-duration="2000">
                        <h3 class="text-[18px] font-semibold">
                            Latest Jobs
                        </h3>
                        @foreach ($jobLists as $jobList)
                            <a href="{{ route('jobDetail', $jobList) }}">
                                <div class="flex space-x-4  mt-2">
                                    <img src="{{ $jobList->image }}" alt="Events this week September 1-7"
                                        class="w-28 border border-gray-400 rounded">
                                    <div>
                                        <h3 class="text-sm font-semibold">{{ $jobList->job_name }}</h3>
                                        <h3 class="text-sm font-semibold text-red-500">
                                            {{ $jobList->jobCategory->title }}</h3>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        @foreach ($newsCategories as $newsCategory)
            @if ($newsCategory->status == 1)
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mx-4 md:mx-24 mb-4 overflow-hidden"
                    data-aos="fade-down" data-aos-duration="2000">
                    <div class="col-span-2 relative">
                        <h1
                            class="mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                        </h1>
                        <h1 class="text-2xl font-bold mb-4">{{ $newsCategory->title }}</h1>
                    </div>

                    <div class="col-span-6 sm:block lg:flex gap-4 ">
                        <!-- First div with smaller fixed width -->
                        <div class="flex-1 max-w-sm">
                            @foreach ($newsCategory->newsLists->take(2) as $newsList)
                                @if ($newsList->status == 1)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="mt-4">
                                            <img src="{{ $newsList->image ?? '' }}" alt=""
                                                class="w-full h-48 object-cover">
                                            <div>
                                                <h1 class="text-sm font-bold mt-3 "> {{ $newsList->title }}</h1>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>

                        <!-- Second div with slightly larger images and titles -->
                        <div class="flex-[0_0_33%]">
                            @foreach ($newsCategory->newsLists->skip(2)->take(4) as $newsList)
                                @if ($newsList->status == 1)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="mt-4 ">
                                            <img src="{{ $newsList->image ?? '' }}" alt=""
                                                class="sm:w-36 lg:w-full sm:h-12 lg:h-32 object-cover">
                                            <!-- Increased image size -->
                                            <div class="">
                                                <h1 class="text-sm font-bold mt-1 truncate">
                                                    {{ Str::words($newsList->title, 3) }}</h1>
                                                <!-- Increased font size -->
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselBody = document.querySelector('.hs-carousel-body');
            const descriptionElement = document.getElementById('carousel-description');

            function updateDescription() {
                const activeSlide = document.querySelector('.hs-carousel-slide.active') || document.querySelector(
                    '.hs-carousel-slide'); // Fallback to the first slide
                const description = activeSlide ? activeSlide.getAttribute('data-description') : '';
                descriptionElement.textContent = description;
            }

            // Initial description update
            updateDescription();

            // Listen for changes in the carousel (you can use your carousel's API or logic here)
            const observer = new MutationObserver(function() {
                updateDescription();
            });

            // Observe changes in the classList of each slide
            const slides = document.querySelectorAll('.hs-carousel-slide');
            slides.forEach(slide => {
                observer.observe(slide, {
                    attributes: true,
                    attributeFilter: ['class']
                });
            });
        });
    </script>
</x-guest-layout>
