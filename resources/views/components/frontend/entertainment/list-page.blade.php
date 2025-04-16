<div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-lg sm:text-2xl md:text-4xl font-bold">{{ $entertainmentCategory->title }}</h2>
        
    </div>

    {{-- Grid of Entertainment Lists --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-down" data-aos-duration="2000">
        @forelse ($entertainmentCategory->entertainmentLists as $entertainmentList)
        @if($entertainmentList->status == 1)
            <a class="group border border-neutral-700 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition hover:bg-gray-50"
               href="{{ route('entertainment.detailPage', $entertainmentList) }}">
               <div class="aspect-w-16 aspect-h-10 overflow-hidden rounded-xl">
                <img
                    class="w-full h-60 object-cover transition-transform duration-300 transform group-hover:scale-105"
                    src="{{ $entertainmentList->thumbnail }}"
                    alt="Blog Image">
            </div>
                <h3 class="mt-5 text-lg sm:text-xl text-gray-800 hover:text-gray-400">
                    {{ $entertainmentList->name }}
                </h3>
                <p class="mt-2 text-gray-600">{!! Str::words($entertainmentList->description, 10) !!}</p>
                <p
                    class="mt-3 bg-neutral-700 rounded-3xl px-3 py-2 hover:bg-neutral-800 text-white inline-flex items-center gap-x-1 text-sm font-semibold ">
                    See more
                    <svg class="shrink-0 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"/>
                    </svg>
                </p>
            </a>
            @endif
        @empty
            <p class="col-span-1 sm:col-span-2 lg:col-span-3 text-center text-gray-600">No data found!</p>
        @endforelse
    </div>
</div>
