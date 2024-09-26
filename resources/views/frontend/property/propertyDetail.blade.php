<x-guest-layout>
    <div class="mx-24 font-mono">
        <div class="grid grid-template-rows: repeat(1, minmax(0, 1fr)) grid-flow-col mt-4">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-12 md:col-span-3">
                    <p class="mb-4 text-sm tracking-widest text-cyan-600 ">
                        Properties, For Rent, Residential, Villa Apartment
                    </p>
                    <div class="px-4 py-8 border border-dashed">
                        <h1 class="text-2xl font-bold">{{ $propertyList->title }}</h1>
                        <p>Reference No: {{ $propertyList->reference_no }}</p>
                        <p class="text-xs text-gray-400">Updated 7 hours ago</p>
                    </div>



                    <div class="max-w-sm mx-auto bg-white  overflow-hidden mt-4">
                        <div class="bg-cyan-700 text-white p-4 flex justify-between items-center">
                            <div>
                                <p class="text-2xl font-bold">{{ $propertyList->rate }}</p>
                                <p class="text-[10px]">Rs/Month</p>
                            </div>
                            {{-- <div class="text-right">
                                <p class="text-2xl font-bold">5000</p>
                                <p class="text-sm">ر.ق/شهري</p>
                            </div> --}}
                        </div>
                        <div class="p-4 border-b">
                            <div class="flex justify-between text-gray-600">
                                <p>DEPOSIT:</p>
                                <p>COMMISSION:</p>
                            </div>
                            <div class="flex justify-between font-semibold">
                                <p>{{ $propertyList->deposit }}</p>
                                <p>None</p>
                            </div>
                        </div>
                        <div class="p-4 flex items-center">
                            <div class="w-10 h-10 bg-gray-300 rounded-full mr-3">
                                <img src="{{ $propertyList?->registeredUser?->registeredUserDetail?->image }}" alt="">
                            </div>
                            <p class="font-semibold">{{ $propertyList?->registeredUser?->username }}</p>
                        </div>
                        <div class="p-4 space-y-2">
                            <button id="callNowBtn" class="w-full bg-blue-500 text-white py-2 rounded">Call Now</button>
                            <p id="phoneNumber" class="text-center font-bold text-blue-600 hidden">+974 1234 5678</p>
                            <button class="w-full bg-green-500 text-white py-2 rounded">WhatsApp Now</button>
                            <button class="w-full bg-red-500 text-white py-2 rounded">Email Now</button>
                        </div>
                    </div>
                </div>

                {{-- carsouel --}}

                <div class="col-span-12 md:col-span-9">

                    <style>
                        .carousel-item {
                            display: none;
                        }

                        .carousel-item.active {
                            display: block;
                        }
                    </style>
                    <div class="max-w-4xl mx-auto">
                        <!-- Main image display -->
                        <div class="relative bg-white shadow-lg  overflow-hidden">
                            <div class="carousel-container relative">
                                <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B333BB7C-34D1-4574-A85B-B60F1BA14055.jpeg&w=1920&q=75"
                                    alt="Room 1" class="carousel-item active w-full h-[30rem] object-cover">
                                <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/FF2AA9A9-7291-42D4-A8C1-C26F815149F8.jpeg&w=1920&q=75"
                                    alt="Room 2" class="carousel-item w-full h-[30rem]  object-cover">
                                <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B1BE1B8C-35DF-4BF7-B0B1-24D52F522B33.jpeg&w=1920&q=75"
                                    alt="Room 3" class="carousel-item w-full h-[30rem]  object-cover">
                                <!-- Add more images as needed -->
                            </div>
                            <button
                                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r"
                                onclick="changeSlide(-1)">❮</button>
                            <button
                                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l"
                                onclick="changeSlide(1)">❯</button>
                            <div class="absolute top-0 right-0 bg-teal-500 text-white px-2 py-1 m-2 text-xs">FEATURED
                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
                            <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B1BE1B8C-35DF-4BF7-B0B1-24D52F522B33.jpeg&w=1920&q=75"
                                alt="Thumbnail 1" class="w-24 h-16 object-cover cursor-pointer rounded"
                                onclick="setSlide(0)">
                            <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/FF2AA9A9-7291-42D4-A8C1-C26F815149F8.jpeg&w=1920&q=75"
                                alt="Thumbnail 2" class="w-24 h-16 object-cover cursor-pointer rounded"
                                onclick="setSlide(1)">
                            <img src="https://www.qatarliving.com/_next/image?url=https://www.qatarliving.com/q/s3/files/styles/detail_page_watermark_bottom_right/s3/vehicles/2024/09/09/7708756/B333BB7C-34D1-4574-A85B-B60F1BA14055.jpeg&w=1920&q=75"
                                alt="Thumbnail 3" class="w-24 h-16 object-cover cursor-pointer rounded"
                                onclick="setSlide(2)">
                            <!-- Add more thumbnails as needed -->
                        </div>
                    </div>

                    <div class="grid grid-template-rows: repeat(1, minmax(0, 1fr)) grid-flow-col mt-4">
                        <div class="grid grid-cols-12 gap-2">
                            <div class="col-span-12 md:col-span-9">
                                <div class="max-w-4xl mx-auto bg-white overflow-hidden">
                                    <div class="p-6">
                                        <div class="flex justify-between items-start mb-4 border-b pb-2">
                                            <h2 class="text-xl font-bold">DESCRIPTION</h2>

                                        </div>

                                        <div class="space-y-3 text-sm">
                                            <p>
                                                <span class="text-pink-500">●</span> LOCATION : HILAL, NEAR QUALITY MALL ,BEHIND BIRLA PRIMARY SCHOOL , CLOSE TO AL-SHAFFALA CENTER, CLOSE NUIJA/HILAL LULU,NEAR BEGLADESH EMBASSY
                                            </p>

                                            <p>PREFERRING CUSTOMER ASIAN FAMILY</p>

                                            <p>
                                                <span class="text-red-500">♦</span> Rent :QAR.2500(Including Electricity and Water
                                            </p>

                                            <p class="font-semibold">DESCRIPTION:- STUDIO</p>

                                            <ul class="list-disc pl-5 space-y-1">
                                                <li>Bedroom Very BIg size 8*8</li>
                                                <li>spacious kitchen</li>
                                                <li>Bathroom big</li>
                                            </ul>

                                            <p class="font-semibold">FEATURES AND AMENITIES:</p>

                                            <ul class="space-y-1">
                                                <li>With Split A/c</li>
                                                <li>Free Water & Electricity</li>
                                                <li>Regular Common area cleaning</li>
                                                <li>WiFi Available ( Payable)</li>
                                                <li>Front out house</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                                        <div class="p-6">
                                            <div class="flex justify-between items-start mb-6">
                                                <h2 class="text-xl font-bold pb-2">OVERVIEW</h2>


                                            </div>

                                            <div class="grid grid-cols-3 gap-6 text-sm">
                                                <div>
                                                    <p class="text-gray-500">BEDROOMS:</p>
                                                    <p class="font-semibold">Studio</p>
                                                </div>

                                                <div>
                                                    <p class="text-gray-500">BATHROOMS:</p>
                                                    <p class="font-semibold">1</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">INTERNET:</p>
                                                    <p class="font-semibold">Excluded</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">KAHRAMAA:</p>
                                                    <p class="font-semibold text-blue-600">Included</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">FURNISHING:</p>
                                                    <p class="font-semibold text-blue-800">Unfurnished</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">A/C TYPE:</p>
                                                    <p class="font-semibold text-blue-800">Split</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">KITCHEN TYPE:</p>
                                                    <p class="font-semibold text-blue-800">Closed</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">PARKING:</p>
                                                    <p class="font-semibold text-blue-800">On street parking</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">COMMISSION:</p>
                                                    <p class="font-semibold text-blue-800">None</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">DEPOSIT:</p>
                                                    <p class="font-semibold text-blue-800">1 Month</p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">RENTAL PERIOD:</p>
                                                    <p class="font-semibold">12</p>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-3 gap-4 mt-8">
                                                <button class="bg-blue-600 text-white py-2 px-4 rounded">
                                                    <i class="ti ti-share-3 mr-2"></i> Share
                                                </button>
                                                <button class="bg-blue-400 text-white py-2 px-4 rounded">
                                                    <i class="ti ti-brand-x mr-2"></i> Tweet
                                                </button>
                                                <button class="bg-green-500 text-white py-2 px-4 rounded">
                                                    <i class="ti ti-brand-whatsapp mr-2"></i> WhatsApp
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-3">

                                <div class="mt-8">
                                    <div class="">
                                        <p class="text-sm text-gray-500">LOCATION</p>
                                        <p class="font-semibold">Nuaija</p>
                                    </div>
                                    <div class=" bg-gray-200 flex items-center mb-2 mt-4 justify-center">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56336.146155097325!2d81.6144573!3d28.054745699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1726275574366!5m2!1sen!2snp" width="250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="mt-4">
                                        <div class="bg-red-100 p-4 ">
                                            <h3 class="text-red-700 font-bold mb-2">Fraud Warning</h3>
                                            <p class="text-sm">
                                                Read our <a href="#" class="text-blue-500">safety guidelines</a> to protect against scams or fraud. If this ad looks suspicious, please report it.
                                            </p>
                                            <button class="mt-2 border border-blue-600 text-green-500 px-4 py-1 rounded text-sm">
                                                Login to Report
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
        <div class="mb-4 mt-4">
            <h3 class="text-xl">Similar Properties</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
                <!-- Card 1 -->
                <div class="border overflow-hidden bg-white relative">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-1" alt="Property 1">
                    <span class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">5 BHK STAND ALONE VILLA</h3>
                        <p class="text-lg font-bold text-gray-900">10,500 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> WAKRAH</p>
                        <p class="text-xs">25 minutes ago</p>
                    </div>
                </div>

                <!-- Card 2 (Featured) -->
                <div class="border  overflow-hidden bg-white relative">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-2" alt="Property 2">
                    <span class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">Two Storey 5-BHK Luxury Villa Compound</h3>
                        <p class="text-lg font-bold text-gray-900">10,500 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> AL HILAL</p>
                        <p class="text-xs">6 minutes ago</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="border  overflow-hidden bg-white">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-3" alt="Property 3">
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">4 Bed | Maid room | Without A/C</h3>
                        <p class="text-lg font-bold text-gray-900">8,000 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> AL HILAL</p>
                        <p class="text-xs">1 hour ago</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="border  overflow-hidden bg-white">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-4" alt="Property 4">
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">AFFORDABLE COMPOUND VILLA | 03 BEDROOMS | 01 MONTH FREE</h3>
                        <p class="text-lg font-bold text-gray-900">9,000 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> AL GHARRAFA</p>
                        <p class="text-xs">1 hour ago</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="mb-4 mt-4">
            <h3 class="text-xl">More ads from <span class="font-bold text-2xl"> ARON PROPERTIES</span> </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-4">
                <!-- Card 1 -->
                <div class="border overflow-hidden bg-white relative">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-1" alt="Property 1">
                    <span class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">5 BHK STAND ALONE VILLA</h3>
                        <p class="text-lg font-bold text-gray-900">10,500 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> WAKRAH</p>
                        <p class="text-xs">25 minutes ago</p>
                    </div>
                </div>

                <!-- Card 2 (Featured) -->
                <div class="border  overflow-hidden bg-white relative">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-2" alt="Property 2">
                    <span class="absolute top-0 right-0 bg-teal-500 text-white text-xs font-semibold px-2 py-1">FEATURED</span>
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">Two Storey 5-BHK Luxury Villa Compound</h3>
                        <p class="text-lg font-bold text-gray-900">10,500 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> AL HILAL</p>
                        <p class="text-xs">6 minutes ago</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="border  overflow-hidden bg-white">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-3" alt="Property 3">
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">4 Bed | Maid room | Without A/C</h3>
                        <p class="text-lg font-bold text-gray-900">8,000 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> AL HILAL</p>
                        <p class="text-xs">1 hour ago</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="border  overflow-hidden bg-white">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F09%2F03%2F5095206%2FIS100.jpeg&w=384&q=75" class="w-full h-48 object-cover" src="image-url-4" alt="Property 4">
                    <div class="p-4">
                        <p class="text-sm text-blue-600">VILLA</p>
                        <h3 class="text-xl font-bold">AFFORDABLE COMPOUND VILLA | 03 BEDROOMS | 01 MONTH FREE</h3>
                        <p class="text-lg font-bold text-gray-900">9,000 <span class="text-sm font-light">QAR/Month</span></p>
                    </div>
                    <div class="px-4 pb-4 flex justify-between text-gray-500">
                        <p class="text-xs"><i class="ti ti-location"></i> AL GHARRAFA</p>
                        <p class="text-xs">1 hour ago</p>
                    </div>
                </div>
            </div>

        </div>
         {{-- footer --}}
         <x-frontend.propertiesFooter.properties-footer/>
    </div>


    <script>
        document.getElementById('callNowBtn').addEventListener('click', function() {
            var phoneNumber = document.getElementById('phoneNumber');
            if (phoneNumber.classList.contains('hidden')) {
                phoneNumber.classList.remove('hidden');
                this.textContent = 'Call Number';
            } else {
                phoneNumber.classList.add('hidden');
                this.textContent = 'Call Now';
            }
        });
    </script>

    {{-- carsouerl --}}


    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        function showSlide(n) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function changeSlide(n) {
            showSlide(currentSlide + n);
        }

        function setSlide(n) {
            showSlide(n);
        }
    </script>
</x-guest-layout>
