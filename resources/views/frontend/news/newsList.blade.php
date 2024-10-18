<x-guest-layout>
    <div class="font-manrope">
        {{-- hero section --}}
        <div class="mx-4 md:mx-24 overflow-hidden">

            <div class="container mx-auto mt-8">
                <!-- Breadcrumb Navigation -->
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="#" class="hover:underline">Home</a> >
                    <a href="#" class="hover:underline">News</a> >

                </nav>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Main Article -->
                    <div class="md:col-span-2">
                        @forelse($news as $newslist)
                            <div class="flex items-center space-x-4 mb-4">
                                <img
                                    src="{{$newslist->image}}"
                                    alt="{{ $newslist->title }}"
                                    style="width: 176px !important; height: 96px !important;">


                                <div class="gap-y-2">
                                  <a href="{{ route('newsDetail', $newslist) }}"> <h3 class="text-base font-semibold">{{ Str::words($newslist->title, 20) }}</h3></a>
                                    <div class="flex space-x-2 text-sm text-gray-500">
                                        <p>By {{$newslist->publisher}}</p>
                                        <p> | {{$newslist->publish_date}}</p>
                                    </div>
                                    <p style="font-size: 12px !important; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        {!! Str::words(strip_tags($newslist->details), 14) !!}
                                    </p>

                            <hr class="mt-2">
                                </div>
                            </div>
                        @empty
                            <p>No data found!!</p>
                        @endforelse


                    </div>


                </div>

                <!-- Horizontal Line -->
                <hr class="col-span-full border-t border-gray-300 my-6 md:hidden">


            </div>
        </div>

    </div>
    </div>
</x-guest-layout>
