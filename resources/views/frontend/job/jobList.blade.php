<x-guest-layout>
    @section('title', 'Job in Nepalgunj')

    <div class="font-manrope">
        {{-- Hero Section --}}
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
                                class="flex flex-col md:flex-row items-start p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 mb-4">
                                <a href="{{ route('jobDetail', $jobList) }}">
                                    <img src="{{ $jobList->image }}" alt="{{ $jobList->job_name }}"
                                        class="w-full h-64 md:w-44 md:h-32 object-cover rounded-lg mb-4 md:mb-0">
                                </a>
                                <div class="md:ml-4 flex-1">
                                    <a href="{{ route('jobDetail', $jobList) }}">
                                        <h3
                                            class="text-lg font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">
                                            {{ Str::words($jobList->job_name, 20) }}
                                        </h3>
                                    </a>
                                    <div
                                        class="flex flex-col md:flex-row space-y-1 md:space-y-0 md:space-x-2 text-sm text-gray-500 mt-1">
                                        @foreach ($jobList->registeredUser->educationLists ?? [] as $educationList)
                                            @if ($jobList->category === $educationList->name)
                                                <p>By {{ $educationList->name }}</p>
                                            @endif
                                        @endforeach
                                        @foreach ($jobList->registeredUser->entertainmentLists ?? [] as $entertainmentList)
                                            @if ($jobList->category === $entertainmentList->name)
                                                <p>By {{ $entertainmentList->name }}</p>
                                            @endif
                                        @endforeach
                                        @foreach ($jobList->registeredUser->propertyLists ?? [] as $propertyList)
                                            @if ($jobList->category === $propertyList->title)
                                                <p>By {{ $propertyList->title }}</p>
                                            @endif
                                        @endforeach
                                        @foreach ($jobList->registeredUser->healthCareLists ?? [] as $healthCareList)
                                            @if ($jobList->category === $healthCareList->name)
                                                <p>By {{ $healthCareList->name }}</p>
                                            @endif
                                        @endforeach
                                        @foreach ($jobList->registeredUser->hospitalityLists ?? [] as $hospitalityList)
                                            @if ($jobList->category === $hospitalityList->name)
                                                <p>By {{ $hospitalityList->name }}</p>
                                            @endif
                                        @endforeach

                                    </div>
                                    <p class="text-sm text-neutral-600 mt-1">for <span
                                            class="font-medium">{{ $jobList->jobCategory->title }}</span></p>
                                    <p class="mt-1 text-neutral-900 text-sm line-clamp-2">
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
