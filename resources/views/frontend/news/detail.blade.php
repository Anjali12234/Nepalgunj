<x-guest-layout>

    <div class="font-manrope">
        {{-- hero section --}}
        <div class=" mx-24 overflow-hidden">

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
                            <img src="{{ $newsList->image }}" alt="Qatar flags" class="w-[55rem] h-[400px]  mb-4">

                            <div class="lg:col-span-2">

                                <h1 class="text-2xl font-bold text-purple-700 mt-2 mb-2">
                                    {{ $newsList->title }}
                                </h1>


                                <div class="flex items-center mb-4">
                                    <div class="bg-gray-200 rounded-full w-10 h-10 flex items-center justify-center">
                                        <img src="https://www.qatarliving.com/sites/all/themes/qatarliving_v3/images/avatar.jpeg"
                                            alt="author avatar" class="rounded-full w-full h-full">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-500 text-sm">By QLNews • 24 Sep 2024 10:09</p>
                                    </div>
                                </div>

                                <!-- Article Content -->
                                <div class="text-gray-700 space-y-4 tracking-wide ">
                                    {!! $newsList->details !!}
                                </div>
                            </div>


                            <div class="border-t border-gray-300 pt-4">
                                <p class="text-gray-700 mb-4">
                                    Make sure to check out our social media to keep track of the latest content.
                                </p>

                                <!-- Social Media Links -->
                                <ul class="list-none space-y-1 font-bold">
                                    <li>Instagram - <a href="#"
                                            class="hover:text-blue-600 text-blue-300">@qatarliving</a></li>
                                    <li>X - <a href="#" class="hover:text-blue-600 text-blue-300">@qatarliving</a>
                                    </li>
                                    <li>Facebook - <a href="#" class="hover:text-blue-600 text-blue-300">Nepalganj
                                            living</a></li>
                                    <li>YouTube - <a href="#" class="hover:text-blue-600 text-blue-300">Nepalganj
                                            living</li>
                                </ul>
                            </div>

                            <!-- Share Buttons -->
                            <div class="flex space-x-2 mt-4">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                    target="_blank">
                                    <button class="bg-blue-600 text-white px-8 py-2 rounded shadow hover:bg-blue-500">
                                        <i class="ti ti-brand-facebook text-xl"></i> Share
                                    </button>
                                </a>

                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text=Check%20this%20out!"
                                    target="_blank">
                                    <button class="bg-blue-400 text-white px-8 py-2 rounded shadow hover:bg-blue-300">
                                        <i class="ti ti-brand-twitter text-xl"></i> Tweet
                                    </button>
                                </a>

                                <a href="https://wa.me/?text={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                    <button class="bg-green-600 text-white px-8 py-2 rounded shadow hover:bg-green-500">
                                        <i class="ti ti-brand-whatsapp text-xl"></i> WhatsApp
                                    </button>
                                </a>
                            </div>

                            {{-- <div class="border-t border-gray-600 mt-8 pt-4">
                                <div class="flex items-center">
                                    <i class="ti ti-message text-xl text-gray-500"></i>
                                    <span class="ml-2 text-gray-500">0 comments</span>
                                </div>
                                <p class="mt-4">
                                    <a href="#" class="text-blue-600 hover:underline">Log in</a> or
                                    <a href="#" class="text-blue-600 hover:underline">register</a> to post
                                    comments.
                                </p>
                            </div> --}}

                        </div>

                        <div class="mt-12">
                            <h2 class="text-xl font-semibold mb-4">More from Neplgunj Living</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                <!-- Article 1 -->
                                @forelse ($relatedNews as $newsList)
                                    <a href="{{ route('newsDetail', $newsList) }}">
                                        <div class="bg-white  overflow-hidden mb-8">
                                            <img src="{{ $newsList->image }}" alt="Qatar’s top beaches"
                                                class="w-full h-32 object-cover">

                                            <p class="text-gray-700 font-bold text-sm">
                                                {{ Str::words($newsList->title, 5) }}</p>

                                        </div>
                                    </a>
                                @empty
                                    <p>No Data found!!</p>
                                @endforelse


                            </div>
                        </div>


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
                            <h3 class="text-sm font-semibold">Visit Qatar re-aligns itself to build Qatar as a
                                touristic
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



            <x-frontend.propertiesFooter.properties-footer />

        </div>


    </div>

</x-guest-layout>
