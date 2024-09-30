{{-- <x-guest-layout> --}}
@extends('registeredUser.Ad.ad')

@section('main-container')
    <div class="sm:pl-20 sm:pr-30 ">
        <div class="mx-5  mt-14">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        {{ $educationList->educationCategory->mainCategory?->title_en }}
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                    aria-current="page">
                    {{ $educationList->educationCategory?->title_en }}
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                    aria-current="page">
                    Testimonial
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-10">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of
                your best student
            </h1>
            @include('error')

            <form class="mt-8" action="{{ route('registeredUser.educationList.testimonials.store', $educationList) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block md:grid grid-cols-4 pr-16">
                    <div class="col-span-2 mr-6">

                        <x-frontend.forms.input-type-field label="Student Name" id="name" name="name" type="text"
                            class="text-sm font-semibold" />


                        <x-frontend.forms.input-type-field label="Post" id="post" name="post" type="text"
                            class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                    </div>
                    <div class="col-span-2">
                        <x-frontend.forms.input-type-field label="Passed Year" id="passed_year" type="text"
                            name="passed_year" class="text-sm font-semibold" />

                        <x-frontend.forms.file-component label="Image " id="image" name="image" type="file"
                            class="text-sm font-semibold" />
                    </div>
                </div>
                <x-frontend.forms.text-area-component label="Description" id="editor" name="description"
                    class="text-sm font-semibold" />

                <div class="col-span-4 flex justify-center mt-8">
                    <button type="submit"
                        class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                </div>

            </form>
        </div>
        <div class="mt-6 mx-5 mb-10 mr-32">
            <div class="font-[sans-serif] overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 whitespace-nowrap">
                        <tr>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Image
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Name
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Post
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Passed Year
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="whitespace-nowrap">
                        @foreach ($educationList->testimonials as $testimonial)
                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    <img src=" {{ $testimonial->image }}" class="h-24 w-24" alt="">
                                </td>
                                <td class="p-4 text-sm text-black">
                                    {{ $testimonial->name }}
                                </td>
                                <td class="p-4 text-sm text-black">
                                    {{ $testimonial->post }}
                                </td>
                                <td class="p-4 text-sm text-black">
                                    {{ $testimonial->passed_year }}
                                </td>
                                <td class="p-4">
                                    <button class="mr-4" title="Edit"> <a
                                            href="{{ route('registeredUser.educationList.testimonials.edit', [$educationList, $testimonial]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-blue-500 hover:fill-blue-700"
                                                viewBox="0 0 348.882 348.882">
                                                <path
                                                    d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                    data-original="#000000" />
                                                <path
                                                    d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                    data-original="#000000" />
                                            </svg>
                                        </a>
                                    </button>
                                    <form
                                        action="{{ route('registeredUser.educationList.testimonials.destroy', [$educationList, $testimonial]) }}"
                                        method="post" style="display: inline" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mr-4" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                    data-original="#000000" />
                                                <path
                                                    d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                    data-original="#000000" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @include('frontend.layout.footer')
@endsection
{{-- </x-guest-layout> --}}
