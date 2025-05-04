@props(['hospitalityCategory'])

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Explore Our {{$hospitalityCategory->title_en}}</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($hospitalityCategory->hospitalityLists as $hospitalityList)
        @if($hospitalityList->status == 1)

            <!-- Hotel 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="{{ route('hospitality.hospitalityDetail',$hospitalityList) }}">
                    <img class="w-full h-48 object-cover" loading="lazy"
                         src="{{ $hospitalityList->thumbnail }}"
                         alt="Urban Comfort Hotel">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $hospitalityList->name }}</h3>
                        <p class="mt-2 text-gray-600">{!! Str::words($hospitalityList->details, 10) !!}</p>
                        <div class="mt-4 flex justify-between items-center">
                            @if (!empty($hospitalityList->price_per_night))
                                <span class="text-gray-800 font-bold">{{ round($hospitalityList->price_per_night) }} per/night</span>
                            @endif

                            @if (!empty($hospitalityList->delivery_available))
                                <span
                                    class="text-gray-800 font-bold">Delivery Charge: {{ round($hospitalityList->delivery_available) }} </span>
                            @endif
                            <a href="{{ route('hospitality.hospitalityDetail',$hospitalityList) }}"
                               class="text-white bg-zinc-700 px-3 py-1 hover:bg-black hover:text-lime-500 rounded-full  text-sm">View
                                more</a>
                        </div>
                    </div>
                </a>

            </div>
            @endif
        @endforeach
    </div>

</div>
