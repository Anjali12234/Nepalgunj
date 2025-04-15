<x-guest-layout>
    @section('title', $newsList->title)

    <div class="font-manrope">
        {{-- hero section --}}
        <div class="mx-4 md:mx-24 overflow-hidden">

            <div class="container mx-auto mt-8">
                <!-- Breadcrumb Navigation -->
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="#" class="hover:underline">Home</a> >
                    <a href="#" class="hover:underline">{{ $newsList?->newsCategory?->title }}</a> >
                    <a href="#" class="hover:underline">News</a> >
                    <span>{{ $newsList->title }}</span>
                </nav>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        <div>
                            <img src="{{ $newsList->image }}" alt="Qatar flags" class="w-full h-auto mb-4">

                            <div>
                                <h1 class="text-2xl font-bold text-purple-700 mt-2 mb-2">
                                    {{ $newsList->title }}
                                </h1>

                                <div class="flex items-center mb-4">
                                    <div class="bg-gray-200 rounded-full w-10 h-10 flex items-center justify-center">
                                        <img src="https://www.qatarliving.com/sites/all/themes/qatarliving_v3/images/avatar.jpeg"
                                             alt="author avatar" class="rounded-full w-full h-full">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-500 text-sm">By {{ $newsList->publisher }} • {{ $newsList->publish_date }}</p>
                                    </div>
                                </div>
                                <!-- Article Content -->
                                <div class="text-gray-700 space-y-4 tracking-wide">
                                    {!! $newsList->details !!}
                                </div>
                            </div>
                            <div class="border-t border-gray-300 pt-4">
                                <p class="text-gray-700 mb-4">
                                    Make sure to check out our social media to keep track of the latest content.
                                </p>

                                <!-- Social Media Links -->

                                <!--   <ul class="list-none space-y-1 font-bold">
                                    <li>Instagram - <a href="#" class="hover:text-blue-600 text-blue-300">@qatarliving</a></li>
                                    <li>X - <a href="#" class="hover:text-blue-600 text-blue-300">@qatarliving</a></li>
                                    <li>Facebook - <a href="#" class="hover:text-blue-600 text-blue-300">Nepalganj living</a></li>
                                    <li>YouTube - <a href="#" class="hover:text-blue-600 text-blue-300">Nepalganj living</a></li>
                                </ul> -->
                            </div>

                            <!-- Share Buttons -->
                            <div class="flex space-x-2 mt-4">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                    <button class="bg-blue-600 text-white px-8 py-2 rounded shadow hover:bg-blue-500">
                                        <i class="ti ti-brand-facebook text-xl"></i> Share
                                    </button>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text=Check%20this%20out!" target="_blank">
                                    <button class="bg-blue-400 text-white px-8 py-2 rounded shadow hover:bg-blue-300">
                                        <i class="ti ti-brand-twitter text-xl"></i> Tweet
                                    </button>
                                </a>
                                <a href="https://wa.me/{{ $newsList->whats_app_no }}?text={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                    <button class="bg-green-600 text-white px-8 py-2 rounded shadow hover:bg-green-500">
                                        <i class="ti ti-brand-whatsapp text-xl"></i> WhatsApp
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="mt-12">
                            <h2 class="text-xl font-semibold mb-4">More from Nepalgunj AtoZ</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                <!-- Article 1 -->
                                @forelse ($relatedNews as $relatedNewsList)
                                    <a href="{{ route('newsDetail', $relatedNewsList) }}">
                                        <div class="bg-white overflow-hidden mb-8">
                                            <img src="{{ $relatedNewsList->image }}" alt="News Image" class="w-full lg:w-40 h-52 lg:h-24 object-cover rounded-t-md">
                                            <p class="text-gray-700 font-bold text-sm">{{ Str::words($relatedNewsList->title, 5) }}</p>
                                    <hr class="col-span-full border-t border-gray-300 mt-4 md:hidden">
                                        </div>
                                    </a>

                                @empty
                                    <p>No Data found!!</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal Line -->

                    <!-- Sidebar News Items -->
                    <div class="space-y-6 hidden lg:block">
                        <h1 class="font-bold text-lg">Some Vacancies</h1>
                        @forelse($jobLists->take(5) as $jobList)
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="{{ route('jobDetail', $jobList) }}">
                                    <img
                                        src="{{ $jobList->image }}"
                                        alt="{{ $jobList->job_name }}"
                                        class="w-full h-64 md:w-44 md:h-32 object-cover rounded-lg mb-4 md:mb-0">
                                </a>
                                <h3 class="text-sm font-semibold">{{ Str::words($jobList->job_name, 20) }}</h3>
                            </div>
                        @empty
                            <p>No Data found!!</p>
                        @endforelse

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
