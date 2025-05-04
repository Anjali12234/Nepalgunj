<x-guest-layout>
    @section('title', 'Name of Hospitlity Field')

    <div class="mx-4 md:mx-12 lg:mx-24 mt-1 font-manrope">

        <!-- Hero -->
        <div
            class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">


                <!-- Title -->
                <div class="mt-5 max-w-2xl text-center mx-auto">
                    <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                        Let’s Explore Our
                        <span
                            class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Services</span>
                    </h1>
                </div>
                <!-- End Title -->

                <div class="mt-5 max-w-3xl text-center mx-auto">
                    <p class="text-lg text-gray-600 dark:text-neutral-400">
                        Let’s Explore Our Services
                        Discover a range of innovative solutions designed to enhance your hospitality business, from
                        seamless guest experiences to efficient management tools, all crafted with the latest technology
                        and attention to detail.</p>
                </div>
            </div>
        </div>
        <!-- End Hero -->
        @foreach ($hospitalityCategories as $hospitalityCategory)
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Explore Our {{$hospitalityCategory->title_en}}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ( $hospitalityCategory->hospitalityLists->take(3) as $hospitalityList )
                    @if($hospitalityList->status == 1)
                        <!-- Hotel 4 -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-down"
                             data-aos-duration="2000">

                            <a href="{{ route('hospitality.hospitalityDetail',$hospitalityList) }}">
                                <div class="overflow-hidden">
                                    <img loading="lazy"
                                        class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-110"
                                        src="{{ $hospitalityList?->thumbnail }}"
                                        alt="Urban Comfort Hotel">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $hospitalityList->name }}</h3>
                                    <p class="mt-2 text-gray-600">{!! Str::words($hospitalityList->details, 10) !!}</p>
                                    <div class="mt-4 flex justify-between items-center">
                                        @if (!empty($hospitalityList->price_per_night))
                                            <span class="text-gray-800 font-bold">{{ round($hospitalityList->price_per_night) }} per/night</span>
                                        @endif

                                        @if (!empty($hospitalityList->delivery_available))
                                            <span class="text-gray-800 font-bold">Delivery Charge: {{ $hospitalityList->delivery_available }} </span>
                                        @endif
                                        <a href="{{ route('hospitality.hospitalityDetail',$hospitalityList) }}"
                                           class="text-white bg-zinc-700 px-3 py-1 hover:bg-black hover:text-lime-500 rounded-full text-sm">View
                                            more</a>
                                    </div>
                                </div>
                            </a>


                        </div>
                        @endif
                    @endforeach

                </div>
                <div class="mt-8 gap-3 flex justify-center">
                    <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:from-violet-600 focus:to-blue-600 py-3 px-4"
                       href="{{route('hospitalityCategory', $hospitalityCategory)}}">
                        Explore More
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </a>

                </div>
            </div>
        @endforeach

        


    </div>
</x-guest-layout>
