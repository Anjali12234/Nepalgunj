<x-guest-layout>
    <div class=" font-manrope block ">
        <section class="bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                    <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Make Payment </h2>
                        <p class="mt-2 text-base text-gray-600">and  Post your Ads</p>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="{{ route('registeredUser.payment') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="space-y-1">
                                <div>
                                    <label for="" class="text-base font-medium text-gray-900"> Amount
                                    </label>
                                    <div class="mt-2.5">
                                        <input type="number" name="amount" id="amount"
                                            placeholder="Enter amount "
                                            class="block w-full p-2  text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600" />
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="" class="text-base font-medium text-gray-900"> Payment gateway
                                        </label>
                                    </div>
                                    <div class="mt-2.5">
                                        <input type="text" name="payment_method" id="payment_method"
                                            placeholder="Select any one "
                                            class="block w-full p-2 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600" />
                                    </div>
                                </div>

                                <div>
                                    <button type="submit"
                                        class=" mt-2 inline-flex items-center justify-center w-full px-2 py-2 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">Make Payment
                                        </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="flex items-center justify-center px-4 py-10 sm:py-16 lg:py-24 bg-gray-50 sm:px-6 lg:px-8">
                    <div>
                        <img class="w-full mx-auto"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/signup/1/cards.png"
                            alt="" />

                        <div class="w-full max-w-md mx-auto xl:max-w-xl">
                            <h3 class="text-2xl font-bold text-center text-black">Design your own card</h3>
                            <p class="leading-relaxed text-center text-gray-500 mt-2.5">Amet minim mollit non deserunt
                                ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>


                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('frontend.layout.footer')


    document.addEventListener('DOMContentLoaded', function () {
    // Function to handle tab switching
    function switchTab(tabId) {
    // Hide all tab content
    document.querySelectorAll('[role="tabpanel"]').forEach(function (tabPanel) {
    tabPanel.classList.add('hidden');
    });

    // Set all tabs as unselected
    document.querySelectorAll('[role="tab"]').forEach(function (tab) {
    tab.setAttribute('aria-selected', 'false');
    });

    // Show the selected tab content
    document.querySelector(tabId).classList.remove('hidden');
    }

    // Add click event listeners to each tab button
    document.querySelectorAll('[role="tab"]').forEach(function (tabButton) {
    tabButton.addEventListener('click', function () {
    const targetTab = tabButton.getAttribute('data-hs-tab');
    switchTab(targetTab);

    // Set clicked tab as selected
    tabButton.setAttribute('aria-selected', 'true');
    });
    });

    // Check if tab 1 is present, otherwise default to tab 2
    if (!document.querySelector("#tabs-with-underline-item-1")) {
    document.querySelector("#tabs-with-underline-item-2").setAttribute('aria-selected', 'true');
    switchTab("#tabs-with-underline-2");
    }
    });

</x-guest-layout>
