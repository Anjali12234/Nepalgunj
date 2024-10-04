@include('sweetalert::alert')

<header class='font-mono flex shadow-md pt-3 px-4 sm:pl-20 sm:pr-32 bg-white min-h-[70px] tracking-wide relative z-50'
    style="">
    <div class='flex flex-wrap items-center justify-between md:gap-0 w-full'>
        <a href="{{ route('welcome') }}">
            <img src="{{ setting()->logo1 ?? '' }}" alt="logo" class="w-36  hidden lg:block" />
        </a>
        <a href="{{ route('welcome') }}">
            <img src="{{ setting()->logo1 ?? '' }}" alt="logo" class="w-24 block lg:hidden" />
        </a>


        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex gap-x-8 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-full max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-3 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="{{ setting()->logo2 ?? '' }}" alt="logo"
                            class='w-12' />
                    </a>
                </li>
                @if (auth('registered-user')->check())
                    <li class='hidden max-lg:block max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                        <div class="flex items-center justify-between">
                            <!-- Left side: User Icon and Text -->
                            <div class="flex items-center space-x-3">
                                <a href="{{ route('properties') }}"
                                    class="hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="40px"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z" />
                                    </svg>
                                </a>
                                <div class="text-neutral-800">
                                    <p class="font-popins">
                                        {{ Auth::guard('registered-user')?->user()?->registeredUserDetail?->full_name }}
                                    </p>
                                    <p>{{ Auth::guard('registered-user')?->user()?->email }}</p>
                                </div>
                            </div>
                            <!-- Right side: Angle Bracket -->
                            <div>

                                <button type="button"
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent  text-neutral-700  focus:outline-none focus:bg-neutral-700 focus:text-white disabled:opacity-50 disabled:pointer-events-none"
                                    aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-slide-down-animation-modal"
                                    data-hs-overlay="#hs-slide-down-animation-modal">
                                    <i class="font-bold text-xl ti ti-chevrons-right"></i>
                                </button>
                            </div>

                        </div>

                    </li>
                @else
                    <ul class='hidden max-lg:block max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                        <div class="flex ">
                            <!-- Left side: User Icon and Text -->
                            <li class='py-2.5 px-6 '><a href="{{ route('registeredUser.login') }}"
                                    class='mt-3 py-2 px-6 rounded-lg text-2xl tracking-wider font-bold cursor-pointer border border-neutral-700 hover:border-neutral-800 outline-none bg-transparent hover:bg-neutral-200 text-neutral-700  transition-all duration-300'>Login</a>
                            </li>
                            <li class='py-2.5 px-5 '><a href="{{ route('registeredUser.register') }}"
                                    class='mt-3 py-2 px-5 rounded-lg text-2xl tracking-wider font-bold cursor-pointer border outline-none bg-neutral-700 hover:bg-neutral-800 text-white transition-all duration-300'>SignUp</a>
                            </li>
                        </div>

                    </ul>
                @endif
                <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                    <a href="{{ route('properties') }}"
                        class='hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]'>Properties</a>
                </li>

                <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='{{ route('healthcareIndex') }}'
                        class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Health Cares</a>
                </li>
                <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a
                        href='{{ route('education.IndexPage') }}'
                        class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Educations</a>
                </li>
                <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Jobs</a>
                </li>
                <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a
                        href="
                {{-- {{ route('vehicles') }} --}}
                 "
                        class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Vehicles</a>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>More<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-12 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Login</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sign up</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Blog</a></li>
                    </ul>
                </li>

            </ul>
        </div>

        <div class='flex max-lg:ml-auto space-x-3 py-2'>
            <x-frontend.post-ad-component
                extraClasses="px-5 py-2.5 h-10 mt-2 rounded-lg hidden lg:flex text-white text-sm tracking-wider border border-current gap-3 mr-8"
                title="Post Ad" />

            <a href="#" class=" py-2  transition-all ease-in-out duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"
                    fill="none" stroke="grey" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                </svg>
            </a>
            <x-frontend.post-ad-component
                extraClasses="w-7 h-7 mt-3 inline-flex items-center justify-center rounded-full border-none lg:hidden"
                title="" />
            <div class="relative font-[sans-serif] w-max mx-auto">
                <button
                    class=" w-7 h-7 mt-3 hidden lg:inline-flex items-center justify-center rounded-full outline-none bg-neutral-100 hover:bg-neutral-200"
                    id="dropdownToggle1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 512 512">
                        <path
                            d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z"
                            data-original="#000000" />
                    </svg>
                </button>
                <div class=" hidden lg:block">
                    <ul id="dropdownMenu1"
                        class='absolute   ml-[-6.5rem] hidden shadow-lg  bg-white py-2 mt-4 z-[1000] min-w-full w-max rounded max-h-96 overflow-auto'>
                        <x-frontend.admin-component liClass="px-6">
                        </x-frontend.admin-component>
                    </ul>
                </div>

            </div>

            <button id="toggleOpen" class='lg:hidden'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</header>
{{-- model --}}

<div id="hs-slide-down-animation-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-hidden"
    role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
    <div
        class="h-fuhs-overlay-animation-target hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full sm:mx-auto h-screen">
        <div
            class="flex flex-col bg-white border shadow-sm pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70 h-full">
            <div class="flex justify-between items-center py-3 px-4 ">
                <a href="javascript:void(0)" id="hs-slide-down-animation-modal-label"><img
                        src="{{ setting()->logo2 ?? '' }}" alt="logo" class='w-12' />
                </a>
                <button type="button"
                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#hs-slide-down-animation-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4  ">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('properties') }}"
                            class="hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="40px"
                                viewBox="0 0 512 512">
                                <path
                                    d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z" />
                            </svg>
                        </a>
                        <div class="text-neutral-800">
                            <p class="font-popins">
                                {{ Auth::guard('registered-user')?->user()?->registeredUserDetail?->full_name }}
                            </p>
                            <p>{{ Auth::guard('registered-user')?->user()?->email }}</p>
                        </div>
                    </div>
                    <div>
                        <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-neutral-700 focus:outline-none focus:bg-neutral-700 focus:text-white disabled:opacity-50 disabled:pointer-events-none"
                            aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-slide-down-animation-modal"
                            data-hs-overlay="#hs-slide-down-animation-modal">
                            <i class="font-bold text-xl ti ti-chevrons-left"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <ul>
                    <x-frontend.admin-component>
                    </x-frontend.admin-component>
                </ul>
            </div>
        </div>
    </div>
</div>



<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
