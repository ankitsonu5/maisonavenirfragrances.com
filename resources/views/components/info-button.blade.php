<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-info  rounded  ']) }}>
    {{ $slot }}
</button>
