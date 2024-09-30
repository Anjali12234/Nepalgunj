<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">


        <nav class="  py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-800">Medical Store</h1>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-4 py-2 flex justify-center "><i class="ti ti-arrow-left text-xl"></i></a>
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-4 py-2 flex justify-center "><i class="ti ti-arrow-right text-xl"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Medical Store Image -->
                <div class="overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/500" alt="Medical Store" class="w-full h-80 object-cover">
                </div>

                <!-- Medical Store Description -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Store Name: HealthFirst Medical Store</h2>
                    <p class="text-gray-600 mb-6">
                        HealthFirst Medical Store provides a wide range of pharmaceutical products and medical supplies. We are committed to delivering top-quality service and ensuring that you have access to the medications you need at affordable prices.
                    </p>

                    <div class="space-y-2">
                        <div>
                            <span class="font-semibold text-gray-700">Location:</span> Main Street, Cityville
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Open Hours:</span> 9:00 AM - 9:00 PM (Mon - Sat)
                        </div>
                        <div>
                            <span class="font-semibold text-gray-700">Contact:</span> +123 456 7890
                        </div>
                    </div>

                    <!-- Call to Action Buttons -->

                </div>
            </div>

            <!-- Services Section -->
            <div class="mt-10">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Services</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Pharmaceuticals</h4>
                        <p class="text-gray-600">We offer a complete range of prescription and over-the-counter medications.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Medical Equipment</h4>
                        <p class="text-gray-600">Find durable medical equipment like wheelchairs, oxygen tanks, and more.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h4 class="font-bold text-xl text-gray-800 mb-2">Home Delivery</h4>
                        <p class="text-gray-600">We offer fast and reliable home delivery services for all your medical needs.</p>
                    </div>
                </div>
            </div>
        </div>



        <x-frontend.PropertiesFooter.properties-footer/>



    </div>
</x-guest-layout>
