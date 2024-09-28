<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">


        <nav class="  py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between sticky top-0  items-center">
                    <h1 class="text-xl font-bold text-gray-800">Doctors </h1>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-4 py-2 flex justify-center "><i class="ti ti-arrow-left text-xl"></i></a>
                        <a href="#" class="text-gray-60 bg-orange-300 rounded-full px-4 py-2 flex justify-center "><i class="ti ti-arrow-right text-xl"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container mx-auto p-6">
            <!-- Doctor Profile Section -->
            <div class="bg-white rounded-lg shadow-md p-8 max-w-4xl mx-auto">
                <!-- Doctor Image and Info -->
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <!-- Doctor Image -->
                    <div class="w-full md:w-2/3 mb-6 md:mb-0">
                        <img src="https://images.unsplash.com/photo-1657299171054-e679f630a776?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Doctor's Image" class="rounded-lg shadow-md w-full">
                    </div>
                    <!-- Doctor Info -->
                    <div class="md:ml-8 w-full md:w-2/3">
                        <h1 class="text-3xl font-semibold text-gray-800">Dr. John Doe</h1>
                        <p class="text-lg text-blue-600 mt-2">Cardiologist</p>
                        <p class="text-sm text-gray-500 mt-1">MBBS, MD - Cardiology</p>
                        <p class="mt-4 text-gray-600">
                            Dr. John Doe is a highly experienced cardiologist with over 15 years of experience
                            in treating complex heart conditions. He specializes in interventional cardiology and
                            is committed to providing personalized care to his patients.
                        </p>
                    </div>
                </div>

                <!-- Doctor's Detailed Information -->
                <div class="mt-8">
                    <h2 class="text-2xl font-semibold text-gray-800">About</h2>
                    <p class="mt-4 text-gray-600">
                        Dr. John Doe completed his medical degree from the prestigious University of Medicine and
                        pursued his specialization in cardiology. He is currently practicing at the City Heart
                        Hospital and has successfully treated hundreds of patients. His expertise includes heart
                        surgeries, managing heart failure, and conducting research in cardiovascular diseases.
                    </p>

                    <h2 class="text-2xl font-semibold text-gray-800 mt-8">Specializations</h2>
                    <ul class="list-disc ml-8 mt-4 text-gray-600">
                        <li>Interventional Cardiology</li>
                        <li>Heart Failure Management</li>
                        <li>Electrophysiology</li>
                        <li>Cardiac Rehabilitation</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-gray-800 mt-8">Contact Information</h2>
                    <p class="mt-4 text-gray-600">Phone: (123) 456-7890</p>
                    <p class="text-gray-600">Email: johndoe@example.com</p>
                    <p class="text-gray-600">Address: City Heart Hospital, 1234 Health Blvd, Cardio City</p>
                </div>
            </div>
        </div>

        <x-frontend.PropertiesFooter.properties-footer/>



    </div>
</x-guest-layout>
