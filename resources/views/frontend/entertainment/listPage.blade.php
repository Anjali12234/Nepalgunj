<x-guest-layout >
    @section('title', $entertainmentCategory->title_en)


    <div class="mx-4 sm:mx-12 lg:mx-24 mt-4 font-mono">

        {{-- Navbar --}}
        <nav class="py-4">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg sm:text-xl font-bold text-gray-800">{{ $entertainmentCategory->title_en }}</h1>
                    <div class="flex gap-2 sm:gap-4">
                        <a href="#" class="text-white bg-neutral-700 hover:bg-neutral-800 rounded-full px-3 py-2 flex justify-center">
                            <i class="ti ti-arrow-left text-lg sm:text-xl"></i>
                        </a>
                        <a href="#" class="text-white bg-neutral-700 hover:bg-neutral-800 rounded-full px-3 py-2 flex justify-center">
                            <i class="ti ti-arrow-right text-lg sm:text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>


        <x-frontend.entertainment.list-page :entertainmentCategory="$entertainmentCategory" />


   
</div>
</x-guest-layout>
