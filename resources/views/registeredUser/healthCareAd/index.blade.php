@extends('registeredUser.layout.master')

@section('content')
    <div class="content px-5 md:px-7 col-span-3 mt-8 md:mt-0 font-manrope min-h-screen">
        <h1 class="font-semibold text-3xl">HealthCare List</h1>
        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="flex gap-x-1 bg-neutral-200 hover:bg-neutral-400 mt-3" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                @foreach ($mainCategories as $mainCategory)
                    @foreach ($mainCategory->healthCareCategories as $index => $healthCareCategory)
                        <button type="button"
                            class="py-4  px-4  inline-flex items-center gap-x-2 border-b-2 text-base font-bold whitespace-nowrap focus:outline-none
                             disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                            id="tab-{{ $healthCareCategory->id }}"
                            data-hs-tab="#tab-content-{{ $healthCareCategory->id }}"
                            aria-controls="tab-content-{{ $healthCareCategory->id }}"
                            role="tab"
                            style="border-color: {{ $index == 0 ? 'black' : 'transparent' }}; color: {{ $index == 0 ? 'black' : '#6b7280' }}">
                            {{ $healthCareCategory->title_en }}
                        </button>
                    @endforeach
                @endforeach
            </nav>
        </div>

        <div class="mt-3">
            @foreach ($mainCategories as $mainCategory)
                @foreach ($mainCategory->healthCareCategories as $index => $healthCareCategory)
                    <div id="tab-content-{{ $healthCareCategory->id }}" class="tab-content" role="tabpanel"
                        aria-labelledby="tab-{{ $healthCareCategory->id }}" style="display: {{ $index == 0 ? 'block' : 'none' }};">
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <x-frontend.forms.table-component
                                            :headers="['Reference No', 'Name', 'Category', 'Contact Number', 'Action']"
                                            :data="$healthCareCategory->healthCareList">
                                            @forelse ($healthCareCategory->healthCareLists as $healthCareList)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{ $healthCareList->reference_no }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{ Str::words($healthCareList->name, 5) }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $healthCareList->healthCareCategory->title_en }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $healthCareList->contact_number }}
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                        <a type="button"
                                                           href="{{ route('registeredUser.healthCareList.edit', $healthCareList) }}"
                                                           class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                                            <i class="ti ti-edit text-2xl font-bold text-neutral-800"></i>

                                                        </a>

                                                        <form
                                                            action="{{ route('registeredUser.healthCareList.destroy', $healthCareList) }}"
                                                            method="post" style="display: inline" method="post"
                                                            style="display: inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400"
                                                                    onclick="return confirm('Are You sure want to delete')">
                                                                <i class="ti ti-trash text-2xl font-bold text-red-700"></i>
                                                            </button>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5"
                                                        class="px-6 py-4 text-center text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        No Data Found!!
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </x-frontend.forms.table-component>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll("[data-hs-tab]");
            const tabContents = document.querySelectorAll(".tab-content");
            
            tabs.forEach(tab => {
                tab.addEventListener("click", function () {
                    const target = document.querySelector(this.dataset.hsTab);
                    
                    tabContents.forEach(content => content.style.display = "none");
                    tabs.forEach(t => {
                        t.style.borderColor = "transparent";
                        t.style.color = "#6b7280";
                    });
                    
                    target.style.display = "block";
                    this.style.borderColor = "black";
                    this.style.color = "black";
                });
            });
        });
    </script>
@endsection
