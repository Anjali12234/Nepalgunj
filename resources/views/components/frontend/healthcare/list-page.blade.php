@props(['healthCare'])
<div class="px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl sm:text-3xl font-bold md:text-4xl md:leading-tight">{{ $healthCare->title_en }}</h2>

        @if ($healthCare->type == 'Doctor')
            <p class="mt-1 text-gray-600">Meet our top doctors, leading the way in medical excellence and patient
                care.</p>
        @elseif ($healthCare->type == 'Hospital')
            <p class="mt-1 text-gray-600">Discover our top hospitals, setting the standard in medical excellence and
                patient care.</p>
        @elseif ($healthCare->type == 'Pharmacy')
            <p class="mt-1 text-gray-600">Explore our leading pharmacies, committed to medical excellence and patient
                care.</p>
        @elseif ($healthCare->type == 'Medical')
            <p class="mt-1 text-gray-600">Learn more about our top medical services, pioneering excellence in patient
                care.</p>
        @endif
    </div>

    <!-- Responsive Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        @if ($healthCare->type == 'Doctor')
            @foreach ($healthCare->healthCareLists as $healthCareList)
                <a class="group border border-neutral-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-4 sm:p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                   href="{{ route('healthcare.detailPage', $healthCareList) }}">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                        <img
                            class="w-full h-60 object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                            src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                            alt="Blog Image">
                    </div>
                    <h3 class="mt-4 text-lg sm:text-xl text-gray-700 hover:text-neutral-800">
                        {{ $healthCareList->name }}
                    </h3>
                    <button
                        class="mt-3 bg-neutral-700 hover:bg-neutral-800 inline-flex items-center gap-x-1 text-sm font-semibold text-white rounded-lg px-3 py-2">
                        Learn more
                        <svg
                            class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>
                </a>
            @endforeach
        @elseif ($healthCare->type == 'Hospital')
            @foreach ($healthCare->healthCareLists as $healthCareList)
                <a class="group border border-neutral-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-4 sm:p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                   href="{{ route('healthcare.detailPage', $healthCareList) }}">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                        <img
                            class="w-full h-60 object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                            src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                            alt="Hospital Image">
                    </div>
                    <h3 class="mt-4 text-lg sm:text-xl text-gray-700 hover:text-neutral-800">
                        {{ $healthCareList->name }}
                    </h3>
                    <button
                        class="mt-3 bg-neutral-700 hover:bg-neutral-800 inline-flex items-center gap-x-1 text-sm font-semibold text-white rounded-lg px-3 py-2">
                        Learn more
                        <svg
                            class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>
                </a>
            @endforeach
        @elseif ($healthCare->type == 'Pharmacy')
            @foreach ($healthCare->healthCareLists as $healthCareList)
                <a class="group border border-neutral-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-4 sm:p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                   href="{{ route('healthcare.detailPage', $healthCareList) }}">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                        <img
                            class="w-full h-60 object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                            src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                            alt="Blog Image">
                    </div>
                    <h3 class="mt-4 text-lg sm:text-xl text-gray-700 hover:text-neutral-800">
                        {{ $healthCareList->name }}
                    </h3>
                    <button
                        class="mt-3 bg-neutral-700 hover:bg-neutral-800 inline-flex items-center gap-x-1 text-sm font-semibold text-white rounded-lg px-3 py-2">
                        Learn more
                        <svg
                            class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>
                </a>
            @endforeach
        @elseif ($healthCare->type == 'Medical')
            @foreach ($healthCare->healthCareLists as $healthCareList)
                <a class="group border border-neutral-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-4 sm:p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                   href="{{ route('healthcare.detailPage', $healthCareList) }}">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-xl">
                        <img
                            class="w-full h-60 object-cover rounded-xl transition-transform duration-300 transform group-hover:scale-105"
                            src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                            alt="Blog Image">
                    </div>
                    <h3 class="mt-4 text-lg sm:text-xl text-gray-700 hover:text-neutral-800">
                        {{ $healthCareList->name }}
                    </h3>
                    <button
                        class="mt-3 bg-neutral-700 hover:bg-neutral-800 inline-flex items-center gap-x-1 text-sm font-semibold text-white rounded-lg px-3 py-2">
                        Learn more
                        <svg
                            class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>
                </a>
            @endforeach
        @endif
    </div>

</div>
