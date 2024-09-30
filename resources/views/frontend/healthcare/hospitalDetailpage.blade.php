<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">

        <!-- Navbar -->
        <nav class="py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800">Hospital Details</h1>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-600 bg-orange-300 rounded-full px-4 py-2 flex justify-center items-center">
                            <i class="ti ti-arrow-left text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-600 bg-orange-300 rounded-full px-4 py-2 flex justify-center items-center">
                            <i class="ti ti-arrow-right text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hospital Detail Content -->
        <div class="container mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Hospital Image -->
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/500" alt="Hospital Image" class="w-full h-80 object-cover">
                </div>

                <!-- Hospital Information -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">General Hospital</h2>
                    <p class="text-gray-600 mb-6">
                        General Hospital is known for providing comprehensive medical care with a wide range of specialized services. We are committed to delivering top-quality healthcare solutions and ensuring the well-being of our patients.
                    </p>

                    <div class="space-y-4">
                        <div>
                            <span class="font-semibold text-gray-700">Location:</span> 1234 Health Street, Medic City
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Open Hours:</span> 24/7 (Emergency Services)
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
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Emergency Care</h4>
                        <p class="text-gray-600">Our emergency department operates 24/7, offering immediate care in critical situations.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Surgery</h4>
                        <p class="text-gray-600">State-of-the-art surgical facilities with experienced surgeons across various specialties.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Pharmacy</h4>
                        <p class="text-gray-600">Our in-house pharmacy provides access to prescribed medications and expert advice.</p>
                    </div>
                </div>
            </div>

            <!-- Doctors Section -->
            <div class="mt-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Meet Our Doctors</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/150" alt="Doctor 1" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Dr. John Doe</h4>
                        <p class="text-gray-600">Cardiologist with 15 years of experience in cardiovascular treatments.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/150" alt="Doctor 2" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Dr. Jane Smith</h4>
                        <p class="text-gray-600">Leading surgeon specializing in orthopedic surgery and rehabilitation.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/150" alt="Doctor 3" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Dr. Sarah Lee</h4>
                        <p class="text-gray-600">Expert in pediatric care with a passion for children’s health and well-being.</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="mt-10">
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
            </div>
        </div>

        <!-- Footer -->
        <x-frontend.PropertiesFooter.properties-footer/>

    </div>
</x-guest-layout>
