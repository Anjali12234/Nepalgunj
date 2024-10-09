@extends('registeredUser.layout.master')

@section('content')
    <div class="content px-5  md:px-7 col-span-3 mt-8 md:mt-0 font-manrope">
        <h1 class="font-semibold text-3xl">Property List</h1>
        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">

                @foreach ($mainCategories as $mainCategory)
                    @foreach ($mainCategory->propertyCategories as $propertyCategory)
                        <button type="button"
                            class="hs-tab-active:font-semibold text-lg
                    hs-tab-active:border-blue-600 hs-tab-active:text-blue-600
                    py-4 px-6 inline-flex items-center gap-x-2 border-b-2
                    border-transparent  whitespace-nowrap
                    text-gray-500 hover:text-blue-600 focus:outline-none
                    focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none
                    dark:text-neutral-400 dark:hover:text-blue-500 active"
                            id="tab-{{ $propertyCategory->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                            data-hs-tab="#tab-content-{{ $propertyCategory->id }}"
                            aria-controls="tab-content-{{ $propertyCategory->id }}" role="tab">
                            {{ $propertyCategory->title_en }}
                        </button>
                    @endforeach
                @endforeach
            </nav>

        </div>
        <div class="mt-3">
            @foreach ($mainCategories as $mainCategory)
                @foreach ($mainCategory->propertyCategories as $propertyCategory)
                    <div id="tab-content-{{ $propertyCategory->id }}" role="tabpanel"
                        aria-labelledby="tab-{{ $propertyCategory->id }}" class="{{ $loop->first ? '' : 'hidden' }}">


                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <x-frontend.forms.table-component :headers="['Reference No', 'Title', 'Property Category', 'Rate', 'Action']" :data="$propertyCategory->propertyLists">
                                            @foreach ($propertyCategory->propertyLists as $propertyList)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{ $propertyList->reference_no }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{ Str::words($propertyList->title, 5) }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $propertyList->propertyCategory->title_en }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{ $propertyList->rate }}
                                                    </td>

                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                        <a type="button"
                                                            href="{{ route('registeredUser.propertyList.edit', $propertyList) }}"
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                                            <i class="ti ti-edit text-2xl font-bold text-neutral-800"></i>

                                                        </a>

                                                        <form
                                                            action="{{ route('registeredUser.propertyList.destroy', $propertyList) }}"
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
                                            @endforeach
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
    <div class="min-h-72">

    </div>
@endsection
