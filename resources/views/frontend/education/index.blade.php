<x-guest-layout>
    <div class="mx-4 md:mx-12 lg:mx-24 mt-4 font-mono">
        @foreach ($educationCategories as $educationCategory)
            <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured
                        {{ $educationCategory->title_en }}</h2>
                    @if ($educationCategory->type == 'school')
                        <p class="mt-1 text-gray-600">Explore our top schools, nurturing young minds and fostering
                            excellence in education.</p>
                    @elseif ($educationCategory->type == 'college')
                        <p class="mt-1 text-gray-600">Discover our leading colleges, preparing students for academic and
                            professional success.</p>
                    @elseif ($educationCategory->type == 'campus')
                        <p class="mt-1 text-gray-600">Explore our renowned campuses, shaping future leaders through
                            quality education and innovation.</p>
                    @elseif ($educationCategory->type == 'institute')
                        <p class="mt-1 text-gray-600">Learn more about our top institutes, offering specialized programs
                            and excellence in education.</p>
                    @endif
                </div>

                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    @if ($educationCategory->type == 'school')
                        @forelse ($educationCategory->educationLists->take(3) as $educationList)
                            <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                                href="{{ route('education.detailPage', $educationList) }}">
                                <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                                    <img class="w-full h-full object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($educationList->files) > 0 ? $educationList->files?->first()->file_url : '' }}"
                                        alt="Campus Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">{{ $educationList->name }}
                                </h3>
                                <p class="mt-2 text-gray-600">{!! Str::words($educationList->description, 10) !!}</p>
                                <p
                                    class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800">
                                    See more
                                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </a>
                        @empty
                            <p>No data found!</p>
                        @endforelse
                    @endif
                </div>


                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    @if ($educationCategory->type == 'college')
                        @forelse ($educationCategory->educationLists->take(3) as $educationList)
                            <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                                href="{{ route('education.detailPage', $educationList) }}">
                                <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                                    <img class="w-full h-full object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($educationList->files) > 0 ? $educationList->files?->first()->file_url : '' }}"
                                        alt="Campus Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">{{ $educationList->name }}
                                </h3>
                                <p class="mt-2 text-gray-600">{!! Str::words($educationList->description, 10) !!}</p>
                                <p
                                    class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800">
                                    See more
                                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </a>
                        @empty
                            <p>No data found!</p>
                        @endforelse
                    @endif
                </div>


                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    @if ($educationCategory->type == 'campus')
                        @forelse ($educationCategory->educationLists->take(3) as $educationList)
                            <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                                href="{{ route('education.detailPage', $educationList) }}">
                                <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                                    <img class="w-full h-full object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($educationList->files) > 0 ? $educationList->files?->first()->file_url : '' }}"
                                        alt="Campus Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">{{ $educationList->name }}
                                </h3>
                                <p class="mt-2 text-gray-600">{!! Str::words($educationList->description, 10) !!}</p>
                                <p
                                    class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800">
                                    See more
                                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </a>
                        @empty
                            <p>No data found!</p>
                        @endforelse
                    @endif
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    @if ($educationCategory->type == 'institute')
                        @forelse ($educationCategory->educationLists->take(3) as $educationList)
                            <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                                href="{{ route('education.detailPage', $educationList) }}">
                                <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                                    <img class="w-full h-full object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                                        src="{{ count($educationList->files) > 0 ? $educationList->files?->first()->file_url : '' }}"
                                        alt="Campus Image">
                                </div>
                                <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">{{ $educationList->name }}
                                </h3>
                                <p class="mt-2 text-gray-600">{!! Str::words($educationList->description, 10) !!}</p>
                                <p
                                    class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800">
                                    See more
                                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </a>
                        @empty
                            <p>No data found!</p>
                        @endforelse
                    @endif
                </div>

                <div class="flex justify-center items-center text-center mt-8">
                    <a href="{{ route('educationCategory',$educationCategory) }}"
                        class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-green-400">View
                        More</a>
                </div>
                <!-- End Grid -->
            </div>
        @endforeach

        <x-frontend.PropertiesFooter.properties-footer />
    </div>
</x-guest-layout>
