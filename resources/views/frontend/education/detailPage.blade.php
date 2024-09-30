<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">


        <nav class="  py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-800">{{ $educationList->educationCategory->title_en }}</h1>
                    <div class="flex gap-4">
                        <a href="#"
                            class="text-white bg-green-300 hover:bg-green-500 rounded-full px-4 py-2 flex justify-center "><i
                                class="ti ti-arrow-left text-xl"></i></a>
                        <a href="#"
                            class="text-white bg-green-300 hover:bg-green-500  rounded-full px-4 py-2 flex justify-center "><i
                                class="ti ti-arrow-right text-xl"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="px-4 py-6 sm:px-6 lg:px-8 lg:py-14 mx-auto max-w-7xl">
            <!-- Campus Header -->
            <div class="max-w-4xl mx-auto text-center mb-10 lg:mb-14">
                <h1 class="text-3xl font-bold text-gray-900 md:text-5xl md:leading-tight">{{ $educationList->name }}</h1>
                <p class="mt-3 text-gray-600">Discover the vibrant atmosphere, cutting-edge research, and passionate
                    community at Campus Name.</p>
            </div>

            <!-- Campus Details Section -->
            <div class="grid lg:grid-cols-2 gap-10 items-start mb-10 lg:mb-14">
                <!-- Left Column: Campus Image -->
                <div class="w-full">
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                        <img src="{{ count($educationList->files) > 0 ? $educationList->files?->first()->file_url : '' }}"
                            alt="Campus Image" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Column: Campus Description -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">About</h2>
                    {!! $educationList->description !!}
                </div>
            </div>

            <!-- Faculty Members Section -->
            {{-- featured campus --}}



            <!-- Call to Action -->
            <div class="text-center mt-10">
                <a href="#"
                    class="inline-block bg-green-500 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-600">Apply
                    Now</a>
            </div>

            <!-- Testimonial Section -->
            <!-- Testimonial Section -->
            <div class="relative px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">What Our Students Say</h2>

                <!-- Testimonials Wrapper -->
                <div class="relative overflow-hidden">
                    <!-- Slider Container (Flex instead of Grid for horizontal layout) -->
                    <div id="testimonial-slider" class="flex transition-transform duration-300 gap-2">
                        <!-- Testimonial 1 -->
                        @foreach ($educationList->testimonials as $testimonial)
                        <div
                            class="w-full lg:w-[48%] flex-shrink-0 bg-white border border-green-500 rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <img class="w-16 h-16 rounded-full object-cover"
                                    src="{{ $testimonial->image }}" alt="Student Image">
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $testimonial->name }}</h3>
                                    <p class="text-sm text-gray-600">{{ $testimonial->post }}</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"{!! $testimonial->description !!}"</p>
                        </div>
                        @endforeach


                    </div>

                    <!-- Navigation Buttons -->
                    <button id="prevButton"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-transparent shadow-md text-black px-4 py-2 rounded-full">
                        <i class="ti ti-arrow-left"></i>
                    </button>
                    <button id="nextButton"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-transparent shadow-md text-black px-4 py-2 rounded-full">
                        <i class="ti ti-arrow-right"></i>
                    </button>
                </div>
            </div>




        </div>


        <x-frontend.PropertiesFooter.properties-footer />



    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('testimonial-slider');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');

            let currentIndex = 0;
            const testimonials = slider.children.length; // Total number of testimonials
            const testimonialsPerView = 2; // Number of testimonials to show at a time (2 for lg screens)
            const testimonialWidth = slider.children[0].offsetWidth; // Each testimonial's width

            // Duplicate the testimonials to create an infinite loop effect
            for (let i = 0; i < testimonials; i++) {
                const clone = slider.children[i].cloneNode(true);
                slider.appendChild(clone);
            }

            let maxIndex = testimonials; // Updated max index after cloning

            // Move to next testimonial
            nextButton.addEventListener('click', function() {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                }

                slider.style.transform = `translateX(-${testimonialWidth * currentIndex}px)`;

                // Seamlessly reset position for infinite loop when reaching end
                if (currentIndex >= maxIndex) {
                    setTimeout(() => {
                        slider.style.transition = 'none'; // Disable transition for smooth looping
                        currentIndex = 0; // Reset index
                        slider.style.transform = `translateX(0)`; // Reset position
                        setTimeout(() => {
                            slider.style.transition =
                                'transform 0.3s ease'; // Re-enable transition after reset
                        }, 20); // Re-enable transition after a tiny delay
                    }, 300); // Wait until the slide transition ends
                }
            });

            // Move to previous testimonial
            prevButton.addEventListener('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                }

                slider.style.transform = `translateX(-${testimonialWidth * currentIndex}px)`;

                // Seamlessly loop to the last slide when going back from the first slide
                if (currentIndex < 0) {
                    setTimeout(() => {
                        slider.style.transition = 'none'; // Disable transition for smooth looping
                        currentIndex = maxIndex - 1; // Set index to last cloned slide
                        slider.style.transform =
                            `translateX(-${testimonialWidth * currentIndex}px)`;
                        setTimeout(() => {
                            slider.style.transition =
                                'transform 0.3s ease'; // Re-enable transition after reset
                        }, 20); // Re-enable transition after a tiny delay
                    }, 300); // Wait until the slide transition ends
                }
            });
        });
    </script>


</x-guest-layout>
