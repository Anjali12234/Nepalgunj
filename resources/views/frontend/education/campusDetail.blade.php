<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">


        <nav class="  py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-800">Campus</h1>
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
                <h1 class="text-3xl font-bold text-gray-900 md:text-5xl md:leading-tight">Campus Name</h1>
                <p class="mt-3 text-gray-600">Discover the vibrant atmosphere, cutting-edge research, and passionate
                    community at Campus Name.</p>
            </div>

            <!-- Campus Details Section -->
            <div class="grid lg:grid-cols-2 gap-10 items-start mb-10 lg:mb-14">
                <!-- Left Column: Campus Image -->
                <div class="w-full">
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2021/10/11/04/08/university-6699377_640.jpg"
                            alt="Campus Image" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Column: Campus Description -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">About the Campus</h2>
                    <p class="text-gray-700 mb-6">
                        Campus Name is a world-renowned institution known for its academic excellence and commitment to
                        fostering a supportive and innovative learning environment. Our state-of-the-art facilities and
                        world-class faculty are dedicated to pushing the boundaries of knowledge and nurturing future
                        leaders.
                    </p>
                    <p class="text-gray-700">
                        Located in the heart of the city, Campus Name offers students a unique blend of urban culture
                        and serene landscapes. From advanced research centers to vibrant social spaces, the campus
                        provides everything you need to succeed academically and personally.
                    </p>
                </div>
            </div>

            <!-- Faculty Members Section -->
            {{-- featured campus --}}
            <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Meet Our Faculty</h2>


                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 h-[20rem] w-[22rem]"
                        href="{{ route('education.campusDetailPage') }}">
                        <div class="aspect-w-16 aspect-h-10">
                            <img class="w-full object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                alt="Campus Image">
                        </div>
                        <h3 class="mt-3 text-lg font-semibold text-gray-800 group-hover:text-gray-400">Dr. John Doe</h3>
                        <p class="mt-1 text-gray-600">Dean of Medicine</p>


                    </a>
                    <!-- End Card 1 -->

                    <!-- Card 2 -->
                    <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 h-[20rem] w-[22rem]"
                        href="{{ route('education.campusDetailPage') }}">
                        <div class="aspect-w-16 aspect-h-10">
                            <img class="w-full object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                alt="Campus Image">
                        </div>
                        <h3 class="mt-3 text-lg font-semibold text-gray-800 group-hover:text-gray-400">Dr. John Doe</h3>
                        <p class="mt-1 text-gray-600">Dean of Medicine</p>


                    </a>
                    <!-- End Card 2 -->

                    <!-- Card 3 -->
                    <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10 h-[20rem] w-[22rem]"
                        href="{{ route('education.campusDetailPage') }}">
                        <div class="aspect-w-16 aspect-h-10">
                            <img class="w-full object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                alt="Campus Image">
                        </div>
                        <h3 class="mt-3 text-lg font-semibold text-gray-800 group-hover:text-gray-400">Dr. John Doe</h3>
                        <p class="mt-1 text-gray-600">Dean of Medicine</p>


                    </a>
                </div>


                <!-- End Grid -->
            </div>


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
                        <div
                            class="w-full lg:w-[48%] flex-shrink-0 bg-white border border-green-500 rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <img class="w-16 h-16 rounded-full object-cover"
                                    src="https://randomuser.me/api/portraits/men/32.jpg" alt="Student Image">
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Alex Smith</h3>
                                    <p class="text-sm text-gray-600">Computer Science Student</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"Studying at Campus Name has been an incredible journey. The
                                faculty is
                                extremely supportive, and the learning environment is top-notch."</p>
                        </div>

                        <!-- Testimonial 2 -->
                        <div
                            class="w-full lg:w-[48%] flex-shrink-0 bg-white border border-green-500 rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <img class="w-16 h-16 rounded-full object-cover"
                                    src="https://randomuser.me/api/portraits/women/44.jpg" alt="Student Image">
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Sarah Johnson</h3>
                                    <p class="text-sm text-gray-600">Business Management Student</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"The campus facilities and academic support have exceeded my
                                expectations. I couldn't have chosen a better place to study!"</p>
                        </div>

                        <!-- Testimonial 3 -->
                        <div
                            class="w-full lg:w-[48%] flex-shrink-0 bg-white border border-green-500 rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <img class="w-16 h-16 rounded-full object-cover"
                                    src="https://randomuser.me/api/portraits/men/46.jpg" alt="Student Image">
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">John Doe</h3>
                                    <p class="text-sm text-gray-600">Engineering Student</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"Campus Name has provided me with the best opportunities to grow
                                and excel academically and professionally."</p>
                        </div>

                        <!-- Testimonial 4 -->
                        <div
                            class="w-full lg:w-[48%] flex-shrink-0 bg-white border border-green-500 rounded-xl p-6 shadow-md">
                            <div class="flex items-center mb-4">
                                <img class="w-16 h-16 rounded-full object-cover"
                                    src="https://randomuser.me/api/portraits/women/23.jpg" alt="Student Image">
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Lisa Brown</h3>
                                    <p class="text-sm text-gray-600">Psychology Student</p>
                                </div>
                            </div>
                            <p class="text-gray-700">"The learning environment here is unparalleled. The faculty is
                                knowledgeable and supportive, and I've made amazing friends."</p>
                        </div>

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
