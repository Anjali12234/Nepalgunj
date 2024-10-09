<x-guest-layout>
    <x-frontend.navbar />
    <div class="font-manrope">
        {{-- hero section --}}
        <div class="mx-4 md:mx-24 overflow-hidden">
            <div class="container mx-auto ">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        <div>
                            <img src="{{ $newsLists->first()->image ?? '' }}" alt="Qatar flags" class="w-full h-[400px] mb-4 object-cover">
                            <h2 class="text-2xl font-bold mb-2">{{ Str::words($newsLists->first()?->title, 15) }}</h2>
                            <p class="text-gray-600 mb-4">
                                {!! Str::words(strip_tags($newsLists->first()->details ?? ''), 50, '...') !!}
                            </p>
                        </div>
                        @foreach ($newsLists->skip(1)->take(2) as $newsList)
                        <a href="{{ route('newsDetail', $newsList) }}">
                            <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4 mb-4 mt-8">
                                <img src="{{ $newsList->image ?? '' }}" alt="Scam websites" class="w-full h-32 object-cover md:w-44 md:h-32">
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

                    <!-- Horizontal Line -->
                    <hr class="col-span-full border-t border-gray-300 my-6 md:hidden">

                    <!-- Sidebar News Items -->
                    <div class="space-y-6">
                      <!-- Assuming sidebar items are in an array -->
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>
                            <div class="flex items-center space-x-4 mb-4">
                                <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY" alt="Events this week September 1-7" class="w-44 h-24 object-cover">
                                <h3 class="text-sm font-semibold">Events this week September 1-7</h3>
                            </div>
                            <hr>

                    </div>
                </div>
            </div>
        </div>

        @foreach ($newsCategories as $newsCategory)
            @if ($newsCategory->status == 1)
                <div class="grid grid-cols-12 gap-4 mx-4 md:mx-24 mb-4 overflow-hidden">
                    <div class="col-span-2 relative">
                        <h1 class="mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2"></h1>
                        <h1 class="text-2xl font-bold mb-4">{{ $newsCategory->title }}</h1>
                    </div>

                    <div class="col-span-7 grid grid-cols-1 sm:grid-cols-2 sm:block gap-4">
                        <div class="col-span-1">
                            @foreach ($newsCategory->newsLists->take(2) as $newsList)
                                @if ($newsList->status == 1)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="mt-4">
                                            <img src="{{ $newsList->image ?? '' }}" alt="" class="w-full h-40 object-cover">
                                            <h1 class="text-xl font-bold mt-3">{{ Str::words($newsList->title, 15) }}</h1>
                                        </div>
                                    </a>
                                @endif
                                <hr>
                            @endforeach
                        </div>
                        <div class="col-span-1">
                            @foreach ($newsCategory->newsLists->skip(2)->take(4) as $newsList)
                                @if ($newsList->status == 1)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="mt-4 mb-4">
                                            <img src="{{ $newsList->image ?? '' }}" alt="" class="w-full h-24 object-cover">
                                            <p class="text-sm font-semibold">{{ Str::words($newsList->title, 15) }}</p>
                                        </div>
                                    </a>
                                @endif
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        {{-- Must Read Section --}}
        <div class="bg-gray-100 p-4 mx-4 md:mx-24 mb-4">
            <div class="flex items-center space-x-6">
                <!-- Left section with the heading and line -->
                <div class="flex items-center space-x-2">
                    <div class="border-t-2 border-black w-14"></div>
                    <h1 class="text-lg font-bold">Must Read</h1>
                </div>

                <!-- Right section with the list of articles -->
                <div class="flex flex-wrap space-x-8 p-3 text-center">
                    <p class="text-sm font-semibold">9 Foods You Won't Believe Will Keep You Cool in the Heat!</p>
                    <p class="text-sm font-semibold">Dive into Summer with Indoor Swimming Pools</p>
                    <p class="text-sm font-semibold">6 Tips to Care for your Skin this Summer</p>
                </div>
            </div>
        </div>

        @include('frontend.layout.footer')
    </div>
</x-guest-layout>
