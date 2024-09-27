<ul class="space-y-3">
    <li
        class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
        <a href="#">Timeline</a>
        <p class="ml-auto"></p>
    </li>
    <a href="{{ route('registeredUser.profile.index') }}">
        <li
            class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
            Profile Edit
            <p class="ml-auto"></p>
        </li>
    </a>
    <a href="{{ route('registeredUser.propertyList.index') }}">
        <li
            class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
            Property List
            <p class="ml-auto">{{ getCounts()['propertyCount'] }}</p>
        </li>
    </a>
    <a href="{{ route('registeredUser.healthCareList.index') }}">
        <li
            class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
            Health Care
            <p class="ml-auto">0</p>
        </li>
    </a>
    <a href="{{ route('registeredUser.educationList.index') }}">
        <li
            class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
            Education
            <p class="ml-auto">0</p>
        </li>
    </a>
</ul>
