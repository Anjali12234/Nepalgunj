<x-guest-layout>
    <div class="mx-4 md:mx-12 lg:mx-24 mt-4 font-manrope">
        <!-- Navigation Bar -->
        <nav class="py-4">
            <div class="container mx-auto px-4 lg:px-6">
                <div class="flex justify-between sticky top-0 items-center">
                    <h1 class="text-lg md:text-xl font-bold text-gray-800">{{ $healthCareList->healthCareCategory->title_en }}</h1>
                    <div class="flex gap-2 md:gap-4">
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-3 py-2 flex justify-center">
                            <i class="ti ti-arrow-left text-lg md:text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-3 py-2 flex justify-center">
                            <i class="ti ti-arrow-right text-lg md:text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content Container -->
        <div class="container p-4 md:p-6">
            <div class="bg-white rounded-lg shadow-md p-4 md:p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <!-- Doctor Image -->
                    <div class="w-full md:w-1/2 mb-6 md:mb-0">
                        <img src="{{ count($healthCareList->files) > 0 ? $healthCareList->files?->first()->file_url : '' }}"
                             alt="Doctor's Image" class="rounded-lg shadow-md w-full h-60 lg:h-[23rem] ">
                    </div>

                    <!-- Doctor Info -->
                    <div class="md:ml-8 w-full md:w-1/2">
                        <h1 class="text-2xl md:text-3xl font-semibold font-mono text-gray-800">{{ $healthCareList->name }}</h1>
                        @if (!empty($healthCareList->department))
                            <p class="text-lg text-blue-600 mt-2">Department: {{ $healthCareList->department }}</p>
                        @endif
                        @if (!empty($healthCareList->qualification))
                            <p class="text-sm text-gray-500 mt-1">Qualification: {{ $healthCareList->qualification }}
                            </p>
                        @endif
                        @if (!empty($healthCareList->n_m_c_no))
                            <p class="text-sm text-gray-500 mt-1">N.M.C No: {{ $healthCareList->n_m_c_no }}</p>
                        @endif
                        <p class="text-[14px] text-gray-500 mt-1"><span class="text-blue-900 font-bold text-xl">OPD Schedule</span>: {{ $healthCareList->o_p_d_schedule }}</p>
                        <!-- <p class="mt-4 text-gray-600">
                       Dr. John Doe is a highly experienced cardiologist with over 15 years of experience
                       in treating complex heart conditions. He specializes in interventional cardiology
                       and is committed to providing personalized care to his patients.
                   </p> -->
                    </div>
                </div>

                <!-- Doctor Details Section -->
                <div class="mt-8">
                    <h2 class="text-xl md:text-2xl mb-3 font-semibold text-gray-800 mt-8">Details</h2>
                    <div class="text-gray-600">
                        {!! $healthCareList->details !!}
                    </div>
                </div>

                <!-- Contact and Map Section -->
                <div class="flex flex-col md:flex-row mt-8 gap-10 md:gap-20">
                    <div class="w-full md:w-1/2">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mt-8">Contact Information</h2>
                        <p class="mt-4 text-gray-600">Phone: {{ $healthCareList->contact_number }}</p>
                        <p class="text-gray-600">Email: {{ $healthCareList->email }}</p>
                        <p class="text-gray-600">Address: {{ $healthCareList->address }}</p>
                        <p  class="text-gray-600">Website Url: <a class="hover:text-blue-600" target="_blank" href="{{ $healthCareList->website_url }}"> {{ $healthCareList->website_url }}</p></a>
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mt-8">Social Media Links</h2>
                        <div class="flex gap-2 mt-4">

                            <a href="https://www.instagram.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-instagram text-2xl text-white"></i>
                            </a>
                            <a href="{{ $healthCareList->facebook_url }}" class="p-2 rounded bg-neutral-700"
                               target="_blank">
                                <i class="ti ti-brand-facebook text-2xl text-white"></i>
                            </a>
                            <a href="{{ $healthCareList->twitter_url }}" class="p-2 rounded bg-neutral-700"
                               target="_blank">
                                <i class="ti ti-brand-x text-2xl text-white"></i>
                            </a>
                            <a href="{{ $healthCareList->youtube_link }}" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-youtube text-2xl text-white"></i>
                            </a>

                            <a href="https://www.tiktok.com" class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-tiktok text-2xl text-white"></i>
                            </a>

                            <a href="https://wa.me/{{ $healthCareList->whats_app_no }}"
                               class="p-2 rounded bg-neutral-700" target="_blank">
                                <i class="ti ti-brand-whatsapp text-2xl text-white"></i>
                            </a>
                        </div>
                    </div>


                    <div class="w-full md:w-1/2">
                        <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mt-8">Map</h2>
                        <p class="font-semibold">{{ $healthCareList->address }}</p>

                        <div>
                            {!!  $healthCareList->map_url !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-guest-layout>
