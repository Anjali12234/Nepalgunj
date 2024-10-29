<x-guest-layout>
    <div class="font-manrope">
        {{-- Hero Section --}}
        <div class="mx-4 md:mx-24 overflow-hidden">
            <div class="container mx-auto mt-8">
                <!-- Breadcrumb Navigation -->
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="#" class="hover:underline">Home</a> >
                    <a href="#" class="hover:underline">News</a> >
                </nav>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        @forelse($news as $newslist)
                            <div class="flex flex-col md:flex-row items-start p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 mb-4">
                                <a href="{{ route('newsDetail', $newslist) }}">
                                    <img
                                        src="{{ $newslist->image }}"
                                        alt="{{ $newslist->title }}"
                                        class="w-full h-64 md:w-44 md:h-32 object-cover rounded-lg mb-4 md:mb-0">
                                </a>
                                <div class="md:ml-4 flex-1">
                                    <a href="{{ route('newsDetail', $newslist) }}">
                                        <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">
                                            {{ Str::words($newslist->title, 20) }}
                                        </h3>
                                    </a>
                                    <div class="flex flex-col md:flex-row space-y-1 md:space-y-0 md:space-x-1 text-sm text-gray-500 mt-1">
                                        <p>By {{ $newslist->publisher }}
                                            | {{ \Carbon\Carbon::parse($newslist->publish_date)->format('F j, Y') }}</p>

                                    </div>
                                    <p class="text-sm text-neutral-900 mt-2 line-clamp-2">
                                        {!! Str::words(strip_tags($newslist->details), 25) !!}
                                    </p>

                                </div>
                            </div>
                            <hr class="mt-2 border-gray-300">
                        @empty
                            <p class="text-gray-600">No data found!!</p>
                        @endforelse
                    </div>
                </div>

                <!-- Horizontal Line -->
                <hr class="col-span-full border-t border-gray-300 my-6 md:hidden">
            </div>
        </div>
    </div>
</x-guest-layout>
