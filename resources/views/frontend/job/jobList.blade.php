<x-guest-layout>
    <div class="font-manrope">
        {{-- hero section --}}
        <div class="mx-4 md:mx-24 overflow-hidden">

            <div class="container mx-auto mt-8">
                <!-- Breadcrumb Navigation -->
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="#" class="hover:underline">Home</a> >
                    <a href="#" class="hover:underline">Job</a> >
                </nav>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        @forelse($jobLists as $jobList)
                            <div
                                class="flex items-center p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 mb-4">
                                <img
                                    src="{{ $jobList->image }}"
                                    alt="{{ $jobList->job_name }}"
                                    class="w-44 h-24 object-cover rounded-lg">

                                <div class="ml-4 flex-1">
                                    <a href="{{ route('jobDetail', $jobList) }}">
                                        <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">{{ Str::words($jobList->job_name, 20) }}</h3>
                                    </a>
                                    <div class="flex space-x-2 text-sm text-gray-500">
                                        <p>By {{ $jobList->registeredUser->username }}</p>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-1">for <span
                                            class="font-medium">{{ $jobList->jobCategory->title }}</span></p>
                                    <p class="mt-1 text-gray-600 text-sm truncate" style="max-width: 200px;">
                                        {!! Str::words(strip_tags($jobList->details), 14) !!}
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
