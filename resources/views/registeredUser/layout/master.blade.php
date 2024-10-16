
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
    <script>
        // Select all tab buttons
        const tabButtons = document.querySelectorAll('.tab-button');

        // Add click event listener to each button
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.style.backgroundColor = '';  // Reset background color
                    btn.style.color = '';  // Reset text color
                    btn.setAttribute('aria-selected', 'false');  // Update aria-selected
                });

                // Set active class for the clicked button
                button.style.backgroundColor = '#374151';  // bg-neutral-600
                button.style.color = '#2563EB';  // text-blue-600
                button.setAttribute('aria-selected', 'true');  // Update aria-selected

                // Show the corresponding tab content and hide others
                const tabContentId = button.getAttribute('data-tab-content');
                const allTabContents = document.querySelectorAll('[id^="tab-content-"]');
                allTabContents.forEach(content => content.classList.add('hidden'));  // Hide all contents
                document.querySelector(tabContentId).classList.remove('hidden');  // Show active content
            });
        });
    </script>
</x-guest-layout>
