<x-guest-layout>

    <div class=" sm:pl-20 sm:pr-30 min-h-screen m-10">
        <div>
            @if (isset($message))
                <p>{{ $message }}</p>
            @else
                <div class="mb-4">
                    <p class="text-gray-700 text-lg font-medium">Found {{ $resultsCount }} result(s)</p>
                </div>
                <div class="">
                    @foreach ($results as $result)
                        <div
                            class="bg-gray-100 p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 mt-5">
                            <!-- Display result name or title (whichever is available) -->
                            <a href="
        @if($result->propertyCategory)
            {{ route('propertyDetails', $result->slug) }}
        @elseif($result->healthCareCategory)
            {{ route('healthcare.detailPage', $result->slug) }}
        @elseif($result->educationCategory)
            {{ route('education.detailPage', $result->slug) }}
        @elseif($result->hospitalityCategory)
            {{ route('hospitality.hospitalityDetail', $result->slug) }}
        @elseif($result->newsCategory)
            {{ route('newsDetail', $result->slug) }}
        @else
            #
        @endif"
                               class="block">

                                <!-- Name or Title -->
                                <p class="text-gray-800 text-lg">
                                    {{ Str::words($result->name ?? $result->title, 5) }}
                                </p>
                            </a>

                            <!-- Dynamically display the category title if it exists for various categories -->
                            @if($result->propertyCategory)
                                <p class="text-gray-800 text-lg font-bold">{{ $result->propertyCategory->title_en }}</p>
                            @elseif($result->healthCareCategory)
                                <p class="text-gray-800 text-lg font-bold">{{ $result->healthCareCategory->title_en }}</p>
                            @elseif($result->educationCategory)
                                <p class="text-gray-800 text-lg font-bold">{{ $result->educationCategory->title_en }}</p>
                            @elseif($result->hospitalityCategory)
                                <p class="text-gray-800 text-lg font-bold">{{ $result->hospitalityCategory->title_en }}</p>
                            @elseif($result->newsCategory)
                                <p class="text-gray-800 text-lg font-bold">{{ $result->newsCategory->title }}</p>
                            @else
                                <p class="text-gray-600 text-sm">No category available</p>
                            @endif

                            <!-- Display image and description -->
                            <div class="flex mt-2">
                                <!-- Image -->
                                <img
                                    src="{{ $result->files->isNotEmpty() ? $result->files->first()->file_url : $result->image }}"
                                    alt="Result Image"
                                    class="h-20 w-20 object-cover rounded-md mr-4">

                                <!-- Description -->
                                <p class="text-gray-600">
                                    {!! Str::words($result->details ?? $result->description, 10) !!}
                                </p>
                            </div>
                        </div>

                    @endforeach

                </div>
            @endif
        </div>
    </div>
</x-guest-layout>
