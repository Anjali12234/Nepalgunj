


@if (!auth('registered-user')->check())

<x-guest-layout>
    <div class="px-0 pt-10 md:px-20 md:pt-[6px] ">
        {{-- @include('registeredUser.layout.header') --}}

        <div class="content px-5  md:px-7 col-span-3">
            <h1>You have not register to our site. To add post register on oour site then add the detail and wait until your account is not vrified. For other information contact on the given contact on the site.</h1>
         </div>
    </div>
</x-guest-layout>
@elseif((auth('registered-user')->user()->is_active == 0))

<x-guest-layout>
    <div class="px-0 pt-10 md:px-20 md:pt-[6px] ">
        @include('registeredUser.layout.header')

        <div class="content px-5  md:px-7 col-span-3">
            <h1>You have successfully register. To add post wait until the your account is not vrified. For other information contact on the given contact on the site.</h1>
         </div>
    </div>
</x-guest-layout>
@endif
