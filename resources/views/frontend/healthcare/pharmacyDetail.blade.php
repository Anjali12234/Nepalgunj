<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">

        <!-- Navbar -->
        <nav class="py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800">Pharmacy Details</h1>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-600 bg-blue-300 rounded-full px-4 py-2 flex justify-center items-center">
                            <i class="ti ti-arrow-left text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-600 bg-blue-300 rounded-full px-4 py-2 flex justify-center items-center">
                            <i class="ti ti-arrow-right text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Pharmacy Details Content -->
        <div class="container mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Pharmacy Image -->
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/500" alt="Pharmacy Image" class="w-full h-80 object-cover">
                </div>

                <!-- Pharmacy Information -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">WellCare Pharmacy</h2>
                    <p class="text-gray-600 mb-6">
                        WellCare Pharmacy offers a wide range of over-the-counter and prescription medications, with a focus on personalized care and health consultations. We ensure quality products and customer satisfaction.
                    </p>

                    <div class="space-y-4">
                        <div>
                            <span class="font-semibold text-gray-700">Location:</span> 567 Wellness Avenue, Medic Town
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Open Hours:</span> 8:00 AM - 8:00 PM (Mon - Sat)
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Contact:</span> +123 456 7890
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="mt-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Services</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Prescription Drugs</h4>
                        <p class="text-gray-600">Get access to a wide range of prescription medications and health consultations.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">OTC Medicines</h4>
                        <p class="text-gray-600">We offer an extensive selection of over-the-counter drugs for everyday ailments.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Health Supplements</h4>
                        <p class="text-gray-600">Discover a variety of vitamins, minerals, and health supplements to boost wellness.</p>
                    </div>
                </div>
            </div>

            <!-- Pharmacists Section -->
            <div class="mt-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Meet Our Pharmacists</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/150" alt="Pharmacist 1" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Pharmacist John Doe</h4>
                        <p class="text-gray-600">Expert in medication management with over 10 years of experience.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/150" alt="Pharmacist 2" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Pharmacist Jane Smith</h4>
                        <p class="text-gray-600">Specialist in patient care and personalized health consultations.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/150" alt="Pharmacist 3" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Pharmacist Sarah Lee</h4>
                        <p class="text-gray-600">Experienced in prescription fulfillment and customer support.</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            {{-- <div class="mt-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Contact Us</h3>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700">Your Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg mt-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter your name">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700">Your Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg mt-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="message" class="block text-gray-700">Your Message</label>
                            <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-lg mt-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Type your message"></textarea>
                        </div>
                        <button type="submit" class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                            Send Message
                        </button>
                    </form>
                </div>
            </div> --}}
        </div>

        <!-- Footer -->
        <x-frontend.PropertiesFooter.properties-footer/>

    </div>
</x-guest-layout>

