
<x-guest-layout>
    <div class="px-0 pt-10 md:px-20 md:pt-[6px] ">
        @include('registeredUser.layout.header')

        <div class="grid grid-cols-1 md:grid-cols-4 mt-4">
            <div>
                @include('registeredUser.layout.sidebar')
            </div>
            @yield('content')
        </div>
    </div>
</x-guest-layout>
