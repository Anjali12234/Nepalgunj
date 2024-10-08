@props([
    'label',
    'name',
    'type',
    'id' => '',
    'value' => '',
    'options' => [],
    'class' => '',
    'labelClass' => '',
])

<div class="block lg:flex items-center mb-3">
    <label for="{{ $id }}" class="text-gray-900  {{ $labelClass }} flex items-center">
        <span>{{ $label }}</span>
        <span class="text-xl text-gray-400 ml-1">*</span>
    </label>
    <select name="{{ $name }}" id="{{ $id }}"
        class="px-2 pt-1 pb-2 w-80 md:w-96 border-b-2 focus:border-[#333] outline-none {{ $class }} bg-white">
        <option value="">Choose</option>
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
</div>
