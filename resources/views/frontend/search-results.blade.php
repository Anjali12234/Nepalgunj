<x-guest-layout>

    <div class=" sm:pl-20 sm:pr-30 min-h-screen mt-10">
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
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>></li>
                                        <li class="breadcrumb-item"><a href="{{ route('propertyDetails', $result->slug) }}">propertyCategory</a>></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->propertyCategory->title_en }}</li>
                                    </ol>
                                </nav>
                            @elseif($result->healthCareCategory)
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>></li>
                                        <li class="breadcrumb-item"><a href="{{ route('healthcare.detailPage', $result->slug) }}">educationCategory</a>></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->healthCareCategory->title_en }}</li>
                                    </ol>
                                </nav>
                            @elseif($result->educationCategory)
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>></li>
                                        <li class="breadcrumb-item"><a href="{{ route('education.detailPage',$result->slug) }}">educationCategory</a>></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->educationCategory->title_en }}</li>
                                    </ol>
                                </nav>
                            @elseif($result->hospitalityCategory)
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>></li>
                                        <li class="breadcrumb-item"><a href="{{ route('hospitality.hospitalityDetail',$result->slug) }}">hospitalityCategory</a>></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->hospitalityCategory->title_en }}</li>
                                    </ol>
                                </nav>
                            @elseif($result->newsCategory)
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb flex text-green-900 text-sm gap-1">
                                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a>></li>
                                        <li class="breadcrumb-item"><a href="{{route('newsList')}}">News</a>></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $result->newsCategory->title }}</li>
                                    </ol>
                                </nav>
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
