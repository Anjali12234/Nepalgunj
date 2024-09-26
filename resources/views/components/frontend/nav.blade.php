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
                class='lg:flex gap-x-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-full max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-3 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="{{ setting()->logo2 ?? '' }}" alt="logo"
                            class='w-12' />
                    </a>
                </li>
                @foreach ($sharedCategory->take(5) as $category)
                    <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                        <a href=""
                            class='text-neutral-800 hover:text-[#007bff] block font-semibold text-[15px]'>{{ $category->title_en }}</a>
                    </li>
                @endforeach


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
                        @if ($sharedCategory->count() > 5)
                            @foreach ($sharedCategory->skip(5) as $category)
                                <li class='border-b py-2 '><a href='javascript:void(0)'
                                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>{{ $category->title_en }}</a>
                                </li>
                            @endforeach
                        @endif
                        <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                            <a href=""
                                class='text-neutral-800 hover:text-[#007bff] block font-semibold text-[15px]'>News
                                Category</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>

        <div class='flex max-lg:ml-auto space-x-3 py-2'>
            <x-frontend.post-ad-component
                extraClasses="px-5 py-2.5 h-10 mt-2 rounded-lg hidden lg:flex text-white text-sm tracking-wider border border-current gap-3 mr-8"
                title="Post Ad" />

            <a href="#" class=" py-2  transition-all ease-in-out duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24" fill="none"
                    stroke="grey" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-heart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                </svg>
            </a>
            <x-frontend.post-ad-component
                extraClasses="w-7 h-7 mt-3 inline-flex items-center justify-center rounded-full border-none lg:hidden"
                title="" />

            <x-frontend.admin-component>
            </x-frontend.admin-component>


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
