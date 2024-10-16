<x-guest-layout>
    <div class=" font-manrope block lg:grid grid-cols-1 lg:grid-cols-3 gap-3 mx-4 lg:mx-16 mb-40 min-h-screen">
        <!-- Left Content: Categories and Tabs -->
        <div class="col-span-2 mt-8 lg:mt-14">
            <h1 class="font-medium text-lg lg:text-xl">Choose Category below to post your ad</h1>
            <div class="w-full  mt-6 lg:mt-10">
                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <nav class="flex flex-wrap  ml-0 " aria-label="Tabs" role="tablist">
                        <div>
                            @if (is_array($registeredUser->category) &&
                                in_array(propertyCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:text-red-600
    hs-tab-active:border-b-red-600 text-black border-b-2 border-b-black
    py-4 px-9 inline-flex flex-col items-center gap-x-2 gap-y-2 text-sm
    whitespace-nowrap  focus:outline-none focus:text-red-600
    disabled:opacity-50 disabled:pointer-events-none border-transparent"
                                        id="tabs-with-underline-item-1" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1"
                                        role="tab">

                                    <!-- SVG with dynamic stroke color based on active state -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-building-skyscraper hs-tab-active:stroke-red-600 stroke-black"
                                         width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 21l18 0"/>
                                        <path d="M5 21v-14l8 -4v18"/>
                                        <path d="M19 21v-10l-6 -4"/>
                                        <path d="M9 9l0 .01"/>
                                        <path d="M9 12l0 .01"/>
                                        <path d="M9 15l0 .01"/>
                                        <path d="M9 18l0 .01"/>
                                    </svg>

                                    <span
                                        class="block">{{ propertyCategories()->first()?->mainCategory?->title_en }}</span>
                                </button>
                            @endif
                        </div>


                        <div>
                            @if (is_array($registeredUser->category) &&
                                    in_array(healthCareCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:text-green-600
            hs-tab-active:border-b-green-600 text-black border-b-2 border-b-black
            py-4 px-9 inline-flex flex-col items-center gap-x-2 gap-y-2 text-sm
            whitespace-nowrap  focus:outline-none focus:text-green-600
            disabled:opacity-50 disabled:pointer-events-none border-transparent"
                                        id="tabs-with-underline-item-2" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2"
                                        role="tab">

                                    <!-- SVG Icon with dynamic stroke -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-first-aid-kit hs-tab-active:stroke-green-600 stroke-black"
                                         width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M8 8v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"/>
                                        <path
                                            d="M4 8m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/>
                                        <path d="M10 14h4"/>
                                        <path d="M12 12v4"/>
                                    </svg>

                                    <!-- Category Title -->
                                    {{ healthCareCategories()->first()?->mainCategory?->title_en }}
                                </button>
                            @endif
                        </div>


                        <div>
                            @if (is_array($registeredUser->category) &&
                                    in_array(educationCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:text-blue-600
            hs-tab-active:border-b-blue-600 text-black border-b-2 border-b-black
            py-4 px-9 inline-flex flex-col items-center gap-x-2 gap-y-2 text-sm
            whitespace-nowrap focus:outline-none focus:text-blue-600
            disabled:opacity-50 disabled:pointer-events-none border-transparent"
                                        id="tabs-with-underline-item-3" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-3" aria-controls="tabs-with-underline-3"
                                        role="tab">

                                    <!-- SVG Icon with dynamic stroke -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-school hs-tab-active:stroke-blue-600 stroke-black"
                                         width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"/>
                                        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"/>
                                    </svg>

                                    <!-- Category Title -->
                                    {{ educationCategories()->first()?->mainCategory?->title_en }}
                                </button>
                            @endif
                        </div>
                        <div>
                            @if (is_array($registeredUser->category) &&
                                in_array(hospitalityCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:text-yellow-600
                hs-tab-active:border-b-yellow-600 text-black border-b-2 border-b-black
                py-4 px-9 inline-flex flex-col items-center gap-x-2 gap-y-2 text-sm
                whitespace-nowrap focus:outline-none focus:text-yellow-600
                disabled:opacity-50 disabled:pointer-events-none"
                                        aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-4" aria-controls="tabs-with-underline-4"
                                        role="tab">

                                    <!-- SVG Icon with active and inactive color -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-building-estate
                        hs-tab-active:stroke-yellow-600 stroke-black">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 21h18"/>
                                        <path d="M19 21v-4"/>
                                        <path d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z"/>
                                        <path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14"/>
                                        <path d="M9 17v4"/>
                                        <path d="M8 13h2"/>
                                        <path d="M8 9h2"/>
                                    </svg>

                                    {{ hospitalityCategories()->first()?->mainCategory?->title_en }}
                                </button>
                            @endif
                        </div>

                        <div>
                            @if (is_array($registeredUser->category) &&
                                in_array(jobCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:text-purple-600
                hs-tab-active:border-b-purple-600 text-black border-b-2 border-transparent
                py-4 px-9 inline-flex flex-col items-center gap-x-2 gap-y-2 text-sm
                whitespace-nowrap focus:outline-none focus:text-purple-600
                disabled:opacity-50 disabled:pointer-events-none"
                                        aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-5" aria-controls="tabs-with-underline-5"
                                        role="tab">

                                    <!-- SVG Icon with active and inactive color -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase-2
                        hs-tab-active:stroke-purple-600 stroke-black">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9z"/>
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"/>
                                    </svg>

                                    {{ jobCategories()->first()?->mainCategory?->title_en }}
                                </button>
                            @endif
                        </div>


                    </nav>
                </div>

                <div class="mt-3">
                    @if (is_array($registeredUser->category) &&
                            in_array(propertyCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->propertyCategories as $propertyCategory)
                                        <a
                                            href="{{ route('registeredUser.propertyCategory.create', $propertyCategory) }}">
                                            <li class="text-red-900 text-base lg:text-xl font-semibold">
                                                {{ $propertyCategory->title_en }}</li>
                                        </a>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (is_array($registeredUser->category) &&
                                in_array(healthCareCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-2" class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}"
                             role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->healthCareCategories as $healthCareCategory)
                                        <a
                                            href="{{ route('registeredUser.healthCareCategory.create', $healthCareCategory) }}">
                                            <li class="text-green-600 text-base lg:text-xl font-semibold">
                                                {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                                {{ $healthCareCategory->title_en }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif
                    @if (is_array($registeredUser->category) &&
                                in_array(educationCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-3" class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}"
                             role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->educationCategories as $educationCategory)
                                        <a
                                            href="{{ route('registeredUser.educationCategory.create', $educationCategory) }}">
                                            <li class="text-blue-600 text-base lg:text-xl font-semibold">
                                                {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                                {{ $educationCategory->title_en }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif
                    @if (is_array($registeredUser->category) &&
                                in_array(hospitalityCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-4" class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}"
                             role="tabpanel" aria-labelledby="tabs-with-underline-item-4">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->hospitalityCategories as $hospitalityCategory)
                                        <a
                                            href="{{ route('registeredUser.hospitalityCategory.create', $hospitalityCategory) }}">
                                            <li class="text-yellow-600 text-base lg:text-xl font-semibold">
                                                {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                                {{ $hospitalityCategory->title_en }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif
                    @if (is_array($registeredUser->category) &&
                                in_array(jobCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-5" class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}"
                             role="tabpanel" aria-labelledby="tabs-with-underline-item-5">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->jobCategories as $jobCategory)
                                        <a
                                            href="{{ route('registeredUser.jobCategory.create', $jobCategory) }}">
                                            <li class="text-blue-900 text-base lg:text-xl font-semibold">
                                                {{ $jobCategory->title }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif


                </div>
            </div>
        </div>
        <!-- Right Content: Rules Section -->
        <div class="mt-8 ">
            <div class="bg-gray-500 p-4">
                <h1 class="text-lg  font-semibold text-white leading-5">Here are some important rules for creating
                    classified ads.
                </h1>
            </div>
            <div class="bg-gray-100 p-4">
                <ul class="list-disc pl-4 space-y-2 text-base ">
                    <li>Provide accurate information for all fields.</li>
                    <li>Avoid any misleading content in your ad.</li>
                    <li>Ensure your contact details are correct for easy communication.</li>
                    <li>Comply with all local laws and regulations when posting ads.</li>
                </ul>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to handle tab switching
            function switchTab(tabId) {
                // Hide all tab content
                document.querySelectorAll('[role="tabpanel"]').forEach(function (tabPanel) {
                    tabPanel.classList.add('hidden');
                });

                // Set all tabs as unselected
                document.querySelectorAll('[role="tab"]').forEach(function (tab) {
                    tab.setAttribute('aria-selected', 'false');
                });

                // Show the selected tab content
                document.querySelector(tabId).classList.remove('hidden');
            }

            // Add click event listeners to each tab button
            document.querySelectorAll('[role="tab"]').forEach(function (tabButton) {
                tabButton.addEventListener('click', function () {
                    const targetTab = tabButton.getAttribute('data-hs-tab');
                    switchTab(targetTab);

                    // Set clicked tab as selected
                    tabButton.setAttribute('aria-selected', 'true');
                });
            });

            // Check if tab 1 is present, otherwise default to tab 2
            if (!document.querySelector("#tabs-with-underline-item-1")) {
                document.querySelector("#tabs-with-underline-item-2").setAttribute('aria-selected', 'true');
                switchTab("#tabs-with-underline-2");
            }
        });
    </script>
</x-guest-layout>
