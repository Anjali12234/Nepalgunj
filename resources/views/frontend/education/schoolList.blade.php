<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">


        <nav class="  py-4">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-800">Schools</h1>
                    <div class="flex gap-4">
                        <a href="#" class="text-white bg-green-300 hover:bg-green-500 rounded-full px-4 py-2 flex justify-center "><i class="ti ti-arrow-left text-xl"></i></a>
                        <a href="#" class="text-white bg-green-300  hover:bg-green-500 rounded-full px-4 py-2 flex justify-center "><i class="ti ti-arrow-right text-xl"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <x-frontend.education.school-list-page/>

        <x-frontend.PropertiesFooter.properties-footer/>



    </div>
</x-guest-layout>
