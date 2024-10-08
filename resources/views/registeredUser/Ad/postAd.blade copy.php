<x-guest-layout>
    <div class="block lg:grid grid-cols-1 lg:grid-cols-3 gap-3 mx-4 lg:mx-16 mb-20">
        <!-- Left Content: Categories and Tabs -->
        <div class="col-span-2 mt-8 lg:mt-14">
            <h1 class="font-medium text-lg lg:text-xl">Choose Category below to post your ad</h1>
            <div class="w-full  mt-6 lg:mt-10">
                <nav class="flex flex-wrap gap-x-8 lg:gap-x-14 ml-0 " aria-label="Tabs" role="tablist">
                    <!-- Property Tab -->
                    <div>
                        @if (is_array($registeredUser->category) &&
                                in_array(propertyCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <button type="button" class="active text-blue-900 text-base lg:text-xl font-semibold"
                                id="unstyled-tabs-item-1" aria-selected="true" data-hs-tab="#unstyled-tabs-1"
                                aria-controls="unstyled-tabs-1" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-building-skyscraper" width="36"
                                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1e3a8a"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l18 0" />
                                    <path d="M5 21v-14l8 -4v18" />
                                    <path d="M19 21v-10l-6 -4" />
                                    <path d="M9 9l0 .01" />
                                    <path d="M9 12l0 .01" />
                                    <path d="M9 15l0 .01" />
                                    <path d="M9 18l0 .01" />
                                </svg>
                                Properties
                            </button>
                        @endif
                    </div>
                    <!-- Health Tab -->
                    <div>
                        @if (is_array($registeredUser->category) &&
                                in_array(healthCareCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <button type="button" class="text-green-900 text-base lg:text-xl font-semibold"
                                id="unstyled-tabs-item-2" aria-selected="false" data-hs-tab="#unstyled-tabs-2"
                                aria-controls="unstyled-tabs-2" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-first-aid-kit" width="36" height="36"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#064e3b" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 8v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                    <path
                                        d="M4 8m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M10 14h4" />
                                    <path d="M12 12v4" />
                                </svg>
                                Health
                            </button>
                        @endif
                    </div>
                    <!-- Education Tab -->
                    <div>
                        @if (is_array($registeredUser->category) &&
                                in_array(educationCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <button type="button" class="text-red-900 text-base lg:text-xl font-semibold"
                                id="unstyled-tabs-item-3" aria-selected="false" data-hs-tab="#unstyled-tabs-3"
                                aria-controls="unstyled-tabs-3" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school"
                                    width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#7f1d1d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                                </svg>
                                Education
                            </button>
                        @endif
                    </div>
                    <!-- Hospitality Tab -->
                    <div>
                        @if (is_array($registeredUser->category) &&
                                in_array(hospitalityCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <button type="button" class="text-yellow-900 text-base lg:text-xl font-semibold"
                                id="unstyled-tabs-item-4" aria-selected="false" data-hs-tab="#unstyled-tabs-4"
                                aria-controls="unstyled-tabs-4" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school"
                                    width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                                </svg>
                                Hospitality
                            </button>
                        @endif
                    </div>
                    <div>
                        @if (is_array($registeredUser->category) &&
                                in_array(jobCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                            <button type="button" class="text-purple-900 text-base lg:text-xl font-semibold"
                                id="unstyled-tabs-item-5" aria-selected="false" data-hs-tab="#unstyled-tabs-5"
                                aria-controls="unstyled-tabs-5" role="tab">

                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#6b21a8" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9z" />
                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                </svg>
                                Job
                            </button>
                        @endif

                    </div>

                </nav>
                <!-- Tab Panels -->
                <div class="mt-3">
                    <div id="unstyled-tabs-1" role="tabpanel" aria-labelledby="unstyled-tabs-item-1">
                        <ul>
                            @foreach (propertyCategories() as $propertyCategory)
                                <a href="{{ route('registeredUser.propertyCategory.create', $propertyCategory) }}">
                                    <li class="text-blue-900 text-base lg:text-xl font-semibold">
                                        {{ $propertyCategory->title_en }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-2" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-2">
                        <ul>
                            @foreach (healthCareCategories() as $healthCareCategory)
                                <a href="{{ route('registeredUser.healthCareCategory.create', $healthCareCategory) }}">
                                    <li class="text-green-900 text-base lg:text-xl font-semibold">
                                        {{ $healthCareCategory->title_en }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-3" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-3">
                        <ul>
                            @foreach (educationCategories() as $educationCategory)
                                <a href="{{ route('registeredUser.educationCategory.create', $educationCategory) }}">
                                    <li class="text-red-900 text-base lg:text-xl font-semibold">
                                        {{ $educationCategory->title_en }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-4" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-4">
                        <ul>
                            @foreach (hospitalityCategories() as $hospitalityCategory)
                                <a
                                    href="{{ route('registeredUser.hospitalityCategory.create', $hospitalityCategory) }}">
                                    <li class="text-yellow-900 text-base lg:text-xl font-semibold">
                                        {{ $hospitalityCategory->title_en }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-5" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-5">
                        <ul>
                            @foreach (jobCategories() as $jobCategory)
                                <a href="{{ route('registeredUser.jobCategory.create', $jobCategory) }}">
                                    <li class="text-purple-900 text-base lg:text-xl font-semibold">
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
            <div class="bg-gray-500 p-4 mb-4">
                <h1 class="text-xl lg:text-2xl font-semibold text-white leading-5">Important rules for creating ads
                </h1>
            </div>
            <div class="bg-gray-100 p-4">
                <ul class="list-disc pl-4 space-y-2 text-base lg:text-lg">
                    <li>Provide accurate information for all fields.</li>
                    <li>Avoid any misleading content in your ad.</li>
                    <li>Ensure your contact details are correct for easy communication.</li>
                    <li>Comply with all local laws and regulations when posting ads.</li>
                </ul>
            </div>
        </div>
    </div>


    @include('frontend.layout.footer')

</x-guest-layout>
