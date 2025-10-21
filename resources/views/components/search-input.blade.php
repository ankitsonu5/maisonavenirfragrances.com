@props(['disabled' => false, 'value' => null])

{!! Form::search($attributes->get('name'), $value, [
    'class' => 'form-control',
    'id' => $attributes->get('id'),
    'disabled' => $disabled,
]) !!}
