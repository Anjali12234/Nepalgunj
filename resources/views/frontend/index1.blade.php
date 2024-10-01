<x-guest-layout>
    <x-frontend.navbar>
    </x-frontend.navbar>
    <div class="font-mono">
        {{-- hero section --}}
        <div class=" mx-24 overflow-hidden">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        <div>
                            <img src="{{ $newsLists->first()->image ?? '' }}" alt="Qatar flags"
                                class="w-[55rem] h-[400px]  mb-4">
                            <h2 class="text-2xl font-bold mb-2">{{ $newsLists->first()->title ?? '' }}</h2>
                            <p class="text-gray-600 mb-4 mr-28 items-center justify-center">
                                {!! Str::words(strip_tags($newsLists->first()->details ?? ''), 50, '...') !!}
                            </p>


                        </div>
                        @foreach ($newsLists->skip(1)->take(2) as $newsList)
                            <a href="{{ route('newsDetail', $newsList) }}">
                                <div class="flex items-center space-x-4 mb-4 mt-8">
                                    <img src="{{ $newsList->image ?? '' }}" alt="Scam websites" class="w-54 h-32">

                                    <div>
                                        <p class="text-fuchsia-600 text-xs font-bold">NEWS</p>
                                        <h3 class="text-lg font-semibold">
                                            {{ $newsList->title ?? '' }}
                                        </h3>
                                        <p class="text-sm mr-20">
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
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2022/08/17/SCAM_WEBSITES_SCAM_ACCOUNTS_QATAR.jpg?itok=O9ubELV4"
                                alt="Scam websites" class="w-44 h-24">
                            <h3 class="text-sm font-semibold">How to spot scam websites & social media accounts in Qatar
                            </h3>
                        </div>
                        <hr>
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/09/02/WhatsApp%20Image%202024-09-02%20at%2015.56.50.jpg?itok=TDaVpNeu"
                                alt="Sushi Night" class="w-44 h-24">
                            <h3 class="text-sm font-semibold">Sora Rooftop launches Monday Sushi Night</h3>
                        </div>
                        <hr>
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/08/30/TRAVEL_LEAD_QATAR_LIVING.jpg?itok=kIqtUPJD"
                                alt="Travel warning" class="w-44 h-24">
                            <h3 class="text-sm font-semibold">MoI warns people never to carry strangers' luggage during
                                travel</h3>
                        </div>
                        <hr>
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/09/01/VISIT_LEAD_QATAR_LIVING.jpg?itok=LbxuMyHS"
                                alt="Visit Qatar" class="w-44 h-24">
                            <h3 class="text-sm font-semibold">Visit Qatar re-aligns itself to build Qatar as a touristic
                                destination</h3>
                        </div>
                        <hr>
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/09/01/MAHMOUD_LEAD_QATAR_LIVING.jpg?itok=dWUHCddb"
                                alt="Mahmoud Trezeguet" class="w-44 h-24">
                            <h3 class="text-sm font-semibold">Egyptian Mahmoud Trezeguet set for Al Rayyan move, says
                                reports</h3>
                        </div>
                        <hr>
                        <div class="flex items-center space-x-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/08/29/Qatar_reads_Qatar_Living_News%20(1).jpg?itok=sLDR35Ms"
                                alt="Mahmoud Trezeguet" class="w-44 h-24">
                            <h3 class="text-sm font-semibold">Egyptian Mahmoud Trezeguet set for Al Rayyan move, says
                                reports</h3>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

        </div>


        {{-- Qatar --}}

        @foreach ($newsCategories as $newsCategory)
            @if ($newsCategory->status == 1)
                <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
                    <div class="col-span-2 relative">
                        <h1
                            class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                        </h1>
                        <h1 class="text-2xl font-bold mb-4">{{ $newsCategory->title }}</h1>
                    </div>

                    <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                        <div class="col-span-3">
                            @foreach ($newsCategory->newsLists->take(2) as $newsList)
                                @if ($newsList->status == 1)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="mt-4">
                                            <img src="{{ $newsList->image ?? '' }}" alt="" class="w-80 h-48">
                                            <h1 class="text-xl font-bold">{{ $newsList->title ?? '' }}</h1>
                                        </div>
                                    </a>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-span-2">
                            @foreach ($newsCategory->newsLists->skip(1)->take(2) as $newsList)
                                @if ($newsList->status == 1)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="mt-4">
                                            <img src="{{ $newsList->image ?? '' }}" alt="" class="w-32 h-16">
                                            <h1 class="text-xs font-semibold">{{ $newsList->title ?? '' }}
                                            </h1>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    {{-- <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                        <div class="mt-4 flex gap-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                                alt="" class="w-40 h-24">
                            <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                                This
                                Summer
                            </p>
                        </div>
                        <hr>
                        <div class="mt-4 flex gap-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                                alt="" class="w-40 h-24">
                            <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                                This
                                Summer
                            </p>
                        </div>
                        <hr>
                        <div class="mt-4 flex gap-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                                alt="" class="w-40 h-24">
                            <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                                This
                                Summer
                            </p>
                        </div>
                        <hr>
                        <div class="mt-4 flex gap-4 mb-4">
                            <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                                alt="" class="w-40 h-24">
                            <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                                This
                                Summer
                            </p>
                        </div>
                        <hr>
                    </div> --}}

                </div>
            @endif
        @endforeach

        {{-- mustread --}}
        <div class="bg-gray-100 p-4  mx-24 mb-4 h-24">
            <div class="flex items-center space-x-6">
                <!-- Left section with the heading and line -->
                <div class=" items-center space-x-2">
                    <div class="border-t-2 border-black w-14"></div>
                    <h1 class="text-lg font-bold">Must Read</h1>
                </div>

                <!-- Right section with the list of articles -->
                <div class="flex space-x-8 p-3 text-center">
                    <p class="text-sm font-semibold mr-3">9 Foods You Won't Believe Will Keep You Cool in the Heat!</p>
                    <p class="text-sm font-semibold">Dive into Summer with Indoor Swimming Pools</p>
                    <p class="text-sm font-semibold">6 Tips to Care for your Skin this Summer</p>
                </div>
            </div>
        </div>

        {{-- dinning --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">Dining</h1>
            </div>

            <div class="col-span-7 grid grid-cols-7 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-4">

                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                            This Summer
                        </p>
                    </div>
                    <hr>
                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                            This Summer
                        </p>
                    </div>
                    <hr>
                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                            This Summer
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>


        {{-- news --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">News</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- fashion --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">Fashion</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>



                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- sports --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">Sports</h1>
            </div>

            <div class="col-span-7 grid grid-cols-7 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-4">

                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                            This Summer
                        </p>
                    </div>
                    <hr>
                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                            This Summer
                        </p>
                    </div>
                    <hr>
                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                            This Summer
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        {{-- how to --}}
        <div class="mb-4  mx-24 h-auto">
            <div class="grid grid-cols-6 gap-4">

                <div class=" mt-8">
                    <div class="border-t-2 border-black w-14"></div>
                    <h1 class="text-lg font-bold">How to</h1>
                </div>

                <div class="p-4">
                    <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(46).png?itok=PMxMuxMY"
                        alt="" class="w-32 h-20">
                    <p>“I just got fired! What next?”</p>
                </div>
                <div class="p-4">
                    <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/01/30/Bad_Bosses_How_to_Deal_with_Them_Qatar_Living_0.png?itok=qMEbASSt"
                        alt="" class="w-32 h-20">
                    <p>
                        6 Bad Bosses and How to Deal with Them
                    </p>
                </div>
                <div class="p-4">
                    <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(46).png?itok=PMxMuxMY"
                        alt="" class="w-32 h-20">
                    <p>“I just got fired! What next?”</p>
                </div>
                <div class="p-4">
                    <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(46).png?itok=PMxMuxMY"
                        alt="" class="w-32 h-20">
                    <p>“I just got fired! What next?”</p>
                </div>
                <div class="p-4">
                    <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(46).png?itok=PMxMuxMY"
                        alt="" class="w-32 h-20">
                    <p>“I just got fired! What next?”</p>
                </div>


            </div>
        </div>

        {{-- ARROUND TOWN --}}
        <div class="grid grid-cols-12  gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">Arround Town</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>



                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- e-shop --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">E-Shop</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>



                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- ql-exclusive --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">Ql Exclusives</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>



                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- community --}}

        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">Community</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>



                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- this weekend --}}
        <div class="mb-4 bg-gray-100  mx-24 h-auto">
            <div class="grid grid-cols-4 gap-4">

                <div class="p-4 mt-4  mx-4 h-20">
                    <div class="border-t-2 border-black w-14"></div>
                    <h1 class="text-lg font-bold">This Weekend</h1>
                </div>

                <div class="p-4">
                    <p>
                        Don’t miss these top (new) destinations to visit in Qatar after the World Cup</p>
                </div>
                <div class="p-4">

                    <p>Malls in Qatar: All you need to know</p>
                </div>
                <div class="p-4">

                    <p>
                        Ladies-only things to do in Qatar</p>
                </div>


            </div>
        </div>
        {{-- professional development --}}

        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 overflow:hidden">
            <div class="col-span-2 mx-4 relative">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4">professional Development</h1>
            </div>

            <div class="col-span-6 grid grid-cols-6 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/Events_Week_Qatar_Living.png?itok=yoLr4mkY"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/29/Smartphone_babysitter_Qatar_Living.png?itok=bmVmKE0c"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl font-bold">Events this week September 1-7</h1>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/08/17/Geocaching_Qatar_Living.jpeg?itok=JLeQkSYv"
                            alt="" class="w-32 h-16">
                        <h1 class="text-xs font-semibold">Want to join a global Treasure Hunt? Let’s explore Geocaching
                        </h1>
                    </div>
                    <hr>



                </div>
            </div>

            <div class="col-span-4 mt-2"> <!-- Added mt-2 to decrease vertical gap -->
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
                <div class="mt-4 flex gap-4 mb-4">
                    <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                        alt="" class="w-40 h-24">
                    <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained This
                        Summer
                    </p>
                </div>
                <hr>
            </div>

        </div>

        {{-- events --}}
        <div class="grid grid-cols-12 gap-4 mx-24 mb-4 p-5 overflow:hidden bg-gray-100">
            <div class="col-span-2 relative mx-8">
                <h1
                    class=" mt-8 text-2xl font-bold before:content-[''] before:block before:w-16 before:h-[2px] before:bg-black before:mb-2">
                </h1>
                <h1 class="text-2xl font-bold mb-4 ">Events</h1>
            </div>

            <div class="col-span-7 grid grid-cols-7 gap-2"> <!-- Reduced gap-4 to gap-2 -->
                <div class="col-span-3">
                    <div class="mt-4">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/event/2024/02/04/Mall-of-Qatar-Cirque-Zuma-Zuma-Circus-Events-Doha-Qatar-Living.jpg?itok=5EmT32tS"
                            alt="" class="w-80 h-48">
                        <h1 class="text-xl">Cirque Zuma Zuma at MOQ</h1>
                    </div>
                </div>
                <div class="col-span-4">

                    <div class="mt-4 flex gap-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/07/14/Copy%20of%20SINGLE%20IMAGE%20ARTICLE%20COVER%20(18).png?itok=pdXexM1b"
                            alt="" class="w-40 h-24">
                        <div>
                            <div class="flex gap-4">
                                <p class="text-xs font-bold text-fuchsia-900">EXIHIBITION</p>
                                <p class="text-xs font-bold text-fuchsia-900">Oct 2 to Mar 28</p>
                            </div>
                            <p class="text-sm font-semibold mr-20">9 Indoor Activities to Keep You Active & Entertained
                                This Summer
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- ========== FOOTER ========== -->


        @include('frontend.layout.footer')

    </div> <!-- ========== END FOOTER ========== -->

</x-guest-layout>
