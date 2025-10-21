@props(['messages'])

@if ($messages)
    @foreach ((array) $messages as $message)
        <p class="text-danger  fw-bold  text-capitalize">{{ $message }}</p>
    @endforeach
@endif
