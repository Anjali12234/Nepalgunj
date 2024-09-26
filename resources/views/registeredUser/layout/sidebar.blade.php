<ul class="space-y-3">
    <li class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
        <a href="#">Timeline</a>
        <p class="ml-auto"></p>
    </li>
    <li class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
        <a href="{{ route('registeredUser.profile.index') }}">Profile Edit</a>
        <p class="ml-auto"></p>
    </li>
    <li class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
        <a href="{{ route('registeredUser.propertyList.index') }}">Property List</a>
        <p class="ml-auto">{{ getCounts()['propertyCount'] }}</p>
    </li>
    <li class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
        <a href="{{ route('registeredUser.healthCareList.index') }}">Health Care</a>
        <p class="ml-auto">0</p>
    </li>
    <li class="bg-white text-black hover:bg-neutral-800 hover:text-white active:bg-neutral-800 focus:bg-neutral-800 focus:text-white py-1 px-4 flex items-center gap-28">
        <a href="{{ route('registeredUser.educationList.index') }}">Education</a>
        <p class="ml-auto">0</p>
    </li>
</ul>
