<x-guest-layout>
    @section('title', 'Registered User|Login')


    <div class="grid grid-cols-4 gap-4 sm:pl-20 sm:pr-30 min-h-screen ">

        <div class="hidden lg:block my-5 mr-11">
            <h1 class="text-gray-800 font-medium text-2xl">About</h1>
            <div class="text-gray-800 font-medium text-base my-3 font-serif text-justify">
                <p class="leading-5 mb-2">To post classified ads on Nepalgunj AtoZ, you need to verify your account. Here’s
                    how it works:</p>
                <p class="leading-5 mb-2">
                    Register with your correct mobile number and email address, and login to the site add the complete
                    detail and wait until your account is verified.
                    A verification message will be sent to your email
                </p>
                <p class="leading-5 mb-2">
                    Once verified, you can post your ad. All ads will be displayed on the site.
                </p>
            </div>
        </div>

        <div class="col-span-3 ">

            <section class="gap-4 ml-4 mr-[-6rem] md:mx-0 font-sans mt-8  uppercase text-xs font-bold">
                <a href="{{ route('registeredUser.register') }}"> Create new account</a>
                <a href="{{ route('registeredUser.login') }}" class="ml-5"> Login</a>

                @yield('login')

            </section>


        </div>

    </div>
</x-guest-layout>
