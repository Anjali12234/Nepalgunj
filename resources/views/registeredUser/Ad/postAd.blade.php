<x-guest-layout>
    <div class=" font-manrope block lg:grid grid-cols-1 lg:grid-cols-3 gap-3 mx-4 lg:mx-16 mb-40">
        <!-- Left Content: Categories and Tabs -->
        <div class="col-span-2 mt-8 lg:mt-14">
            <h1 class="font-medium text-lg lg:text-xl">Choose Category below to post your ad</h1>
            <div class="w-full  mt-6 lg:mt-10">
                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <nav class="flex flex-wrap gap-x-8 lg:gap-x-14 ml-0 " aria-label="Tabs" role="tablist">

                        @if (is_array($registeredUser->category) &&
                                in_array(propertyCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <div>
                                <button type="button"
                                        class="tab-button hs-tab-active:font-semibold hs-tab-active:border-blue-600 py-4 px-1 inline-flex flex-col items-center gap-x-2 gap-y-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                                        id="tabs-with-underline-item-1" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1"
                                        role="tab">
                                    <i class="ti ti-building text-4xl"></i>
                                    <span
                                        class="block">{{ propertyCategories()->first()?->mainCategory?->title_en }}</span>
                                </button>
                            </div>
                        @endif
                        @if (is_array($registeredUser->category) &&
                                in_array(healthCareCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <div>
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex flex-col items-center gap-x-2 gap-y-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                                        id="tabs-with-underline-item-1" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2"
                                        role="tab">
                                    <i class="ti ti-first-aid-kit text-4xl"></i>
                                    <span
                                        class="block">{{ healthCareCategories()->first()?->mainCategory?->title_en }}</span>
                                </button>
                            </div>
                        @endif
                        @if (is_array($registeredUser->category) &&
                                in_array(educationCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <div>

                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex flex-col items-center gap-x-2 gap-y-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                                        id="tabs-with-underline-item-3" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-3" aria-controls="tabs-with-underline-3"
                                        role="tab">
                                    <i class="ti ti-school text-4xl"></i>
                                    <span
                                        class="block">{{ educationCategories()->first()?->mainCategory?->title_en }}</span>
                                </button>
                            </div>
                        @endif
                        @if (is_array($registeredUser->category) &&
                                in_array(entertainmentCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <div>

                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex flex-col items-center gap-x-2 gap-y-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                                        id="tabs-with-underline-item-6" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-6" aria-controls="tabs-with-underline-3"
                                        role="tab">
                                    <i class="ti ti-heart-plus text-4xl"></i>
                                    <span
                                        class="block">{{ entertainmentCategories()->first()?->mainCategory?->title_en }}</span>
                                </button>
                            </div>
                        @endif
                        @if (is_array($registeredUser->category) &&
                                in_array(hospitalityCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <div>
                                <button type="button"
                                        class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex flex-col items-center gap-x-2 gap-y-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                                        id="tabs-with-underline-item-4" aria-selected="true"
                                        data-hs-tab="#tabs-with-underline-4" aria-controls="tabs-with-underline-4"
                                        role="tab">
                                    <i class="ti ti-hotel-service text-4xl"></i>
                                    
                                    <span
                                        class="block">{{ hospitalityCategories()->first()?->mainCategory?->title_en }}</span>
                                </button>
                            </div>
                        @endif

                        <div>
                            <button type="button"
                                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex flex-col items-center gap-x-2 gap-y-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                                    id="tabs-with-underline-item-5" aria-selected="true"
                                    data-hs-tab="#tabs-with-underline-5" aria-controls="tabs-with-underline-5"
                                    role="tab">
                                <i class="ti ti-briefcase text-4xl"></i>
                                <span class="block">Job</span>
                            </button>
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
                                        <a href="{{ route('registeredUser.propertyCategory.create', $propertyCategory) }}">
                                            <li class="text-blue-900 text-base lg:text-lg font-semibold bg-gray-100 hover:bg-gray-200 p-4 rounded-md mb-2">
                                                {{ $propertyCategory->title_en }}
                                            </li>
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
                                            <li class="text-blue-900 text-base lg:text-lg font-semibold bg-gray-100 hover:bg-gray-200 p-4 rounded-md mb-2">
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
                                            <li class="text-blue-900 text-base lg:text-lg font-semibold bg-gray-100 hover:bg-gray-200 p-4 rounded-md mb-2">
                                                {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                                {{ $educationCategory->title_en }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif
                    @if (is_array($registeredUser->category) &&
                            in_array(entertainmentCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-6" class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}"
                             role="tabpanel" aria-labelledby="tabs-with-underline-item-6">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->entertainmentCategories as $entertainmentCategory)
                                        <a
                                            href="{{ route('registeredUser.entertainmentCategory.create', $entertainmentCategory) }}">
                                            <li class="text-blue-900 text-base lg:text-lg font-semibold bg-gray-100 hover:bg-gray-200 p-4 rounded-md mb-2">
                                                {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                                {{ $entertainmentCategory->title }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif
                    @if (is_array($registeredUser->category) &&
                            in_array(hospitalityCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <div id="tabs-with-underline-4"
                             class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}" role="tabpanel"
                             aria-labelledby="tabs-with-underline-item-4">
                            <ul>
                                @foreach ($sharedCategory as $mainCategory)
                                    @foreach ($mainCategory->hospitalityCategories as $hospitalityCategory)
                                        <a
                                            href="{{ route('registeredUser.hospitalityCategory.create', $hospitalityCategory) }}">
                                            <li class="text-blue-900 text-base lg:text-lg font-semibold bg-gray-100 hover:bg-gray-200 p-4 rounded-md mb-2">
                                                {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                                {{ $hospitalityCategory->title_en }}</li>
                                        </a>
                                    @endforeach
                                @endforeach

                            </ul>
                        </div>
                    @endif

                    <div id="tabs-with-underline-5"
                         class="{{ !isset($registeredUser->category) ? '' : 'hidden' }}" role="tabpanel"
                         aria-labelledby="tabs-with-underline-item-5">
                        <ul>
                            @foreach ($jobCategories as $jobCategory)
                                <a href="{{ route('registeredUser.jobCategory.create', $jobCategory) }}">
                                    <li class="text-blue-900 text-base lg:text-lg font-semibold bg-gray-100 hover:bg-gray-200 p-4 rounded-md mb-2">
                                        {{-- @dd(hospitalityCategories()->first()?->mainCategory); --}}
                                        {{ $jobCategory->title }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
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

    @include('frontend.layout.footer')

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
