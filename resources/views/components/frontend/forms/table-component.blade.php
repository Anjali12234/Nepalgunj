@props([
    'headers',
    'data',

])


<table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th scope="col"
                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                    {{ $header }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">


                <!-- Render the dynamic row content using a slot -->
                {{ $slot }}

    </tbody>
</table>
