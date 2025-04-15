<x-guest-layout>
    @section('title', $hospitalityCategory->title_en)

    <div class="mx-4 sm:mx-12 md:mx-16 lg:mx-24 mt-4 font-mono">
        <nav class="py-4">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg sm:text-xl font-bold text-gray-800">{{ $hospitalityCategory->title_en }}</h1>
                    <div class="flex gap-2 sm:gap-4">
                        <a href="#" class="text-gray-60 bg-blue-600 rounded-full px-3 sm:px-4 py-2 flex justify-center">
                            <i class="ti ti-arrow-left text-lg sm:text-xl text-white"></i>
                        </a>
                        <a href="#" class="text-gray-60 bg-blue-600 rounded-full px-3 sm:px-4 py-2 flex justify-center">
                            <i class="ti ti-arrow-right text-lg sm:text-xl text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <x-frontend.hospitality.hospitality-listPage :hospitalityCategory="$hospitalityCategory"/>

    </div>
</x-guest-layout>
