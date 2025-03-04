@extends('registeredUser.layout.master')

@section('content')
    <div class="content px-5  md:px-7 col-span-3 mt-8 md:mt-0 font-manrope min-h-screen">
        <h1 class="font-semibold text-3xl">Hospitality List</h1>
        <div class="border-b border-gray-200 dark:border-neutral-700 mt-5">
            <nav class="flex gap-x-1 bg-neutral-800 rounded-md" aria-label="Tabs" role="tablist"
                 aria-orientation="horizontal">

                @foreach ($mainCategories as $mainCategory)
                    @foreach ($mainCategory->hospitalityCategories as $hospitalityCategory)
                        <button type="button"
                                class="tab-button text-lg py-4 px-6 inline-flex items-center gap-x-2
                    text-white hover:text-blue-600 focus:outline-none
                    focus:text-blue-600 focus:bg-neutral-600 disabled:opacity-50 disabled:pointer-events-none
                    dark:text-neutral-400 dark:hover:text-blue-500"
                                id="tab-{{ $hospitalityCategory->id }}"
                                data-tab-content="#tab-content-{{ $hospitalityCategory->id }}"
                                role="tab"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                aria-controls="tab-content-{{ $hospitalityCategory->id }}"
                                style="{{ $loop->first ? 'background-color: #374151; color: #2563EB;' : '' }}">
                            {{ $hospitalityCategory->title_en }}
                        </button>
                    @endforeach
                @endforeach
            </nav>
        </div>
        <div class="mt-3">
            @foreach ($mainCategories as $mainCategory)
                @foreach ($mainCategory->hospitalityCategories as $hospitalityCategory)
                    <div id="tab-content-{{ $hospitalityCategory->id }}" role="tabpanel"
                         aria-labelledby="tab-{{ $hospitalityCategory->id }}"
                         class="{{ $loop->first ? '' : 'hidden' }}">


                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <x-frontend.forms.table-component
                                            :headers="['Reference No', 'Name', 'Category', 'Contact Number', 'Action']"
                                            :data="$hospitalityCategory->hospitalityList">
                                            @forelse ($hospitalityCategory->hospitalityLists as $hospitalityList)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{ $hospitalityList->reference_no }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{ Str::words($hospitalityList->name, 5) }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $hospitalityList->hospitalityCategory->title_en }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $hospitalityList->contact_number }}
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                        <a type="button"
                                                           href="{{ route('registeredUser.hospitalityList.edit', $hospitalityList) }}"
                                                           class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                                            <i class="ti ti-edit text-2xl font-bold text-neutral-800"></i>

                                                        </a>

                                                        <form
                                                            action="{{ route('registeredUser.hospitalityList.destroy', $hospitalityList) }}"
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

@endsection
