@props(['disabled' => false])
{!! Form::number($attributes->get('name'), null, [
    'class' => 'form-control ',
    'id' => $attributes->get('id'),
    'disabled' => $disabled,
    'min' => 1,
]) !!}
