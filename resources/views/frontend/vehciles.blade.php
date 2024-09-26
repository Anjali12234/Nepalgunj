<x-guest-layout>
    <div class="mx-24">
        <div class="flex mt-3 justify-center items-center bg-gray-100 py-4 ">
            <div class="grid grid-cols-10 gap-6">
                <!-- Item 1 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-car text-2xl"></i>
                    <p class="text-gray-600 text-xs">Cars for sale</p>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-shopping-cart-bolt text-2xl"></i>
                    <p class="text-gray-600 text-xs">Showrooms</p>

                </div>
                <!-- Item 3 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-key text-2xl"></i>
                    <p class="text-gray-600 text-xs">Car Rentals</p>
                </div>
                <!-- Item 4 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-truck-return text-2xl"></i>
                    <p class="text-gray-600 text-xs">Rental Companies</p>
                </div>
                <!-- Item 5 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-truck text-2xl"></i>
                    <p class="text-gray-600 text-xs">Commercial Vehicles</p>
                </div>
                <!-- Item 6 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-brand-framer-motion text-2xl"></i>

                    <p class="text-gray-600 text-xs">Garages</p>
                </div>
                <!-- Item 7 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-bike text-2xl"></i>
                    <p class="text-gray-600 text-xs">Motorbikes</p>
                </div>
                <!-- Item 8 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-speedboat text-2xl"></i>
                    <p class="text-gray-600 text-xs">Boat/Yachts</p>
                </div>
                <!-- Item 9 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-license text-2xl"></i>
                    <p class="text-gray-600 text-xs">Plate Number</p>
                </div>
                <!-- Item 10 -->
                <div class="flex flex-col justify-center items-center">
                    <i class="ti ti-car-crash text-2xl"></i>

                    <p class="text-gray-600 text-xs">Car Parts</p>
                </div>
            </div>
        </div>
        <div class="mt-2 ">
            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/desktop-landing-heroimg.6d7f4cfc.webp"
                alt="">
        </div>

        {{-- tab section --}}
        <div class="p-6 mt-4">
            <div class="bg-gray-300 p-4 rounded-lg">
                <div class="relative flex justify-center mb-4">
                    <div class="bg-white p-2 mt-[-48px] rounded-lg flex  shadow">
                        <button id="buyTab" onclick="showTab('buy')"
                            class="px-8 py-3 bg-purple-700 text-white rounded-lg  text-md">Buy</button>
                        <button id="sellTab" onclick="showTab('sell')"
                            class="px-8 py-3 text-gray-700 rounded-lg text-md">Sell</button>
                    </div>

                </div>

                <!-- Buy Tab Content -->
                <div id="buyContent" class="flex space-x-1 mt-12 mb-10 items-center justify-center">
                    <select class="border border-gray-300  p-4 w-48">
                        <option>Choose</option>
                    </select>
                    <div>

                        <select class="border border-gray-300  p-4 w-48">
                            <option>Choose</option>
                        </select>
                    </div>

                    <select class="border border-gray-300  p-4 w-48">
                        <option>Min</option>
                    </select>
                    <select class="border border-gray-300  p-4 w-48">
                        <option>Max</option>
                    </select>
                    <button class="bg-purple-700 text-white px-6 py-4  hover:bg-purple-800">
                        Show 8,607 Results
                    </button>
                </div>


                <div id="sellContent">
                    <div class="flex space-x-1 mt-12 mb-10 items-center justify-center">
                        <select class="border border-gray-300  p-4 w-[40rem]">
                            <option>Choose</option>
                        </select>
                        <button class="bg-purple-700 text-white px-6 py-4  hover:bg-purple-800">
                            Show 8,607 Results
                        </button>
                    </div>

                    <hr class="mb-4">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="text-3xl font-bold text-center mb-10">Get more views and sell faster than regular ads
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-3">
                            <div class="text-center">
                                <div class="bg-purple-600 rounded-lg p-4 inline-block mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">Get up to</h3>
                                <p class="text-4xl font-bold mb-2">15X <span class="text-xl">more views</span></p>
                                <p class="text-gray-600">Increase your ad's visibility by up to 15X among over 250,000
                                    monthly users, ensuring it stands out and gets noticed.</p>
                            </div>

                            <div class="text-center">
                                <div class="bg-purple-600 rounded-lg p-4 inline-block mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">Get up to</h3>
                                <p class="text-4xl font-bold mb-2">9X <span class="text-xl">more ad visits</span></p>
                                <p class="text-gray-600">Boost your ad to the top, drawing up to 9X more clicks and
                                    converting views into valuable leads.</p>
                            </div>

                            <div class="text-center">
                                <div class="bg-purple-600 rounded-lg p-4 inline-block mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">Sell up to</h3>
                                <p class="text-4xl font-bold mb-2">3X <span class="text-xl">faster</span></p>
                                <p class="text-gray-600">Speed up your sales process through increased visibility and
                                    engagement, selling up to 3X faster on our platform.</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="mt-8">
                <h2 class="text-xl font-bold text-center">Promoted Cars</h2>
                <div class="relative">
                    <!-- Slider Container -->
                    <div id="slider"
                        class="overflow-x-auto flex space-x-4 py-8 scrollbar-hide snap-x snap-mandatory scroll-smooth">
                        <!-- Card 1 -->
                        <div class="flex-none w-64 snap-start">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://qlv-media-prod.qatarliving.com/ad-images-output/prod/2016-2021-gxr-model-2016-transformer-2021-grand-1725704451535/thumbnail/1725704451535-IMG_1990_432x300.webp"
                                    alt="Car Image" class="w-full" />
                                <div class="p-4">
                                    <span
                                        class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md inline-block mb-2">⚡
                                        Promoted</span>
                                    <h3 class="font-bold text-sm hover:text-purple-700">Toyota Land Cruiser GXR 2016
                                    </h3>
                                    <p class="text-gray-500">175,000 Kms</p>
                                    <p class="font-bold text-md">145,000 <span class="text-xs font-mono">QAR</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex-none w-64 snap-start">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://qlv-media-prod.qatarliving.com/ad-images-output/prod/land-cruiser-2015-gxr-v8-limited-edition-1725678157689/thumbnail/1725797666228-IMG_4081_432x300.webp"
                                    alt="Car Image" class="w-full" />
                                <div class="p-4">
                                    <span
                                        class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md inline-block mb-2">⚡
                                        Promoted</span>
                                    <h3 class="font-bold  text-sm hover:text-purple-700">Toyota Land Cruiser GXR 2015
                                    </h3>
                                    <p class="text-gray-500">246,000 Kms</p>
                                    <p class="font-bold text-md">100,000 <span class="text-xs font-mono">QAR</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex-none w-64 snap-start">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://qlv-media-prod.qatarliving.com/ad-images-output/prod/nissan-armada-le-2014-1725637570480/thumbnail/1725637570480-4%20Front_432x300.webp"
                                    alt="Car Image" class="w-full" />
                                <div class="p-4">
                                    <span
                                        class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md inline-block mb-2">⚡
                                        Promoted</span>
                                    <h3 class="font-bold text-sm hover:text-purple-700">Nissan Armada LE 2014</h3>
                                    <p class="text-gray-500">97,000 Kms</p>
                                    <p class="font-bold text-md">65,000 <span class="text-xs font-mono">QAR</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="flex-none w-64 snap-start">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://qlv-media-prod.qatarliving.com/ad-images-output/prod/upgrade-to-another-car-1725615997142/thumbnail/1725618582648-1725615997142+QX60%20-%20Front%20Side_432x300.webp"
                                    alt="Car Image" class="w-full" />
                                <div class="p-4">
                                    <span
                                        class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md inline-block mb-2">⚡
                                        Promoted</span>
                                    <h3 class="font-bold text-sm hover:text-purple-700">Infiniti QX 60 2019</h3>
                                    <p class="text-gray-500">42,832 Kms</p>
                                    <p class="font-bold text-md">150,000 <span class="text-xs font-mono">QAR</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="flex-none w-64 snap-start">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="https://qlv-media-prod.qatarliving.com/ad-images-output/prod/2022-maxus-d60-low-mileage-excellent-condition-1725391722943/thumbnail/1725437729413-1725391722943-main_432x300.webp"
                                    alt="Car Image" class="w-full" />
                                <div class="p-4">
                                    <span
                                        class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md inline-block mb-2">⚡
                                        Promoted</span>
                                    <h3 class="font-bold text-sm hover:text-purple-700">Maxus D60 2022</h3>
                                    <p class="text-gray-500">31,939 Kms</p>
                                    <p class="font-bold text-md">53,000 <span class="text-xs font-mono">QAR</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Previous Button -->
                    <button onclick="slide(-1)"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                        &#10094;
                    </button>

                    <!-- Next Button -->
                    <button onclick="slide(1)"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                        &#10095;
                    </button>
                </div>
            </div>



            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">Explore by body type</h2>

                <div class="bg-white rounded-lg shadow-md p-4 mb-8">
                    <div class="flex flex-wrap justify-center gap-4">
                        <button class="bg-purple-600 text-white px-6 py-2 rounded-full flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7h1a1 1 0 011 1v6.05A2.5 2.5 0 0014 16.5h-1V7z" />
                            </svg>
                            4x4/SUV
                        </button>
                        <button class="text-gray-600 px-6 py-2 rounded-full flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7h1a1 1 0 011 1v6.05A2.5 2.5 0 0014 16.5h-1V7z" />
                            </svg>
                            Sedan
                        </button>
                        <button class="text-gray-600 px-6 py-2 rounded-full flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7h1a1 1 0 011 1v6.05A2.5 2.5 0 0014 16.5h-1V7z" />
                            </svg>
                            Pick-up
                        </button>
                        <button class="text-gray-600 px-6 py-2 rounded-full flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7h1a1 1 0 011 1v6.05A2.5 2.5 0 0014 16.5h-1V7z" />
                            </svg>
                            Coupe/Sport
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                    <div class="md:col-span-1">
                        <div class="bg-zinc-300 p-2">
                            <h3 class="text-purple-600 font-semibold mb-2 underline">View all SUV cars</h3>
                            <p class="text-gray-600">Experience the best way to search new cars</p>
                        </div>

                    </div>
                    <div class="md:col-span-4 grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Rangerover.fe45621b.webp"
                                alt="Land Rover Range Rover" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Land Rover Range Rover</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Nissan-patrol.c3237b7a.webp"
                                alt="Nissan Patrol" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Nissan Patrol</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/BMWX5.514d8823.webp"
                                alt="BMW X5" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">BMW X5</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/BMWX5.514d8823.webp"
                                alt="Volkswagen Touareg" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Volkswagen Touareg</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Toyota-land-cruiser.735b865f.webp"
                                alt="Toyota Land Cruiser" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Toyota Land Cruiser</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Honda-pilot.48c39a49.webp"
                                alt="Honda Pilot" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Honda Pilot</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Volvo-XC90.2ff9cf04.webp"
                                alt="Volvo XC90" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Volvo XC90</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Jeep-grand-cherokee.c20eaad1.webp"
                                alt="Jeep Grand Cherokee" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Jeep Grand Cherokee</p>
                        </div>
                        <div class="text-center">
                            <img src="https://qlv-media-prod.qatarliving.com/site-assets/_next/static/media/Audi-q7.52a0b14c.webp"
                                alt="Audi Q7" class="w-4/5 mb-2 rounded-lg" />
                            <p class="font-semibold">Audi Q7</p>
                        </div>
                    </div>
                </div>
            </div>









            <style>
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }

                .scrollbar-hide {
                    -ms-overflow-style: none;
                    /* IE and Edge */
                    scrollbar-width: none;
                    /* Firefox */
                }
            </style>




        </div>

    </div>
    {{-- slider --}}
    <script>
        function slide(direction) {
            const slider = document.getElementById('slider');
            const scrollAmount = slider.scrollWidth / slider.childElementCount;

            slider.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }
    </script>


    {{-- sell or buy tab --}}
    <script>
        function showTab(tab) {
            // Get elements by their IDs
            const buyContent = document.getElementById('buyContent');
            const sellContent = document.getElementById('sellContent');
            const buyTab = document.getElementById('buyTab');
            const sellTab = document.getElementById('sellTab');

            if (tab === 'buy') {
                buyContent.classList.remove('hidden');
                sellContent.classList.add('hidden');
                buyTab.classList.add('bg-purple-700', 'text-white');
                sellTab.classList.remove('bg-purple-700', 'text-white');
                sellTab.classList.add('text-gray-700');
            } else {
                sellContent.classList.remove('hidden');
                buyContent.classList.add('hidden');
                sellTab.classList.add('bg-purple-700', 'text-white');
                buyTab.classList.remove('bg-purple-700', 'text-white');
                buyTab.classList.add('text-gray-700');
            }
        }

        // Show 'Buy' content by default on load
        document.addEventListener('DOMContentLoaded', () => showTab('buy'));
    </script>


<script>

        function showTab(carTab) {
            // Get elements by their IDs
            const suvContent = document.getElementById('suvContent');
            const sedanContent = document.getElementById('sedanContent');
            const pickupContent = document.getElementById('pickupContent');
            const coupeContent = document.getElementById('coupeContent');
            const suvTab = document.getElementById('suvTab');
            const sedanTab = document.getElementById('sedanTab');
            const pickupTab = document.getElementById('pickupTab');
            const coupeTab = document.getElementById('coupeTab');

            if (tab === 'suv') {
                buyContent.classList.remove('hidden');
                sellContent.classList.add('hidden');
                buyTab.classList.add('bg-purple-700', 'text-white');
                sellTab.classList.remove('bg-purple-700', 'text-white');
                sellTab.classList.add('text-gray-700');
            }else {
                sellContent.classList.remove('hidden');
                buyContent.classList.add('hidden');
                sellTab.classList.add('bg-purple-700', 'text-white');
                buyTab.classList.remove('bg-purple-700', 'text-white');
                buyTab.classList.add('text-gray-700');
            }
        }

        // Show 'Buy' content by default on load
        document.addEventListener('DOMContentLoaded', () => showTab('buy'));
</script>

</x-guest-layout>
