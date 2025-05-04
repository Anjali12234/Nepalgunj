<div class="bg-gray-100 sm:px-6 lg:pl-[7rem] p-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 items-center py-8">
        <!-- Subscription Section -->
        <div class="flex flex-col items-start text-center md:text-left">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Subscribe for our news and updates</h2>
            <div class="flex w-full justify-center md:justify-start">
                <input type="email" placeholder="Email" class="border border-gray-300 p-2 flex-grow mr-2 rounded" />
                <button class="bg-neutral-700 hover:bg-neutral-800 text-white px-4 py-2 rounded">Subscribe</button>
            </div>
        </div>

        <!-- Social Media Icons Section -->
        <!-- Social Media Icons Section -->
        <div class="flex flex-col items-center justify-center text-center">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Follow {{ setting()->name_en ?? '' }}</h2>
            <div class="flex space-x-2 justify-center">
                <!-- Replace # with actual social media links -->
                <a href="{{ setting()->instagram_url ?? '' }}" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                    <i class="ti ti-brand-instagram text-2xl"></i>
                </a>
                <a href="{{ setting()->facebook_url ?? '' }}" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                    <i class="ti ti-brand-facebook text-2xl"></i>
                </a>
                <a href="{{ setting()->twitter_url ?? '' }}" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                    <i class="ti ti-brand-x text-2xl"></i>
                </a>
                <a href="{{ setting()->youtube_url ?? '' }}" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                    <i class="ti ti-brand-youtube text-2xl"></i>
                </a>

                <a href="https://tiktok.com/@yourTiktokPage" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                    <i class="ti ti-brand-tiktok text-2xl"></i>
                </a>
                <a href="https://snapchat.com/add/yourSnapchatPage" class="bg-white p-2 rounded hover:bg-neutral-800 hover:text-white">
                    <i class="ti ti-brand-snapchat text-2xl"></i>
                </a>
            </div>
        </div>


        <!-- App Download Section -->
        <div class="flex flex-col items-start text-center md:text-left">
            <h2 class="text-lg font-semibold text-gray-700 mt-7">{{ setting()->name_en ?? '' }}</h2>
            <a href="{{route('welcome')}}" class="block">
                <img loading="lazy" src="{{ setting()->logo1 ?? '' }}" alt="{{ setting()->name_en ?? '' }}" class="h-20 mx-auto md:mx-0">
            </a>
        </div>
    </div>
</div>

<div class="bg-gray-100 h-auto sm:px-6 lg:px-8 mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mx-4 md:mx-16 p-4">
        <div class="p-4 text-center md:text-left">
            <p class="text-[14px]">Want to advertise on our site? Here are the <span class="text-neutral-700"><a href="">Advertising terms.</a></span></p>
        </div>

        <div class="p-4 text-center md:text-left">
            <p class="text-[14px]">Help us improve {{ setting()->name_en ?? '' }}. <span class="text-neutral-700">Send us feedback now or</span> <span class="text-neutral-700"><a href=""> Contact us.</a></span></p>
        </div>
        <div class="p-4 text-center md:text-left">
            <p class="text-neutral-700 text-[14px]"><a href="">Help Rules for posting in the Classifieds</a></p>
        </div>
        <div class="p-4 text-center md:text-left">
            <p class="text-neutral-700 text-[14px]"><a href="">Website terms Advertising Terms</a></p>
        </div>
    </div>
</div>
