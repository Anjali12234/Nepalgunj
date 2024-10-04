<div class="bg-gray-100 sm:px-6 lg:px-8 mx-4 md:mx-24 p-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 items-center py-8">
        <!-- Subscription Section -->
        <div class="flex flex-col items-start">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Subscribe for our news and updates</h2>
            <div class="flex w-full">
                <input type="email" placeholder="Email" class="border border-gray-300 p-2 flex-grow mr-2 rounded" />
                <button class="bg-neutral-700 hover:bg-neutral-800 text-white px-4 py-2 rounded">Subscribe</button>
            </div>
        </div>

        <!-- Social Media Icons Section -->
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Follow {{ setting()->name_en ?? '' }}</h2>
            <div class="flex space-x-2">
                @foreach (['instagram', 'facebook', 'x', 'youtube', 'linkedin', 'tiktok', 'snapchat'] as $social)
                    <a href="#" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                        <i class="ti ti-brand-{{ $social }} text-2xl"></i>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- App Download Section -->
        <div class="flex flex-col items-start">
            <h2 class="text-lg font-semibold text-gray-700 mt-7">{{ setting()->name_en ?? '' }}</h2>
            <a href="#" class="block">
                <img src="{{ setting()->logo1 ?? '' }}" alt="{{ setting()->name_en ?? '' }}" class="h-20">
            </a>
        </div>
    </div>
</div>

<div class="p-4 mb-4 mx-4 md:mx-24 sm:px-6 ">
    <div class="p-8 grid grid-cols-1 md:grid-cols-5 gap-8">
        <div>
            <h2 class="text-sky-700 font-semibold text-lg mb-2">Properties</h2>
            <ul class="space-y-1">
                @foreach ($sharedCategory as $mainCategory)
                    @foreach ($mainCategory->propertyCategories as $propertyCategory)
                        <a href="{{ route('properties', ['propertyCategorySlug' => $propertyCategory->slug, 'is_rent' => request('is_rent')]) }}">
                            <li>{{ $propertyCategory->title_en }}</li>
                        </a>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="text-green-700 text-lg font-semibold mb-2">HealthCares</h2>
            <ul class="space-y-1">
                @foreach ($sharedCategory as $mainCategory)
                    @foreach ($mainCategory->healthCareCategories as $healthCare)
                        <a href="{{ route('healthCare', $healthCare) }}">
                            <li>{{ $healthCare->title_en }}</li>
                        </a>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="text-yellow-400 text-lg font-semibold mb-2">Educations</h2>
            <ul class="space-y-1">
                @foreach ($sharedCategory as $mainCategory)
                    @foreach ($mainCategory->educationCategories as $educationCategory)
                        <a href="{{ route('educationCategory', $educationCategory) }}">
                            <li>{{ $educationCategory->title_en }}</li>
                        </a>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="text-orange-400 text-lg font-semibold mb-2">Services</h2>
            <ul class="space-y-1">
                <li>News</li>
                <li>New posts</li>
                <li>Events</li>
                <li>Groups</li>
            </ul>
        </div>
        <div>
            <h2 class="text-stone-600 text-lg font-semibold mb-2">Jobs</h2>
            <ul class="space-y-1">
                <li>News</li>
                <li>New posts</li>
                <li>Events</li>
                <li>Groups</li>
            </ul>
        </div>
    </div>
</div>

<div class="p-4 mb-4 mx-4 md:mx-24 sm:px-6">
    <div class="p-8 grid grid-cols-1 bg-gray-100 md:grid-cols-3 gap-8">
        <div>
            <h2 class="text-sky-700 font-semibold text-lg mb-2">News</h2>
            <ul class="space-y-1">
                @foreach ($sharedNews as $newsCategory)
                    <li>{{ $newsCategory->title }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="text-sky-700 text-lg font-semibold mb-2">More</h2>
            <ul class="space-y-1">
                <li>News</li>
                <li>New posts</li>
                <li>Events</li>
                <li>Groups</li>
            </ul>
        </div>
        <div class="grid grid-cols-2 mt-8 gap-4">
            <ul class="space-y-1">
                <li>eShops</li>
                <li>Forums</li>
                <li>Videos</li>
                <li>Living2022</li>
            </ul>
            <ul class="space-y-1">
                <li>QL Event</li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-gray-100 h-auto sm:px-6 lg:px-8 mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mx-4 md:mx-16 p-4">
        <div class="p-4">
            <p class="text-[14px]">Want to advertise on our site? Here are the <span class="text-neutral-700"><a href="">Advertising terms.</a></span></p>
        </div>

        <div class="p-4">
            <p class="text-[14px]">Help us improve {{ setting()->name_en ?? '' }}. <span class="text-neutral-700">Send us feedback now or</span> <span class="text-neutral-700"><a href=""> Contact us.</a></span></p>
        </div>
        <div class="p-4">
            <p class="text-neutral-700 text-[14px]"><a href="">Help Rules for posting in the Classifieds</a></p>
        </div>
        <div class="p-4">
            <p class="text-neutral-700 text-[14px]"><a href="">Website terms Advertising Terms</a></p>
        </div>
    </div>
</div>
