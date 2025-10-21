<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary  px-2']) }}>
    {{ $slot }}
</button>
