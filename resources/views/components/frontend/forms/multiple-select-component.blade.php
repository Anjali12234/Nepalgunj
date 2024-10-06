@props(['label', 'name', 'id' => '', 'value' => [], 'options' => [], 'class' => '', 'labelClass' => ''])

<div class="block lg:flex items-center mb-3">
    <label for="{{ $id }}" class="text-gray-900 {{ $labelClass }} flex items-center">
        <span>{{ $label }}</span>
        <span class="text-xl text-gray-400 ml-1">*</span>
    </label>
    <select multiple name="{{ $name }}"
        data-hs-select='{
            "placeholder": "Select option...",
            "dropdownClasses": "mt-2 z-50 w-80 md:w-96 max-h-48 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
            "optionClasses": "py-2 px-4 w-80 md:w-96 text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50",
            "mode": "tags",
            "wrapperClasses": "relative ps-0.5 pe-9 min-h-[46px] flex items-center flex-wrap text-nowrap w-90 md:w-96 border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500",
            "tagsInputId": "{{ $id }}",
            "tagsInputClasses": "py-3 px-2 rounded-lg order-1 text-sm outline-none",
            "optionTemplate": "<div class=\"flex items-center\"><div class=\"size-8 me-2\" data-icon></div><div><div class=\"text-sm font-semibold text-gray-800\" data-title></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>"
        }'
        class="hidden px-2 pt-1 pb-2 w-80 md:w-96 border-b-2 focus:border-[#333] outline-none {{ $class }} bg-white">
        <option value="">Choose</option>
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ in_array($optionValue, (array) $value) ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
</div>
