@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md ']) }}>
    {{ $value ?? $slot }}
</label>
