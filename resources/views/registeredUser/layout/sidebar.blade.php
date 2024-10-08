<ul class="space-y-3">




    <a href="{{ route('registeredUser.dashboard') }}">
        <li
        class="mt-2 mb-2 block {{ request()->routeIs('registeredUser.dashboard') ? 'bg-neutral-500 text-white' : ' hover:bg-neutral-800 hover:text-white' }} py-2 px-4 flex justify-center items-center gap-28 rounded-md">
      TimeLine
            <p class="ml-auto"></p>
        </li>
    </a>
    <a href="{{ route('registeredUser.profile.index') }}">
        <li
        class="mt-2 mb-2 block {{ request()->routeIs('registeredUser.profile.index') ? 'bg-neutral-500 text-white' : ' hover:bg-neutral-800 hover:text-white' }} py-2 px-4 flex justify-center items-center gap-28 rounded-md">
        Profile Edit
            <p class="ml-auto"></p>
        </li>
    </a>
    {{-- @dd(registeredUser()->category); --}}
    @if (is_array(registeredUser()->category) && in_array(propertyCategories()?->first()?->mainCategory?->title_en, registeredUser()->category))
    <a href="{{ route('registeredUser.propertyList.index') }}">
        <li
        class="mt-2 mb-2 block {{ request()->routeIs('registeredUser.propertyList.index') ? 'bg-neutral-500 text-white' : ' hover:bg-neutral-800 hover:text-white' }} py-2 px-4 flex justify-center items-center gap-28 rounded-md">
            Property List
            <p class="ml-auto">{{ getCounts()['propertyCount'] }}</p>
        </li>
    </a>
    @endif

    @if (is_array(registeredUser()->category) && in_array(healthCareCategories()?->first()?->mainCategory?->title_en, registeredUser()->category))

    <a href="{{ route('registeredUser.healthCareList.index') }}">
        <li
        class="mt-2 mb-2 block {{ request()->routeIs('registeredUser.healthCareList.index') ? 'bg-neutral-500 text-white' : ' hover:bg-neutral-800 hover:text-white' }} py-2 px-4 flex justify-center items-center gap-28 rounded-md">
            Health Care
            <p class="ml-auto">0</p>
        </li>
    </a>
    @endif

    @if (is_array(registeredUser()->category) && in_array(educationCategories()?->first()?->mainCategory?->title_en, registeredUser()->category))

    <a href="{{ route('registeredUser.educationList.index') }}">
        <li
        class="mt-2 mb-2 block {{ request()->routeIs('registeredUser.educationList.index') ? 'bg-neutral-500 text-white' : ' hover:bg-neutral-800 hover:text-white' }} py-2 px-4 flex justify-center items-center gap-28 rounded-md">
            Education
            <p class="ml-auto">0</p>
        </li>
    </a>
    @endif

    @if (is_array(registeredUser()->category) && in_array(hospitalityCategories()?->first()?->mainCategory?->title_en, registeredUser()->category))

    <a href="{{ route('registeredUser.hospitalityList.index') }}">
        <li
        class="mt-2 mb-2 block {{ request()->routeIs('registeredUser.hospitalityList.index') ? 'bg-neutral-500 text-white' : ' hover:bg-neutral-800 hover:text-white' }} py-2 px-4 flex justify-center items-center gap-28 rounded-md">
            Hospitality
            <p class="ml-auto">0</p>
        </li>
    </a>
    @endif
</ul>
