@props(['value'])

<label {{ $attributes->merge(['class' => '   text-capitalize text-dark fw-bolder ']) }}>
    {{ $value ?? $slot }}
</label>
