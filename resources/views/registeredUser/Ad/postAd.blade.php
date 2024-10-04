<x-guest-layout>
    <div class="block lg:grid grid-cols-3 gap-3 mx-16">

        <div class="col-span-2 mt-14">
            <h1 class="font-medium text-xl">Choose Category below to post your ad</h1>
            <div class="w-2/3 mt-10">
                <nav class="flex gap-x-14 ml-4" aria-label="Tabs" role="tablist">
                    <div>
                        @if (is_array($registeredUser->category) && in_array(propertyCategories()->first()?->mainCategory?->title_en, $registeredUser->category))


                        <button type="button" class="active text-blue-900 text-xl font-semibold" id="unstyled-tabs-item-1"
                            aria-selected="true" data-hs-tab="#unstyled-tabs-1" aria-controls="unstyled-tabs-1"
                            role="tab">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-building-skyscraper" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#1e3a8a" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
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
                    <div>
                        @if (is_array($registeredUser->category) && in_array(healthCareCategories()->first()?->mainCategory?->title_en, $registeredUser->category))

                        <button type="button" class="text-green-900 text-xl font-semibold" id="unstyled-tabs-item-2"
                            aria-selected="false" data-hs-tab="#unstyled-tabs-2" aria-controls="unstyled-tabs-2"
                            role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-first-aid-kit"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#064e3b"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <div>
                        @if (is_array($registeredUser->category) && in_array(educationCategories()->first()?->mainCategory?->title_en, $registeredUser->category))

                        <button type="button" class="text-red-900 text-xl font-semibold" id="unstyled-tabs-item-3"
                            aria-selected="false" data-hs-tab="#unstyled-tabs-3" aria-controls="unstyled-tabs-3"
                            role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f1d1d"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                            </svg>
                            Education
                        </button>
                        @endif
                    </div>
                    <div>
                        @if (is_array($registeredUser->category) && in_array(hospitalityCategories()->first()?->mainCategory?->title_en, $registeredUser->category))
                        <button type="button" class="text-yellow-900 text-xl font-semibold" id="unstyled-tabs-item-4"
                            aria-selected="false" data-hs-tab="#unstyled-tabs-4" aria-controls="unstyled-tabs-4"
                            role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                            </svg>
                            Hospitality
                        </button>
                    @endif

                    </div>
                </nav>
                <div class="mt-3">
                    <div id="unstyled-tabs-1" role="tabpanel" aria-labelledby="unstyled-tabs-item-1">
                        <ul>
                            @foreach (propertyCategories() as $propertyCategory)
                                <a href="{{ route('registeredUser.propertyCategory.create', $propertyCategory) }}">
                                    <li class="text-blue-900 text-xl font-semibold">{{ $propertyCategory->title_en }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-2" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-2">
                        <ul>
                            @foreach (healthCareCategories() as $healthCareCategory)
                                <a href="{{ route('registeredUser.healthCareCategory.create', $healthCareCategory) }}">
                                    <li class="text-green-900 text-xl font-semibold">{{ $healthCareCategory->title_en }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-3" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-3">
                        <ul>
                            @foreach (educationCategories() as $educationCategory)
                                <a href="{{ route('registeredUser.educationCategory.create', $educationCategory) }}">
                                    <li class="text-red-900 text-xl font-semibold">{{ $educationCategory->title_en }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div id="unstyled-tabs-4" class="hidden" role="tabpanel" aria-labelledby="unstyled-tabs-item-4">
                        <ul>
                            @foreach (hospitalityCategories() as $hospitalityCategory)
                                <a href="{{ route('registeredUser.hospitalityCategory.create', $hospitalityCategory) }}">
                                    <li class="text-yellow-900 text-xl font-semibold">{{ $hospitalityCategory->title_en }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-gray-500 p-4 mt-4">
                <h1 class="text-semibold font-2xl text-white leading-5 font-semibold">Here are some important rules for
                    creating classified ads.</h1>
            </div>
            <div class="bg-gray-100 p-4">
                <ul class="list-disc list-inside leading-5 text-sm p-3 text-justify">
                    <li>Add a suitable image - your ad may be promoted to the front page if you do</li>
                    <li>You must use a valid Qatari phone number for posting ads</li>
                    <li>Repeating ads is not allowed</li>
                    <li>Do not use repeated UPPERCASE letters and try to use correct English grammar</li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
